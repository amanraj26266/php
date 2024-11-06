<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Example</title>
</head>
<body>
  <h2>calculator</h2>
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Number1: <input type="numberz" name="num1">
    <br><br>
    Number2: <input type="number" name="num2">
    <br><br>
    signOpertaor: <input type="text" name="sign">
    
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $num1 = htmlspecialchars($_POST['num1']);
      $num2 = htmlspecialchars($_POST['num2']);
      $sign = htmlspecialchars($_POST['sign']);
      
      if ($sign == "+"){
        echo $num1.$sign.$num2."<br>";
        echo $num1+$num2;
      } 
      elseif ($sign == "-"){
        echo $num1.$sign.$num2."<br>";
        echo $num1-$num2;
      }
      elseif ($sign == "*"){
        echo $num1.$sign.$num2."<br>";
        echo $num1*$num2;
      } 
      elseif ($sign == "/"){
        echo $num1.$sign.$num2."<br>";
        echo $num1/$num2;
      } 
      elseif (empty($sign)){
        echo "Please fill out the signOperator fields.";
      } 
      else{
        echo "Please enter a valid sign operator.";
      } 
  }
  ?>
</body>
</html>