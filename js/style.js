jQuery(function(){
    jQuery(".p-bar__button, .c-button__close").click(function () {
        jQuery(".l-header__menu, .c-button__close, .l-main__left, l-main").toggleClass("is-open");
        // 画面を固定させる場合（base.scssに記述）
        jQuery("body").toggleClass("is-fixed");
    });
});

jQuery(function() {
    jQuery(".c-menu__close").click(function() {
        jQuery(".l-header__menu, .c-button__close, .l-main__left, l-main").removeClass("is-open");
    });
});

// jQuery(window).on("resize", function () {
//     　if (window.matchMedia("(min-width:1900px)").matches) {
//         jQuery(".c-button__close, .l-main__right, l-main").removeClass("is-open")
//         jQuery(".l-main__left").removeClass("is-open");
//     　}
// });


jQuery('a[href^="#"]').click(function() {
    // スクロールの速度
    let speed = 500; // ミリ秒で記述
    let href = jQuery(this).attr("href");
    let target = jQuery(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    jQuery('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });
