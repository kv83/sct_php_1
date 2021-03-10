<?php
function vozvratTable ()
{
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "root";
    $db_name = "library";
    try {
        $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT id, date, name, author, sotrudnik FROM vozvrat";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result_array = $statement->fetchAll();
        echo "<br><br><table><tr><th>id</th><th>date</th><th>name</th><th>author</th><th>sotrudnik</th></tr>";
        foreach ($result_array as $result_row) {
            echo "<tr>";
            echo "<td>" . $result_row["id"] . "</td>";
            echo "<td>" . $result_row["date"] . "</td>";
            echo "<td>" . $result_row["name"] . "</td>";
            echo "<td>" . $result_row["author"] . "</td>";
            echo "<td>" . $result_row["sotrudnik"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
    $db = null;
}

function vozvratLink ()
{
    if (!empty($_POST['date']) && !empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['sotrudnik'])) {
        $date = $_POST['date'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $sotrudnik = $_POST['sotrudnik'];
        $host = "localhost";
        $user = "root";
        $pass = "root";
        $db_name = "library";
        $db_table = 'vozvrat';
        $mysqli = new mysqli($host, $user, $pass, $db_name);
        if ($mysqli->connect_error) {
            die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        $result = $mysqli->query("INSERT INTO " . $db_table . "(date, name, author, sotrudnik) VALUES ('$date', '$name', '$author', '$sotrudnik')");
        if ($result == true) {
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }
    }
}
?>
