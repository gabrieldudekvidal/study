var title = document.querySelector(".title");
var input = document.querySelector(".input");

function changeTitle() {
    title.textContent = input.value;
}

input.addEventListener("input", changeTitle);