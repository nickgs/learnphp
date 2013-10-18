<?php
/**
 * PHP supports many of the looping constructs you would expect from any high level language.
 */


//for loop example.
for($i=0; $i <= 10; $i++) {
  echo "$i \n";
}

//while loop example.
$i = 0;
while($i <= 10) {
  echo "$i \n";
  $i++;   //important!
}

//do... while example
$i = 0;
do {
  echo "$i \n";
  $i++;
} while ($i <= 10);

//and the foreach which we will look at when covering arrays.
?>
