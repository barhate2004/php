<?php
	$n1=$_POST['Num1'];
	echo"factorial of $n1 is ".ans($n1);
function ans($n1){
	$mul=1;
	while($n1!=1){
		$mul*=$n1;
		$n1--;

}
return($mul);

}
?>
