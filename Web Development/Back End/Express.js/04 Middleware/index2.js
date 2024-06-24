import express from "express";
import morgan from "morgan"; //Import morgan to handle login requests

const app = express();
const port = 3000;

app.use(morgan("tiny")); //Use morgan

app.get("/", (req, res) => { //Send this back to the user
  res.send("Hello");
});

app.listen(port, () => {
  console.log(`Listening on port ${port}`); //Start localhost server
});

//If you send a GET request it should log on terminal the method, status code and how long it took to make the request