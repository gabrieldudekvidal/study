<?php 

declare(strict_types=1); // It's necessary to define what kind of data is being passed for a function

function getUser(object $pdo, string $username) { // Passing variables and pdo for connection

    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query); // Prepare query using the pdo connection
    $stmt->bindParam(":username", $username); // Fill the query placeholder with username var
    $stmt->execute(); // Execute the statement

    $result = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch
    return $result; // Return the result
}