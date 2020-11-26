<!doctype html>
<html>
<head>
    <title>Циклы</title>
</head>
<body>
<?php
    function vozvrat ()
    {
        $a=12;
        $b=12;
        if ($a==$b) {
            echo 'Числа равны ';
        }
        while ($a > $b) {
            echo $b++. '<br>';
            if ($a==$b) break;
        }
        while ($a < $b) {
            echo $a++. '<br>';
            if ($a==$b) break;
            }
        if ($a=$b) {
            echo $b;
        }
    }
    vozvrat ();
?>
</body>
</html>