(function (window) {
    var ClientPushy = function (appId, lang, modal, container, swName) {
        this.appId = appId;
        this.language = lang;
        this.modal = modal;
        this.container = container;
        this.serviceWorkerName = swName;
        this.dtkn = undefined;
        this.threshold = 200;

        this.cookieName = 'W88Pushy';
        this.languages = ['en-us', 'id-id', 'km-kh', 'ko-kr', 'th-th', 'vi-vn', 'zh-cn'];

        this.storage();
        this.container.find('a').on('click', function (e) {
            e.preventDefault();
        });
    };

    /**
     * return's promise method (register service worker)
     */
    ClientPushy.prototype.registerWorker = function () {
        if (!this.isEligible())
            return new Promise(function (resolve, reject) {
                reject('Service Worker Not Supported');
            });

        var me = this;
        if (navigator.serviceWorker &&
            navigator.serviceWorker.controller &&
            navigator.serviceWorker.controller.state === 'activated') {
            return new Promise(function (resolve, reject) {
                resolve('Service Worker registered');
            });
        }
        return new Promise(function (resolve, reject) {
            navigator.serviceWorker.register(me.serviceWorkerName)
                .then(function () {
                    return navigator.serviceWorker.ready;
                })
                .then(function (worker) {
                    // send message into service worker
                    worker.active.postMessage(JSON.stringify({ language: me.language }));

                    resolve(worker);
                })
                .catch(function (e) {
                    reject(e);
                });
        });
    };

    /**
     * return's promise method (register pushy)
     */
    ClientPushy.prototype.registerPushy = function () {
        if (!Pushy)
            return new Promise(function (resolve, reject) {
                reject('pushy is undefined');
            });

        var me = this;

        return new Promise(function (resolve, reject) {
            Pushy.register({ appId: me.appId })
                .then(function (resp) {
                    me.dtkn = resp;

                    resolve(resp);
                })
                .catch(function (err) {
                    reject(err);
                });
        })
    };

    /**
     * return's promise method (subscribe to topics)
     */
    ClientPushy.prototype.subscribe = function (topics) {
        if (!pushyService || !this.isGranted())
            return new Promise(function (resolve, reject) {
                reject('notification not granted');
            });

        var me = this;

        return new Promise(function (resolve, reject) {
            if (!pushyService.subscribeToTopics)
                return reject('pushy service subscribe to topis is undefined');

            pushyService.subscribeToTopics(topics, null, me.dtkn,
                function (resp) {
                    resolve(resp);
                },
                function (err) {
                    reject(err);
                });
        });
    };

    /**
     * return's promise method (unsubscribe to topics)
     */
    ClientPushy.prototype.unSubscribe = function (topics) {
        if (!pushyService || !this.isGranted())
            return new Promise(function (resolve, reject) {
                reject('notification not granted');
            });

        var me = this;

        return new Promise(function (resolve, reject) {
            if (!pushyService.subscribeToTopics)
                return reject('pushy service unsubscribe to topis is undefined');

            pushyService.unSubscribeToTopics(topics, null, me.dtkn,
                function (resp) {
                    resolve(resp);
                },
                function (err) {
                    reject(err);
                });
        });
    };

    /**
     * return's promise method (request notification permistion)
     */
    //ClientPushy.prototype.requestPermission = function () {
    //    if (!Notification)
    //        return new Promise(function (resolve, reject) {
    //            reject('permission is already been granted');
    //        });

    //    return Notification.requestPermission();
    //};

    /**
     * bind events to subscribe/cancel buttons
     */
    ClientPushy.prototype.configureButtons = function () {
        var me = this;

        me.container.find('a').off('click').on('click', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            var classList = Array.prototype.slice.call(e.target.classList, 0);

            if (classList.indexOf('pushy-cancel') > -1)
                return me.cancelButton();

            me.subscribeButton();
        });
    };

    ClientPushy.prototype.cancelButton = function () {
        this.setCookie(this.cookieName, '0');

        return this.show(false);
    };

    ClientPushy.prototype.subscribeButton = function () {
        var me = this,
            isBlock = true,
            showBlockMessage = function () {
                if (!isBlock)
                    return (blockMessage || function () { })(me.container, 0, null, false);

                setTimeout(function () {
                    if (isBlock)
                        return (blockMessage || function () { })(me.container, 60000, null, true);

                    return (blockMessage || function () { })(me.container, 0, null, false);
                }, me.threshold);
            };

        showBlockMessage(true);

        return Notification.requestPermission()
            .then(function (resp) {
                if (resp === 'denied' || resp === 'default') {
                    me.cancelButton();

                    throw 'denied'; // to end promise chain method
                }

                return me.registerWorker();
            })
            .then(function (resp) {
                if (!resp)
                    throw 'invalid worker' // to end promise chain method

                return me.registerPushy();
            })
            .then(function (resp) {
                if (!resp)
                    throw 'invalid device' // to end promise chain method

                return me.subscribe(['general']);
            })
            .then(function (resp) {
                if (!resp)
                    throw 'cannot register general' // to end promise chain method

                if (pushyService && pushyService.sendMessage)
                    pushyService.sendMessage("Welcome to W88 Subscriptions!",
                        null,
                        me.dtkn);

                showBlockMessage(false);
                me.setCookie(me.cookieName, '1');

                setTimeout(function() {
                    me.show(false);
                }, 500);
            })
            .catch(function (err) {
                showBlockMessage(false);
                setTimeout(function () {
                    me.setCookie(me.cookieName, '0');
                    me.show(false);
                }, 200);
                console.log(err);
            });
    };

    /**
     * show/hide w88 pushy modal
     */
    ClientPushy.prototype.show = function (isShow) {
        if (!isShow)
            return this.modal.modal('hide');

        this.modal.modal({ backdrop: 'static', keyboard: false })
            .on('shown', function (e) {
                $(this).parent().addClass('pushy-modal-always-on-top');
            });
    };

    /**
     * store client's language into browser db
     */
    ClientPushy.prototype.storage = function () {
        if (!('indexedDB' in window))
            return;

        // delete database first
        var me = this,
            storeName = 'language',
            promise = function (r) {
                return new Promise(function (resolve, reject) {
                    r.onsuccess = resolve;
                    r.onerror = reject;
                });
            };


        promise(window.indexedDB.deleteDatabase('w88'))
            .then(function (event) {
                var db = window.indexedDB.open('w88', 1);

                console.log(event);
                me.db = db;
                me.db.onupgradeneeded = function (e) {
                    var iDB = e.target.result,
                        st = iDB.createObjectStore(storeName, { keyPath: 'id' });

                    st.createIndex('language_id', 'id', { unique: true });
                    st.put({ id: 1, 'language': me.language });
                };

                return promise(db);
            })
            .then(function (event) {
                console.log(event);
            });
    };

    ClientPushy.prototype.getCookie = function (cookieName) {
        var value = '; ' + document.cookie,
            parts = value.split('; ' + cookieName + '=');

        if (parts.length === 2)
            return parts.pop().split(';').shift();
    };

    ClientPushy.prototype.setCookie = function (name, value, days) {
        var expires = '',
            dt = new Date();

        if (days) {
            dt.setTime(dt.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + dt.toUTCString();
        }

        document.cookie = name + '=' + (value || '') + expires + '; path=/';
    };

    /**
     * return Boolean
     */
    ClientPushy.prototype.isIE = function () {
        if (/MSIE 10/i.test(navigator.userAgent))
            return true;

        if (/MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent))
            return true;

        if (/Edge\/\d./i.test(navigator.userAgent))
            return true;

        return false;
    };

    /**
     * return Boolean
     */
    ClientPushy.prototype.isEligible = function () {
        return 'serviceWorker' in navigator && !this.isIE();
    };

    /**
     * return Boolean
     */
    ClientPushy.prototype.isRejected = function () {
        var cookie = this.getCookie(this.cookieName);

        return parseInt(cookie) === 0;
    };

    /**
     * return Boolean
     */
    ClientPushy.prototype.isAccepted = function () {
        var cookie = this.getCookie(this.cookieName);

        return parseInt(cookie) > 0;
    };

    /**
     * return Boolean
     */
    ClientPushy.prototype.isGranted = function () {
        return Notification && Notification.permission === 'granted';
    };

    /**
     * return Boolean
     */
    ClientPushy.prototype.isDenied = function () {
        return Notification && Notification.permission === 'denied';
    };

    /**
   * return Boolean
   */
    ClientPushy.prototype.isDefault = function () {
        return Notification && Notification.permission === 'default';
    };

    /**
     * start/initialize pushy
     */
    ClientPushy.prototype.initialize = function () {
        if (!this.isEligible() || this.isRejected() || (this.isRejected() && !this.isDefault()) || (this.isAccepted() && !this.isDefault()))
            return;

        this.configureButtons();
        this.show(true);
    };

    window.ClientPushy = ClientPushy;
})(window);