<?php
if(isset($_POST['OP'])){
	$n1=$_POST['Num1'];
	$n2=$_POST['Num2'];
	for($j=1;$j<=$n2;$j++){


	echo"<br>$n1*$j= ".$n1*$j;
}
}
?>
