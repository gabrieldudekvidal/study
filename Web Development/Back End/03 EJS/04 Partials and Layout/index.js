import express from "express";

const app = express();
const port = 3000;
app.use(express.static("public")); //Specify the public folder for static files - this is necessary for the style and layout to work

app.get("/", (req, res) => {
  res.render("index.ejs");
});

app.get("/contact", (req, res) => { //Route contact page - redirect using the href set on the header
  res.render("contact.ejs");
})

app.get("/about", (req, res) => { //Route contact page - redirect using the href set on the header
  res.render("about.ejs");
})

app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
