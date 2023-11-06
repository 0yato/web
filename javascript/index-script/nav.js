let navbtn =document.querySelector("#navbtn");
let open =document.getElementById("open");
let close =document.getElementById("close");
let nav2=document.getElementById("nav2")
let states ="closed";


navbtn.onclick = function(){
console.log("hii");
if(states=="closed"){
   open.style.display="none";
   close.style.display="block";
nav2.style.translate="0px 0px";
   nav2.style.opacity="1";
    states="open";
}
else if(states=="open"){
    close.style.display="none";
    open.style.display="block";
    nav2.style.translate="0px -400px";
   nav2.style.opacity="0";
    states="closed";
}



window.addEventListener('resize', function(){

    if (window.innerWidth <= 720) {
        close.style.display="none";
        open.style.display="block";
        nav2.style.translate="0px -400px";
       nav2.style.opacity="0";
        states="closed";
      }

});
}
