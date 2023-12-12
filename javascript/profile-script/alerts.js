let close_btn = document.getElementById("close-btn");
let salert= document.getElementById("salert");
close_btn.addEventListener("click", function(){
    console.log("helo close");
    salert.style.display='none';
});