<?php
$a = 5;
$b = 10;
$n = 'chastnoe';
function result($n,$a,$b)
{
    if ($n == 'summa') {
        echo $getResult = $a + $b;
    } elseif ($n == 'raznost') {
        echo $getResult = $a - $b;
    } elseif ($n == 'proizvedenie') {
        echo $getResult = $a * $b;
    } elseif ($n == 'chastnoe' and $b !== 0) {
        echo $getResult = $a / $b;
    } else {
        echo "Делитель равен 0.";
    }
}
    result($n,$a,$b);
    echo " {$n} {$a} {$b}";
?>
