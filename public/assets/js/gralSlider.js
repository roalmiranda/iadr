const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');

let index = 0;

function changeSlide() {
for (let slide of slides) {
    slide.style.left = '100%';
}
slides[index].style.left = '0';
}

function slideLeft() {
if (index === 0) {
    index = slides.length - 1;
} else {
    index--;
}
changeSlide();
}

function slideRight() {
if (index === slides.length - 1) {
    index = 0;
} else {
    index++;
}
changeSlide();
}

slider.addEventListener('click', slideRight);

setInterval(slideRight, 3000);
