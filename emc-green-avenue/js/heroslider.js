const imgdata=document.querySelectorAll('.images');
const next=document.querySelector('.nxt');
const previous=document.querySelector('.prev')
console.log(imgdata);
var counter=0;

imgdata.forEach((slide,index)=>{
slide.style.left=`${index*100}%`;


})

function slidenow(){
imgdata.forEach((slide)=>{
slide.style.transform=`translateX(-${counter*100}%)`

})
}

next.addEventListener('click',()=>{
counter++;

if(counter==imgdata.length){
counter=0;


}
slidenow()


})

previous.addEventListener('click',()=>{
counter--;

if(counter==-1){
counter=imgdata.length-1;


}
slidenow()


})
function newslide() {
counter++;

if(counter==imgdata.length){
counter=0;


}
slidenow()

}
setInterval(newslide, 9000);
