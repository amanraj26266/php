<?php
if (isset($_POST['submit'])) {
  $target_dir = "C:/xampp/htdocs/";
  $target_file = $target_dir . str_replace(' ', '_', basename($_FILES["image"]["name"]));
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
  } else {
      echo "File is not an image.";
      $uploadOk = 0;
  }

  if ($_FILES["image"]["size"] > 3000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }

  if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }

  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
          header("Location: index.php?upload=success"); 
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}
?>