<?
$n1=$_Post['n1'];
$n2=$_Post['n2'];

function mod1($n1,$n2){
echo("Modulus=".($n1%$n2)."<br><br>");
}

function pow1($n1,$n2){
echo($n1."^".$n2."=".pow($n1%$n2)."<br><br>");
}

function sum($n1){
$s=0;
for($i=1; $i<=$n1; $i++){
$s+=$1;
}
echo("sum of numbers till".$n1."=".$s."<br><br>"):
}
function facto($n2){
$f=1;
for($i=$2;$i>1;$i--){
$s=0;$f=$f*$i;
}
echo "FACTORIAL= $f";
}

mod1($n1,$n2);

pow($n1,$n2);

sum1($n1);

facto($n2);
?>
