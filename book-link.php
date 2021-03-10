<?php
function bookLink ()
{
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "root";
    $db_name = "library";

    try {
        $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT id, name, artikul, date, author FROM add_book";
        $statement = $db->prepare($sql);
        $statement->execute();
        $result_array = $statement->fetchAll();

        echo "<table><tr><th>ID</th><th>name</th><th>artikul</th><th>date</th><th>author</th></tr>";
        foreach ($result_array as $result_row) {
            echo "<tr>";
            echo "<td>" . $result_row["id"] . "</td>";
            echo "<td>" . $result_row["name"] . "</td>";
            echo "<td>" . $result_row["artikul"] . "</td>";
            echo "<td>" . $result_row["date"] . "</td>";
            echo "<td>" . $result_row["author"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }

    $db = null;
}
function addBookLink ()
{
    if (!empty($_POST['name']) && !empty($_POST['artikul']) && !empty ($_POST['date']) && !empty ($_POST['author'])) {
        $name = $_POST['name'];
        $artikul = $_POST['artikul'];
        $date = $_POST['date'];
        $author = $_POST['author'];
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $db_name = 'library';
        $db_table = "add_book";
        $mysqli = new mysqli($host, $user, $pass, $db_name);
        if ($mysqli->connect_error) {
            die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        $result = $mysqli->query("INSERT INTO " . $db_table . " (name, artikul, date, author) VALUES ('$name','$artikul', '$date', '$author')");
        if ($result == true) {
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }
    }
}
?>
</body>
</html>
