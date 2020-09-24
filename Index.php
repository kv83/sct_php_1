<doctype html>
    <html>
       <head>
           <title><?= 'Скрипт'?></title>
       </head>
          <body>
             <?php
              echo '<h1>Категорический привет читателю данного текста!</h1>';
              echo '<p>Данный текст предназначен для ознакомления.</p>';
              echo '<p>Ознакомились. Запомнили. Отлично!</p>';
              echo '<p>Хорошего дня!</p>';
              ?>
             <img src="<? echo '123.jpg';?>" width="300" height="250" alt="Картинка"></br>
             <a href="<?= 'index.php'?>">Перейти на главную страницу</a></br>
             <a href="<?= 'php/1.php'?>">Перейти на страницу 1</a></br>
             <a href="<?= 'php/2.php'?>">Перейти на страницу 2</a>
               <script>
                   var a = '<?php echo 12?>';
               </script>
          </body>
    </html>
