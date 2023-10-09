<?php
$d=$_GET["txt1"];
$pos=$_GET["txt2"];
$arr=array("red","blue","yellow","green");
array_splice($arr,$pos,5,$d);
print_r($arr);


?>
