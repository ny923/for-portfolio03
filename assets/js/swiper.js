// TOP FV用
let topSwiper = new Swiper('.topSwiper', {
    loop: true,
    autoplay: {
        delay: 3000,
    },
    // autoHeight: true,
    centeredSlides: true,
    speed: 1000,
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    // allowTouchMove: false,
});

// 物件詳細サムネ用
// let swiperThumbnail = new Swiper('.swiperThumbnail', {
//     loop: true,
//     spaceBetween: 0,
//     slidesPerGroup: 5,
//     slidesPerView: 5,
//     grid: {
//         rows: 99,
//         fill: 'row',
//     },
//     spaceBetween: 0,
//     observer: true,
//     observeParents: true,
// });

// for sp slide
let swiper = new Swiper('.sp-swiper', {
    loop: true,
    centeredSlides: true,
    slidesPerView: 1.2,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    // thumbs: {
    //     swiper: swiperThumbnail,
    // },
});

// 20250331 modal式Swiper
window.addEventListener('DOMContentLoaded', () => {
    // モーダルを取得
    const modal = document.getElementById('modal');
    // モーダルを表示するボタンを全て取得
    const openModalBtns = document.querySelectorAll('.js-open-modal');
    // モーダルを閉じるボタンを全て取得
    const closeModalBtns = document.querySelectorAll('.js-close-modal');

    // Swiperの設定
    const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
    });

    // モーダルを表示するボタンをクリックしたとき
    openModalBtns.forEach((openModalBtn) => {
        openModalBtn.addEventListener('click', () => {
            // data-slide-indexに設定したスライド番号を取得
            const modalIndex = openModalBtn.dataset.slideIndex;
            swiper.slideTo(modalIndex);
            modal.classList.add('is-active');
        });
    });

    // モーダルを閉じるボタンをクリックしたとき
    closeModalBtns.forEach((closeModalBtn) => {
        closeModalBtn.addEventListener('click', () => {
            modal.classList.remove('is-active');
        });
    });
});

// 空き家再生用(before after)
let baSwiper = new Swiper('.baSwiper', {
    loop: true,
    autoplay: {
        delay: 3000,
    },
    centeredSlides: true,
    speed: 1000,
    slidesPerView: 1,
    pagination: {
        el: '.swiper-pagination',
    },
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
