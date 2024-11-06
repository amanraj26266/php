<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Form for age and name </h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name: </label>
    <input type="text" name="name">
    <br>
    <label for="age">Age</label>
    <input type="number" name="age">
    <br>
    <button>submit</button>
  </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $age = htmlspecialchars($_POST['age']);

if($age<=99 && $age<= 18 && filter_var($age,FILTER_SANITIZE_INT)){
  echo "Given age is valid for $name.";
}
else{
  echo "Please enter a valid age between 18 and 99.";
}
}
?>

</body>
</html>