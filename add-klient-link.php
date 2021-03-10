<?php
function addKlientTable ()
{
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "root";
    $db_name = 'library';
    $db_table = "dannie_klient";
    $db_table1 = "log_pass_klient";

    try {
        $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT log_pass_klient.id, log_pass_klient.login, log_pass_klient.password , dannie_klient.id, dannie_klient.fio, dannie_klient.passport FROM log_pass_klient, dannie_klient where log_pass_klient.id=dannie_klient.id";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result_array = $statement->fetchAll();
        echo "<table><tr><th>ID</th><th>login</th><th>password</th><th>fio</th><th>passport</th></tr>";
        foreach ($result_array as $result_row) {
            echo "<tr>";
            echo "<td>" . $result_row["id"] . "</td>";
            echo "<td>" . $result_row["login"] . "</td>";
            echo "<td>" . $result_row["password"] . "</td>";
            echo "<td>" . $result_row["fio"] . "</td>";
            echo "<td>" . $result_row["passport"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
}

function addKlientLink ()
{
    if (!empty($_POST['login']) && !empty($_POST['password']) && !empty ($_POST['fio']) && !empty ($_POST['passport'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $fio = $_POST['fio'];
        $passport = $_POST['passport'];
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db_name = 'library';
        $db_table = "dannie_klient";
        $db_table1 = "log_pass_klient";
        $mysqli = new mysqli($host, $user, $pass, $db_name);
        if ($mysqli->connect_error) {
            die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        $result = $mysqli->query("INSERT INTO " . $db_table1 . "( login, password) VALUES ('$login', '$password')");
        $result1 = $mysqli->query("INSERT INTO " . $db_table . " (fio, passport) VALUES ('$fio','$passport')");
        if ($result == true and $result1 == true) {
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }
    }
}
