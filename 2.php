<!doctype html>
<html>
<head>
    <title>Функции 2 </title>
</head>
<body>
<?php
/**
 * Вывод меньшего числа из введённых
 * @param int $a число 1
 * @param int $b число 2
 * @param int $c число 3
 * @return int
 */
function result($a, $b, $c)
{
    if ($a!=='' && $a!==null and $a <= $b and $a <= $c )
    {
        return (int) $a;
    }
    if ($a==='' or $a===null)
    {
        if ($b<=$c)
        {
            return (int) $b;
        }
        if ($c<$b)
        {
            return (int) $c;
        }
    }
    elseif ($b!=='' && $b!==null and $b < $a and $b <= $c )
    {
        return (int) $b;
    }
    if ($b==='' or $b===null)
    {
        {
            if ($a <= $c)
            {
                return (int) $a;
            }
            if ($c < $a)
            {
                return (int) $c;
            }
        }
    }
    elseif ($c!=='' && $c!==null and $c < $a and $c < $b)
    {
        return (int) $c;
    }
    if ($c==='' or $c===null)
    {
        {
        if ($b <= $a)
        {
            return (int) $b;
        }
        if ($a < $b)
        {
            return (int) $a;
        }
    }
    }
}
echo result(8,1,'k');
?>
</body>
</html>

