var owl = $(".owl-carousel");
owl.owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});
$(".play").on("click", function() {
    owl.trigger("play.owl.autoplay", [2000]);
});
$(".stop").on("click", function() {
    owl.trigger("stop.owl.autoplay");
});
