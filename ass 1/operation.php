<?php
$operand1 = $_POST['operand1'];
$operand2 = $_POST['operand2'];
$operation = $_POST['operation'];

switch($operation){
case "addition";
$result = $operand1 + $operand2;
break;
case 'subtraction';
$result = $operand1 - $operand2;
break;
case 'multiplication';
$result = $operand1 * $operand2;
break;
case 'division';
$result = $operand1 / $operand2;
break;
default:
$result = 'invalid operation';
}
echo "Result of $operand1 $operation $operation2 = $result";
?>


