<?php

declare(strict_types=1);

function outputUsername() {
    if (isset($_SESSION['user_id'])) {
        echo "You are logged in as " . $_SESSION['user_username'];
    } else {
        echo "You are not logged in";
    }
}


function checkLoginErrors() {
    if (isset($_SESSION["errors_login"])) { // Check if the errors session exists
        $errors = $_SESSION["errors_login"]; // Store all the erros into variable errors

        echo "<br>";

        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>";
        } 
        unset($_SESSION["errors_login"]); // Clean session

    } elseif (isset($_GET['login']) && $_GET['login'] === "success") { // Get if the url has success status

    }
}
