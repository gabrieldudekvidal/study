<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>

    <?php require_once 'classes/Car.php';

    $car01 = new Car("BMW", "red"); // Create a new object

    $car01->setBrand("Volvo"); // Set the new brand
    $car01->setColor("pink");

    echo $car01->getBrand(); // Get the brand
    echo $car01->getColor();

    ?>


    
</body>
</html>