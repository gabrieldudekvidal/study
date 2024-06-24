import express from "express";
const app = express();
const port = 3000;

app.get("/", (req, res) => {   
    res.send("<h1>Hello, world!!!</h1>");
});

app.get("/about", (req, res) => {   
    res.send("<h1>About me</h1><p>My name is Gabriel</p>");
});

app.get("/contact", (req, res) => {   
    res.send("<h1>Contact</h1><p>My e-mail is email@email.com</p>");
});

app.listen(port, () => {
    console.log(`Server running on port ${port}.`)
});
