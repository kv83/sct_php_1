<!doctype html>
<html>
<head>
    <title>Функции</title>
</head>
<body>
<?php
    $a=0;
        function test()
        {
         global $a;
         return ++$a;
        }
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
 ?>
</body>
</html>

