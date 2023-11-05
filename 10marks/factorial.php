<?php
$n=$_POST['n1'];

facto($n);
function facto($n){
$f=1;

for($i=$n;$i>1;$i--)
{
$f=$f*$i;
}
echo" Factorial=$f";





}
?>