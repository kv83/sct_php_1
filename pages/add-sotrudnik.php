<?php
include 'login-biblio.php';
file_get_contents('login-biblio.php');
require_once 'function.php';
echo sotrudnikLink();
?>
<head>
    <meta charset="UTF-8">
    <title>Информация о сотрудниках</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<h2>Добавление сотрудников</h2>
<form method="POST" action="">
    <input name="login" type="text" placeholder="Логин"/>
    <input name="password" type="text" placeholder="Пароль"/>
    <input name="fio" type="text" placeholder="ФИО"/>
    <input name="dolzhnost" type="text" placeholder="Должность"/>
    <input type="submit" value="Отправить"/>
</form>



