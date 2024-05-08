<?php

$dsn = "mysql:host=localhost;dbname=phplessons";
$dbUsername = "root";
$dbPassword = "";

try {
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PD0Exception $error) {
    echo "Connection failed: " . $error->getMessage();
}