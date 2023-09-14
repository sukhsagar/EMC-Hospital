document.addEventListener('DOMContentLoaded', () => {
    const doctorcard = document.querySelectorAll('.doctorcard');
    const next = document.querySelector('#next');
    const prev = document.querySelector('#prev');
    let counter = 0;

    doctorcard.forEach((card, index) => {
        card.style.left = `${index * 100}%`;
    });

    function slide() {
        doctorcard.forEach((card) => {
            card.style.transform = `translateX(-${counter * 100}%)`;
        });
    }

    next.addEventListener('click', () => {
        counter++;
        if (counter >= doctorcard.length) {
            counter = 0;
        }
        slide();
    });

    prev.addEventListener('click', () => {
        counter--;
        if (counter < 0) {
            counter = doctorcard.length - 1;
        }
        slide();
    });
});
