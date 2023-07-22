document.getElementById("filter").addEventListener("click", function () {
    document.getElementById("background").style.opacity = "1";
    document.getElementById("background").style.transition = "all 1s";
    document.getElementById("background").style.transitionDelay = "0.25s";
    document.getElementById("background").style.zIndex = "20";
    document.getElementById("sidebar").style.opacity = "1";
    document.getElementById("sidebar").style.transition = "all 1s";
    document.getElementById("sidebar").style.zIndex = "20";
    document.getElementById("sidebar").style.left = "1px";
    document.getElementById("scrol").style.overflow = "hidden";
});
document.getElementById("close").addEventListener("click", function () {
    document.getElementById("background").style.opacity = "0";
    document.getElementById("background").style.transition = "all 1s";
    document.getElementById("background").style.transitionDelay = "0.15s";
    document.getElementById("background").style.zIndex = "-2";
    document.getElementById("sidebar").style.opacity = "0";
    document.getElementById("sidebar").style.transition = "all 1s";
    document.getElementById("sidebar").style.zIndex = "-3";
    document.getElementById("sidebar").style.left = "-3rem";
    document.getElementById("scrol").style.overflow = "scroll";
});
document.getElementById("background").addEventListener("click", function () {
    document.getElementById("background").style.opacity = "0";
    document.getElementById("background").style.transition = "all 1s";
    document.getElementById("background").style.transitionDelay = "0.15s";
    document.getElementById("background").style.zIndex = "-2";
    document.getElementById("sidebar").style.opacity = "0";
    document.getElementById("sidebar").style.transition = "all 1s";
    document.getElementById("sidebar").style.zIndex = "-3";
    document.getElementById("sidebar").style.left = "-3rem";
    document.getElementById("scrol").style.overflow = "scroll";
});
document.getElementById("single").addEventListener("click", function () {
    document.getElementById("sort").style.display = "grid";
    document.getElementById("solo").style.display = "none";
});
document.getElementById("multiple").addEventListener("click", function () {
    document.getElementById("solo").style.display = "grid";
    document.getElementById("sort").style.display = "none";
});
document.getElementById("filter2").addEventListener("click", function () {
    document.getElementById("siding").style.transition = "all 0.5s";
    document.getElementById("siding").style.height = "11rem";
    document.getElementById("filter2").style.display = "none";
    document.getElementById("filter3").style.display = "inline-block";
});
document.getElementById("filter3").addEventListener("click", function () {
    document.getElementById("siding").style.transition = "all 0.5s";
    document.getElementById("siding").style.height = "0px";
    document.getElementById("filter2").style.display = "inline-block";
    document.getElementById("filter3").style.display = "none";
});
function handphone(x) {
    if (x.matches) {
        // If media query matches
        document.getElementById("filter2").style.display = "none";
    } else {
        document.getElementById("filter2").style.display = "inline-block";
    }
}

let x = window.matchMedia("(min-width: 400px)");
handphone(x); // Call listener function at run time
x.addListener(handphone); // Attach listener function on state changes

function tablet(y) {
    if (y.matches) {
        // If media query matches
        document.getElementById("filter2").style.display = "inline-block";
    } else {
        document.getElementById("filter2").style.display = "none";
        document.getElementById("filter3").style.display = "none";
        document.getElementById("siding").style.height = "1px";
    }
}

let y = window.matchMedia("(min-width: 600px)");
tablet(y); // Call listener function at run time
y.addListener(tablet); // Attach listener function on state changes
