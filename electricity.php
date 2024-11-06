<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>electricity bill claculator</h2>
  <?php
  $rate=10;
  $meter1= readline("enter the meter 1 reading ");
  $meter2= readline("enter the meter 2 reading ");
  $meter1Prev= readline("enter the meter 1 previous reading ");
  $meter2Prev= readline("enter the meter 2 previous reading ");
  $meter1FinalReading=$meter1-$meter1Prev;
  $meter2FinalReading=$meter2-$meter2Prev;
  $final_bill_amount= $rate*($meter1FinalReading+$meter2FinalReading);
  ?>
</body>
</html>