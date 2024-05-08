<?php 

// Check if the method is post using the superglobal variable server

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /* Get data from form using POST and store into a variable. 
    Use htmlspecialchars to prevent code injection */
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $favouritePet = htmlspecialchars($_POST['favouritepet']);  
    
    // Check if the user left empty fields
    if (empty($firstName)) {
        header("Location: ../index.php");        
        exit();
    }
    
    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favouritePet;

    // Send the user to a specific page 
    header("Location: ../index.php");

} else {
    // If the method is not POST send user back to index
    header("Location: ../index.php");
}
