document.getElementById('filter').addEventListener('click',function(){
   document.getElementById('background').style.opacity="1"
   document.getElementById('background').style.transition="all 1s"
   document.getElementById('background').style.transitionDelay="0.25s"
   document.getElementById('background').style.zIndex="3"
   document.getElementById('sidebar').style.opacity="1"
   document.getElementById('sidebar').style.transition="all 1s"
   document.getElementById('sidebar').style.zIndex="4"
   document.getElementById('sidebar').style.left="1px"
   document.getElementById('scrol').style.overflow="hidden"
})
document.getElementById('close').addEventListener('click',function(){
   document.getElementById('background').style.opacity="0"
   document.getElementById('background').style.transition="all 1s"
   document.getElementById('background').style.transitionDelay="0.15s"
   document.getElementById('background').style.zIndex="-2"
   document.getElementById('sidebar').style.opacity="0"
   document.getElementById('sidebar').style.transition="all 1s"
   document.getElementById('sidebar').style.zIndex="-3"
   document.getElementById('sidebar').style.left="-3rem"
   document.getElementById('scrol').style.overflow="scroll"
})
document.getElementById('background').addEventListener('click',function(){
    document.getElementById('background').style.opacity="0"
    document.getElementById('background').style.transition="all 1s"
    document.getElementById('background').style.transitionDelay="0.15s"
    document.getElementById('background').style.zIndex="-2"
    document.getElementById('sidebar').style.opacity="0"
    document.getElementById('sidebar').style.transition="all 1s"
    document.getElementById('sidebar').style.zIndex="-3"
    document.getElementById('sidebar').style.left="-3rem"
    document.getElementById('scrol').style.overflow="scroll"
 })
 document.getElementById('single').addEventListener('click',function(){
   document.getElementById('sort').style.display="grid"
   document.getElementById('solo').style.display="none"
 })
 document.getElementById('multiple').addEventListener('click',function(){
   document.getElementById('solo').style.display="grid"
   document.getElementById('sort').style.display="none"
 })
 document.getElementById('filter2').addEventListener('click',function(){
   document.getElementById('siding').style.transition="all 0.5s"
   document.getElementById('siding').style.height="11rem"
   document.getElementById('filter2').style.display="none"
   document.getElementById('filter3').style.display="inline-block"
 })
 document.getElementById('filter3').addEventListener('click',function(){
   document.getElementById('siding').style.transition="all 0.5s"
   document.getElementById('siding').style.height="4px"
   document.getElementById('filter2').style.display="inline-block"
   document.getElementById('filter3').style.display="none"
 })
 function handphone(x) {
   if (x.matches) { // If media query matches
     document.getElementById('filter2').style.display="none"
   } else {
     document.getElementById('filter2').style.display="inline-block"
   }
 }
 
 let x = window.matchMedia("(min-width: 400px)")
 handphone(x) // Call listener function at run time
 x.addListener(handphone) // Attach listener function on state changes
 
 function tablet(y) {
   if (y.matches) { // If media query matches
     document.getElementById('filter2').style.display="inline-block"
   } else {
     document.getElementById('filter2').style.display="none"
     document.getElementById('filter3').style.display="none"
     document.getElementById('siding').style.height="1px"
   }
 }
 
 let y = window.matchMedia("(min-width: 600px)")
 tablet(y) // Call listener function at run time
 y.addListener(tablet) // Attach listener function on state changes

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
    document.getElementById('ele').style.height="200px";
    document.getElementById('ele').style.transition="all 0.5s";
    satu.style.opacity="1";
    satu.style.marginLeft="0px";
    satu.transition="all 0.5s";
    dua.style.opacity="1";
    dua.style.marginLeft="0px";
    dua.transition="all 0.5s";
    tiga.style.opacity="1";
    tiga.style.marginLeft="0px";
    tiga.transition="all 0.5s";
}
document.getElementById('conten').addEventListener('mouseout',dishover)
function dishover(){
    document.getElementById('ele').style.height="0px";
    document.getElementById('ele').style.transition="all 0.5s";
    satu.style.opacity="0";
    satu.style.marginLeft="3px";
    satu.transition="all 0.5s";
    dua.style.opacity="0";
    dua.style.marginLeft="3px";
    dua.transition="all 0.5s";
    tiga.style.opacity="0";
    tiga.style.marginLeft="3px";
    tiga.transition="all 0.5s";
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
    document.getElementById('vat').style.height="200px";
    document.getElementById('vat').style.transition="all 0.5s";
    subasoka1.style.opacity="1";
    subasoka1.style.marginLeft="0px";
    subasoka1.transition="all 0.5s";
    subasoka2.style.opacity="1";
    subasoka2.style.marginLeft="0px";
    subasoka2.transition="all 0.5s";
    subasoka3.style.opacity="1";
    subasoka3.style.marginLeft="0px";
    subasoka3.transition="all 0.5s";
}
document.getElementById('asoka').addEventListener('mouseout',dihover)
function dihover(){
    document.getElementById('vat').style.height="0px";
    document.getElementById('vat').style.transition="all 0.5s";
    subasoka1.style.opacity="0";
    subasoka1.style.marginLeft="3px";
    subasoka1.transition="all 0.5s";
    subasoka2.style.opacity="0";
    subasoka2.style.marginLeft="3px";
    subasoka2.transition="all 0.5s";
    subasoka3.style.opacity="0";
    subasoka3.style.marginLeft="3px";
    subasoka3.transition="all 0.5s";
}
const anggrek1=document.getElementById('anggrek1');
const subanggr1=document.getElementById('subanggr1');
const anggr1=document.getElementById('anggr1');
const anggrek2=document.getElementById('anggrek2');
const subanggr2=document.getElementById('subanggr2');
const anggr2=document.getElementById('anggr2');
const anggrek3=document.getElementById('anggrek3');
const subanggr3=document.getElementById('subanggr3');
const anggr3=document.getElementById('anggr3');

