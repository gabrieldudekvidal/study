<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'dbh.php'; # require file to connect to database
    $formData = $_POST; # get all the values submited by the form in array form
    $tableName = $_POST['table-name']; # get the table name from the hidden input in the form
    unset($formData['table-name']); # remove the table name from the array to prevent error of number of columns and values
    insertData($pdo, $tableName, $formData); # execute function to insert data
}

function insertData($pdo, $tableName, $formData) {
    $columns = implode(', ', array_keys($formData)); # implode keys to use as column names
    $placeholders = ':' . implode(', :', array_keys($formData)); # implode keys to use as placeholders

    $query = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
    $stmt = $pdo->prepare($query);

    foreach ($formData as $key => $value) {
        $stmt->bindValue(':' . $key, $value);
    }

    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
    $pdo = null;
}
