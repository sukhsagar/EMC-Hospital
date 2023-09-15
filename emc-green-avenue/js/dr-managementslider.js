document.addEventListener('DOMContentLoaded', () => {
    const doctorcard = document.querySelectorAll('.doctorcard');
    const next = document.querySelectorAll('#next');
    const prev = document.querySelectorAll('#prev');
    let counter = 0;

    doctorcard.forEach((card, index) => {
        card.style.left = `${index * 100}%`;
    });

    function slide() {
        doctorcard.forEach((card) => {
            card.style.transform = `translateX(-${counter * 100}%)`;
        });
    }
    next.forEach((nex)=>{
        nex.addEventListener('click', () => {
            counter++;
            if (counter >= doctorcard.length) {
                counter = 0;
            }
            slide();
        });
    })
   
    prev.forEach((pre)=>{
        pre.addEventListener('click', () => {
            counter--;
            if (counter < 0) {
                counter = doctorcard.length - 1;
            }
            slide();
        });
    });
    

    })
    