subanggr1.addEventListener('mouseover',function(){
    anggr1.innerHTML="Wishlist";
    anggrek1.style.opacity="1";
    anggrek1.style.marginLeft="3px";
    anggrek1.style.transition="all 0.5s";
},true)

subanggr1.addEventListener('mouseleave',function(){
    anggrek1.style.opacity="0";
    anggrek1.style.marginLeft="0px";
    anggrek1.style.transition="all 0.5s";
},true)

subanggr2.addEventListener('mouseover',function(){
    anggr2.innerHTML="Compare";
    anggrek2.style.opacity="1";
    anggrek2.style.marginLeft="3px";
    anggrek2.style.transition="all 0.5s";
},true)

subanggr2.addEventListener('mouseleave',function(){
    anggrek2.style.opacity="0";
    anggrek2.style.marginLeft="0px";
    anggrek2.style.transition="all 0.5s";
},true)

subanggr3.addEventListener('mouseover',function(){
    anggr3.innerHTML="Search";
    anggrek3.style.opacity="1";
    anggrek3.style.marginLeft="3px";
    anggrek3.style.transition="all 0.5s";
},true)

subanggr3.addEventListener('mouseleave',function(){
    anggrek3.style.opacity="0";
    anggrek3.style.marginLeft="0px";
    anggrek3.style.transition="all 0.5s";
},true)

document.getElementById('anggre').addEventListener('mouseover',lover)
function lover(){
    document.getElementById('tora').style.height="200px";
    document.getElementById('tora').style.transition="all 0.5s";
    subanggr1.style.opacity="1";
    subanggr1.style.marginLeft="0px";
    subanggr1.transition="all 0.5s";
    subanggr2.style.opacity="1";
    subanggr2.style.marginLeft="0px";
    subanggr2.transition="all 0.5s";
    subanggr3.style.opacity="1";
    subanggr3.style.marginLeft="0px";
    subanggr3.transition="all 0.5s";
}
document.getElementById('anggre').addEventListener('mouseout',terhover)
function terhover(){
    document.getElementById('tora').style.height="0px";
    document.getElementById('tora').style.transition="all 0.5s";
    subanggr1.style.opacity="0";
    subanggr1.style.marginLeft="3px";
    subanggr1.transition="all 0.5s";
    subanggr2.style.opacity="0";
    subanggr2.style.marginLeft="3px";
    subanggr2.transition="all 0.5s";
    subanggr3.style.opacity="0";
    subanggr3.style.marginLeft="3px";
    subanggr3.transition="all 0.5s";
}

