jQuery(".openbtn").click(function () {
    jQuery(this).toggleClass('active');
    jQuery("#g-nav").toggleClass('panelactive');
});

jQuery("#g-nav a").click(function () {
    jQuery(".openbtn").removeClass('active');
    jQuery("#g-nav").removeClass('panelactive');
});

jQuery('#page-link a[href*="#"]').click(function () {
    let elmHash = jQuery(this).attr('href');
    let pos = jQuery(elmHash).offset().top;
    jQuery('body,html').animate({ scrollTop: pos }, 700);
    return false;
});

jQuery('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2600,
    speed: 450,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<div class="slick-prev"></div>',
    nextArrow: '<div class="slick-next"></div>',
    dots: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,

    useTransform: false
});

//スマホ スライダーを止めない
jQuery('.slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    jQuery('.slider').slick('slickPlay');
});