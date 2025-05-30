<?php

class Car{
    //Properties / Fields

    private $brand;
    private $color;
    public $vehicleType = "Car";

    //Constructor
    public function __construct($brand,$color = "none"){
        $this->brand = $brand;
        $this->color = $color;
    }

    //Method
    public function getCarInfo(){
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
}
$car01 = new Car("Volvo", "green");
echo $car01->getCarInfo();
echo "<br>";
echo $car01->vehicleType;