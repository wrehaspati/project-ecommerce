const swiper = new Swiper('.swiper-card', {
    speed: 400,
    slidesPerView: 2,
    spaceBetween: 10,
    loop:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        400: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        600: {
            slidesPerView: 4,
            spaceBetween: 10
        },
        800: {
            slidesPerView: 5,
            spaceBetween: 10
        },
        1000: {
            slidesPerView: 6,
            spaceBetween: 10
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 10
        },
        1300: {
            slidesPerView: 4.3,
            spaceBetween: 90
        },
        1500: {
            slidesPerView: 5.5,
            spaceBetween: 90
        },
        2000: {
            slidesPerView: 5.5,
            spaceBetween: 50
        },
        4000: {
            slidesPerView: 9,
            spaceBetween: 50
        }
    }
});  
const swipe = new Swiper('.swiper-item', {
    speed: 400,
    loop:true,
    slidesPerView: 2,
    spaceBetween: 10,
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
            slidesPerView: 2,
            spaceBetween: 10
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        800: {
            slidesPerView: 4,
            spaceBetween: 10
        },
        1000: {
            slidesPerView: 5,
            spaceBetween: 10
        },
        1200: {
            slidesPerView: 6,
            spaceBetween: 10
        },
        1300: {
            slidesPerView: 8,
            spaceBetween: 10
        },
        2000: {
            slidesPerView: 10,
            spaceBetween: 10
        },
        4000: {
            slidesPerView: 9,
            spaceBetween: -50
        }
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
console.log(innerHeight);
console.log(innerWidth);