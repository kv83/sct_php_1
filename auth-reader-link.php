<?php
function authReader ()
{
    if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db_name = 'library';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli($host, $user, $pass, $db_name);
        $query = 'SELECT*FROM log_pass_klient WHERE login="' . $login . '" AND password="' . $password . '"';
        $result = mysqli_query($mysqli, $query);
        $users = mysqli_fetch_assoc($result);
        if (!empty($users)) {
            session_start();
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $users['id'];
            $_SESSION['login'] = $users['login'];
            include 'login-reader.php';
        } else {
            echo 'Введён неверный логин или пароль';
        }
    }
}


