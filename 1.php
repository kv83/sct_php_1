<!doctype html>
<html>
<head>
    <title>Циклы</title>
</head>
<body>
<?php
function vozvrat ()
{
    $a=20;
    $b=20;
    while ($a==$b){
        echo 'Числа равны';
        exit;
    }
    while ($a > $b) {
        echo $b++. '<br>';
        if ($a==$b)
            echo $a;
        if ($a<$b) exit;
    }
    while ($a < $b) {
        echo $a++. '<br>';
        if ($a==$b)
            echo $b;
        if ($a>$b) exit;
    }
}
vozvrat ();
?>
</body>
</html>