<?php
$name = 'Начало цифрового квеста';
$page1 = '1.php';
$page2 = '2.php';
$page3 = '3.php';
?>
<doctype html>
    <html>
    <head>
        <title><?= $name ?></title>
    </head>
       <body>
       <? echo "<h2> $name </h2>";?>
         <ul>
             <li><a href="<?= "$page1" ?>">Перейти на страницу 1</a></li></br>
             <li><a href="<?= "$page2" ?>">Перейти на страницу 2</a></li></br>
             <li><a href="<?= "$page3" ?>">Перейти на страницу 3</a></li>
         </ul>
       </body>
    </html>

