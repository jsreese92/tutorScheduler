<!DOCTYPE html>
<html>
  <body>

    <h1>First PHP Page</h1>

<?php
$x=5;
$y=10;
echo "Hello World!<br>";
echo "\r\n";
//here's a comment
/*here's another*/

$color = "black";
echo "My car is " . $color ."<br>";

function myTest(){
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y;
?>  

  </body>
</html>
