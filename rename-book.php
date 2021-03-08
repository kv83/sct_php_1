<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Изменение данных</title>
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
$db_name = "library";

try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, name, artikul, date, author FROM add_book LIMIT 5";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();

    echo "<table><tr><th>ID</th><th>name</th><th>artikul</th><th>date</th><th>author</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"]  . "</td>";
        echo "<td>" . $result_row["name"]    . "</td>";
        echo "<td>" . $result_row["artikul"]   . "</td>";
        echo "<td>" . $result_row["date"]    . "</td>";
        echo "<td>" . $result_row["author"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>

<h2>Внести изменения в таблицу с книгами</h2>
<form action="update.php" method="POST">
    <div>
        <label for="id">Выберите ID строки *:</label>
        <input type="number" id="id" name="book_id" required>
    </div>
    <div>
        <label for="name">Название книги:</label>
        <input type="text" id="name" name="book_name">
    </div>
    <div>
        <label for="artikul">Артикул:</label>
        <input type="text" id="artikul" name="book_artikul">
    </div>
    <div>
        <label for="date">Дата поступления:</label>
        <input type="text" id="date" name="book_date">
    </div>
    <div>
        <label for="author">Автор:</label>
        <input type="text" id="author" name="book_author">
    </div>
    <input type="submit" value="Обновить запись">
</form>
</body>
</html>
