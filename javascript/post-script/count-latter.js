let car_name = document.getElementById("name-car");
let name_count = document.getElementById("name-count");
let name_card = document.getElementById("label-name");

car_name.oninput = function () {
    let counter = car_name.value.length;
    
    console.log("he");
    if (counter > 20) {
        car_name.value = car_name.value.slice(0, 20); // Truncate to 30 characters
        name_card.innerHTML=  car_name.value.slice(0, 20);

    } else {
        name_count.innerHTML = counter + "/20";
        name_card.innerHTML= car_name.value;
    }
}


let car_model = document.getElementById("model");
let model_count = document.getElementById("model-count");

car_model.oninput = function () {
    let counter = car_model.value.length;
    
    console.log("he");
    if (counter > 4) {
        car_model.value = car_model.value.slice(0, 4); // Truncate to 30 characters
       

    } else {
        model_count.innerHTML = counter + "/4";
        
    }
}





let car_des = document.getElementById("description");
let des_count = document.getElementById("des-count");

car_des.oninput = function () {
    let counter = car_des.value.length;
    
    console.log("he");
    if (counter > 300) {
        car_des.value = car_des.value.slice(0, 300); // Truncate to 30 characters
       

    } else {
        des_count.innerHTML = counter + "/300";
        
    }
}