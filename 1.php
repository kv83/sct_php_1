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
    global $a, $text;
    if (($a+1) == 1) {
        $text = ' раз';
            } elseif (($a+1)  >= 2 && ($a+1) <= 4) {
                $text = ' раза';
            } else if (($a+1) >= 5 && ($a+1)< 22) {
                $text = ' раз';
            }
            return ++$a;
        }
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
    echo 'Функция вызвана '.test(). $text.' <br>';
 ?>
</body>
</html>