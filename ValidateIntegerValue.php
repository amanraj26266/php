<!-- String sanatization and vaidation is done in this pice of code  -->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>validate integer value</h3>
  <?php
  $int = 40;
  if(filter_var($int,FILTER_VALIDATE_INT)){
    echo "the <b>$int</b>is a valid integer";
  }
  else{
    echo "the <b>$int</b>is not a valid integer";
  }
  ?>
  <br>
  
  <h3>validate input value</h3>
  <?php
  $ip = "172.16.254.1";
  if(filter_var($ip,FILTER_VALIDATE_IP)){
    echo "the <b> $ip </b>is a valid ip address";
  }
  else{
    echo "the <b> $ip </b>is not a valid ip address";
  }
  ?>
  <br>
  <h3>validate email address</h3>
  <?php
  $email= "itsmeaman26266@gmail.com";
  $sanatizedEmail=filter_var($email,FILTER_SANITIZE_EMAIL);
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "the <b> $email </b>is a valid email address";
  }
  else{
    echo "the <b> $email </b>is not a valid email address";
  }
  ?>
  <br>
  <h3>Sanatize and validate url</h3>
  <?php
  $url= "http:://amanportfolio.rendrer.com";
  $url= "https://www.google.com";
  $sanatizedUrl=filter_var($url,FILTER_SANITIZE_URL);
  if($url==$sanatizedUrl && filter_var($url,FILTER_VALIDATE_URL)){
    echo "the <b> $url </b>is a valid website url";
  }
  else{
    echo "the <b> $url </b>is not a valid website url";
  }
  ?>


<h3>check whether number is nteger or not and check if it lies between 1 to 100 or not</h3>
<h3>validate integer value</h3>
  <?php
  $int = 40;
  if($int <= 100 && $int>=1 && filter_var($int,FILTER_VALIDATE_INT)){
    echo "the <b>$int</b>is a valid integer and it also lies between 1 to 100";
  }
  elseif(filter_var($int,FILTER_VALIDATE_INT)){
    echo "the <b>$int</b>is a valid integer and it do not lies between 1 to 100";
  }
  else{
    echo "the <b>$int</b>is not a valid integer";
  }
  ?>


<h3> calss task</h3>
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

      $sanatizedName=filter_var($name,FILTER_SANITIZE_STRING);
      $sanatizedEmail=filter_var($email,FILTER_SANITIZE_EMAIL);
      $sanatizedInt=filter_var($reg,FILTER_VALIDATE_INT);


      if (!empty($name) && !empty($email) && !empty($reg) && $name==$sanatizedName && $email==$sanatizedEmail && $reg==$sanatizedInt) {
          echo "<h3>Form Submitted</h3>";
          echo "Name: " . $name . "<br>";
          echo "Email: " . $email . "<br>";
          echo "Registration: " . $reg . "<br>";
      } else {
          echo "Please fill out all fields and provide valid inputs.";
      }
  }
  ?>

<h3>Regular Expression Example</h3>
<p>Question: Using a regular expression for doing a case-insensitive search in the given string</p>

<?php
$string = "I'm the amanRaj";
$pattern = "/amanRaj/i";
if (preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE)) {
    echo "Pattern is there in the string at position: " . $matches[0][1];
} else {
    echo "The pattern is not there in the string";
}
?>



</body>
</html>