<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

    <?php

    // For loop

    for ($i = 0; $i <= 9; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }

    // While loop

    $number = 5;

    while ($number < 10) {
        echo $number;
        $number++;
    }

    do {
        echo $number;
        $number++;
    } while ($number < 15);

    // For each loop

    $fruits = array("apple", "orange", "banana");

    foreach ($fruits as $fruit) {
        echo "This is a " . $fruit . "<br>";
    }

    // For each using associative array

    $fruits = array("Apple" => "Red", "Banana" => "Yeloow", "Organe" => "Orange");

    foreach ($fruits as $fruit => $color) {
        echo "This is a " . $fruit . " that has a color of " . $color . "<br>";
    }

    ?>

</body>
</html>