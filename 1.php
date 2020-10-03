<?php
    $name = 'Переходы через IF';
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
                echo 'Число положительное</br></br>';}
            if ($int<0) {
                echo 'Число отрицательное</br></br>';}
        ?>
            <ul>
                <?php
                    if ($page=1) {
                            echo '<b><li><a href="1.php">Страница1</a></li></br></b>';
                            echo '<li><a href="2.php">Страница2</a></li></br>';
                            echo '<li><a href="3.php">Страница3</a></li></br>';}
                ?>
            </ul>
        </body>
        </html>