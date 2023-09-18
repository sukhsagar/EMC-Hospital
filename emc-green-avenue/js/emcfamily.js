const emcimgdata = document.querySelectorAll('.emcimages');
const nextbtn = document.querySelector('.nextbtn');
const previousbtn = document.querySelector('.prvbtn')
console.log(emcimgdata.length);
var counterz = 0;

emcimgdata.forEach((slide, index) => {
    slide.style.left = `${index * 100}%`;


})

function slidenow() {
    emcimgdata.forEach((slide) => {
        slide.style.transform = `translateX(-${counterz * 100}%)`

    })
}

nextbtn.addEventListener('click', () => {
    counterz++;
    console.log(counterz , 'outer');

    if (counterz == emcimgdata.length) {
        counterz = 0;
        console.log(counterz ,"inner");

    }
    slidenow()


})

previousbtn.addEventListener('click', () => {
    counterz--;

    if (counterz == -1) {
        counterz = emcimgdata.length - 1;


    }
    slidenow()


})

