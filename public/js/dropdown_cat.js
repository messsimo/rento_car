// Выборка элементов
var cat_button = document.getElementById("category-btn");
var cat_content = document.querySelector(".category-dropdown-block");

// Обработчик событий
cat_button.addEventListener("click", function() {
    cat_content.classList.toggle("show");
});