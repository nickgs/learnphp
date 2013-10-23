<?php

/*
 * Some examples of using PHP to connect to database systems.
 */
require_once("lib/Database.php");

$db = new Database("training", "trainer", "trainer");

//print_r($db->query("SELECT * FROM ITEMS"));

/*
$db->query("INSERT INTO ITEMS (ID ,SKU,DESC) VALUES (
'23',  'TEST2',  'Some test product'
)");
 * /
 */

$sql = 'INSERT INTO songs (band,song,year,first_line) VALUES 
    ("Elton John", "Your song", 1970,"Some text")';

$db->query($sql);

print_r($db->query("SELECT * FROM songs"));

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
