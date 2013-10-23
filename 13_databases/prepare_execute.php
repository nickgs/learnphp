<?php

/*
 * An example of using the prepare/execute method to run a query. 
 * http://www.php.net/manual/en/pdo.prepare.php
 */
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$database = "training";
$host = "localhost";
$user = "trainer";
$password = "trainer";

$my_conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

//Example Prepare an SQL statement with named parameters
$sql = "SELECT * FROM ITEMS WHERE SKU = :sku";

//prepare the SQL statement to be run
$stmt = $my_conn->prepare($sql);

//bind some data to the SQL string
$sku = '4000ST';
$stmt->bindParam(':sku', $sku);
$stmt->execute();

//lets take a look
print_r($stmt->fetchAll());

//lets do it again.
$sku = '89692';
$stmt->bindParam(':sku', $sku);
$stmt->execute();

//only want to see ASSOC array attributes.
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
