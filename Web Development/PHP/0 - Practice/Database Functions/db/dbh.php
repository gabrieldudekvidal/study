<?php

$dsn = "mysql:host=162.241.226.13;dbname=gabriht1_botboo";
$dbUsername = "gabriht1_botboo";
$dbPassword = "93H78g10@1103";

try {
   $pdo = new PDO($dsn, $dbUsername, $dbPassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
   echo "Connection failed: " . $error->getMessage();
}