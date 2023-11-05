<?php
$n1=$_GET['txt1'];
$n2=$_GET['txt2'];
$op=$_GET['r'];

switch($op){
    case 'add': add($n1,$n2);
                break;
    case 'sub' : sub($n1,$n2);
                break;
    case 'mul' : mul($n1,$n2);
                break;
    case 'div' : div($n1,$n2);
                break;
};

function add($n1,$n2){
    echo"addition of ".$n1+$n2;
};
function sub($n1,$n2){
    echo"subtraction of ".$n1-$n2;
};
function mul($n1,$n2){
    echo"multiplication of ".$n1*$n2;
};
function div($n1,$n2){
    echo"division of ".$n1/$n2;
};

?>