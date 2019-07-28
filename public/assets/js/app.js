var app = {
    init: function() {
        console.log('app init');
        $('.owl-carousel').owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            animateIn: 'bounceIn',
            // nav: true,
        });
    },
};


document.addEventListener('DOMContentLoaded', app.init);