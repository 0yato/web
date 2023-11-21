let sell = document.getElementById("sell");
let rent = document.getElementById("rent");


let state = document.getElementById("state-of-sell-rent");

sell.onclick=function(){
    sell.style.backgroundColor="var( --color-ref-error50)";
    rent.style.backgroundColor="transparent";
    state.value="sell";
}

rent.onclick=function(){
    rent.style.backgroundColor="var( --color-ref-error50)";
    sell.style.backgroundColor="transparent";
    state.value="rent";
}

