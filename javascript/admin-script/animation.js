let userNum=document.getElementById("userNum");
let carNum=document.getElementById("carNum");
let markaNum=document.getElementById("markaNum");

let usernum=Number(userNum.innerHTML);
let carnum=Number(carNum.innerHTML);
let markanum=Number(markaNum.innerHTML);
console.log(carnum)
console.log(usernum)
console.log(markanum)
userNum.innerHTML=0
markaNum.innerHTML=0
carNum.innerHTML=0
let a=setInterval(function(){
    userNum.innerHTML=Number(userNum.innerHTML)+1;
usernum--;
    if(usernum==0){
        clearInterval(a);
        
    }    
},100);



let b=setInterval(function(){
    carNum.innerHTML=Number(carNum.innerHTML)+1;
carnum--;
    if(carnum==0){
        clearInterval(b);
        
    }    
},200);


let c=setInterval(function(){
    markaNum.innerHTML=Number(markaNum.innerHTML)+1;
markanum--;
    if(markanum==0){
        clearInterval(c);
        
    }    
},150);

