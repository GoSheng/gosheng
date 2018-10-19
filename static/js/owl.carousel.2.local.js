$('#bannerTop').owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: true,
    dotsClass: 'owl-dots p-absolute t-0 r-0',
    lazyLoad: false,
    autoplay: true,
    // autoHeight: true,
    // autoHeightClass: 'h-max-350',
    autoplayHoverPause: true,
    // animateOut: 'flipOutY',
    // animateIn: 'flipInY',
    smartSpeed: '300',
});
$('#bannerTop-small').owlCarousel({
    items: 3,
    loop: true,
    nav: false,
    dots: false,
    dotsClass: 'owl-dots p-absolute b-0 r-0',
    margin: 25,
    lazyLoad: false,
    autoplay: true,
    autoHeight: false,
    // autoHeightClass: 'h-max-350',
    autoplayHoverPause: true,
    animateOut: 'flipOutY',
    animateIn: 'flipInY',
    smartSpeed: '300',
});

$('.cardImg1').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    lazyLoad: false,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 1
        }
    }
});
