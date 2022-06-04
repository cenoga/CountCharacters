<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Count Number of Characters in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Count Number of Characters in PHP</h1>
      </div>
          <div class="card-body">
          <form method="post">
            <input type="text" name="word" class="form-control" placeholder="Enter a word"><br/>
            <input type="submit" name="submit" class="btn btn-primary" value="Count Characters">
          </form>
          <?php
          if(isset($_POST['submit'])){
            $str = $_POST['word'];
            $len = strlen($str);
            echo "<br><h4>Input Word: ". $str."</h4><br>";
            echo "<h4>Number of Characters: ".$len."</h4>";
          }
          ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>