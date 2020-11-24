<!doctype html>
<html>
<head>
    <title>Циклы 2</title>
</head>
<body>
<?php
function vozvrat ()
{
    $a=0;
    if ($a==0){
        echo $a.' - Тоже чётное число<br>';
    }
    while ($a<=10) {
        if ($a%2==0 && $a!=0) {
            echo $a.' - Число чётное <br>';
        }
        if ($a%2!=0){
            echo $a.' - Число нечётное <br>';
        }
        $a++;
    }
}
echo vozvrat ();
?>
</body>
</html>
