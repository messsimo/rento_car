let index = 0;
const slides = document.querySelector('.sub-container');
const numSlides = 1; // Количество групп слайдов (0 и 1)

function switchSlides() {
    index = (index + 1) % (numSlides + 1); // Переключаемся между группами
    const offset = -index * 100; // Смещение в процентах
    slides.style.transform = `translateX(${offset}%)`;
}

// Автоматическое переключение слайдов каждые 3 секунды
setInterval(switchSlides, 3000);