// Выборка элементов
var dd_button = document.getElementById("dropdown-button");
var dd_content = document.querySelector(".dropdown-content");

// Обработчик событий
// dd_button.addEventListener("click", function() {
//     if (dd_content.style.display === "none") {
//         dd_content.style.display = "block";
//     } else {
//         dd_content.style.display = "none";
//     }
// });

dd_button.addEventListener("click", function() {
    dd_content.classList.toggle("show");
});