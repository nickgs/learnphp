<?php

/*
 * An example of a basic database connection to a mySql backend.
 * 
 * Docs: http://www.php.net/manual/en/intro.pdo.php
 */
/*
DATABASE NAME: phptraindb
HOST: phptrain
USER: phptrain1
PASSWORD: trainpw
TABLE: mynumbers
 */
  
$database = "training";
$host = "localhost";
$user = "trainer";
$password = "trainer";

$my_conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

$result = $my_conn->query("SELECT * FROM ITEMS");

/*
foreach($result as $record) {
  print_r($record);
}
*/
echo "<hr/>";

$result = $my_conn->query("SELECT * FROM ITEMS");
while($record = $result->fetch(PDO::FETCH_ASSOC)) {
  print_r($record);
}

print_r($my_conn->getAvailableDrivers());
 
$my_conn = null;
  
?>
