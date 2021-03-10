<?php
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'add-sotrudnik-link.php';
echo sotrudnikLink();
?>
<h2>Добавление сотрудников</h2>
<form method="POST" action="">
    <input name="login" type="text" placeholder="Логин"/>
    <input name="password" type="text" placeholder="Пароль"/>
    <input name="fio" type="text" placeholder="ФИО"/>
    <input name="dolzhnost" type="text" placeholder="Должность"/>
    <input type="submit" value="Отправить"/>
</form>