const ayung1=document.getElementById('ayung1');
const subayun1=document.getElementById('subayun1');
const ayun1=document.getElementById('ayun1');
const ayung2=document.getElementById('ayung2');
const subayun2=document.getElementById('subayun2');
const ayun2=document.getElementById('ayun2');
const ayung3=document.getElementById('ayung3');
const subayun3=document.getElementById('subayun3');
const ayun3=document.getElementById('ayun3');

subayun1.addEventListener('mouseover',function(){
    ayun1.innerHTML="Wishlist";
    ayung1.style.opacity="1";
    ayung1.style.marginLeft="3px";
    ayung1.style.transition="all 0.5s";
},true)

subayun1.addEventListener('mouseleave',function(){
    ayung1.style.opacity="0";
    ayung1.style.marginLeft="0px";
    ayung1.style.transition="all 0.5s";
},true)

subayun2.addEventListener('mouseover',function(){
    ayun2.innerHTML="Compare";
    ayung2.style.opacity="1";
    ayung2.style.marginLeft="3px";
    ayung2.style.transition="all 0.5s";
},true)

subayun2.addEventListener('mouseleave',function(){
    ayung2.style.opacity="0";
    ayung2.style.marginLeft="0px";
    ayung2.style.transition="all 0.5s";
},true)

subayun3.addEventListener('mouseover',function(){
    ayun3.innerHTML="Search";
    ayung3.style.opacity="1";
    ayung3.style.marginLeft="3px";
    ayung3.style.transition="all 0.5s";
},true)

subayun3.addEventListener('mouseleave',function(){
    ayung3.style.opacity="0";
    ayung3.style.marginLeft="0px";
    ayung3.style.transition="all 0.5s";
},true)

document.getElementById('ayun').addEventListener('mouseover',dover)
function dover(){
    document.getElementById('vio').style.height="200px";
    document.getElementById('vio').style.transition="all 0.5s";
    subayun1.style.opacity="1";
    subayun1.style.marginLeft="0px";
    subayun1.transition="all 0.5s";
    subayun2.style.opacity="1";
    subayun2.style.marginLeft="0px";
    subayun2.transition="all 0.5s";
    subayun3.style.opacity="1";
    subayun3.style.marginLeft="0px";
    subayun3.transition="all 0.5s";
}
document.getElementById('ayun').addEventListener('mouseout',sihover)
function sihover(){
    document.getElementById('vio').style.height="0px";
    document.getElementById('vio').style.transition="all 0.5s";
    subayun1.style.opacity="0";
    subayun1.style.marginLeft="3px";
    subayun1.transition="all 0.5s";
    subayun2.style.opacity="0";
    subayun2.style.marginLeft="3px";
    subayun2.transition="all 0.5s";
    subayun3.style.opacity="0";
    subayun3.style.marginLeft="3px";
    subayun3.transition="all 0.5s";
}

const silver1=document.getElementById('silver1');
const subsilve1=document.getElementById('subsilve1');
const silve1=document.getElementById('silve1');
const silver2=document.getElementById('silver2');
const subsilve2=document.getElementById('subsilve2');
const silve2=document.getElementById('silve2');
const silver3=document.getElementById('silver3');
const subsilve3=document.getElementById('subsilve3');
const silve3=document.getElementById('silve3');

subsilve1.addEventListener('mouseover',function(){
    silve1.innerHTML="Wishlish";
    silver1.style.opacity="1";
    silver1.style.marginLeft="3px";
    silver1.style.transition="all 0.5s";
},true)
subsilve1.addEventListener('mouseleave',function(){
    silver1.style.opacity="0";
    silver1.style.marginLeft="0px";
    silver1.style.transition="all 0.5s";
},true)

subsilve2.addEventListener('mouseover',function(){
    silve2.innerHTML="Compare";
    silver2.style.opacity="1";
    silver2.style.marginLeft="3px";
    silver2.style.transition="all 0.5s";
},true)
subsilve2.addEventListener('mouseleave',function(){
    silver2.style.opacity="0";
    silver2.style.marginLeft="0px";
    silver2.style.transition="all 0.5s";
},true)

subsilve3.addEventListener('mouseover',function(){
    silve3.innerHTML="Search";
    silver3.style.opacity="1";
    silver3.style.marginLeft="3px";
    silver3.style.transition="all 0.5s";
},true)
subsilve3.addEventListener('mouseleave',function(){
    silver3.style.opacity="0";
    silver3.style.marginLeft="0px";
    silver3.style.transition="all 0.5s";
},true)

