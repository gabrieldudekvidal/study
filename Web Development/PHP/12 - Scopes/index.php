<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>

    <?php

    // ---------- GLOBAL ------------

    // Global scope
    $myName = "Gabriel";

    // Passing data from global scope to local scope
    function displayName($myName){
        return $myName;
    }

    echo displayName($myName);

    
    // ---------- LOCAL ----------

    // Local variable that can be used only into myFunction
    function myFunction(){
        $localVar = "Hello, world!";
        return $localVar;
    }


    // ---------- STATIC ----------

    // Functions are static and always display the same result
    function incrementFunction(){
        $staticVar = 0;
        $staticVar++;
        return $staticVar;
    }

    // In this case if you run more than one time the result will always be 1
    echo incrementFunction();
    echo incrementFunction();


    // If you declare that the variable is static
    function staticFunction(){
        static $staticVar = 0;
        $staticVar++;
        return $staticVar;
    }

    // The value will be incremented by 1 and the result will be 123
    echo staticFunction();
    echo staticFunction();
    echo staticFunction();



    // ---------- CLASS ----------

    class myClass {
        public $classVar = "Hello, world!";

        // Define a class method
        public function myMethod() {
            // Use the class variable
            echo $this->classVar; // Output: Hello, world!
        }
    }

    ?>
    
</body>
</html>