<?php 

  /*
   * Script to prepare a SQL statement to be inserted into DB. 
   */

  require_once("../lib/Database.php");
  
  $db = new Database("training", "trainer", "trainer","localhost");
  
  //do some cleaning.
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  
  $sql = "INSERT INTO songs (band,song,year,first_line) VALUES 
    (?, ?, ?, ?)";
  
  $conn = $db->getConnection();  
  $stmt = $conn->prepare($sql);
  
  
  if($stmt->execute(array($_POST['band'],$_POST['song'],$_POST['year'],$_POST['first_line']))){
    header("Location:view_songs.php?success=true");
  }
?>
