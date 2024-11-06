<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electricity Bill Calculator</title>
</head>
<body>
  <h2>Task 2: Electricity Bill Calculator</h2>

  <?php
  
  $service_charge = 10; 
  $rate = 0; 
  $unit_consumed = readline("Enter the value of units consumed: ");

  switch (true) {
      case ($unit_consumed <= 100 && $unit_consumed >= 0):
          $rate = 0.10;
          break;
      case ($unit_consumed <= 300 && $unit_consumed >= 101):
          $rate = 0.15;
          break;
      case ($unit_consumed <= 500 && $unit_consumed >= 301):
          $rate = 0.20;
          break;
      default:
          $rate = 0.25;
          break;
  }

  $final = $unit_consumed * $rate + $service_charge;
  $tax = (15 / 100) * $final;

  function final_bill($final, $tax) {
      $bill_amount = $final + $tax;
      return $bill_amount;
  }

  $bill_amount = final_bill($final, $tax);

  echo "Number of units consumed: " . $unit_consumed . "\n";
  echo "Rate per unit: $" . $rate . "\n";
  echo "Service charge: $" . $service_charge . "\n";
  echo "Bill before tax: $" . $final . "\n";
  echo "Tax: $" . $tax . "\n";
  echo "Final bill amount: $" . $bill_amount . "\n";
  
  ?>

</body>
</html>
