<?php
/*
 * Building upon the concept of prepared statements, lets look at how we can call a stored procedure.
 */

try {
  $this->connection = new PDO("mysql:host=localhost;dbname=$database", $user, $pass);
  $data = array();
  
  $stmt = $dbh->prepare("CALL sp_returns_string(?)");
  $stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000); 

  // call the stored procedure
  $stmt->execute();

  print "procedure returned $return_value\n";
  
}
catch(PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}




?>
