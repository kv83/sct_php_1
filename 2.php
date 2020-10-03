<?php
$name = 'Переходы через IF';
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
            echo 'Переменная c = '. $c. ' меньше переменной b= ' .$b .' ('. $c. ',' .$b .')</br></br>';}
        if ($b<$c) {
            echo 'Переменная c = '. $c. ' больше переменной b= ' .$b .' ('. $b. ',' .$c .')</br></br>';}
        if ($b=$c) {
            echo 'Переменная b = '. $b. ' равна переменной c= ' .$c .' ('. $b. ',' .$c .')</br></br>';}
    ?>
    <ul>
        <?php
            if ($page=2) {
                echo '<li><a href="1.php">Страница1</a></li></br>';
                echo '<b><li><a href="2.php">Страница2</a></li></br></b>';
                echo '<li><a href="3.php">Страница3</a></li></br>';}
        ?>
    </ul>
    </body>
    </html>

