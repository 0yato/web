let mute =document.getElementById("mute")
let muted =document.getElementById("muted");
let cont=document.getElementById("cont");
let vid =document.getElementById("vid1")

let states="mute";

cont.addEventListener("click",function(){
console.log("d");
if(states=="mute"){

muted.style.display="none";
    mute.style.display="block";
vid.muted=true;
    states="muted"
}
else{
    vid.muted=false;
    muted.style.display="block";
    mute.style.display="none";
    states="mute";
}
})