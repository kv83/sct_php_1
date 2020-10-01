<?php
$name = 'Переходы через IF';
$page1 = '1.php';
$page2 = '2.php';
$page = '3';
?>
<doctype html>
    <html>
    <head>
        <title><?= $name ?></title>
    </head>
    <body>
    <? echo "<h2> $name </h2>";?>
    <?php
    $b=15;
    $c=15;
    $d=$b-$c;
    $e=$c-$b;
    if ($b>$c) {
        echo ('Переменная c = '. $c. ' меньше переменной b= ' .$b .'. Разность b-c= '. $d. '</br></br>');
        } else if ($b<$c) {
        echo ('Переменная c = '. $c. ' больше переменной b= ' .$b .'. Разность c-b= '. $e. '</br></br>');
        } else if ($b=$c) {
        echo ('Переменная b = '. $b. ' равна переменной c= ' .$c .'. Разность данных чисел = 0 </br></br>');
        }
            if ($a=$page)
            $a = ('Вы на странице '. $page);
            echo "<strong>$a</strong>";
    ?>
        <ul>
        <li><a href="<?= "$page1" ?>">Перейти на страницу 1</a></li></br>
        <li><a href="<?= "$page2" ?>">Перейти на страницу 2</a></li>
        </ul>
    </body>
    </html>

