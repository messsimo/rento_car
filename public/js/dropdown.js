// Выборка элементов
var dd_button = document.getElementById("dropdown-button");
var dd_content = document.querySelector(".dropdown-content");

// Обработчик событий
dd_button.addEventListener("click", function() {
    dd_content.classList.toggle("show");
});