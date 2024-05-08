function changeText() {
    title = document.querySelector("h1");
    title.innerHTML = "<h1>Changed!</h1>";
}

function changeTheme() {
    container = document.querySelector(".container"); // Use the . before selecting a class
    container.style.backgroundColor = "black";
}