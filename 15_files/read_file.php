<?php
/*
 * Lets take a look at how to read a file into a PHP program.
 */

$handle = fopen("employees.csv", "r");

if($handle) {
  while(($buffer = fgets($handle)) !== false) {
    $line = explode(",",$buffer);
    print_r($line);
    echo "<hr/>";
  }
}


?>
