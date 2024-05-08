<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>

    <?php

    // IF 

    $bool = false;
    $a = 1;
    $b = 4;

    // Check if a is less than b and bool is true
    if ($a < $b && $bool == true) {
        echo "First condition is true!";
    } else if ($a < $b && $bool == false) {
        echo "Second condition is true!";
    } else {
        echo "None of the conditions were true!";
    }

    // Switch 

    $bool = false;
    $a = 1;
    $b = 4;

    switch ($a) {
        case 5:
            echo "The first case is correct!";
            break;
        case 1:
            echo "The second case is correct!";
            break;
        default:
            echo "None of the conditions were true!";
    }

    // Match 

    // Use comma to check for more than one value
    $result = match ($a) {
        1 => "Varaiable a is equal to one!",
        2, 4, 5 => "Variable a is equal to two!",
        default => "None were a match",
    };

    echo $result

    ?>

</body>
</html>