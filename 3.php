<?php
$name = 'Переходы через IF';
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
            echo 'Переменная c = '. $c. ' меньше переменной b= ' .$b .'. Разность b-c= '. $d. '</br></br>';}
        if ($b<$c) {
            echo ('Переменная c = '. $c. ' больше переменной b= ' .$b .'. Разность c-b= '. $e. '</br></br>');}
        if ($b=$c) {
            echo ('Переменная b = '. $b. ' равна переменной c= ' .$c .'. Разность данных чисел = 0 </br></br>');}
    ?>
    <ul>
        <?php
        if ($page=3) {
            echo '<li><a href="1.php">Страница1</a></li></br>';
            echo '<li><a href="2.php">Страница2</a></li></br>';
            echo '<b><li><a href="3.php">Страница3</a></li></br></b>';}
        ?>
    </ul>
    </body>
    </html>

