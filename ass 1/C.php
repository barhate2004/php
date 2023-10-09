<?php
$n1=$_GET['txt1'];
$n2=$_GET['txt2'];

prime($n1,$n2);
function prime($n1,$n2)
{
for($i=$n1;$i<=$n2;$i++)
{
for($j=2;$j<=$i/2;$j++)
{
if($i%$j==0)
break;
}
if($j>$i/2)
echo "$i<br>";                        
}
}
?>
