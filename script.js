var swiper = new Swiper(".team-slider", {
    
    loop:true,
    grabCursor:true,
    spaceBetween:1,
    navigation: {
        nextEl: ".custom-swiper-button-next",
        prevEl: ".custom-swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 5,
        },
    },
});