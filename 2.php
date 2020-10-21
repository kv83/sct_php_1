<?php
$a = 5;
$b = 10;
$n = 'sum';
$n = 'razn';
$n = 'umn';
$n = 'delenie';
function result($a,$b,$n, $getResult)
{
    global $getResult;
    if($n == 'sum')
    {
        $getResult = $a+$b;
    }
    elseif($n == 'razn')
    {
        $getResult = $a-$b;
    }
    elseif($n == 'umn')
    {
        $getResult = $a*$b;
    }
    elseif($n == 'delenie' and $b!==0)
    {
        $getResult = $a/$b;
    }
    else
    {
        echo "Делитель равен 0.";
    }
}
result($a,$b,$n, $getResult);
echo "{$a} {$b} {$n} {$getResult}.<br>";
?>
