<?php
$name = 'Название и ещё раз название страницы';
$page1 = 'pages/1.php';
$page2 = 'pages/2.php';
$page0 = '/index.php';
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
          <li><a href="<?= "$page2" ?>">Перейти на страницу 2</a></li>
      </ul>
      </body>
    </html>
