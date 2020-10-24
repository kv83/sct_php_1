<!doctype html>
<html>
<head>
    <title>Функции 2 </title>
</head>
<body>
<?php
/**
 * Вывод наименьшего числа из 3-х
 * @param int $a число 1
 * @param int $b число 2
 * @param int $c число 3
 * @return int
 */
function result($a, $b, $c=9)
{
    if ($a <= $b and $a <= $c )
    {
        return (int) $a;
    }
    elseif ($b < $a and $b <= $c )
    {
        return (int) $b;
    }
    elseif ($c < $a and $c < $b)
    {
        return (int) $c;
    }
}
    echo result('k',9,-1);
?>
</body>
</html>

