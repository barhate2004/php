<?php
$a=$_GET['a'];
$x=array(2,5,4,7,8,9,1,9,0);
$y=array(2,10,0,7,5,9,1);
$f=function ($o)
{
if($o%2!=0)
return true;
else
return false;
};
switch($a)
{
case 'c':echo"subarray of original array is:<br>";
	 $c=array_chunk($x,3);
	 print_r($c);
	 break;

case 's':echo"Array :<br>";
	 print_r($x);
	 echo"<br>";
	 asort($x);
	 echo"Ascending value sort:<br>";
	 print_r($x);
	 break;

case 'f':$odd=array_filter($x,$f);
	 echo"Array 1<br>";
	 print_r($x);
	 echo"<br>";
	 echo"Array 2<br>";
	 print_r($odd);
	 break;

case 'm':echo"Array 1<br>";
	 print_r($x);
	 echo"<br>";
	 echo"Array 2<br>";
	 print_r($y);
	 echo"<br>";
	 $m=array_merge($x,$y);
	 echo"Merged Array:<br>";
	 print_r($m);
	 break;

case 'i':echo"Array 1<br>";
	 print_r($x);
	 echo"<br>";
	 echo"Array 2<br>";
	 print_r($y);
	 echo"<br>";
	 $i=array_intersect($x,$y);
	 echo"Intersection of $x and $y is:<br>";
	 print_r($i);
	 break;

case 'u':echo"Array 1<br>";
	 print_r($x);
	 echo"<br>";
	 echo"Array 2<br>";
	 print_r($y);
	 echo"<br>";
	 $m=array_merge($x,$y);
	 $u=array_unique($m);
	 echo"Union of $x and $y is:<br>";
	 print_r($u);
	 break;

case 'sd':echo"Array 1<br>";
	  print_r($x);
	  echo"<br>";
	  echo"Array 2<br>";
	  print_r($y);
	  echo"<br>";
	  $sd=array_diff($x,$y);
	  echo"set difference of $x and $y is:<br>";
	  print_r($sd);
	  break;
}
?>
