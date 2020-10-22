<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <input type="text" name="a" id="a" placeholder="Введите число">
    <input type="text" name="b" id="a" placeholder="Введите число">
    <input type="text" name="c" id="a" placeholder="Введите +,-,*,/">
    <input type="submit" value="Рассчитать">
</form>
</body>
</html>
<?php
$a = intval($_POST['a']);
$b = intval($_POST['b']);
$c = $_POST['c'];
function result($a,$b,$c)
{
    if($c == '+')
    {
        echo $getResult = $a+$b;
    }
    elseif($c == '-')
    {
        echo $getResult = $a-$b;
    }
    elseif($c == '*')
    {
        echo $getResult = $a*$b;
    }
    elseif($c == '/' and $b!==0)
    {
        echo $getResult = $a/$b;
    } else
        {
        echo "значение равно 0.";
    }
}
result($a,$b,$c);
echo " = $a $c $b $getResult"."<br>";
?>
