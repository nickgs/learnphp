<?php
/**
 * Functions are defined in PHP using the function keyword.
 * Like our variables they are not defined by type.
 *
 * Functions allow us to package up functionality into smaller units.
 * This allows us to reuse code and better organize our programs.
 */


//lets take a look a simple example:
function sayHello() {
  echo "Hello PHP.";
}

//calling a function is as simple as:
sayHello();

//functions can return data to its caller:
function returnHello() {
  return "Hello PHP.";
}

//this will output Hello PHP.
echo returnHello();

//functions can not only return data BUT recieve data through parameters:
function dynamicHello($name) {
  return "Hello $name";
}

//we can then pass parameters to our function when we are calling it:
echo dynamicHello("Nick");

//parameters can be optional:
function optionalHello($name="NoName") {
  return "Hello $name";
}

echo optionalHello(); //=> Hello NoName
echo optionalHello("Nick"); //=> Hello Nick

//parameters can also be passed by reference.
//http://php.net/manual/en/language.references.pass.php
function refHello(&$name) {
  $name = "Override Dan";

  return "Hello $name";
}

$name = "Nick";
echo refHello($name); //=> Hello Override Dan
echo $name; //=> Override Dan
?>
