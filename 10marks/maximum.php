<?php
$n1=$_GET["n1"];
$n2=$_GET["n2"];

echo"first number is $n1"."<br>";
echo"second number is $n2"."<br>";
function check($n1,$n2)
{
   
  if($n1>$n2)
 return $n1;
 return $n2;

};
$x=check($n1,$n2);
echo "maximum = $x";

$n1=$n2=-1;
?>
