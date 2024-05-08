<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal Variables</title>
</head>
<body>

    <?php

    //SERVER
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];

    //GET
    $_GET[""];

    //POST
    $_POST[""];

    //FILES
    $_FILES[""];
    
    //COOKIE
    $_COOKIE[""];

    //SESSION
    $_SESSION["username"] = "Gabriel";
    echo $_SESSION["username"];
 
    ?>
    
</body>
</html>