<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>we are working with array </h2>
  <?php
  $arr1=array(10,"Aman",1.55);
  $arr2=array([10,20,30],["aman","raj"],["math"=>"fail","science"=>"first","hindi"=>"pass"]);
  var_dump($arr1,"</br>");
  print_r($arr2);

  
  ?>

  <h2>ab baari indexed array ki</h2>
  <?php
  $arr1=array(10,"Aman",1.55);

  echo " i like to run $arr1[0] km and my name is $arr1[1] and i have $arr1[2] rupees in my bank. "
  ?>

  <h2> its time to learn Associative Array</h2>
  <?php
  $arr3=array("math"=>"fail","science"=>"first","hindi"=>"pass");
  echo " I have got grades in my exams and those are in math ".$arr3['math']." in Science ".$arr3['science']." in Hindi ".$arr3['hindi']."";
  ksort($arr3);
  echo "<br>"; 
  ?>

<!-- <h2> its time to learn Multi Dimensional Array</h2>
  <?php
  $arr4 =array(["kunal","Aman","raj"],["math"=>"fail","science"=>"first","hindi"=>"pass"]);
  echo ".$arr4[1][1].";
  echo "<br>"; 
  ?> -->

  <?php
  $a1=array("a"=>"red","b"=>"blue");
   array_pop($a1); //last ka element remove karega 
   array_push($a1,"purple","green");  // array k last me element add karne k liye array_push("arrayname","element")
  $a2=array("blue","yellow");
  $a3=array_merge($a1,$a2);//array merge karne k liye array_merge() ka use karte hai
  $a4=array_reverse($a3);// array ko reverse karte hai array_reverse() se 
  print_r($a4);
  echo "<br>"; 
  print_r(array_slice($a4,1,3)); 
  echo "<br>"; 
  echo array_search("purple",$a4);

  $result = array(array("name"=>"aman","cgpa"=>"7.39","status"=>"pass"),array("name"=>"Harsh","cgpa"=>"7.96","status"=>"pass"),array("name"=>"Thakur","cgpa"=>"6.8","status"=>"pass"));
  $name=array_column($result,"status","name"); 
  echo "<br>";
  print_r($name)
  ?>

  <h3>Readline Concept</h3>

  <?php
//   $num1=(int)readline("enter the first number: ");
//   $num2=(int)readline("enter the second number: ");
//   echo "\n";
//   $sum=($num1+$num2)."\n";
//   $diff =($num1-$num2)."\n";
//   $Multiply =($num1*$num2)."\n";
// $divide = ($num1/$num2)."\n";
// echo "Input numbers are ".$num1." and ".$num2." and the sum of the numbers = ".$sum." diffirence = ".$diff." ";



$size=(int)readline("enter the size of array: ");
$myArray=[];
for($i=0; $i<$size;$i++){
  $myArray[$i]=(int)readline();
}
$sum=0;
for($i=0;$i<$size;$i++){
  $sum= $sum+$myArray[$i];
}
print_r("average".$sum/$size);
  ?>




</body>
</html>