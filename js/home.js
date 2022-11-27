
const wr=document.querySelector(".section2");
const f=document.querySelector("#f");
document.getElementsByClassName(cont).style.back
const t=new TimelineMax();

t.fromTo(wr,2,{opacity:0, x:30},{opacity:1, x:0},"-=0.5")
.fromTo(wr,1,{height:"0%"},{height:"100%",ease:Power2.easeInOut})
;