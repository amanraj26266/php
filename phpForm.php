<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<Form action = "posttest.php" method = "post">
Username : <input type = "text" name = "user"/>
<br>
BloodGroup : <input type = "text" name = "BloodGroup"/>
<br>
<input type = "submit"/>
</Form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = array();

$username = htmlspecialchars($_POST['user']);
 $bloodGroup = htmlspecialchars($_POST['BloodGroup']);

if (empty($username)) {
$errors[] = "Username is required.";
}

if (empty($bloodGroup)) {
 $errors[] = "BloodGroup is required.";
 }

if (empty($errors)) {
echo "<h3>Form Submitted</h3>";
echo "Username: " . $username . "<br>";
echo "BloodGroup  hai: " . $bloodGroup . "<br>";
 } else {
foreach ($errors as $error) {
  echo "<p style='color:red;'>" . $error . "</p>";
 }
 }
}
?>

</body>
</html>
