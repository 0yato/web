let show =document.getElementById("show-password");
let unshow=document.getElementById("unshow-password");
let password_input=document.getElementById("password-input");


show.addEventListener("click",function(){
show.style.display="none";
unshow.style.display="block";
password_input.type="text";

});



unshow.addEventListener("click",function(){
    unshow.style.display="none";
    show.style.display="block";
    password_input.type="password";
    
    });