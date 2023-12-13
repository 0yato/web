let prompt_btn=document.querySelectorAll(".prompt");
let prompt_icon=document.getElementById("prompt-icon");
let prompt_form=document.getElementById("prompt-form");


prompt_btn.forEach(element => {
    element.addEventListener("click",function()
     {
     prompt_form.style.display="flex";
     });
 })
 

prompt_icon.addEventListener("click",function()
{
prompt_form.style.display="none";
});
