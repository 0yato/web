let prompt_btn=document.querySelectorAll(".prompt");
let prompt_icon=document.getElementById("prompt-icon");
let prompt_form=document.getElementById("prompt-form");


prompt_btn.forEach(element => {
    element.addEventListener("click",function()
     {
        if(element.innerHTML!="admin"){
     prompt_form.style.display="flex";
     prompt_form.lastElementChild.value=element.lastElementChild.value
     console.log (element.lastElementChild)
     console.log (prompt_form.lastElementChild)
        }

     });
 })
 

prompt_icon.addEventListener("click",function()
{
prompt_form.style.display="none";
});
