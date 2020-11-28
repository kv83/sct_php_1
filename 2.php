<!doctype html>
<html>
<head>
    <title>Массивы 1</title>
</head>
<body>
<?php
    $news = [];
    $news ['Бой Тайсона и Джонса'] = 'https://sportmail.ru/news/boxing/44340148/?frommail=1';
    $news ['Биография Майка Тайсона'] = 'https://ru.wikipedia.org/wiki/Тайсон,_Майк';
    $news ['Биография Роя Джонса'] = 'https://ru.wikipedia.org/wiki/Джонс,_Рой';
    $news ['Чем зимние автомобильные дворники отличаются от летних?'] = 'https://auto.mail.ru/article/79716-chem_zimnie_avtomobilnye_dvorniki_otlichayutsya_ot_letnih/';
    $news ['История изобретения стеклоочистителя. "Дворники."'] = 'https://bwiper.ru/kak-poyavilis-dvorniki-istoriya-stekloochistitelya';
    $news ['История создания щеток стеклоочистителя'] = 'https://chistoe-steklo.ru/articles/istoriya-sozdaniya-shchetok-stekloochistitelya';
    foreach ($news as $key=>$value){
            echo "$key => $value <br>";
        }
    ?>
</body>
</html>
