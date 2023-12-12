let change=document.getElementById("change-btn");

let pass_page=document.getElementById("pass-page");

let form=document.getElementById("form-password");

let closee=document.getElementById("xx");

change.onclick=function(){
pass_page.style.display="block";
form.style.display="flex";
console.log("lll")
}


closee.onclick=function(){
    pass_page.style.display="none";
form.style.display="none";
}



closee.onmouseenter=function(){
    closee.style.backgroundColor="transparent";
    closee.style.color="#2a5298";
    console.log("ggg");
}

closee.onmouseout=function(){
    closee.style.backgroundColor="#2a5298";
    closee.style.color="snow";
}


let close_btnn = document.getElementById("close-btnn");
let nalert= document.getElementById("nalert");



close_btnn.addEventListener("click",function(){
    console.log("helo close");
    
    nalert.style.display='none';
});



    


    
