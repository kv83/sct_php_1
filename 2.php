<?php
function result($n, $a, $b )
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
    echo " {$n} {$a} {$b} ";
}
    result('chastnoe',5,10);

