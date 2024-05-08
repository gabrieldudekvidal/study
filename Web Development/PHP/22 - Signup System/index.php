<?php
require_once 'includes/config_session.php';
require_once 'includes/signup_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup System</title>
</head>
<body>

    <h3>Signup</h3>

    <form action="includes/signup.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button>Signup</button>
    </form>

    <?php
    // Calling a function that is stored in signup_view.php file
        checkSignupErrors();
    ?>
    
</body>
</html>