<?php
$name = 'IF';
$a = 130;
$b = 100;
$operation = divide;
$isAvailableCalculation = true;
?>
<doctype html>
    <html>
    <head>
        <title><?= $name ?></title>
    </head>
    <body>
    <? echo "<h2> $name </h2>";?>
    <?php
    if (@$_POST['doSend']) {
        $matem = @$_POST['matem'];
        echo $matem;
    }
    ?>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
        <select name="matem">
            <option value="Сложение">Сложение</option>
            <option value="Вычитание">Вычитание</option>
            <option value="Умножение">Умножение</option>
            <option value="Деление">Деление</option>
        </select>
        <input type="submit" name="doSend" value="Send" />
    </form>
    <?php
        if (($matem == Сложение) and $operation == add and $isAvailableCalculation) {
            echo 'Суммой чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a+$b;
        }
        if (($matem == Вычитание) and $operation == subtract and $isAvailableCalculation ) {
            echo 'Результатом вычитания чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a-$b;
        }
        if (($matem == Умножение) and $operation == multiply and $isAvailableCalculation) {
            echo 'Произведением чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a*$b;
        }
        if (($matem == Деление) and $operation == divide and $isAvailableCalculation) {
            echo 'Частным чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a/$b;
        }
        ?>
    </body>
    </html>


