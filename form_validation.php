<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Sanitizing strings</h3>
  <?php 
$comment = "<h1>Hey there! How are you doing today?</h1>";

$sanitizedComment = filter_var($comment,FILTER_SANITIZE_STRING);
echo $sanitizedComment;
?>
</body>
</html>