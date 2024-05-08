// preventDefault is used when you don't want the html element to execute it's default behavior

let btn = document.querySelector(".test-btn");
let form = document.querySelector(".test-form");

function changeBtnText(event) {
    // Prevent the default event
    event.preventDefault();
    btn.innerHTML = "YAY!";
}

function stopFormSubmit(event) {
    event.preventDefault();
}

// Event listeners to execute a function based on the button the user clicked
btn.onclick = changeBtnText;
form.onclick - stopFormSubmit;