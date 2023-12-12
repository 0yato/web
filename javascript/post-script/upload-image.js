let imageContainer = document.getElementsByClassName("card");
let temp_img = document.getElementById("temp-img");
let input_image = document.getElementById("input-file");



let company_select=document.getElementById("company-select");




company_select.onchange= function(){
if(company_select.value=='none'){
    console.log("fffff");
    company_select.style.backgroundColor="var(--color-ref-error10)";
    company_select.style.border="none";
}
else{
    console.log("eeeee");
    company_select.style.backgroundColor="var(--color-ref-error40)";
    company_select.style.border="3px solid var(--color-ref-error10)"
}
}
let ch = document.querySelectorAll(".choce");
ch.forEach(function (option) {
    option.addEventListener('click', function () {
        // Edit the value of the select element when a choice is clicked
        company_select.value = option.value;

        // Additional actions if needed

        // Trigger the 'change' event to execute the onchange handler
        const event = new Event('change');
        company_select.dispatchEvent(event);
    });
});





let label=document.getElementById("label-for-input-image")

input_image.onchange = function() {
    let url = URL.createObjectURL(input_image.files[0]);
    console.log(url);
    imageContainer[0].style.backgroundImage = `url(${url})`;
    temp_img.src = url;
    label.style.backgroundColor=" var(--color-ref-error40) ";
    label.style.border="3px solid var(--color-ref-error10) ";
}



