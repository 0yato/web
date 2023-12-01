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



    input_image.onchange = function() {
        let url = URL.createObjectURL(input_image.files[0]);
        console.log(url);
        imageContainer[0].style.backgroundImage = `url(${url})`;
        temp_img.src = url;
        label.style.backgroundColor=" var(--color-ref-error40) ";
        label.style.border="3px solid var(--color-ref-error10) ";
    }
    