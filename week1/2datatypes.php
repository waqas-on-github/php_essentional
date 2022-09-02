<!-- 
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
-->

<?php 

//  php string 
$name ="waqas";
$lname ="awan";
echo $name . $lname . "<br>";

$num="22";
echo gettype($num);

//  php intiger 
$x=10; $y=20;
echo "<br>";
echo gettype($x);
echo "<br>";
echo $x +$y;

//  php float 
$fl =10.456;
echo "<br>";
var_dump($fl);

// <!-- Boolean -->
$tr=true;
$fr=false;
echo "<br>";
echo ($tr);

// Array
echo "<br>";
$names=array("waqas","omair" ,"usama");
var_dump($names);
echo "<br>";

// NULL
$x = null;
var_dump($x);














?>
