let index_adv = 0; // Объявляем переменную для индекса слайда
const slides_adv = document.querySelector('.sub-container-adv');
const numSlides_adv = 2; // Количество слайдов, если у вас два слайда (0 и 1)

function corusell() {
    index_adv = (index_adv + 1) % numSlides_adv; // Переключаемся между слайдами
    const offset_adv = -index_adv * 100; // Смещение в процентах
    slides_adv.style.transform = `translateX(${offset_adv}%)`;
}

// Автоматическое переключение слайдов каждые 3 секунды
setInterval(corusell, 3000);
