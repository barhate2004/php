<?php
$a=$_GET['a'];
$x=array('sophia'=>'31','jacob'=>'41','william'=>'39','ramesh'=>'40');
echo"Displaying the array:<br>";
print_r($x);
echo"<br>";
switch($a)
{
case 'av':asort($x);
	echo"Ascending value sort:<br>";
	print_r($x);
	break;

case 'ak':ksort($x);
	echo"Ascending value sort:<br>";
	print_r($x);
	break;

case 'dv':arsort($x);
	echo"Decending value sort:<br>";
	print_r($x);
	break;

case 'dk':krsort($x);
	echo"Decending value sort:<br>";
	print_r($x);
	break;
}
?>


