<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>New Song</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
    <style type="text/css">
      .centered {
        width: 50%;
        margin:0 auto;
      }
    </style>
  </head>
  <body>
    <div class="centered">
    <h1>Add Song</h1>
    <form id="new_song" method="post" action="insert_song.php" role="form" class="well">
      
      <div class ="form-group">
       <label for="song">Song Title:</label>
       <input name="song" class="form-control" size="60"/>
      </div>
      
      <div class ="form-group">
        <label for="band">Song Band:</label>
        <input name="band" class="form-control" size="60"/>
      </div>
      
      <div class ="form-group">
        <label for="year">Song Year:</label>
        <input name="year" class="form-control" size="60"/>
      </div>
      
      <div class ="form-group">
        <label for="first_line">Song First Line:</label>
        <input name="first_line"  class="form-control"size="60"/>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </body>
</html>
