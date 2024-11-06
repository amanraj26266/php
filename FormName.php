<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Example</title>
</head>
<body>
  <h2>PHP Form</h2>
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    Registration: <input type="text" name="reg">
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $reg = htmlspecialchars($_POST['reg']);
      if (!empty($name) && !empty($email) && !empty($reg)) {
          echo "<h3>Form Submitted</h3>";
          echo "Name: " . $name . "<br>";
          echo "Email: " . $email . "<br>";
          echo "Registration: " . $reg . "<br>";
      } else {
          echo "Please fill out all fields.";
      }
  }
  ?>
</body>
</html>