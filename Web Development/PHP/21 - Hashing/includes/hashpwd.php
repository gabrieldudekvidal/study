<?php

// General hashing

$sensetiveData = "gabriel";
$salt = bin2hex(random_bytes(16)); // Generate random salt
$pepper = "ASecretPepperString";

$dataToHash = $sensetiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

// Password hashing

$pwdSignUp = "gabriel";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignUp, PASSWORD_BCRYPT, $options);

echo $hashedPwd;

// Check password when the user tries to login again

$pwdLogIn = "gabriel";


if (password_verify($pwdLogIn, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are not the same.";
}