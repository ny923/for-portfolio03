// for top
let pickupSwiper = new Swiper('.pickup.swiper', {
    loop: true,
    // centeredSlides: true,
    speed: 1000,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    spaceBetween: 10,
    breakpoints: {
        // pcの場合
        1041: {
            slidesPerView: 3, //4
        },
        // padの場合
        761: {
            centeredSlides: true,
            slidesPerView: 2.5,
        },
    },
    //上記以下の場合
    centeredSlides: true,
    slidesPerView: 1.5,
});

// 新着
let arrivalPropertySwiper = new Swiper('.property.swiper.arrival', {
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    spaceBetween: 10,
    breakpoints: {
        // pcの場合
        1220: {
            slidesPerView: 5,
        },
        // padの場合
        761: {
            centeredSlides: true,
            slidesPerView: 2.5,
        },
    },
    //上記以下の場合
    centeredSlides: true,
    slidesPerView: 1.5,
});

// おすすめ
let recommendPropertySwiper = new Swiper('.property.swiper.recommend', {
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    spaceBetween: 10,
    breakpoints: {
        // pcの場合
        1220: {
            slidesPerView: 3,//5
        },
        // padの場合
        761: {
            centeredSlides: true,
            slidesPerView: 2.5,
        },
    },
    //上記以下の場合
    centeredSlides: true,
    slidesPerView: 1.5,
});


// TOP用ここまで


// propertyページ サムネ用
let swiperThumbnail = new Swiper('.swiper-thumbnail', {
    slidesPerView: 3.5,
    spaceBetween: 3,
    observer: true,
    observeParents: true,
});

// for propertyページmain
let detailSwiper = new Swiper('.swiper-main', {
    centeredSlides: true,
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    thumbs: {
        swiper: swiperThumbnail,
    },
});

// コラム用
let columnSwiper = new Swiper('.column.swiper', {
    loop: true,
    // centeredSlides: true,
    speed: 1000,
    autoplay: {
        delay: 10000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    spaceBetween: 60,
    slidesPerView: 1,
});
