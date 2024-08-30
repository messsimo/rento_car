let index = 0;
const slides = document.querySelector('.sub-container');
const numSlides = 1; 
const maxSwitches = 1; 
let switches = 0; 

function switchSlides() {
    if (switches < maxSwitches) {
        index = (index + 1) % (numSlides + 1); // Переключаемся между группами
        const offset = -index * 100; // Смещение в процентах
        slides.style.transform = `translateX(${offset}%)`;

        if (index === 0) { // Если вернулись к первой группе
            switches++;
        }
    }
}

// Автоматическое переключение слайдов каждые 3 секунды
setInterval(switchSlides, 3000);
