(function ($) {
    $.extend($.fn, {
        toCustomSelectBox: function (options) {
            this.each(function () {
                if (this.nodeName.toLocaleLowerCase() === 'select')
                    new $.CustomSelectBox(this, options);
            });
        }
    });

    $.CustomSelectBox = function (el, options) {
        var $this = $(el);
        var numberOfOptions = $(el).children('option').length;
        var width = el.offsetWidth;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        if (width !== 200)
            $this.parent().width(width);

        // bind select attributes to new select except name and id
        for (var x = 0; attrs = el.attributes, len = attrs.length, x < len; x++) {
            var nodeName = attrs[x].nodeName;
            var nodeValue = attrs[x].value;

            if (['id', 'name', 'class'].indexOf(nodeName.toLowerCase()) > -1)
                continue;

            $this.next('.select-styled').attr(nodeName, nodeValue);
        }

        $this.on('change', function (e) {
            e.stopPropagation();
            $styledSelect.text($this.children('option:selected').text());
        });

        var $styledSelect = $this.next('div.select-styled');
        if ($this.children('option:selected').length)
            $styledSelect.text($this.children('option:selected').text());
        else
            $styledSelect.text($this.children('option').eq(0).text());

        var $arrow = $('<i />', {
            'class': 'arrow'
        }).insertAfter($styledSelect);

        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);


        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        var handleShowOptions = function (e) {
            e.stopPropagation();

            var notThis = $('.select').not($(this).parent());

            if (notThis && notThis.length)
                $.each(notThis, function (i, el) {
                    if ($(el).hasClass('active')) {
                        $(el).find('div.select-styled').removeClass('active').next('ul.select-options').hide();
                        $(el).removeClass('active');
                    }
                });

            $('div.select-styled.active').not($styledSelect[0]).each(function () {
                $styledSelect.removeClass('active').next('ul.select-options').hide();
                $this.parent().removeClass('active');
                $list.toggleClass('hide');
            });

            $this.parent().toggleClass('active');
            $styledSelect.toggleClass('active').next('ul.select-options').toggle();
            $list.removeClass('hide');
        };

        $styledSelect.click(handleShowOptions);
        $arrow.click(handleShowOptions);

        $listItems.click(function (e) {
            e.stopPropagation();

            $styledSelect.text($(this).text()).removeClass('active');
            $this.parent().removeClass('active');
            $this.val($(this).attr('rel'));

            // trigger selectbox chang event
            $this.trigger('change');

            if (!$list.hasClass('hide'))
                $this.trigger('blur');

            $list.hide().toggleClass('hide');
        });

        $(document).click(function () {
            // to show custom validation error 
            if (!$list.hasClass('hide') && $styledSelect.hasClass('active'))
                $this.trigger('blur');

            $styledSelect.removeClass('active');
            $this.parent().removeClass('active');

            $list.hide().toggleClass('hide');
        });
    }
})(jQuery || jquery || window.jQuery);