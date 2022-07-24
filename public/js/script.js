var swiper = new Swiper(".home-slider", {
    loop: true,
    autoplay: {
        delay: 5000,
    },
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
