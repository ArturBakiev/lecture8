const slides = document.getElementById('slides');
const slideCount = slides.children.length;
let currentIndex = 0;
const slideWidth = 300;


function showSlide(index) {
    slides.style.left = -index * slideWidth + 'px';
    currentIndex = index;
}


document.getElementById('prev').addEventListener('click', () => {
    if (currentIndex == 0) {
        currentIndex = 2;
    }
    showSlide(currentIndex - 1);
});


document.getElementById('next').addEventListener('click', () => {
    if (currentIndex == 1) {
        currentIndex = -1;
    }
    showSlide(currentIndex + 1);
});


  howSlide(0);