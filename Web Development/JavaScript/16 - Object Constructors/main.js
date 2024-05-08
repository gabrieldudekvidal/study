function Person(name, eyeColor, age) {
    this.name = name;
    this.eyeColor = eyeColor;
    this.age = age;
    // Creating a method to update age
    this.updateAge = function() {
        return ++this.age;
    };
}

let person01 = new Person("Gabriel Vidal", "Blue", "26");
let person02 = new Person("John Doe", "Brown", "33");

console.log(person01.name);
console.log(person01.updateAge());