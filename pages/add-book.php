<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
require_once 'function.php';
echo bookLink(), addBookLink();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Добавление книг в библиотеку</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<h2>Добавление книг в библиотеку</h2>
<form method="POST" action="">
    <input name="name" type="text" placeholder="Наименование"/>
    <input name="artikul" type="text" placeholder="Артикул"/>
    <input name="date" type="text" placeholder="Дата добавления"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input type="submit" value="Отправить"/>
</form>
</body>
</html>