(function($) {
    $.extend($.fn, {
        accountValidate: function(options) {
            var validator = $.data(this[0], "validator");

            if (validator)
                return validator;

            this.attr('novalidate', 'novalidate');

            validator = new AccountValidator(options, this[0]);
            $.data(this[0], "validator", validator);
        }
    });

    var AccountValidator = function(options, form) {
        var me = this,
            defaults = {
                fields: {},
                submit: function () { },
                error: function () { },
                success: function () { }
            };

        this.options = $.extend({}, defaults, options);
        this.form = form;
        this.fields = AccountValidatorHelper.getFormElements(this.form, this.options.fields);

        if (this.options.errorMessages)
            $.extend(AccountValidatorHelper.errorMessages, this.options.errorMessages);

        HTMLFormElement.prototype.isValid = AccountValidatorHelper.validatorForm.bind(AccountValidatorHelper, this);
        HTMLInputElement.prototype.isValid = function() {
            AccountValidatorHelper.validateField.call(AccountValidatorHelper, me, this);
        };

        $(this.form).unbind('submit');
        $(this.form).on('submit', function() {
            this.isValid(function(isValid, validator) {
                if (typeof validator.options.submit === 'function')
                    return validator.options.submit.call(validator.form, isValid, validator.fields);

                validator.form.submit();
            });

            return false;
        });
    };

    var AccountValidatorHelper = {
        getFormElements: function(form, fields) {
            this.elements = Array.from(form.elements)
                .filter(function(e) {
                    return (e.tagName.toLowerCase() === 'input' && ['text', 'password', 'file'].indexOf(e.type.toLowerCase()) > -1)
                        || ['textarea', 'select'].indexOf(e.tagName.toLowerCase()) > -1;
                })
                .reduce(function(c, e) {
                    if (!c[e.name])
                        c[e.name] = $.extend({}, {}, {
                            element: e,
                            required: true
                        });

                    return c;
                }, {});

            return $.extend(true, this.elements, this.getDefaultFields(fields))
        },
        getDefaultFields: function(fields) {
            return Object.keys(fields)
                .reduce(function(c, e) {
                    if (!c[e])
                        c[e] = $.extend({}, fields[e], {
                            element: document.getElementById(e)
                        })

                    return c;
                }, {});
        },
        validator: {
            required: function(value, element) {
                if (element.nodeName.toLowerCase() === 'select')
                    return $(element).val() && $(element).val().length > 0;

                return $.trim(value).length > 0;
            },
            email: function(value, element) {
                value = value || '';

                return /\S+@\S+.\S+/.test(value);
            },
            remote: function(value, element, field) {
                var remote = field['remote'];

                if (!remote)
                    return new Promise(function(resolve, reject) {
                        resolve('');
                    });

                if (typeof remote === 'object') {
                    var obj = Object.keys(remote).reduce(function(c, e) {
                        if (['success', 'complete', 'error', 'fail', 'done'].indexOf(e) > -1) {
                            var eRemote = {};

                            eRemote[e] = remote[e];

                            c['methods'] = $.extend({}, c['methods'], eRemote);

                            return c;
                        }

                        c[e] = remote[e];

                        if (typeof c[e] === 'function')
                            c[e] = c[e].call(this);
                        
                        return c;
                    }, {});

                    return AccountValidatorHelper.remoteRequest(obj);
                }
            }
        },
        errorMessages: {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            date: "Please enter a valid date.",
            number: "Please enter a valid number.",
            maxlength: $.validator.format("Please enter no more than {0} characters."),
            minlength: $.validator.format("Please enter at least {0} characters."),
            max: $.validator.format("Please enter a value less than or equal to {0}."),
            min: $.validator.format("Please enter a value greater than or equal to {0}.")
        },
        remoteRequest: function(obj) {
            var execMethods = function(methods, userMethods, response) {
                for (var m in methods)
                    (userMethods[methods[m]] || function() {}).call(this, response);
            };

            return new Promise(function(resolve, reject) {
                $.ajax($.extend({}, obj, {
                    success: function(response) {
                        resolve(response);
                        execMethods(['success', 'complete', 'done'], obj.methods, response);
                    },
                    error: function(error) {
                        reject(error);
                        execMethods(['fail', 'error'], obj.methods, response);
                    }
                }))
            });
        },
        validatorForm: function(validator, callback) {
            var isValid = this.processSyncValidation.call(this, validator);

            this.processEvents.call(this, validator, isValid);

            if (isValid)
                this.processAsyncValidation.call(this, validator)
                    .then(function(result) {
                        isValid = result.every(function (s) {
                            if (s.hasOwnProperty && s.hasOwnProperty('d'))
                                return s && s.d;

                            return s
                        });
                        this.processEvents.call(this, validator, isValid);

                        if (typeof callback === 'function')
                            callback.call(this, isValid, validator);
                    }.bind(this))
                    .catch(function() {

                    }.bind(this));

            return isValid;
        },
        validateField: function(validator, element, field) {
            if (!(element instanceof HTMLElement))
                element = element[0];

            if (!field)
                field = validator.fields[element.name];

            for (var f in field) {
                if (['remote', 'element'].indexOf(f) > -1)
                    continue;

                if (field[f] === false)
                    continue;

                var method = this.validator[f];

                if (typeof method === 'function') {
                    element.valid = this.validator[f].call(this, element.value, element, field);
                    element.errorMessage = this.errorMessages[f];

                    if (!element.valid)
                        break;
                }
            }
        },
        validateFieldAsync: function(validator, element, field) {
            if (!(element instanceof HTMLElement))
                element = element[0];

            if (!field)
                field = validator.fields[element.name];

            var remote = field['remote'],
                message = this.errorMessages['remote'];

            if (!remote)
                return new Promise(function(resolve, reject) {
                    resolve('');
                });

            return new Promise(function(resolve, reject) {
                    this.validator.remote.call(this, element.value, element, field)
                        .then(function(result) {
                            //TODO: do dynamic return;
                            element.valid = result.hasOwnProperty && result.hasOwnProperty('d') ? !!result.d : !!result;
                            element.errorMessage = message;
                            resolve(result);
                        })
                        .catch(function(error) {
                            reject(error);
                        });
                }.bind(this));
        },
        getInvalidElements: function(validator) {
            return $.map(validator.fields, function(val, key) {
                return !val.element.valid && $.trim(val.element.errorMessage).length > 0 ? [val.element] : []
            })
            .filter(function(s) { return !!s; });
        },
        getValidElements: function(validator) {
            return $.map(validator.fields, function(val, ket) {
                return val.element.valid ? [val.element] : [];
            })
            .filter(function(s) { return !!s; });
        },
        processSyncValidation: function(validator) {
            return $.map(validator.fields, function(val, key) {
                    this.validateField.call(this, validator, val.element, val);

                    return [val.element.valid];
                }.bind(this))
                .filter(function(s) {
                    return !(typeof s === 'undefined' || s === null);
                })
                .every(function(s) { return !!s; });
        },
        processAsyncValidation: function(validator) {
            var methods = $.map(validator.fields, function(v) {
                    if (!v['remote'])
                        return null;

                    return [this.validateFieldAsync.call(this, validator, v.element, v)];
                }.bind(this))
                .filter(function(s) { return !!s; });

            if (!methods)
                return new Promise(function(resolve, reject) {
                    resolve('valid');
                });

            return Promise.all(methods);
        },
        processEvents: function(validator, isValid) {
            this.getInvalidElements(validator)
                .forEach(function(elem) {
                    validator.options.error.call(this, elem['errorMessage'], elem);
                });

            this.getValidElements(validator)
                .forEach(function(elem) {
                    validator.options.success.call(this, elem);
                });
        }
    };
}(jQuery));