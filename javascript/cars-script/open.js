let cards_btn =document.querySelectorAll(".open-card");

let info_card=document.getElementById("info-card");
let image_selected =document.getElementById("image-selected");
let car_selected = document.getElementById("car-selected");
let close_btn=document.getElementById("close-btn");
/*card transition */


/*card transition */
/* info transition*/ 
let card_image_info=document.getElementById("image-selected");
let card_name_info=document.querySelector(".name-info-name");




/* info transition*/ 
cards_btn.forEach(element => {
    element.onclick=function()
{
    let card_image= element.nextElementSibling;
    let card_name=card_image.nextElementSibling;
/*here transition*/
card_name_info.innerHTML=card_name.innerHTML;
card_image_info.src = card_image.src;


/*here transition*/

    car_selected.style.zIndex=1000;
info_card.style.animationName="open2";
image_selected.style.animationName="open1";
close_btn.style.display="flex";

}});









close_btn.addEventListener("click",function(){
    info_card.style.animationName="none";
    car_selected.style.zIndex=-1;
    close_btn.style.display="none"
image_selected.style.animationName="none";


})