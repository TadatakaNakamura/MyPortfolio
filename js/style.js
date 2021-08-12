$(function(){
    $(".p-bar__button, .c-button__close").click(function () {
        $(".c-button__close, .l-main__right, .l-main__left, l-main").toggleClass("is-open");
        $("body").toggleClass("is-fixed");
    });
});

$(window).on("resize", function () {
    　if (window.matchMedia("(min-width:1900px)").matches) {
       $(".c-button__close, .l-main__right, l-main").removeClass("is-open")
       $(".l-main__left").removeClass("is-open");
    　}
});
