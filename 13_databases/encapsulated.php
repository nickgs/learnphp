<?php

/*
 * Some examples of using PHP to connect to database systems.
 */
require_once("lib/Database.php");

$db = new Database("training", "trainer", "trainer");

print_r($db->query("SELECT * FROM ITEMS"));


/*
 Example: Calling a stored procedure with an output parameter

<?php
$stmt = $dbh->prepare("CALL sp_returns_string(?)");
$stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000); 

// call the stored procedure
$stmt->execute();

print "procedure returned $return_value\n";
?>
 */
?>
