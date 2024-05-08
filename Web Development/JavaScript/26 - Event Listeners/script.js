let btn = document.querySelector(".test-btn");

function firstFunction(e) {
    e.preventDefault();
    btn.innerHTML = "YAY!";
} 

function secondFunction() {
    btn.style.backgroundColor = "red";
}

// First set the type of action to listen (in this case when the user clicks), after set what happens
btn.addEventListener("click", firstFunction);
btn.addEventListener("click", secondFunction);