<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body style="margin-top:30px">
<div class="container">
<div class="card">
  <h5 class="card-header">Form</h5>
  <div class="card-body">
  <form method="POST">
  <label for="fname">First name:</label><br>
  <input class="form-control" type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" class="form-control" id="lname" name="lname">
  <input type="submit" href="#" name="Sub" style="margin-top:30px"class="btn btn-primary form-control" value="Submit">
</form>
  </div>
</div>
</div>
</body>
</html>
<!-- Helo Hacktober-->
<?php
    if(isset($_POST['Sub'])){
    //     echo '<div style="margin-top:30px" class="container"><div class="alert alert-success" role="alert">
    //     Welcome $_POST["fname"] {$_POST["lname"]}
    //   </div></div>';
    $name =$_POST['lname']; 
    $fname=$_POST['fname'];
    echo'<div class="container" style="margin-top:30px"><div class="alert alert-success" role="alert">';
    print "Hello and Welcome {$fname} {$name}"; 
    echo"</div>";
    }
?>
