import express from "express";
import bodyParser from "body-parser";
import pg from "pg"; //Import pg to use postgresql

const app = express();
const port = 3000;

const db = new pg.Client({ //Create a database connection
  user: "postgres",
  host: "localhost",
  database: "world",
  password: "93H78g10@1103",
  port: 5432,
});

let quiz;

db.connect(); //Connect to database

db.query("SELECT * FROM capitals", (err, res) => { //Select data from db and use the response to pass the data to a var
  if (err) {
    console.error("Error executing query", err.stack);
  } else {
    quiz = res.rows;
  }
  db.end();
});

let totalCorrect = 0;

// Middleware
app.use(bodyParser.urlencoded({ extended: true })); //This is needed to handle data from the form
app.use(express.static("public")); //This is needed for our style and static files

let currentQuestion = {};

// GET home page
app.get("/", async (req, res) => {
  totalCorrect = 0;
  await nextQuestion();
  console.log(currentQuestion);
  res.render("index.ejs", { question: currentQuestion });
});

// POST a new post
app.post("/submit", (req, res) => {
  let answer = req.body.answer.trim(); //Trim spaces
  let isCorrect = false;
  if (currentQuestion.capital.toLowerCase() === answer.toLowerCase()) { //Check if the answer is correct
    totalCorrect++;
    console.log(totalCorrect);
    isCorrect = true;
  }

  nextQuestion();
  res.render("index.ejs", {
    question: currentQuestion,
    wasCorrect: isCorrect,
    totalScore: totalCorrect,
  });
});

async function nextQuestion() {
  const randomCountry = quiz[Math.floor(Math.random() * quiz.length)]; //Function to get a random country

  currentQuestion = randomCountry;
}

app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});
