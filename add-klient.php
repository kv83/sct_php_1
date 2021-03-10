<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'add-klient-link.php';
echo addKlientTable(), addKlientLink();
include 'vidacha-link.php';
echo vidachaTable();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Информация о читателях</title>
    <style>
        label{display: inline-block;width: 170px;}
        form > div{margin-bottom: 5px;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
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