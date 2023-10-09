<?php
$row = $_GET['r'];
$col = $_GET['c'];
$a1 = $_GET['a'];
$a = array(1,2,3);
$b = array(4,5,3);
$c = array(8,7,2);
$x = array($a,$b,$c);
echo "Displaying the array:"<br>;
print_r($x);
echo"<br>";
switch($a1) 

{
case 'd' echo "Display element at $row and $col:";
	print_r($x[$row] [$col]);

case 'as' echo "Arry before deleting $row and $col <br>";
	print_r($x);
	echo "<br>";
	echo "Deleting element at $row and $col <br>";
	unset($x [$row] [$col]);
	echo "Array after deleting $row ans $col <br>";
	print_r($x);
	print_r($x);
	break;
}
?>
