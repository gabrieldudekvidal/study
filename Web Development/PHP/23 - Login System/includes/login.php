<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Grab data submited from the form
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.php'; // Database connection
        require_once 'login_model.php'; // Model to interact with database
        require_once 'login_contr.php'; // Controller
        
        // Error handling
        $errors = []; // Creates an empty array for errors

        if (isInputEmpty($username, $pwd)) { // use a function to check if there are empty inputs
            $errors["empty_input"] = "Fill in all fields."; // If empty add to array
        }

        $result = getUser($pdo, $username, $pwd); // Calling function that is located in the model to get user information from db

        if (isUsernameWrong($result)) { // Using the iformation from the function getUser to perform error handling
            $errors["login_incorrect"] = "Incorrect login info.";
        }

        if (!isUsernameWrong($result) && isPasswordWrong($pwd, $result["pwd"])) { 
            $errors["login_incorrect"] = "Incorrect login info.";
        }

        // Get session config and check if there's a section for errors
        require_once 'config_session.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors; // If there are errors - set session
            header("Location: ../index.php");
            die();
        }

        $newSessionID = session_create_id();
        $sessionID = $newSessionID . "_" . $result["id"]; // Appending the new sessionID with the user's id from db
        session_id($sessionID); // Set the session ID

        // Login the user to the website

        $_SESSION["user_id"] = $result["id"]; // Session user id = to user id from db
        $_SESSION["user_username"] = htmlspecialchars($result["username"]); // Get username from db

        $_SESSION["last_regeneration"] = time(); // Reset the time

        header("Location: ../index.php?login=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $error) { // In error case
        die("Query failed: " . $error->getMessage());
    }

} else { // If the user got here without a post method
    header("Location: ../index.php");
    die();
}