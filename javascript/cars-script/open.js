let cards_btn =document.querySelectorAll(".open-card");

let info_card=document.getElementById("info-card");
let image_selected =document.getElementById("image-selected");
let car_selected = document.getElementById("car-selected");

cards_btn.forEach(element => {
    element.onclick=function()
{
    car_selected.style.zIndex=1000;
info_card.style.animationName="open2";
image_selected.style.animationName="open1";

}});






let close_btn=document.getElementById("close-btn");


close_btn.addEventListener("click",function(){
    info_card.style.animationName="none";
    car_selected.style.zIndex=-1;

image_selected.style.animationName="none";


})