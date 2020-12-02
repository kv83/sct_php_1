<!doctype html>
<html>
<head>
    <title>Массивы 2</title>
</head>
<body>
<?php
$tovar = [
        'Телефон' => ['радиотелефон', 'кнопочный', 'дисковый'],
        'Мебель' => ['диван', 'стол', 'стул'],
        'Автотовары' => ['топливо', 'антифриз', 'масло']
];
    foreach ($tovar as $key=>$value){
        if (is_array($value)){
            echo '<br> Каталог: '.$key.'  <br> Товары в каталоге: ';
            $str = trim(implode(', ',$value)) . ".";
            echo $str;
        }
}
?>
</body>
</html>
