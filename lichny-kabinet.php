<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>UPDATE</title>
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
$db_name = 'add_sotrudnik';
$db_table = "dannie";
$db_table1 = "log_pass";

try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT log_pass.id, log_pass.login, log_pass.password , dannie.id, dannie.fio, dannie.dolzhnost FROM log_pass, dannie where log_pass.id=dannie.id  LIMIT 5";

    $statement = $db->prepare($sql);

    $statement->execute();

    $result_array = $statement->fetchAll();
    echo "<table><tr><th>ID</th><th>login</th><th>password</th><th>fio</th><th>dolzhnost</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"]  . "</td>";
        echo "<td>" . $result_row["login"]    . "</td>";
        echo "<td>" . $result_row["password"]   . "</td>";
        echo "<td>" . $result_row["fio"]    . "</td>";
        echo "<td>" . $result_row["dolzhnost"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
<h2>Изменить логин или пароль</h2>
<form action="update2.php" method="POST">
    <div>
        <label for="id">Выберите ID строки *:</label>
        <input type="number" id="id" name="id" required>
    </div>
    <div>
        <label for="login">Логин</label>
        <input type="text" id="login" name="login">
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="text" id="password" name="password">
    </div>
    <input type="submit" value="Обновить запись">
</form>

<h2>Изменить ФИО или должность</h2>
<form action="update3.php" method="POST">
    <div>
        <label for="id">Выберите ID строки *:</label>
        <input type="number" id="id" name="id" required>
    </div>
        <div>
            <label for="fio">ФИО</label>
            <input type="text" id="fio" name="fio">
        </div>
        <div>
            <label for="dolzhnost">Должность</label>
            <input type="text" id="dolzhnost" name="dolzhnost">
        </div>
        <input type="submit" value="Обновить запись">
    </form>
    </body>
    </html>
