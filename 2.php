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
    $c=30;
        if ($b>$c) {
            echo 'Переменная c = '. $c. ' меньше переменной b= ' .$b .' ('. $c. ',' .$b .')</br></br>';}
        if ($b<$c) {
            echo 'Переменная c = '. $c. ' больше переменной b= ' .$b .' ('. $b. ',' .$c .')</br></br>';}
        else if ($b=$c) {
            echo 'Переменная b = '. $b. ' равна переменной c= ' .$c .' ('. $b. ',' .$c .')</br></br>';}
    ?>
    <ul>
        <li>
            <?php if ($page==1) { ?>
            <b>
                <?php }?>
                <a href="1.php">Страница1</a>
                <?php if ($page==1) { ?>
            </b>
        <?php } ?>
        </li>
        <li>
            <?php if ($page==2) { ?>
            <b>
                <?php }?>
                <a href="2.php">Страница2</a>
                <?php if ($page==2) { ?>
            </b>
        <?php } ?>
        </li>
        <li>
            <?php if ($page==3) { ?>
            <b>
                <?php }?>
                <a href="3.php">Страница3</a>
                <?php if ($page==3) { ?>
            </b>
        <?php } ?>
        </li>
    </ul>
    </body>
    </html>

