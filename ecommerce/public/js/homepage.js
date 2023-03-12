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
// let test= screen.width;
// console.log(test);

// function morph() {
//     document.getElementById('fist').style.display = "none";
//     document.getElementById('okeh').style.display = "flex";
// }

// function morphin() {
//     document.getElementById('fist').style.display = "flex";
//     document.getElementById('okeh').style.display ="none";
// }

// button =document.getElementById('satu');
// button.addEventListener('click',function(){
// const x = window.matchMedia('(min-width: 400px)')
// handphone(x) // Call listener function at run time
// x.addListener(handphone) // Attach listener function on state changes

// function handphone(x) {
// if (x.matches) { // If media query matches 
//         document.getElementById('card1').style.opacity="0";
//         document.getElementById('card1').style.transition="all 0.7s";
//         document.getElementById('card2').style.transform="translateY(-165px)";
//         document.getElementById('card2').style.transition="all 0.5s";

//         window.matchMedia('(orientation: landscape)').addEventListener("change",e =>{
//         const portrait = e.matches;

//         if(portrait==true){
//         document.getElementById('card1').style.opacity="0";
//         document.getElementById('card1').style.transition="all 0.7s";
//         document.getElementById('card2').style.transform="translateY(-170px)";
//         document.getElementById('card2').style.transition="all 0.5s";
//         }
//         else{
//         document.getElementById('card1').style.opacity="0";
//         document.getElementById('card1').style.transition="all 0.7s";
//         document.getElementById('card2').style.transform="translateY(-165px)";
//         document.getElementById('card2').style.transition="all 0.5s";    
//         }
//     });
// } 
//     else{
//         console.log("Lebih dari 400px")
//     }
// }
// });

// buton =document.getElementById('dua');
// buton.addEventListener('click',function(){
// const x = window.matchMedia('(min-width: 400px)')
// hp(x) // Call listener function at run time
// x.addListener(hp) // Attach listener function on state changes

// function hp(x) {
// if (x.matches) { // If media query matches 
//         document.getElementById('card1').style.opacity="1";
//         document.getElementById('card1').style.transition="all 0.5s";
//         document.getElementById('card2').style.transform="translateY(170px)";
//         document.getElementById('card2').style.transition="all 0.7s";

//         window.matchMedia('(orientation: portrait)').addEventListener("change",e =>{
//         const portrait = e.matches;

//         if(portrait==true){
//         document.getElementById('card1').style.opacity="1";
//         document.getElementById('card1').style.transition="all 0.5s";
//         document.getElementById('card2').style.transform="translateY(170px)";
//         document.getElementById('card2').style.transition="all 0.7s";
//         }
//         else{
//         document.getElementById('card1').style.opacity="1";
//         document.getElementById('card1').style.transition="all 0.5s";
//         document.getElementById('card2').style.transform="translateY(170px)";
//         document.getElementById('card2').style.transition="all 0.7s";
//         }
//     });
// } 
//     else{
//         console.log("Lebih dari 400px")
//     }
// }
// });