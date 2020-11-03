<!doctype html>
<html>
<head>
    <title>Функции</title>
</head>
<body>
<?php
/**
 * Функция вывода данных о человеке
 * @param string  $name пока данный параметр не введён, то имя не отображается
 * @param int $age пока параметр возраст не введён, то не отображается
 * @param string $address пока параметр адрес не введён, то не отображается
 * @return string
 */
function letText($name, $age="", $address="")
{
    if ($age !=='') {
        if ($age % 10 == 0) {
            $text = 'лет';
        }
        if ($age % 10 == 1) {
            $text = 'год';
        }
        elseif ($age % 10 > 1 && $age % 10 < 5) {
            $text = 'года';
        }
        else if ($age % 10 > 4 && $age % 10 < 21) {
            $text = 'лет';
        }
        echo "$name $address $age $text";
    }
    elseif ($age ==='') {
        return "$name $address";
        }
    elseif ($name ==='') {
        return "$age $address";
    }
    elseif ($address ==='') {
        return "$name $age";
    }
}
echo letText('Иван', '77', ' Усть-Каменогорск, пр.Мира 36');
?>
</body>
</html>

