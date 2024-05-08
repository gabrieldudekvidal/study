<?php

session_start();

// Remove specific session data
unset($_SESSION["username"]);

// Remove all session data
session_unset();

// 
sessions_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo $_SESSION["username"];
    ?>
    
</body>
</html>