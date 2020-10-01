<?php
$name = 'Переходы через IF';
$page1 = '1.php';
$page3 = '3.php';
$page = '2';
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
    $c=45;
        if ($b>$c) {
        echo ('Переменная c = '. $c. ' меньше переменной b= ' .$b .' ('. $c. ',' .$b .')</br></br>');
        } else if ($b<$c) {
        echo ('Переменная c = '. $c. ' больше переменной b= ' .$b .' ('. $b. ',' .$c .')</br></br>');
        } else if ($b=$c) {
        echo ('Переменная b = '. $b. ' равна переменной c= ' .$c .' ('. $b. ',' .$c .')</br></br>');
        }
            if ($a=$page)
            $a = ('Вы на странице '. $page);
            echo "<strong>$a</strong>";
    ?>
        <ul>
        <li><a href="<?= "$page1" ?>">Перейти на страницу 1</a></li></br>
        <li><a href="<?= "$page3" ?>">Перейти на страницу 3</a></li>
        </ul>
    </body>
    </html>

