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