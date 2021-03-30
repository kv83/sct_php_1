<?php
session_start();
require_once 'function.php';
echo biblioLink();
?>
<h2>Ввод логина и пароля сотрудника</h2>
<form action='/pages/auth-biblio-page.php' method='POST'>
    <input name='login' type="text">
    <input name='password' type='password'>
    <input type='submit' value='Отправить'>
</form>
