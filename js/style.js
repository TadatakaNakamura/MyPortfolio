$(function(){
    $(".p-bar__button, .c-button__close").click(function () {
        $(".c-button__close, .l-main__right, .l-main__left, l-main").toggleClass("is-open");
    });
});

$(window).on("resize", function () {
    　if (window.matchMedia("(min-width:1024px)").matches) {
       $(".c-button__close, .l-main__right,").removeClass("is-open");
    　}
});
