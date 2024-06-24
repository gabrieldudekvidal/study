import express from "express";
import bodyParser from "body-parser";
import { dirname } from "path";
import { fileURLToPath } from "url";

const __dirname = dirname(fileURLToPath(import.meta.url));

const app = express();
const port = 3000;

function logger(req, res, next) { //You can create your own middleware
  console.log("Request method: ", req.method);
  console.log("Request method: ", req.url);
  next(); //You need to use next to load the rest of the code
}

app.use(logger); //Running our own middleware to log the method and url

app.get("/", (req, res) => {
  res.send("Hello");
});

app.listen(port, () => {
  console.log(`Listening on port ${port}`);
});
