<!doctype html>
<html>
<head>
    <title> Передача данных </title>
</head>
<body>
<a href="index.php?page=1">Калькулятор</a><br>
<a href="index.php?page=2">Милицейский протокол</a><br>
<a href="index.php?page=3">Мишка Шифман</a><br>
<?php
function getPage ()
{
    if ($_GET["page"] == 1) {
        include 'page/1.php';
    }
    if ($_GET["page"] == 2) {
        include 'page/2.php';
    }
    if ($_GET["page"] == 3) {
        include 'page/3.php';
    } elseif (!is_numeric($_GET['page']) or $_GET["page"] ==""){
        include 'page/1.php';
    }
    echo '<br>Передано методом '.$_SERVER['REQUEST_METHOD'];
}
getPage();
?>

</body>
</html>