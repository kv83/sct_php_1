<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
require_once 'function.php';
echo addKlientTable(), addKlientLink(), vidachaTable();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Информация о читателях</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<h2>Добавление читателей</h2>
<form method="POST" action="">
    <input name="login" type="text" placeholder="Логин"/>
    <input name="password" type="text" placeholder="Пароль"/>
    <input name="fio" type="text" placeholder="ФИО"/>
    <input name="passport" type="text" placeholder="Серия и номер паспорта"/>
    <input type="submit" value="Отправить"/>
</form>
</html>