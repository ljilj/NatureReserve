"use strict";

let _this = module.exports = {

    $dom: {
        tabsNav: $('ul.media-center__nav--tabs li a'),
        tabsContent: $('.tabs-content__row div.tab-content')
    },

    vars: {
    },

    // Initialize
    init: function () {
        _this.prepare();
        _this.bind();
    },

    bind: function(){
        _this.$dom.tabsNav.on( 'click', _this.toggle );
    },

    prepare: function(){
        _this.$dom.tabsContent.not(':first').hide();
    },

    toggle: function(e) {
        e.preventDefault();

        const elementSelector = $(this).attr('href');

        _this.$dom.tabsNav.css('pointer-events', 'none');

        _this.$dom.tabsNav.parent().removeClass('active');
        $(this).parent().addClass('active');

        let $element = _this.$dom.tabsContent.siblings(elementSelector);

        if($element.length > 0) {
            _this.$dom.tabsContent.fadeOut(200);
            _this.$dom.tabsContent.removeClass('active');
        }

        setTimeout(function() {
            $element.fadeIn(300);
            $element.addClass('active');
        }, 200);

        setTimeout(function() {
            _this.$dom.tabsNav.css('pointer-events', 'all');
        }, 500);
    },
};