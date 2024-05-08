<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $pdo = null;
        $stmt = null;

    } catch (PDOException $error) {
        die("Query failed: " . $error->getMessage());
    }

} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data</title>
</head>
<body>

    <h3>Search results:</h3>

    <?php

    if (empty($results)) {
        echo "<div>";
        echo "<p>There were no results.</p>";
        echo "</div>";
    } else {
        foreach ($results as $row) {
            echo htmlspecialchars($row["username"]) . "<br>";
            echo htmlspecialchars($row["comment_text"]). "<br>";
            echo htmlspecialchars($row["created_at"]). "<br>";
        }
    }

    ?>

</body>
</html>