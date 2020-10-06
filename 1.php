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