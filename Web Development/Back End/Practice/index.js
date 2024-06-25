import express from "express";
import bodyParser from "body-parser";
import { dirname } from "path";
import { fileURLToPath } from "url";

const app = express(); //Set express as a variable to use as app.
const port = 3000; //Set the port server
const __dirname = dirname(fileURLToPath(import.meta.url));

app.use(bodyParser.urlencoded({ extended: true}));

app.get("/", (req, res) => { //Get the form
    res.sendFile(__dirname + "/public/form.html");
})

app.post("/newbook", (req, res) => { //After the form is submitted render book.ejs - /newbook is set as form action
    const data = { //Using body-parser get the data from the form and store in an object
      bookName: req.body['book-name'], 
      author: req.body['author']
    };
    res.render("book.ejs", data); //Render the book.js that is located on views folder and pass the data to be rendered in the page
});

app.listen(port, () => { //Create the server
    console.log(`Listening on port: ${port}`);
})