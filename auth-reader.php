<?
include 'auth-reader-link.php';
echo authReader();
?>
<h2>Ввод логина и пароля пользователя</h2>
<form action='login-reader.php' method='POST'>
    <input name='login'>
    <input name='password' type='password'>
    <input type='submit' value='Отправить'>
</form>
