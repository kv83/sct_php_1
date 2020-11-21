<!doctype html>
<html>
<head>
    <title>Циклы</title>
</head>
<body>
<?php
    function vozvrat ($a, $b)
    {
        while ($a > $b) {
            echo $b++. '<br>';
        }
        while ($a < $b) {
            echo $a++. '<br>';
        }
        echo 'Числа равны';
    }
        echo vozvrat (12,12);
?>
</body>
</html>