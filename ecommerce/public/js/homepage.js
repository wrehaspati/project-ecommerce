const swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 1,
    slidesPerView: 4,
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
        800: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 10
        },
    }
});
let test= screen.width;
console.log(test);

function morph() {
    document.getElementById('fist').style.display = "none";
    document.getElementById('okeh').style.display = "flex";
}

function morphin() {
    document.getElementById('fist').style.display = "flex";
    document.getElementById('okeh').style.display ="none";
}

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