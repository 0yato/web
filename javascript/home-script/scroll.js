let imgs=document.querySelectorAll(".imgs");
let cont=document.querySelector(".car-card");

window.onscroll = function () {
    if (window.scrollY >= cont.offsetTop - 400) {
        imgs.forEach((img) => {
            img.style.animationName = "intro2";
            img.style.animationDirection = "normal"; // or "reverse" depending on your needs
        });
    }

    if (window.scrollY <= cont.offsetTop - 500 || window.scrollY >= cont.offsetTop + 500) {
        imgs.forEach((img) => {
            img.style.animationName = "intro3";
           
            console.log("bottom");
        });
    }
};
