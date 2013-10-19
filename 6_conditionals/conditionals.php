<?php
/**
 * Conditional statements in PHP allow us to control the flow of the execution of our programs.
 * As we most languages we have the following constructs:
 ****************************************************/
//our traditional if statement
$i = 0;
if($i > 0) {
  echo "Wow you are big\n";
}
elseif($i==0) {
  echo "Nothing here.\n";
}
else {
  echo "You must be negative\n";
}
/****************************************************/
//we also have the ability to use switch statements:
switch($i) {
    case 1: echo "Wow you are big\n";
              break;
    case 0: echo "Nothing here\n";
              break;
    default: echo "You must be negative\n";
              break;
}
/****************************************************/
//Ternary is another type of conditional we can use:
$message = ($i>0)?"Your Big!\n":"Your Small\n";

echo $message;

?>
