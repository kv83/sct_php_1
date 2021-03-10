<?php
include 'auth-biblio-link.php';
echo biblioLink();
?>
<h2>Ввод логина и пароля пользователя</h2>
<form action='login-biblio.php' method='POST'>
    <input name='login'>
    <input name='password' type='password'>
    <input type='submit' value='Отправить'>
</form>
