const api="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";
const input =document.getElementById("input");
const images =document.querySelector(".output-image");


const getImage= async()=>{
    const methods ={
method:"POST",
headers:{
    "Content-Type":"application/json",
    "Authorization":`Bearer ${api}`
},
body:JSON.stringify(
    {
        "prompt":input.value,
        "n":3,
        "size":"256x256"
    }
 )
 }
    const res =await fetch("https://api.openai.com/v1/images/generations",methods);
    

    const data =await res.json();
    console.log(data);
    const listImages=data.data;
    listImages.map(photo=>{
        const contt=document.createElement("div");
        contt.classList.add("image");
        images.append(contt);
        const img=document.createElement("img");
        contt.append(img)
        img.src=photo.url
    })
}