<?php
$d=$_GET["txt1"];
$arr=array(1=>"red",2=>"blue",3=>"yellow",4=>"green");
$op=$_GET["r"];

switch ($op)
  {
 case 'a':a($arr);
	  break;

 case 'b':b($arr);
	  break;

 case 'c':c($arr);
	  break;

 case 'd':d($arr);
	  break;

 case 'e':e($arr);
	  break;
 }
 function a($arr)
 {
  foreach($arr as $k=>$v)
   {
	echo $k."=>".$v;

  }
 };
 
 function b($arr)
{
echo "count of given array is".count($arr);
 
 };
function c($arr,$d)
 {
unset($arr[$d]);
print_r($arr);

 };
function d($arr)
 {
array_flip($arr);
print_r($arr);
 };
function e($arr)
 {
shuffle($arr);
print_r($arr);
 };

 ?>

                                  

