// var swiper = new Swiper(".team-slider", {
    
//     loop:true,
//     grabCursor:true,
//     spaceBetween:1,
//     navigation: {
//         nextEl: ".custom-swiper-button-next",
//         prevEl: ".custom-swiper-button-prev",
//     },
//     breakpoints: {
//         0: {
//             slidesPerView: 1,
//         },
//         768: {
//             slidesPerView: 3,
//         },
//         991: {
//             slidesPerView: 5,
//         },
//     },
// });

$(document).ready(function(){

    $('.slide_products').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: false,
        nextArrow: '<i class="fa fa-arrow-left fa-2x mean_background text-white p-1 px-2 rounded-pill positionned_arrow"></i>',
        prevArrow: '<i class="fa fa-arrow-right fa-2x mean_background text-white p-1 px-2 rounded-pill positionned_arrow"></i>',

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerMode: false 
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]
    });


  

});
