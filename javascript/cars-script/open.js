let cards_btn =document.querySelectorAll(".open-card");

let info_card=document.getElementById("info-card");
let image_selected =document.getElementById("image-selected");
let car_selected = document.getElementById("car-selected");
let close_btn=document.getElementById("close-btn");
/*card transition */


/*card transition */

/* info transition*/ 
let car_id_info=document.querySelector(".car_id_info");
let card_image_info=document.getElementById("image-selected");
let card_name_info=document.querySelector(".name-info-name");
let user_id=document.querySelector(".userid");
let description_info= document.querySelector(".description-info2");
let price_info= document.querySelector(".mony-info");
let driven_info=document.querySelector(".driven-info");
let kind_info=document.querySelector(".type-info-rent");
let model_info=document.querySelector(".model-info")
let fuel_info=document.querySelector(".fuel-info")
let Engine_info=document.querySelector(".Engine-size-info")
let color_info=document.querySelector(".color-info")
let vin_info=document.querySelector(".Vin-info")
let contact_info=document.querySelector(".contact-info")
let logo_info=document.querySelector(".car-logo-info");
let username_info=document.querySelector(".username")
/* info transition*/ 
cards_btn.forEach(element => {
    element.onclick=function()
{
    let card_image= element.nextElementSibling;
    let card_name=card_image.nextElementSibling;
    let card_user_id=card_name.nextElementSibling;
    let card_description=card_user_id.nextElementSibling;
    let card_price=card_description.nextElementSibling;
    let card_driven=card_price.nextElementSibling;
    let card_kind=card_driven.nextElementSibling;

    let card_model=card_kind.nextElementSibling;
    let card_fuel=card_model.nextElementSibling;
    let card_engine=card_fuel.nextElementSibling;
    let card_color=card_engine.nextElementSibling;
    let card_vin=card_color.nextElementSibling;
    let card_contact=card_vin.nextElementSibling;

    let card_user=card_contact.nextElementSibling;
    let card_type=card_user.nextElementSibling;
    let card_logo=card_type.nextElementSibling;
    let card_user_idd=card_logo.nextElementSibling;
    
/*here transition*/
card_name_info.innerHTML=card_name.innerHTML;
card_image_info.src = card_image.src;
user_id.innerHTML=card_user_id.innerHTML;
description_info.innerHTML= card_description.innerHTML;
price_info.innerHTML=card_price.innerHTML;
driven_info.innerHTML=card_driven.innerHTML;
kind_info.innerHTML=card_kind.innerHTML;
model_info.innerHTML= card_model.innerHTML;
fuel_info.innerHTML= card_fuel.innerHTML;
Engine_info.innerHTML= card_engine.innerHTML;
color_info.innerHTML= card_color.innerHTML;
vin_info.innerHTML=card_vin.innerHTML;
contact_info.href= card_contact.innerHTML;
username_info.innerHTML=card_user.innerHTML;
user_id.innerHTML=card_user_idd.innerHTML
logo_info.src=card_logo.src;
car_id_info.innerHTML=card_user_id.innerHTML;
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