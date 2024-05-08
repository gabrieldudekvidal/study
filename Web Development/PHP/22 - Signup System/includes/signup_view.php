<?php

// This view file takes care of showing user required information

declare(strict_types=1);

function checkSignupErrors() {
    // Check if there is session variable for errors
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }

        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success" ) { // Check if the url contains success
        echo "<br>";
        echo "<p>Signup success!</p>";
    }
}