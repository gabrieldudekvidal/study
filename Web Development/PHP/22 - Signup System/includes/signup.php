<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        
        // Using MVC (Model View Control)

        require_once 'dbh.php';
        require_once 'signup_model.php';
        require_once 'signup_contr.php';

        // Error handlers using the signup_contr.php file
        $errors = [];

        if (isInputEmpty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (isEmailInvalid($email)) {
            $errors["invalid_email"] = "Invalid email used.";
        }
        if (isUsernameTaken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken.";
        }
        if (isEmailRegistered($pdo, $email)) {
            $errors["email_used"] = "Email already registered";
        }

        // Starting session 
        require_once 'config_session.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
        }

        // If there are no errors insert user on database 

        createUser($pdo, $pwd, $username, $email);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();


    } catch (PDOException $error) {
        die("Query failed: " . $error->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}