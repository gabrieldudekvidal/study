<?php

// This controller file takes care of information

declare(strict_types=1);

// Check if the user left empty fields
function isInputEmpty(string $username, string $pwd, string $email) {
    if (empty($username) || empty($pwd) || empty($email)) { // Fixed variable name typo here
        return true;
    } else {
        return false;
    }
}

// Check if it's a valid e-mail
function isEmailInvalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Fixed constant name typo here
        return true;
    } else {
        return false;
    }
}

// Check if the username is already taken
function isUsernameTaken(object $pdo, string $username) {
    if (getUsername($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

// Check if it's a valid e-mail
function isEmailRegistered(object $pdo, string $email) {
    if (getEmail($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function createUser(object $pdo, string $pwd, string $username, string $email) {
   setUser($pdo, $pwd, $username, $email);
}
?>
