<?php
$n1=$_GET["txt1"];
$n2=$_GET["txt2"];
$op=$_GET["r"];

include "function.php";
switch($op)
{
case"add":$ans=add($n1,$n2);
		echo"addition is"."$ans";break;

case"sub":$ans=sub($n1,$n2);
		echo"subtraction is"."$ans";break;

case"mul":$ans=mul($n1,$n2);
		echo"multiplication is"."$ans";break;

case"div":$ans=div($n1,$n2);
		echo"division is"."$ans";break;

}
?>
