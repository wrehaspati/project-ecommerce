// const splide = new Splide('.splide', {
//     type: 'slide',
//     rewind: false,
//     gap:'-2rem',
//     perPage:4,
//     speed: 500, 
//     autoplay: false,
//     interval: 3000,
//     arrows: true,
//     pagination: true,
//     pauseOnHover: true,
//     wheel: false,
//     breakpoints: {
//         1200:{
//             perPage: 3,
//             gap:'-2rem',
//         },
//         1000: {
//             perPage: 3,
//             gap:'-2rem',
//         },
//         900:{
//             perPage: 3,
//             gap:'1rem',
//         },
//         850:{
//             perPage: 2,
//             gap:'2rem',
//         },
//         780: {
//             perPage: 2,
//             gap:'1rem',
//           },
//         750: {
//           perPage: 2,
//           gap:'1%',
//         },
//         600: {
//           perPage: 1,
//           gap    : '1rem',
//         },
//       },
//   });
//   splide.mount();

  const splider = new Splide('.splide__month', {
    type: 'slide',
    gap: '5px',
    rewind: false,
    speed: 500, 
    perPage: 5,
    start: 3,
    perMove: 1,
    autoplay: false,
    interval: 3000,
    arrows: true,
    pagination: true,
    pauseOnHover: true,
    wheel: false,
    breakpoints: {
        1000: {
            perPage: 4,
            start: 1,
            perMove: 1,
            gap: '.7rem',
        },
        640: {
            perPage: 3,
            start: 1,
            perMove: 1,
            gap: '.7rem',
        },
        480: {
            perPage: 2,
            start: 1,
            perMove: 1,
            gap: '.7rem',
        },
      },
  });
  splider.mount();

const satu=document.getElementById('satu');
const ichi=document.getElementById('ichi');
const first=document.getElementById('first');
const dua=document.getElementById('dua');
const ni=document.getElementById('ni');
const second=document.getElementById('second');
const tiga=document.getElementById('tiga');
const san=document.getElementById('san');
const third=document.getElementById('third');
satu.addEventListener('mouseover',function(){
    ichi.innerHTML="Wishlish";
    first.style.opacity="1";
    first.style.marginLeft="3px";
    first.style.transition="all 0.5s";
},true)
satu.addEventListener('mouseleave',function(){
    first.style.opacity="0";
    first.style.marginLeft="0px";
    first.style.transition="all 0.5s";
},true)
dua.addEventListener('mouseover',function(){
    ni.innerHTML="Compare";
    second.style.opacity="1";
    second.style.marginLeft="3px";
    second.style.transition="all 0.5s";
},true)
dua.addEventListener('mouseleave',function(){
    second.style.opacity="0";
    second.style.marginLeft="0px";
    second.style.transition="all 0.5s";
},true)
tiga.addEventListener('mouseover',function(){
    san.innerHTML="Quick View";
    third.style.opacity="1";
    third.style.marginLeft="3px";
    third.style.transition="all 0.5s";
},true)
tiga.addEventListener('mouseleave',function(){
    third.style.opacity="0";
    third.style.marginLeft="0px";
    third.style.transition="all 0.5s";
},true)

document.getElementById('conten').addEventListener('mouseover',hover);
function hover(){
    document.getElementById('ele').style.height="210px";
    document.getElementById('ele').style.transition="all 0.5s";
}
document.getElementById('conten').addEventListener('mouseout',dishover)
function dishover(){
    document.getElementById('ele').style.height="0px";
    document.getElementById('ele').style.transition="all 0.5s";
}

const asoka1=document.getElementById('asoka1');
const subasoka1=document.getElementById('subasoka1');
const asok1=document.getElementById('asok1');
const asoka2=document.getElementById('asoka2');
const subasoka2=document.getElementById('subasoka2');
const asok2=document.getElementById('asok2');
const asoka3=document.getElementById('asoka3');
const subasoka3=document.getElementById('subasoka3');
const asok3=document.getElementById('asok3');

subasoka1.addEventListener('mouseover',function(){
    asok1.innerHTML="Wishlist";
    asoka1.style.opacity="1";
    asoka1.style.marginLeft="3px";
    asoka1.style.transition="all 0.5s";
},true)

subasoka1.addEventListener('mouseleave',function(){
    asoka1.style.opacity="0";
    asoka1.style.marginLeft="0px";
    asoka1.style.transition="all 0.5s";
},true)
subasoka2.addEventListener('mouseover',function(){
    asok2.innerHTML="Compare";
    asoka2.style.opacity="1";
    asoka2.style.marginLeft="3px";
    asoka2.style.transition="all 0.5s";
},true)

subasoka2.addEventListener('mouseleave',function(){
    asoka2.style.opacity="0";
    asoka2.style.marginLeft="0px";
    asoka2.style.transition="all 0.5s";
},true)
subasoka3.addEventListener('mouseover',function(){
    asok3.innerHTML="Search";
    asoka3.style.opacity="1";
    asoka3.style.marginLeft="3px";
    asoka3.style.transition="all 0.5s";
},true)

subasoka3.addEventListener('mouseleave',function(){
    asoka3.style.opacity="0";
    asoka3.style.marginLeft="0px";
    asoka3.style.transition="all 0.5s";
},true)

document.getElementById('asoka').addEventListener('mouseover',over)
function over(){
    document.getElementById('vat').style.height="210px";
    document.getElementById('vat').style.transition="all 0.5s";
}
document.getElementById('asoka').addEventListener('mouseout',dihover)
function dihover(){
    document.getElementById('vat').style.height="0px";
    document.getElementById('vat').style.transition="all 0.5s";
}
// const pop=document.getElementById('popup');
// const backimg=document.getElementById('contain')
// window.onload=function(){
//     setTimeout(function(){
//         pop.style.opacity="1";
//         pop.style.zIndex="50";
//         pop.style.transition="all 0.5s";
//         backimg.style.opacity="1";
//         backimg.style.transition="all 0.5s";
//     },1000)
// }
// const close=document.getElementById('close');
// close.addEventListener('click',function(){
//     pop.style.opacity="0";
//     pop.style.zIndex="-1";
//     pop.style.transition="all 0.7s";
//     backimg.style.opacity="0";
//     backimg.style.zIndex="-1"
//     backimg.style.transition="all 0.9s";
// })
function handphone(x) {
    if (x.matches) { // If media query matches
        document.getElementById('conten').removeEventListener('mouseover',hover)
        document.getElementById('conten').removeEventListener('mouseout',dishover)
        document.getElementById('ele').style.height="210px";
        document.getElementById('asoka').removeEventListener('mouseover',over)
        document.getElementById('asoka').removeEventListener('mouseout',dihover)
        document.getElementById('vat').style.height="210px";
    } else {
        document.getElementById('conten').addEventListener('mouseover',hover)
        document.getElementById('conten').addEventListener('mouseout',dishover)
        document.getElementById('asoka').addEventListener('mouseover',over)
        document.getElementById('asoka').addEventListener('mouseout',dihover)
        document.getElementById('vat').style.height="0px";
        document.getElementById('ele').style.height="0px";
    }
  }
  
  let x = window.matchMedia("(max-width: 1000px)")
  handphone(x) // Call listener function at run time
  x.addListener(handphone) // Attach listener function on state changes
  

console.log(innerHeight);
console.log(innerWidth);