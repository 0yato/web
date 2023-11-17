let price =document.getElementById("prisep");

let drive = document.getElementById("drivep");


let price_input=document.getElementById("price");

let drive_input=document.getElementById("drive");

price_input.addEventListener("input",function(){
price.innerHTML=price_input.value +"$";


})





drive_input.addEventListener("input",function(){
drive.innerHTML=drive_input.value +"$";


})



let filter=document.getElementById("filter");
let divv=document.getElementById("divv");
let state="close";

filter.addEventListener("click",function(){
    if(state=="close"){
        state="open";
divv.style.display="block";
    }
    else{
        state="close";
        divv.style.display="none";
    }
})