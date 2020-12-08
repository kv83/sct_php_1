<!doctype html>
<html>
<head>
    <title> Передача данных </title>
</head>
<body>
<a href="1.php?login=Oleg&password=1234&age=40">user1</a><br>
<a href="1.php?login=Boris&password=12345&age=30">user2</a><br>
<a href="1.php?login=&password=&age=">user3</a><br>
<?php
function getUserData ()
{
    if ($_GET["login"] == true) {
        echo "Ваш логин: " . $_GET["login"] . "<br>";
    } elseif ($_GET["login"] == false) {
        echo "Ваш логин: " . $_GET["login"] . "Данных нет<br>";
    }
    if ($_GET["password"] == true) {
        echo "Ваш пароль: " . $_GET["password"] . "<br>";
    } elseif ($_GET["password"] == false) {
        echo "Ваш пароль: " . $_GET["password"] . "Данных нет<br>";
    }
    if ($_GET["age"] == true) {
        echo "Ваш возраст: " . $_GET["age"] . "<br>";
    } elseif ($_GET["age"] == false) {
        echo "Ваш возраст: " . $_GET["age"] . "Данных нет<br>";
    }
        echo '<a href="/1.php">Очистить</a>';
}
getUserData();
echo '<br>Передано методом '.$_SERVER['REQUEST_METHOD'];
?>
</body>
</html>
