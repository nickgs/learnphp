<?php
/*
 * Our main Database connection class. Implements ways to call and connect to a database backend.
 */
class Database {
  
  public $connection;
  
  
  function __construct($database, $user, $pass, $host){
    try {
      $this->connection = new PDO("mysql:host=localhost;dbname=$database", $user, $pass);
    }
    catch(PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
    
    echo "Constructed a Database object";
  }
  
  function query($query) {
    $data = array();
    
    try {
     $result = $this->connection->query($query); 
     
     foreach($result as $row) {
       $data[] = $row;
     }
    }
    catch(PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
    
    return $data; 
  }
  
  function close() {
    $this->connection = null;
  }
}