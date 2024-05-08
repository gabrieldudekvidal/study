<?php 

declare(strict_types=1); // It's necessary to define what kind of data is being passed for a function


function isInputEmpty(string $username, string $pwd) { 

    if (empty($username) || empty($pwd)) { // Check if the password is empty - if the result is false (!) set error as true
        return true;
    } else {
        return false;
    }
}

function isUsernameWrong(bool|array $result) { // Passing the variable returned from model function getUser
    // If the return is empty then it will be bool, otherwise will be an array containing the user's data

    if (!$result) { // If the result is false (no user in db) set the as true to be used as error reference
        return true;
    } else {
        return false;
    }
}

function isPasswordWrong(string $pwd, string $hashedPwd) { 

    if (!password_verify($pwd, $hashedPwd)) { // Check if the password is correct - if the result is false (!) set error as true
        return true;
    } else {
        return false;
    }
}