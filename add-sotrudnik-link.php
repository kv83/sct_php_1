<?php
function sotrudnikLink ()
{
    if (!empty($_POST['login']) && !empty($_POST['password']) && !empty ($_POST['fio']) && !empty ($_POST['dolzhnost'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $fio = $_POST['fio'];
        $dolzhnost = $_POST['dolzhnost'];
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db_name = 'library';
        $db_table = "dannie_sotrudnik";
        $db_table1 = "log_pass_sotrudnik";
        $mysqli = new mysqli($host, $user, $pass, $db_name);
        if ($mysqli->connect_error) {
            die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        $result = $mysqli->query("INSERT INTO " . $db_table1 . "(login, password) VALUES ('$login', '$password')");
        $result1 = $mysqli->query("INSERT INTO " . $db_table . " (fio, dolzhnost) VALUES ('$fio','$dolzhnost')");
        if ($result == true and $result1 == true) {
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }
    }
}



