<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];

if($n1==$n2){
echo "equal numbers";
}
else{
function &maximum(&$n1,$n2){
if($n1>$n2){
return $n1;
}
else{
return $n2;
}
}
}
echo "maximum number between $n1 and $n2 is ".maximum(&$n1,&$n2);
?>
