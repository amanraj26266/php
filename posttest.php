<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo"<h3> post method</h3>";
  ?>
  Welcome<?php
  echo $_POST["user"]."<br>";?>
  Your Blood Group is : <?php echo $_POST["BloodGroup"];?>
</body>
</html>