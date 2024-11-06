<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Function</h3>
  <br>
  <h3>is_numeric function to check whether number is numeric or not</h3>
  <?php
  if(is_numeric("Aman")){
    echo "true";
  }
  else{echo "false";}
  ?>
  <h3>number format and random function</h3>
  <?php
  echo number_format(202020);
  echo "<br>";
  echo rand();
  ?>
  <h3>there are various math function like Round(),pw(), floor(), max(), min(), sin(),abs(),log(),sqrt(),tan()</h3>
  <?php
  echo sqrt(4),"<br>";
  echo log(10),"<br>";
  echo max(2,8,6,14),"<br>";
  echo min(2,8,6,14);

  ?>
<h3>finding max and min by taking input from command line</h3>
 <?php
  $inp1 = (int)readline("enter the input no 1  ");
  $inp2 = (int)readline("enter the input no 2  ");
  $inp3 = (int)readline("enter the input no 3  ");

  $inp4 = (float)readline("enter the input no 4  ");

  echo max($inp1,$inp2,$inp3), "<br>";
  echo min($inp1,$inp2,$inp3), "<br>";
  echo floor($inp4), "<br>";
  echo ceil($inp4), "<br>";

 ?>

 <?php
 echo date("y/");
 echo date("m/");
 echo date("d"),"<br>";
 echo time();

//  $timezone_identifier=DateTimeZone::listIdentifiers();
//  foreach($timezone_identifier as $key => $list)
// {
//   echo $list."<br>";

// }

echo date_default_timezone_get(),date("H:i:s"),"<br>";
date_default_timezone_set("Asia/Calcutta");
echo date_default_timezone_get(),date("H:i:s"),"<br>";
 ?>

<h3>user defined function</h3>
<h3>call by value</h3>
<?php
Function hello($x,$y){
  echo ($x+$y),"<br>";
  echo "Hello Mr.Aman";
} 

$a=5;
$b=6;
hello($a,$b);
?>
<h3>call by value refernce</h3>
<?php
Function Challo(&$x){
  
  echo "Hello Mr.Aman","<br>";
  $x+=10;
} 

$a=5;
Challo($a);
echo $a;
?>

<h3>PHP Functions returning value </h3>
<?php
Function circle($r){
  return 3.14*$r*$r;
}
echo "Area of circle with radius 3 is: ".circle(3);
?>

<h3>class work1</h3>
<?php
Function Sum($a,$b){
  return $a+$b;
}
echo "the sum of two number a and b is ".Sum(5,6);
?>
<h3>class work2</h3>
<?php
function Sum1($x, $y) {
  $r = intval($x);
  $s = intval($y);
  return $r + $s;
}

$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");
echo "The sum of the two numbers is " . Sum1($a, $b);
?>



</body>
</html>