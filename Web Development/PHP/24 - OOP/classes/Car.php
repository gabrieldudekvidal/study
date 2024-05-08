<?php

/* A propertie is something that is part of the car. Like the color and the brand.
   private only the class will have access - recommended to use as default.
   protected the child class can have access.
   public 'everyone' can have access.
*/

class Car {
    private $brand;
    private $color;
    private $vehicleType = "car"; // Pre determined value.

    // Constructor
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color; 
    }

    // Get method - use this function to get the brand outside of the class
    public function getBrand() {
        return $this->brand;
    }

    public function getColor() {
        return $this->color;
    }

    // Set a new brand by using this function outside of the class
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setColor($color) {

        $allwedColors = ["red", "blue", "green", "yellow"];

        if (in_array($color, $allwedColors)) { // Check if the color can be added or not
            $this->color = $color;
        } else {
            echo "This color can't be set. The original color will remain unchanged.";
        }

    }

    // Method
    public function getCarInfo() {
        return "The brand is " . $this->brand . " and the color is " . $this->color;
    }
}

/* Creating objects
$car01 = new Car("Honda", "black");
$car01 = new Car("BMW"); // The default is going to be none

-Echo cars using the method inside of the object
echo $car01->getCarInfo();

-Get a propertie
echo $car01->vehicleType; */