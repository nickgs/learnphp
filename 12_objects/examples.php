<?php
/**
 * Object oriented concepts were introduced to PHP in version 4 and greatly improved in the 5.x branches.
 * There are four major principals to Object Oriented programming:
 *   - Data Abstraction
 *   - Encapsulation
 *   - Inheritance
 *   - Polymorphism
 *
 * http://php.net/manual/en/language.oop5.php
 */

//lets take a look at a simple class:
class SquareBuilding {
  
  private $width = 0;
  private $height = 0;
  
  function __construct() {
    $this->width = 100;
    $this->height = 100;
  }
  
  function square_feet(){
    return $this->width * $this->height;
  }
}

//lets instantiate (aka create an instance of) a Vehicle.
$mybuilding = new SquareBuilding();
echo $mybuilding->square_feet();
echo "<hr/>";



//lets extend our Vehicle base class and create and define a Car class.
class Car implements Vehicle {
  public function maxSpeed(){
    return "Real Fast";
  }
}


class Truck extends Car implements Vehicle {
  //property declaration (with default value)
  public $num_wheels = "4";

  function __construct() {
    echo "Constructing a Vehicle";
  }

  public function howManyWheels() {
    return $this->num_wheels;
  }
  
  public function maxSpeed() {
    return 100;
  }
}



interface Vehicle {
 
  public function maxSpeed();
  
}

//lets instantiate (aka create an instance of) a Vehicle.
/*$v = new Vehicle();
echo $v->howManyWheels();

$c = new Car();
$c->maxSpeed();*/
?>
