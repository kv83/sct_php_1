<!doctype html>
<html>
<head>
    <title>Функции </title>
</head>
<body>
<?php
/*** Функция выводит информацию о человеке.
 * @param string $name имя человека
 * @param int $age возраст
 * @param string $address место проживания
 * @return string
 */
function human ($name, $age = 35, $address = 'homeless')
{ if ($age==true && $address==true)
        {
            return "{$name}, {$age}, {$address}";
        }
        elseif ($age==false)
        {
            return "$name, $address";
        }
        elseif ($address==false)
        {
            return "$name $age";
        }
}
echo human ('Алёна', '37', ' г.Астрахань ');
?>
</body>
</html>

