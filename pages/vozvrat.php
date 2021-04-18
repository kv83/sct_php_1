<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
require_once 'function.php';
echo bookLink(),vozvratTable (), vozvratLink();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Возврат книг</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<h2>Возврат книг</h2>
<form method="POST" action="">
    <input name="date" type="text" placeholder="Дата возврата"/>
    <input name="name" type="text" placeholder="Название книги"/>
    <input name="author" type="text" placeholder="id сотрудника"/>
    <input name="sotrudnik" type="text" placeholder="id выдачи"/>
    <input type="submit" value="Отправить"/>
</form>
</html>