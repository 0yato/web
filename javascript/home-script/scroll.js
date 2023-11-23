let imgs=document.querySelectorAll(".imgs");
let cont=document.querySelector(".car-card");


let info_img=document.getElementById("info-img")
let info =document.querySelector(".info");
let info_p = document.getElementById("p1");

window.onscroll = function () {

if(window.scrollY >= info.offsetTop - 200){
info_p.style.opacity="1";
info_img.style.translate="0px 0px ";
info_img.style.filter="blur(0px)";
}
if (window.scrollY <= info.offsetTop - 500 || window.scrollY >= info.offsetTop + 400) {
    info_p.style.opacity="0";
    info_img.style.translate="-1000px 0px ";
    info_img.style.filter="blur(10px)";
}

    if (window.scrollY >= cont.offsetTop - 200) {
        imgs.forEach((img) => {
            img.style.animationName = "intro2";
            img.style.animationDirection = "normal";
         
        });
    }

    if (window.scrollY <= cont.offsetTop - 500 || window.scrollY >= cont.offsetTop + 500) {
        imgs.forEach((img) => {
            img.style.animationName = "intro3";
           
            console.log("bottom");
        });
    }
};
