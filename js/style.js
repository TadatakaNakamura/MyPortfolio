jQuery(function(){
    jQuery(".p-bar__button, .c-button__close").click(function () {
        jQuery(".c-button__close, .l-main__right, .l-main__left, l-main").toggleClass("is-open");
        jQuery("body").toggleClass("is-fixed");
    });
});

jQuery(window).on("resize", function () {
    　if (window.matchMedia("(min-width:1900px)").matches) {
        jQuery(".c-button__close, .l-main__right, l-main").removeClass("is-open")
        jQuery(".l-main__left").removeClass("is-open");
    　}
});
