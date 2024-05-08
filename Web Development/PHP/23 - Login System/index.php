<?php
require_once 'includes/config_session.php';
require_once 'includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup System</title>
</head>
<body>

    <?php
        checkLoginErrors(); // Call function from the view to display erros
    ?>

    <h3> <?php outputUsername(); ?></h3>

    <h3>Login</h3>

    <form action="includes/login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>

    <h3>Logout</h3>

    <form action="includes/logout.php" method="post">
        <button>Logout</button>
    </form>

</body>
</html>