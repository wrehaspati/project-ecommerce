const swiper = new Swiper('.swiper-card', {
    speed: 400,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        400: {
            slidesPerView: 2.1,
            spaceBetween: -5
        },
        600: {
            slidesPerView: 2.8,
            spaceBetween: 5
        },
        700: {
            slidesPerView: 2,
            spaceBetween: 5
        },
        800: {
            slidesPerView: 3.7,
            spaceBetween: 5
        },
        1000: {
            slidesPerView: 4.7,
            spaceBetween: 10
        },
        1200: {
            slidesPerView: 5.6,
            spaceBetween: 10
        },
    }
});  
const swipe = new Swiper('.swiper-item', {
    speed: 400,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        400: {
            slidesPerView: 1.89,
            spaceBetween: -5
        },
        600: {
            slidesPerView: 2.31,
            spaceBetween: -5
        },
        700: {
            slidesPerView: 2.7,
            spaceBetween: -5
        },
        800: {
            slidesPerView: 3.1,
            spaceBetween: -5
        },
        900: {
            slidesPerView: 3.5,
            spaceBetween: -5
        },
        1000: {
            slidesPerView: 4.1,
            spaceBetween: 10
        },
        1200: {
            slidesPerView: 4.7,
            spaceBetween: 10
        },
    }
});  
const pop=document.getElementById('popup');
const backimg=document.getElementById('contain')
window.onload=function(){
    setTimeout(function(){
        pop.style.opacity="1";
        pop.style.zIndex="50";
        pop.style.transition="all 0.5s";
        backimg.style.opacity="1";
        backimg.style.transition="all 0.5s";
    },1000)
}
const close=document.getElementById('close');
close.addEventListener('click',function(){
    pop.style.opacity="0";
    pop.style.zIndex="-1";
    pop.style.transition="all 0.7s";
    backimg.style.opacity="0";
    backimg.style.zIndex="-1"
    backimg.style.transition="all 0.9s";
})
