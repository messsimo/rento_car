// Выборка элементов
var price_button = document.getElementById("price-btn");
var price_content = document.querySelector(".price-dropdown-block");

// Обработчик событий
price_button.addEventListener("click", function() {
    price_content.classList.toggle("show");
});