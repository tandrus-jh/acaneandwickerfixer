(function ($) {
    "use strict";
    $.fn.cssticky = function (options) {
        var defaultVal = {
                offset: 0,
                delay: 10
            },
            obj = $.extend(defaultVal, options);
        this.each(function () {
            var b = $(this);
            b.addClass('cs-sticky');
            b.data({
                'offset-top': obj.offset
            });
            b.data('max-height', b.outerHeight());
            var c = $('<div>').addClass('sticky-wrapper').height(b.outerHeight());
            b.wrap(c);
            var d = b.parents('.sticky-wrapper');
            setInterval(function () {
                d.height(b.outerHeight());
                b.width(d.width());
            }, 50);
            var dosticky = function () {
                var a = $(window).scrollTop();
                if (a > b.data('offset-top')) {
                    b.addClass('fixed');
                    $(".header-wrapper").addClass("remove-cart-search");
                    $('body').addClass('cs-stickied');
                    $('.container .cs_mega_menu').menuNav();
                } else {
                    b.removeClass('fixed');
                    $(".header-wrapper").removeClass("remove-cart-search");
                    $('body').removeClass('cs-stickied');
                }
            };
            var scrollTimer = null;
            $(window).bind('scroll', function () {
                if (scrollTimer) {
                    clearTimeout(scrollTimer); // clear any previous pending timer
                }
                scrollTimer = setTimeout(dosticky, 10); // set new timer
            });
            dosticky();
        })
    };
    $(window).bind('load', function () {
        var $mainmenu = $('#menu, #menu-1'),
            offset = $mainmenu.offset().top + $mainmenu.outerHeight();
        $('.sticky-header').css({
            display: 'block'
        }).cssticky({
            offset: offset,
            delay: 10
        })
    })
}(jQuery));
