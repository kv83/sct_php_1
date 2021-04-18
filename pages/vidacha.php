<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
require_once 'function.php';
echo bookLink(), vidachaTable(), vidachaLink();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Выдача книг</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<h2>Выдача книг</h2>
<form method="POST" action="">
    <input name="name" type="text" placeholder="id книги"/>
    <input name="date" type="text" placeholder="Дата выдачи"/>
    <input name="sotrudnik" type="text" placeholder="id сотрудника"/>
    <input name="srok" type="text" placeholder="Срок выдачи"/>
    <input name="chitatel" type="text" placeholder="id читателя"/>
    <input type="submit" value="Отправить"/>
</form>
</html>
