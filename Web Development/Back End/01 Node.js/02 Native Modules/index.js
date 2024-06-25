//An native mode example to write a .txt file on a local environment

//Required node file system module 
const fs = require("fs");

//Write text file
fs.writeFile("message.txt", "Hello from Node.js", (err) => {
    if (err) throw err;
    console.log("The file has been saved!");
});

//Read file and display content
fs.readFile("message.txt", "utf8", (err, data) => {
    if (err) throw err;
    console.log(data);
});