document.getElementById('silve').addEventListener('mouseover',sover)
function sover(){
    document.getElementById('equ').style.height="200px";
    document.getElementById('equ').style.transition="all 0.5s";
    subsilve1.style.opacity="1";
    subsilve1.style.marginLeft="0px";
    subsilve1.transition="all 0.5s";
    subsilve2.style.opacity="1";
    subsilve2.style.marginLeft="0px";
    subsilve2.transition="all 0.5s";
    subsilve3.style.opacity="1";
    subsilve3.style.marginLeft="0px";
    subsilve3.transition="all 0.5s";
}
document.getElementById('silve').addEventListener('mouseout',nihover)
function nihover(){
    document.getElementById('equ').style.height="0px";
    document.getElementById('equ').style.transition="all 0.5s";
    subsilve1.style.opacity="0";
    subsilve1.style.marginLeft="3px";
    subsilve1.transition="all 0.5s";
    subsilve2.style.opacity="0";
    subsilve2.style.marginLeft="3px";
    subsilve2.transition="all 0.5s";
    subsilve3.style.opacity="0";
    subsilve3.style.marginLeft="3px";
    subsilve3.transition="all 0.5s";
}

const bhineka1=document.getElementById('bhineka1');
const subbhinek1=document.getElementById('subbhinek1');
const bhinek1=document.getElementById('bhinek1');
const bhineka2=document.getElementById('bhineka2');
const subbhinek2=document.getElementById('subbhinek2');
const bhinek2=document.getElementById('bhinek2');
const bhineka3=document.getElementById('bhineka3');
const subbhinek3=document.getElementById('subbhinek3');
const bhinek3=document.getElementById('bhinek3');

subbhinek1.addEventListener('mouseover',function(){
    bhinek1.innerHTML="Wishlist";
    bhineka1.style.opacity="1";
    bhineka1.style.marginLeft="3px";
    bhineka1.style.transition="all 0.5s";
},true)
subbhinek1.addEventListener('mouseleave',function(){
    bhineka1.style.opacity="0";
    bhineka1.style.marginLeft="0px";
    bhineka1.style.transition="all 0.5s";
},true)

subbhinek2.addEventListener('mouseover',function(){
    bhinek2.innerHTML="Compare";
    bhineka2.style.opacity="1";
    bhineka2.style.marginLeft="3px";
    bhineka2.style.transition="all 0.5s";
},true)
subbhinek2.addEventListener('mouseleave',function(){
    bhineka2.style.opacity="0";
    bhineka2.style.marginLeft="0px";
    bhineka2.style.transition="all 0.5s";
},true)

subbhinek3.addEventListener('mouseover',function(){
    bhinek3.innerHTML="Search";
    bhineka3.style.opacity="1";
    bhineka3.style.marginLeft="3px";
    bhineka3.style.transition="all 0.5s";
},true)
subbhinek3.addEventListener('mouseleave',function(){
    bhineka3.style.opacity="0";
    bhineka3.style.marginLeft="0px";
    bhineka3.style.transition="all 0.5s";
},true)

document.getElementById('bhinek').addEventListener('mouseover',zover)
function zover(){
    document.getElementById('dor').style.height="200px";
    document.getElementById('dor').style.transition="all 0.5s";
    subbhinek1.style.opacity="1";
    subbhinek1.style.marginLeft="0px";
    subbhinek1.transition="all 0.5s";
    subbhinek2.style.opacity="1";
    subbhinek2.style.marginLeft="0px";
    subbhinek2.transition="all 0.5s";
    subbhinek3.style.opacity="1";
    subbhinek3.style.marginLeft="0px";
    subbhinek3.transition="all 0.5s";
}
document.getElementById('bhinek').addEventListener('mouseout',lihover)
function lihover(){
    document.getElementById('dor').style.height="0px";
    document.getElementById('dor').style.transition="all 0.5s";
    subbhinek1.style.opacity="0";
    subbhinek1.style.marginLeft="3px";
    subbhinek1.transition="all 0.5s";
    subbhinek2.style.opacity="0";
    subbhinek2.style.marginLeft="3px";
    subbhinek2.transition="all 0.5s";
    subbhinek3.style.opacity="0";
    subbhinek3.style.marginLeft="3px";
    subbhinek3.transition="all 0.5s";
}

