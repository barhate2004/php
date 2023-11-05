<?php
$n = $_POST['n1'];
$r = $_POST['n2'];

echo '<table border="1">';
for ($i = 1; $i <= $r; $i++) {
    echo '<tr>';
    echo '<td>' . $n . ' * ' . $i . '</td>';
    echo '<td>' . ($n * $i) . '</td>';
    echo '</tr>';
}
echo '</table>';
?>
