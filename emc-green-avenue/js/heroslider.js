const imgesdata=document.querySelectorAll('.images');
const next=document.querySelector('.nxt');
const previous=document.querySelector('.prev')
console.log(imgesdata);
console.log(next,previous);
var counter=0;

imgesdata.forEach((slider,index)=>{
slider.style.left=`${index*100}%`;


})

function slidenowz(){
    imgesdata.forEach((slider)=>{
slider.style.transform=`translateX(-${counter*100}%)`

})
}

next.addEventListener('click',()=>{
counter++;

if(counter==imgesdata.length){
counter=0;


}
slidenowz()


})

previous.addEventListener('click',()=>{
counter--;

if(counter==-1){
counter=imgesdata.length-1;


}
slidenowz()


})
function newslides() {
counter++;

if(counter==imgesdata.length){
counter=0;


}
slidenowz()

}
setInterval(newslides, 9000);
