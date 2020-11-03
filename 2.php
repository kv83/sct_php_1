<!doctype html>
<html>
<head>
    <title> Функции 2 </title>
</head>
<body>
<?php
function test()
    {
        static $a = 0;
        return ++$a;
    }
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
echo 'Функция вызвана '.test().' раз. <br>';
?>
</body>
</html>

