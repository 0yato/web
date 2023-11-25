let cards =document.querySelectorAll(".cards");

let info_card=document.getElementById("info-card");
let image_selected =document.getElementById("image-selected");
let car_selected = document.getElementById("car-selected");

cards.forEach(element => {
    element.onclick=function()
{
    car_selected.style.zIndex=1000;
info_card.style.animationName="open2";
image_selected.style.animationName="open1";

}});






let close_btn=document.getElementById("close-btn");