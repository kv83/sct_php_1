<!doctype html>
<html>
<head>
    <title>Циклы</title>
</head>
<body>
<?php
function vozvrat ($a, $b)
{
    while ($a==$b){
        return 'Числа равны';
    }
    while ($a > $b) {
        echo $b++. '<br>';
        if ($a==$b)
            return $a;
    }
    while ($a < $b) {
        echo $a++. '<br>';
        if ($a==$b)
            return $b;
    }
}
echo vozvrat (40,30);
?>
</body>
</html>