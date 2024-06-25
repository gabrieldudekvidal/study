import express from "express";
import bodyParser from "body-parser";

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

app.get("/", (req, res) => {
  res.render("index.ejs");
});

app.post("/submit", (req, res) => {
  const numChars = req.body["first-name"].length + req.body["last-name"].length;
  res.render("index.ejs", {numberOfLetters: numChars}); //Passing the variable to index.ejs
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
