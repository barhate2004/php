<?php

$l=$_POST['low'];
$u=$_POST['up'];
$f=0;
if($l<$u){
echo ("Prime Numbers Between ".$l." & ".$u."<br>");
for($j=$l; $j<=$u; $j++){
	for($i=2; $i<=$j/2; $i++){
		if($j%$i==0){
			$f=1;
		}
	}
	
	if($f==0 && $j!=1){
 		echo $j."<br>";
	}
	$f=0;
}
}
else{
echo ("INVALID INPUTS");
}
?> 
