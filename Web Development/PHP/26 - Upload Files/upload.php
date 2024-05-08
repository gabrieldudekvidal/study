<?php 
// Check if the submit button was pressed
if (isset($_POST['submit'])) {
    // Set a variable to get info of the file
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExtension = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExtension));

    $allowedFiles = array('jpg', 'jpeg', 'png');

    // Check if the uploaded file is allowed by checking if the extension is in the array
    if (in_array($fileActualExt, $allowedFiles)) {
        // If there aren't errors proceed to upload
        if ($fileError === 0) {
            if ($fileSize < 5242880) {
                // Create a unique id for the file
                $fileNameNew = uniqid('', true). "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                // Upload the file moving from the temp to destination
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
                exit();
            } else {
                echo "Error: Your file is more than 5mb." . $fileSize;
            }
        } else {
            echo "Error: There was an error uploading your file.";
        }     
    } else {
        echo "Error: File extension not supported.";
    }

}