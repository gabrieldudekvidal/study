<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DB Functions</title>
</head>
<body>
    <form action="db/insert.php" method="POST">
        <input type="text" name="table-name" value="TEST" hidden>
        <input type="text" name="Name" placeholder="Name">
        <input type="email" name="Email" placeholder="E-mail">
        <input type="number" name="Age" placeholder="Age">
        <button type="submit">Save</button>
    </form>
</body>
</html>