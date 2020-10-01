<?php
    $name = 'Переходы через IF';
    $page2 = '2.php';
    $page3 = '3.php';
    $page = '1';
    ?>
    <doctype html>
        <html>
        <head>
            <title><?= $name ?></title>
        </head>
        <body>
        <? echo "<h2> $name </h2>";?>
        <?php
        $int=0;
            if ($int>=0) {
                echo ('Число положительное</br></br>');
            }
            else {
            echo ('Число отрицательное</br></br>');}
                if ($a=$page)
                $a = ('Вы на странице '. $page);
                echo "<strong>$a</strong>";
        ?>
            <ul>
            <li><a href="<?= "$page2" ?>">Перейти на страницу 2</a></li></br>
            <li><a href="<?= "$page3" ?>">Перейти на страницу 3</a></li>
            </ul>
        </body>
        </html>

