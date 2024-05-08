/* Named function */

function testExample(myName) {
    var greeting = "Hi! my name is " + myName;
    return greeting;
}
console.log(testExample("Gab"));

/* Anonymous function */

var testAnonymous = function(myName) {
    var greeting = "Hi! my name is " + myName;
    return greeting;
}
myName = "Gabriel"
console.log(testAnonymous(myName));

/* Immediatelly invoked function expression - When the page is loaded the function will be auto loaded */

(function() {
    alert("Hello!");
}())