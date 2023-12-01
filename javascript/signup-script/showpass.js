let password_input =document.getElementById("password");
let confirm_input =document.getElementById("confirm");

let show1 =document.getElementById("show1")
let show2 =document.getElementById("show2")
let unshow1 =document.getElementById("unshow1")
let unshow2 =document.getElementById("unshow2")


unshow1.addEventListener("click",function(){
   
unshow1.style.display="none";
show1.style.display="inline"
password_input.type="text";

})
show1.addEventListener("click",function(){
    password_input.type="password";
    show1.style.display="none";
    unshow1.style.display="inline"
    
    })






    let profile_image=document.getElementById("profile-pic");
    let profile=document.getElementById("profile");



    profile_image.onchange = function() {
        if (profile_image.files.length > 0) {
            let url = URL.createObjectURL(profile_image.files[0]);
            console.log(url);
           
            profile.src =url;
            
            
        }
    };
    