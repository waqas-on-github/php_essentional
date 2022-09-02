<!-- we can declare variable in php with $ sign  -->
<?php 
 echo "hello world "."<br>" ;
 print ("hello world ")."<br>";

 echo "hello "  ,"world " ."<br>";
//  print cannot do this like 

echo 2+3 ."<br>";
print(4+5)."<br>";

echo "<h1> variables  <h1> ";
$name="waqas";
echo $name;


//............................... echo vs print .................
// echo and print are more or less the same. They are both used to output data to the screen.
// The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
//  echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
?>