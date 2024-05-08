// Global variable that can be used in the while script
var number = 10;

function calc() {
    // Variable in local scope
    var local = 15;
    return local;
}

// You can log if you call the function that is returning the variable
console.log(calc());

// You can't log the variable directly from here
console.log(local);