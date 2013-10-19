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

class Vehicle {
  //property declaration (with default value)
  public $num_wheels = "4";

  function __construct() {
    echo "Constructing a Vehicle";
  }

  public function howManyWheels() {
    return $this->num_wheels;
  }
}

//lets extend our Vehicle base class and create and define a Car class.
class Car extends Vehicle {
  public function maxSpeed(){
    return "Fast";
  }
}

//lets instantiate (aka create an instance of) a Vehicle.
$v = new Vehicle();
echo $v->howManyWheels();

$c = new Car();
$c->maxSpeed();
?>
