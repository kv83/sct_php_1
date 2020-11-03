<!doctype html>
<html>
<head>
    <title> Функции 3 </title>
</head>
<body>
<?php
$a=40;
$b=10;
echo "Первоначальная температура = $a<br>";
function up(&$a, $b)
{
    $a = $a + $b;
    echo "Температура повысилась на $b  и стала равна $a. <br>";
    }
    function down(&$a, $b)
    {
        $a = $a - $b;
        echo "Температура понизилась на $b и стала равна $a. <br>";
}
down ($a,$b);
down ($a, $b);
down ($a, $b);
up ($a, $b);
?>
</body>
</html>