const batik1=document.getElementById('batik1');
const subbati1=document.getElementById('subbati1');
const bati1=document.getElementById('bati1');
const batik2=document.getElementById('batik2');
const subbati2=document.getElementById('subbati2');
const bati2=document.getElementById('bati2');
const batik3=document.getElementById('batik3');
const subbati3=document.getElementById('subbati3');
const bati3=document.getElementById('bati3');

subbati1.addEventListener('mouseover',function(){
    bati1.innerHTML="Wishlish";
    batik1.style.opacity="1";
    batik1.style.marginLeft="3px";
    batik1.style.transition="all 0.5s";
},true)
subbati1.addEventListener('mouseleave',function(){
    batik1.style.opacity="0";
    batik1.style.marginLeft="0px";
    batik1.style.transition="all 0.5s";
},true)

subbati2.addEventListener('mouseover',function(){
    bati2.innerHTML="Compare";
    batik2.style.opacity="1";
    batik2.style.marginLeft="3px";
    batik2.style.transition="all 0.5s";
},true)
subbati2.addEventListener('mouseleave',function(){
    batik2.style.opacity="0";
    batik2.style.marginLeft="0px";
    batik2.style.transition="all 0.5s";
},true)

subbati3.addEventListener('mouseover',function(){
    bati3.innerHTML="Search";
    batik3.style.opacity="1";
    batik3.style.marginLeft="3px";
    batik3.style.transition="all 0.5s";
},true)
subbati3.addEventListener('mouseleave',function(){
    batik3.style.opacity="0";
    batik3.style.marginLeft="0px";
    batik3.style.transition="all 0.5s";
},true)

document.getElementById('bati').addEventListener('mouseover',pover)
function pover(){
    document.getElementById('kha').style.height="200px";
    document.getElementById('kha').style.transition="all 0.5s";
    subbati1.style.opacity="1";
    subbati1.style.marginLeft="0px";
    subbati1.transition="all 0.5s";
    subbati2.style.opacity="1";
    subbati2.style.marginLeft="0px";
    subbati2.transition="all 0.5s";
    subbati3.style.opacity="1";
    subbati3.style.marginLeft="0px";
    subbati3.transition="all 0.5s";
}
document.getElementById('bati').addEventListener('mouseout',ihover)
function ihover(){
    document.getElementById('kha').style.height="0px";
    document.getElementById('kha').style.transition="all 0.5s";
    subbati1.style.opacity="0";
    subbati1.style.marginLeft="3px";
    subbati1.transition="all 0.5s";
    subbati2.style.opacity="0";
    subbati2.style.marginLeft="3px";
    subbati2.transition="all 0.5s";
    subbati3.style.opacity="0";
    subbati3.style.marginLeft="3px";
    subbati3.transition="all 0.5s";
}

const batur1=document.getElementById('batur1');
const subbatu1=document.getElementById('subbatu1');
const batu1=document.getElementById('batu1');
const batur2=document.getElementById('batur2');
const subbatu2=document.getElementById('subbatu2');
const batu2=document.getElementById('batu2');
const batur3=document.getElementById('batur3');
const subbatu3=document.getElementById('subbatu3');
const batu3=document.getElementById('batu3');


subbatu1.addEventListener('mouseover',function(){
    batu1.innerHTML="Wishlist";
    batur1.style.opacity="1";
    batur1.style.marginLeft="3px";
    batur1.style.transition="all 0.5s";
},true)
subbatu1.addEventListener('mouseleave',function(){
    batur1.style.opacity="0";
    batur1.style.marginLeft="0px";
    batur1.style.transition="all 0.5s";
},true)

subbatu2.addEventListener('mouseover',function(){
    batu2.innerHTML="Compare";
    batur2.style.opacity="1";
    batur2.style.marginLeft="3px";
    batur2.style.transition="all 0.5s";
},true)
subbatu2.addEventListener('mouseleave',function(){
    batur2.style.opacity="0";
    batur2.style.marginLeft="0px";
    batur2.style.transition="all 0.5s";
},true)

subbatu3.addEventListener('mouseover',function(){
    batu3.innerHTML="Search";
    batur3.style.opacity="1";
    batur3.style.marginLeft="3px";
    batur3.style.transition="all 0.5s";
},true)
subbatu3.addEventListener('mouseleave',function(){
    batur3.style.opacity="0";
    batur3.style.marginLeft="0px";
    batur3.style.transition="all 0.5s";
},true)

