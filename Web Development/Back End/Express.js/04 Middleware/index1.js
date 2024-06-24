import express from "express";
import bodyParser from "body-parser"; // Import body parser to parse the submitted data

// Get dynamic path name
import { dirname } from "path";
import { fileURLToPath } from "url";
const __dirname = dirname(fileURLToPath(import.meta.url));

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true })); // Use body-parser to process the data submitted

app.get("/", (req, res) => { // Send the login page to the user using get
  res.sendFile(__dirname + "/public/index.html");
});

app.post("/submit", (req, res) => { // Use post method to route to /submit - submit was defined as action in the form 
  console.log(req.body);
});

app.listen(port, () => {
  console.log(`Listening on port ${port}`);
});

// To test your prohect use PostMan to run HTTP methods like GET or POST