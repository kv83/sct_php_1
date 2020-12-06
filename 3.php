<!DOCTYPE HTML>
<html>
<head>
    <title> Стихи </title>
</head>
<body>
<?php
$filename = "3.php";
$stihi = [
    1 => '<hr>Стих №1 <br>
       Хороша страна Россия! <br>
      Здесь пасется конь в пальто. <br>
      Здесь родился, жил и умер<br>
      Знаменитый дед Пихто! <hr>',
    2 => '<hr>Стих №2 <br>
        Вода сияла в лунном свете,<br>
      На берегу медведь сидел,<br>
      Вскрывал как фантики палатки<br>
      И ел…<hr>',
    3 => '<hr>Стих №3 <br>
        Своих привычек вредных не стыдись.<br>
      Курение, вино, порывы страсти,<br>
      Конечно, укорачивают жизнь,<br>
      — Но могут продлевать мгновенья счастья.<hr>',
    4 => '<hr>Стих №4 <br>
        Страшней всего когда ты умер <br>
      И успокоился уже, <br>
      А доктор как шарахнет током<br>
      И на работу к девяти.<hr>'
];
    function pokazat_vse_stihi ($stihi)
    {
        foreach ($stihi as $id => $text)
        {
            echo "$id : $text <br>";
}
}
    foreach ($stihi as $id => $text)
    {
        echo "<li><a href=\"$filename?page=$id\"> Стих № $id</a></li><br>";
}
    if (isset($_GET['page']) && is_numeric($_GET['page']) && array_key_exists($_GET['page'], $stihi))
    {
        echo $stihi[$_GET['page']];
} else {
    pokazat_vse_stihi($stihi);
}
?>
</body>
</html>
