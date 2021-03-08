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
<body>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = 'add_klient';
$db_table = "dannie";
$db_table1 = "log_pass";

try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT log_pass.id, log_pass.login, log_pass.password , dannie.id, dannie.fio, dannie.passport FROM log_pass, dannie where log_pass.id=dannie.id  LIMIT 5";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
    echo "<table><tr><th>ID</th><th>login</th><th>password</th><th>fio</th><th>passport</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"]  . "</td>";
        echo "<td>" . $result_row["login"]    . "</td>";
        echo "<td>" . $result_row["password"]   . "</td>";
        echo "<td>" . $result_row["fio"]    . "</td>";
        echo "<td>" . $result_row["passport"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

<html>
<body>
<h2>Добавление читателей</h2>
<form method="POST" action="">
    <input name="login" type="text" placeholder="Логин"/>
    <input name="password" type="text" placeholder="Пароль"/>
    <input name="fio" type="text" placeholder="ФИО"/>
    <input name="passport" type="text" placeholder="Серия и номер паспорта"/>
    <input type="submit" value="Отправить"/>
</form>
<?php
if (!empty($_POST['login']) && !empty($_POST['password'])&& !empty ($_POST['fio']) && !empty ($_POST['passport'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $fio = $_POST['fio'];
    $passport = $_POST['passport'];
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'add_klient';
    $db_table = "dannie";
    $db_table1 = "log_pass";
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
?>
</body>
</html>

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
<body>
<h2> Книги взятые читателями</h2>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = 'library';
$db_table = "vidacha";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT chitatel, name, author FROM vidacha";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
    echo "<table><tr><th>chitatel</th><th>name</th><th>author</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["chitatel"]  . "</td>";
        echo "<td>" . $result_row["name"]    . "</td>";
        echo "<td>" . $result_row["author"]   . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
