//To see how the final website should work, run "node solution.js".
//Make sure you have installed all the dependencies with "npm i".
//The password is ILoveProgramming
import express from "express";
import bodyParser from "body-parser";
import { dirname } from "path";
import { fileURLToPath } from "url";

const app = express();
const port = 3000;
const __dirname = dirname(fileURLToPath(import.meta.url));
var isUserAuthorised = false;

app.use(bodyParser.urlencoded({ extended: true}));

//Function to check if the user is logged in or not
function checkPassword(req, res, next) {
    const password = req.body["password"]; //Getting the data from the form
    if (password === "ILoveProgramming") {
        isUserAuthorised = true;
    }
    next(); //Don't forget the next
}

app.use(checkPassword);

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/public/index.html");
});

app.post("/check", (req, res) => { //check is set in the action on the html form
    if (isUserAuthorised) {
        res.sendFile(__dirname + "/public/secret.html"); //If the password is correct send the secret file to the user
    } else {
        res.sendFile(__dirname + "/public/index.html");
    }
});

app.listen(port, () => {
    console.log(`Listening on port ${port}`);
});