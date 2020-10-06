<?php
$name = 'IF';
$a = 130;
$b = 100;
$operation = multiply;
$isAvailableCalculation = true;
?>
<doctype html>
    <html>
    <head>
        <title><?= $name ?></title>
    </head>
    <body>
    <? echo "<h2> $name </h2>";?>
    <form>
        <select>
            <?php
            if ($operation == add and $isAvailableCalculation) {
                echo '<div><option value="Сложение">Сложение</option></div>
                <option value="Вычитание">Вычитание</option>
                <option value="Умножение">Умножение</option>
                <option value="Деление">Деление</option>';
            }
            if ($operation == subtract and $isAvailableCalculation ) {
                echo '<option value="Вычитание">Вычитание</option>
                <option value="Сложение">Сложение</option>
                <option value="Умножение">Умножение</option>
                <option value="Деление">Деление</option>';
            }
            if ($operation == multiply and $isAvailableCalculation ) {
                echo '<option value="Умножение">Умножение</option>
                <option value="Сложение">Сложение</option>
                <option value="Вычитание">Вычитание</option>
                <option value="Деление">Деление</option>';
            }
            if ($operation == divide and $isAvailableCalculation ) {
                echo '<option value="Деление">Деление</option>
                <option value="Сложение">Сложение</option>
                <option value="Вычитание">Вычитание</option>
                <option value="Умножение">Умножение</option>';
            }
            ?>
        </select>
    </form>
    <?php
    if ($operation == add and $isAvailableCalculation) {
        echo 'Суммой чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a+$b;
    }
    if ($operation == subtract and $isAvailableCalculation ) {
        echo 'Результатом вычитания чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a-$b;
    }
    if ($operation == multiply and $isAvailableCalculation) {
        echo 'Произведением чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a*$b;
    }
    if ($operation == divide and $isAvailableCalculation) {
        echo 'Частным чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a/$b;
    }
    ?>
    </body>
    </html>

