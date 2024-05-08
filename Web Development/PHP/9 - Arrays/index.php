<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    
    <?php 

    // --------------- PART 1 -----------------

    $fruits = ["apple", "banana", "cherry"];

    // Add a fruit to array
    $fruits[] = "orange";

    // Update data from array. In this case banana
    $fruits[1] = "pineapple";

    // Remove data from array. In this case banana. Delete from index 0 to 1
    array_splice($fruits, 0, 1);

    echo $fruits[1];

    // Add data 
    array_push($fruits, "mango");


    // --------------- PART 2 -----------------

    // Associative arrays
    $tasks = [
        "laundry" => "Gabriel",
        "trash"   => "Frida", 
        "vacumm"  => "Basse", 
        "dishes"  =>"Bella"
    ];

    // Add data and associate
    $tasks["dustin"] = "Tara";

    // Who is doing laundry?
    echo $tasks["laundry"];

    // Sort array
    sort($tasks);
    
    // Print all values in the array
    print_r($tasks);

    // Count how many values are in the array
    echo count($tasks);

    // --------------- PART 3 ----------------- 

    $food = [
        array("apple", "mango"),
        "banana",
        "cherry"
    ];

    echo $food[0][1];
    echo $food[1];


    // Create array groups with multidimensional arrays
    $foodGroups = [
        "fruits" => array("apple", "banana", "cherry"),
        "meat" => array("chicken", "fish", "sheep"),
        "vegetables" => array("cucumber", "carrot"),
    ];

    echo $foodGroups["meat"][0];

    ?>

</body>

</html>