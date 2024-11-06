<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>let's check</h1>
  <?php
  $age = "aman"; 
  echo  
  var_dump($age);
  var_dump(5);
  var_dump(5.5);
  var_dump([5,6,7]);
  var_dump(null);
  var_dump("hello");

  

  ?>

</body>
</html> -->

<!-- with this we will be seeing file handlin in php -->
<!-- <?php
$handle = fopen('aman.txt','r');
var_dump($handle);
?> -->


<!-- dealing with variable and null value -->
<!-- <?php 
$a=null;
echo $a;
var_dump($a);
echo '<br>';
$b ="hello aman";
$b = null;
var_dump($b);
?> -->


<!-- defining constant we can alo use const and constant instead of define -->
<!-- <?php
define("pi",3.14);
$pi = 2.14;
echo "the value of pi is ", pi , "<br>";
?> -->

<!-- <?php
echo "line is ",__LINE__ ,"<br>";
echo "file is ",__FILE__,"<br>";
echo "function is ",__FUNCTION__,"<br>";
echo "class is ",__CLASS__,"<br>";
echo "method is ",__METHOD__,"<br>";
echo "dir is ",__DIR__,"<br>";
echo "version is ",PHP_VERSION;
?> -->



<!-- array in php -->
<!-- <?php
define("courses",["dsa","cod","dbms","os"]);
echo courses[0];
?> -->


<!-- arithmatic operator and assignment operator  -->
<!-- <?php
$x=12;
$y=2;
echo($x+$y),"<br>";
echo($x-$y),"<br>";
echo($x*$y),"<br>";
echo($x/$y),"<br>";
echo($x%$y),"<br>";
echo($x**$y),"<br>";
?> -->


<!-- we are seeing operators -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>assignment operators</h2>
<?php
$x=12;
$y=2;
echo($x+=$y),"<br>";
echo($x-=$y),"<br>";
echo($x*=$y),"<br>";
echo($x/=$y),"<br>";
echo($x%=$y),"<br>";
echo($x**=$y),"<br>";
?>

<h2>Arithmetic operators</h2>
<?php 
$x=12;
$y=2;
echo($x+$y),"<br>";
echo($x-$y),"<br>";
echo($x*$y),"<br>";
echo($x/$y),"<br>";
echo($x%$y),"<br>";
echo($x**$y),"<br>";
?>

<h2>Comparison operators</h2>
<?php 
$x=12;
$y=2;
echo($x==$y),"<br>";
echo($x!=$y),"<br>";
echo($x===$y),"<br>";
echo($x<$y),"<br>";
echo($x>$y),"<br>";
echo($x>=$y),"<br>";
echo($x<=$y),"<br>";
?>

 
<h2>incrementing and decrementing operataors</h2>
<?php 
$a=2;
echo $a++,"<br>";
echo ++$a,"<br>";
echo $a--,"<br>";
echo --$a,"<br>";
?>

<h2>string operators</h2>
<?php 
$x="aman";
$y="raj";
$z="kunal";
echo $x." ".$y,"<br>";
echo $x.=$z;
?>

<h2>conditional operators</h2>
<?php 
$x=12;
$y = $x%2;
echo $y==0 ? "even":"odd"
?>

<h2>checking better tempreature to go out </h2>
<?php 
$x=12;
echo $x<=32 && $x>=100 ? "Good to go outside":" Stay at home";
?>

/*Input a file using input tag*/
<label for="myfile">Select a file:</label>
<input type="file" id="myfile" name="myfile">






</body>
</html>
