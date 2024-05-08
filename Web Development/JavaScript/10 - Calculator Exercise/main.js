function calc() {
    // Get the data based on id and convert to integer
    var a = parseInt(document.querySelector("#value1").value);
    var b = parseInt(document.querySelector("#value2").value);
    var op = document.querySelector("#operator").value;
    // Declare the variable to add values afterwards
    var calculate;

    if (op == "add") {
        calculate = a + b;
    } else if (op == "min") {
        calculate = a - b;
    } else if (op == "div") {
        calculate = a / b;
    } else if (op == "mul") {
        calculate = a * b;
    } 
    // Get using id and insert into html to show the result
    document.querySelector("#result").innerHTML = calculate;
}
