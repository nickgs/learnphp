<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require_once("../lib/Database.php");

$db = new Database("training", "trainer", "trainer","localhost");
$songs = $db->query("SELECT * FROM songs");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>View Songs</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
    <style type="text/css">
      .centered {
        width: 50%;
        margin:20px auto;
      }
    </style>
  </head>
  <body>
    <div class="centered">
    <a href ="new_song.php" class="btn btn-primary">Add Song</a>
    
    <?php if($_GET['success'] == true):?>
      <h5 class="well">Success!</h5>
    <?php endif; ?>
    
    <h1>Song Listing</h1>
    <table class="table table-hover">
      <tr>
        <td>Band</td>
        <td>Song</td>
        <td>Year</td>
        <td>First Line</td>
      </tr>
      
      <?php foreach($songs as $song): ?>
      <tr>
        <td><?php echo $song['band']; ?></td>
        <td><?php echo $song['song']; ?></td>
        <td><?php echo $song['year']; ?></td>
        <td><?php echo $song['first_line']; ?></td>
      </tr>
      <?php endforeach; ?> 
    </table>
    </div>
  </body>
</html>
