<?php
$pic1 = '/img/1.jpg';
$pic2 = '/img/2.jpg';
$pic3 = '/img/3.jpg';
$pic4 = '/img/4.jpg';
$pic5 = '/img/5.jpg';
$page1 = '1.php';
$page0 = '/index.php';
?>
<doctype html>
    <html>
    <head>
        <title><?= 'Пикчи'?></title>
    </head>
      <body>
       <p><img src="<?= $pic1 ;?>" width="300" height="250"></p>
       <p><img src="<?= $pic2 ;?>" width="300" height="250"></p>
       <p><img src="<?= $pic3 ;?>" width="300" height="250"></p>
       <p><img src="<?= $pic4 ;?>" width="300" height="250"></p>
       <p><img src="<?= $pic5 ;?>" width="300" height="250"></p>
         <ul>
         <li><a href="<?= "$page0"?>">Перейти на главную страницу</a></li></br>
         <li><a href="<?= "$page1"?>">Перейти на страницу 1</a></li>
         </ul>
      </body>
    </html>