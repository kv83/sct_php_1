<?php
$name = 'Деление';
$page1 = '1.php';
$page2 = '2.php';
$page0 = 'index.php';
?>
<doctype html>
    <html>
    <head>
        <title><?= $name ?></title>
    </head>
        <body>
        <? echo "<h2> $name </h2>";?>
        <?php
        $a = 23;
        $b = 7;
        $z1 = 'Целое частное чисел '. $a. ' и '. $b . ' = ';
        $c1= $z1 . $w = floor($a/$b);
        $z2 = 'Остаток от деления чисел '. $a. ' и '. $b . ' = ';
        $c2= $z2 . $w = $a%$b;
        ?>
        <h3><?= $c1 ?></br>
        <?= $c2 ?></h3>
            <ul>
                <li><a href="<?= "$page0" ?>">Вернуться на главную страницу</a></li></br>
                <li><a href="<?= "$page1" ?>">Перейти на страницу 1</a></li></br>
                <li><a href="<?= "$page2" ?>">Перейти на страницу 2</a></li>
            </ul>
        </body>
    </html>


