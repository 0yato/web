let price =document.getElementById("prisep");

let drive = document.getElementById("drivep");


let price_input=document.getElementById("price");

let drive_input=document.getElementById("drive");


let reset=document.getElementById("reset");


let s1=document.getElementById("t");
let s2=document.getElementById("c");



price_input.addEventListener("input",function(){
price.innerHTML=price_input.value +"$";


})






drive_input.addEventListener("input",function(){
drive.innerHTML=drive_input.value +"Km";


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



reset.onclick=function(){
    price_input.value=0;
    drive_input.value=0;
    s1.value="none";
    s2.value="none";
}