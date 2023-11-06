<?php
$n=$_GET["txt1"];

$an=explode(",",$n);

$sum=0;
for($i=0;$i<count($an);$i++)
{
$sum=$sum+$an[$i];
}
echo "su of all numbers is $sum";
?>