document.getElementById('batu').addEventListener('mouseover',wover)
function wover(){
    document.getElementById('tul').style.height="200px";
    document.getElementById('tul').style.transition="all 0.5s";
    subbatu1.style.opacity="1";
    subbatu1.style.marginLeft="0px";
    subbatu1.transition="all 0.5s";
    subbatu2.style.opacity="1";
    subbatu2.style.marginLeft="0px";
    subbatu2.transition="all 0.5s";
    subbatu3.style.opacity="1";
    subbatu3.style.marginLeft="0px";
    subbatu3.transition="all 0.5s";
}
document.getElementById('batu').addEventListener('mouseout',mhover)
function mhover(){
    document.getElementById('tul').style.height="0px";
    document.getElementById('tul').style.transition="all 0.5s";
    subbatu1.style.opacity="0";
    subbatu1.style.marginLeft="3px";
    subbatu1.transition="all 0.5s";
    subbatu2.style.opacity="0";
    subbatu2.style.marginLeft="3px";
    subbatu2.transition="all 0.5s";
    subbatu3.style.opacity="0";
    subbatu3.style.marginLeft="3px";
    subbatu3.transition="all 0.5s";
}
function hp(z) {
    if (z.matches) { // If media query matches
        document.getElementById('conten').removeEventListener('mouseover',hover)
        document.getElementById('conten').removeEventListener('mouseout',dishover)
        document.getElementById('ele').style.height="200px";
        document.getElementById('asoka').removeEventListener('mouseover',over)
        document.getElementById('asoka').removeEventListener('mouseout',dihover)
        document.getElementById('vat').style.height="200px";
        document.getElementById('anggre').removeEventListener('mouseover',lover)
        document.getElementById('anggre').removeEventListener('mouseout',terhover)
        document.getElementById('tora').style.height="200px";
        document.getElementById('ayun').removeEventListener('mouseover',dover)
        document.getElementById('ayun').removeEventListener('mouseout',sihover)
        document.getElementById('vio').style.height="200px";
        document.getElementById('silve').removeEventListener('mouseover',sover)
        document.getElementById('silve').removeEventListener('mouseout',nihover)
        document.getElementById('equ').style.height="200px";
        document.getElementById('bhinek').removeEventListener('mouseover',zover)
        document.getElementById('bhinek').removeEventListener('mouseout',lihover)
        document.getElementById('dor').style.height="200px";
        document.getElementById('bati').removeEventListener('mouseover',pover)
        document.getElementById('bati').removeEventListener('mouseout',ihover)
        document.getElementById('kha').style.height="200px";
        document.getElementById('batu').removeEventListener('mouseover',wover)
        document.getElementById('batu').removeEventListener('mouseout',mhover)
        document.getElementById('tul').style.height="200px";
        satu.style.opacity="1";
        satu.style.marginLeft="3px";
        dua.style.opacity="1";
        dua.style.marginLeft="3px";
        tiga.style.opacity="1";
        tiga.style.marginLeft="3px";
        subasoka1.style.opacity="1";
        subasoka1.style.marginLeft="3px";
        subasoka2.style.opacity="1";
        subasoka2.style.marginLeft="3px";
        subasoka3.style.opacity="1";
        subasoka3.style.marginLeft="3px";
        subanggr1.style.opacity="1";
        subanggr1.style.marginLeft="3px";
        subanggr2.style.opacity="1";
        subanggr2.style.marginLeft="3px";
        subanggr3.style.opacity="1";
        subanggr3.style.marginLeft="3px";
        subayun1.style.opacity="1";
        subayun1.style.marginLeft="3px";
        subayun2.style.opacity="1";
        subayun2.style.marginLeft="3px";
        subayun3.style.opacity="1";
        subayun3.style.marginLeft="3px";
        subbati1.style.opacity="1";
        subbati1.style.marginLeft="3px";
        subbati2.style.opacity="1";
        subbati2.style.marginLeft="3px";
        subbati3.style.opacity="1";
        subbati3.style.marginLeft="3px";
        subbatu1.style.opacity="1";
        subbatu1.style.marginLeft="3px";
        subbatu2.style.opacity="1";
        subbatu2.style.marginLeft="3px";
        subbatu3.style.opacity="1";
        subbatu3.style.marginLeft="3px";
        subbhinek1.style.opacity="1";
        subbhinek1.style.marginLeft="3px";
        subbhinek2.style.opacity="1";
        subbhinek2.style.marginLeft="3px";
        subbhinek3.style.opacity="1";
        subbhinek3.style.marginLeft="3px";
        subsilve1.style.opacity="1";
        subsilve1.style.marginLeft="3px";
        subsilve2.style.opacity="1";
        subsilve2.style.marginLeft="3px";
        subsilve3.style.opacity="1";
        subsilve3.style.marginLeft="3px";
    } else {
        document.getElementById('conten').addEventListener('mouseover',hover)
        document.getElementById('conten').addEventListener('mouseout',dishover)
        document.getElementById('asoka').addEventListener('mouseover',over)
        document.getElementById('asoka').addEventListener('mouseout',dihover)
        document.getElementById('anggre').addEventListener('mouseover',lover)
        document.getElementById('anggre').addEventListener('mouseout',terhover)
        document.getElementById('ayun').addEventListener('mouseover',dover)
        document.getElementById('ayun').addEventListener('mouseout',sihover)
        document.getElementById('silve').addEventListener('mouseover',sover)
        document.getElementById('silve').addEventListener('mouseout',nihover)
        document.getElementById('bhinek').addEventListener('mouseover',zover)
        document.getElementById('bhinek').addEventListener('mouseout',lihover)
        document.getElementById('bati').addEventListener('mouseover',pover)
        document.getElementById('bati').addEventListener('mouseout',ihover)
        document.getElementById('batu').addEventListener('mouseover',wover)
        document.getElementById('batu').addEventListener('mouseout',mhover)
        document.getElementById('ele').style.height="0px";
        document.getElementById('tul').style.height="0px";
        document.getElementById('vat').style.height="0px";
        document.getElementById('dor').style.height="0px";
        document.getElementById('kha').style.height="0px";
        document.getElementById('vio').style.height="0px";
        document.getElementById('tora').style.height="0px";
        document.getElementById('equ').style.height="0px";
        satu.style.opacity="0";
        satu.style.marginLeft="0px";
        dua.style.opacity="0";
        dua.style.marginLeft="0px";
        tiga.style.opacity="0";
        tiga.style.marginLeft="0px";
        subasoka1.style.opacity="0";
        subasoka1.style.marginLeft="0px";
        subasoka2.style.opacity="0";
        subasoka2.style.marginLeft="0px";
        subasoka3.style.opacity="0";
        subasoka3.style.marginLeft="0px";
        subanggr1.style.opacity="0";
        subanggr1.style.marginLeft="0px";
        subanggr2.style.opacity="0";
        subanggr2.style.marginLeft="0px";
        subanggr3.style.opacity="0";
        subanggr3.style.marginLeft="0px";
        subayun1.style.opacity="0";
        subayun1.style.marginLeft="0px";
        subayun2.style.opacity="0";
        subayun2.style.marginLeft="0px";
        subayun3.style.opacity="0";
        subayun3.style.marginLeft="0px";
        subbati1.style.opacity="0";
        subbati1.style.marginLeft="0px";
        subbati2.style.opacity="0";
        subbati2.style.marginLeft="0px";
        subbati3.style.opacity="0";
        subbati3.style.marginLeft="0px";
        subbatu1.style.opacity="0";
        subbatu1.style.marginLeft="0px";
        subbatu2.style.opacity="0";
        subbatu2.style.marginLeft="0px";
        subbatu3.style.opacity="0";
        subbatu3.style.marginLeft="0px";
        subbhinek1.style.opacity="0";
        subbhinek1.style.marginLeft="0px";
        subbhinek2.style.opacity="0";
        subbhinek2.style.marginLeft="0px";
        subbhinek3.style.opacity="0";
        subbhinek3.style.marginLeft="0px";
        subsilve1.style.opacity="0";
        subsilve1.style.marginLeft="0px";
        subsilve2.style.opacity="0";
        subsilve2.style.marginLeft="0px";
        subsilve3.style.opacity="0";
        subsilve3.style.marginLeft="0px";
    }
  }
  
  let z = window.matchMedia("(max-width: 1000px)")
  hp(z) // Call listener function at run time
  z.addListener(hp) // Attach listener function on state changes