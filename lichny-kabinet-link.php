<?php
function lichnyTable ()
{
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "root";
    $db_name = 'library';
    $db_table = "dannie_sotrudnik";
    $db_table1 = "log_pass_sotrudnik";

    try {
        $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT log_pass_sotrudnik.id, log_pass_sotrudnik.login, log_pass_sotrudnik.password , dannie_sotrudnik.id, dannie_sotrudnik.fio, dannie_sotrudnik.dolzhnost FROM log_pass_sotrudnik, dannie_sotrudnik where log_pass_sotrudnik.id=dannie_sotrudnik.id";

        $statement = $db->prepare($sql);

        $statement->execute();

        $result_array = $statement->fetchAll();
        echo "<table><tr><th>ID</th><th>login</th><th>password</th><th>fio</th><th>dolzhnost</th></tr>";
        foreach ($result_array as $result_row) {
            echo "<tr>";
            echo "<td>" . $result_row["id"] . "</td>";
            echo "<td>" . $result_row["login"] . "</td>";
            echo "<td>" . $result_row["password"] . "</td>";
            echo "<td>" . $result_row["fio"] . "</td>";
            echo "<td>" . $result_row["dolzhnost"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
}
