<?
session_start();
require_once 'function.php';
echo authReader ();
?>
<h2>Ввод логина и пароля читателя</h2>
<form action='/pages/auth-reader.php' method='POST'>
    <input name='login' type ='text'>
    <input name='password' type='password'>
    <input type='submit' value='Отправить'>
</form>
