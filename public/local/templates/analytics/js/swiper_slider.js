const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1.5,
    spaceBetween: 20,
    breakpoints: {
        // 640: {
        //     slidesPerView: 2,
        //     spaceBetween: 20,
        // },
        // 768: {
        //     slidesPerView: 4,
        //     spaceBetween: 40,
        // },
        1280: {
            slidesPerView: 3,
            spaceBetween: 80,
        },
    },

});