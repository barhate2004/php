<?php
$n=$_POST['nam'];
$c=$_POST['clg'];
$m=$_POST['msg'];

function greet($n,$c,$m){
echo "$m<br><br>$n,<br>$c";
}

greet($n,$c,$m);
?>
