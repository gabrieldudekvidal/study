<?php

// Get connection
require_once 'dbh.php';

// Use the query to select data and store into results. Use a foreach to use the data.
function selectData($pdo, $query) {
    try {
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo = null;
        $stmt = null;

        return $results;
    } catch (PDOException $error) {
        die("Query failed: " . $error->getMessage());
    }
}
