import express from "express";

const app = express();
const port = 3000;

app.get("/", (req, res) => { //Render to index.js
    const today = new Date();
    const day = today.getDay(); //Get the number of the weekday

    let type = "a weekday";
    let adv = "It's time to work hard";

    if (day === 0 || day === 6)  { //If it's saturday or sunday
      type = "the weekend";
      adv = "It's time to have some fun";
    }

    res.render("index.ejs", {
      dayType: type, 
      advice: adv
    });
});

app.listen(port, () => {
    console.log(`Server running on port: ${port}`);
});