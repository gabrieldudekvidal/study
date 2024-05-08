<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>

    <?php
    
    // String operator

    $a = "Hello";
    $b = "World";

    // String concatenation
    echo $a . " " . $b; 

    // Arithmetic operators
    echo 1 + 2;
    echo 3 - 2;
    echo 5 * 5;
    echo 4 / 2;
    echo 4 % 2;
    echo 10 ** 3;
    echo (1 + 2) * 5;

    // Assigment operators
    $a = 2;

    // Var a + equals to itself and add 4
    $a += 4;

    // Comparison operators

    $a = 2;
    $b = 5;

    $c = 2;
    $d = 2;

    // If is equal independent of data type 
    if ($a == $b) {
        echo "is equal";
    } else {
        echo "It's not equal";
    }

    // If values and data type are the same
    if ($a === $b) {
        echo "is equal";
    } else {
        echo "It's not equal";
    }

    // If is not equal
    if ($a != $b) {
        echo "It's not equal";
    } else {
        echo "Is equal";
    }

    // Greater or less than
    if ($a > $b) {
        echo "Greater than";
    } else {
        echo "Not greater";
    }

    // Logical operators

    // AND
    if ($a == $b && $c == $d) {
        echo "This statement is true";
    } else {
        echo "This statement is false";
    }

    // OR
    if ($a == $b || $c == $d) {
        echo "This statement is true";
    } else {
        echo "This statement is false";
    }

    // Incrementing or decrementing operators

    $a = 1;

    // Add 1
    echo ++$a;

    // Decrease 1
    echo --$a;

    ?>
    
</body>
</html>