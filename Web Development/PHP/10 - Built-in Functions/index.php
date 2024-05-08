<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in Functions</title>
</head>

<body>

    <?php 

        // ---------- String Functions ---------- 

        $string = "Hello World!";

        // How many chars are in the variable?
        echo strlen($string);
        echo "<br>";

        // What is the position of o?
        echo strpos($string, "o");
        echo "<br>";

        // ----------- Substring functions ----------

        // Replace chars
        echo str_replace("World!", "Gabriel", $string);
        echo "<br>";

        // Lower case letters
        echo strtolower($string);
        echo "<br>";

        // Upper case letters
        echo strtoupper($string);
        echo "<br>";

        // Cut a text after 6 chars and end after 2 chars
        echo substr($string, 6, 5);
        echo "<br>";

        // Cut a text after 6 chars and end before 1 char
        echo substr($string, 6, -1);
        echo "<br>";

        // Turn a string into an array by determining a condition to cut the string
        print_r(explode(" ", $string));
        echo "<br>";

        // ---------- Math functions ----------

        $number = -5.5;

        // Get the absolute value ignoing if it's a negative or positive value
        echo abs($number);
        echo "<br>";

        // Round
        echo round($number);
        echo "<br>";

        // Power of
        echo pow(2, 3);
        echo "<br>";

        // Square root
        echo sqrt(16);
        echo "<br>";

        // Random number between 2 numbers
        echo rand(1, 100);
        echo "<br>";

        // ---------- Array functions ---------

        $array = ["apple", "banana", "orange"];
        $additionalData = ["pineapple", "kiwi"];

        // Count pieces of data
        echo count($array);
        echo "<br>";

        // Check if is an array 1 true 0 false
        echo is_array($array);
        echo "<br>";

        // Remove data from the end of array
        array_pop($array);
        print_r($array);
        echo "<br>";

        // Merge arrays
        print_r(array_merge($array, $additionalData));
        echo "<br>";

        // ---------- Date and Time functions ---------

        // Full date
        echo date("Y-m-d");
        echo "<br>";

        // Time
        echo date("H:i:s");
        echo "<br>";

        // Unix timestamp to calculate difference between time
        echo time();
        echo "<br>";

        // Get the Unix timestamp for a particular date and time
        $date = "2023-03-11 18:00:00";
        echo strtotime($date);

    ?>

</body>

</html>