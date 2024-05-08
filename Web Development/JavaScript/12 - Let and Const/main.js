if (1 == 1) {
    // let is scoped to the block scope { } and can't be accessed outside
    let a = 10;
}

if (1 == 1) {
    // var can be accessed ouside of { }.
    var b = 15;
}

console.log(b);
console.log(a);

// A conts variable can't be changed
const EXAMPLE = 10;

console.log(EXAMPLE);