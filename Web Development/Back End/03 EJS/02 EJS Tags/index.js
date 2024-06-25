import express from "express";
const app = express();
const port = 3000;

app.get("/", (req, res) => {
  const data = { //A data object containing stuff to render on index.ejs
    title: "EJS Tags",
    seconds: new Date().getSeconds(),
    items: ["apple", "banana", "cherry"],
    htmlContent: "<strong>This is some strong text</strong>",
  };
  res.render("index.ejs", data); //Render the data object on index.ejs
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
