<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Data Types</title>
</head>
<body>

    <p>This is a <?php echo "awesome" ?> paragraph</p>

    <?php echo "This is ALSO a paragraph"; ?>

    <?php 
    //Set and print a variable
    $fullName = "Gabriel Dudek Vidal";
    echo $fullName;

    // Scalar types (contains one value)
    $emptyVariable = "";
    $string = "A piece of text";
    $int = 1997;
    $float = 2.5678;
    $boolean = false;

    // Array type (multiple values)
    $emptyArray = [];
    $array = ["Gabriel", "Mel", "Canada"];

    // Object type
    $emptyObject = null;
    $object = new Car();
    ?>

</body>
</html>