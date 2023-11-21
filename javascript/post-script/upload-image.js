let imageContainer = document.getElementsByClassName("card");
let temp_img = document.getElementById("temp-img");
let input_image = document.getElementById("input-file");


let label=document.getElementById("label-for-input-image")

input_image.onchange = function() {
    let url = URL.createObjectURL(input_image.files[0]);
    console.log(url);
    imageContainer[0].style.backgroundImage = `url(${url})`;
    temp_img.src = url;




    label.style.backgroundColor=" var(--color-ref-error40) !important";
    
    label.style.border="3px solid var(--color-ref-error10) !important";
}
