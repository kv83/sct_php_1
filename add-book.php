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
$db_name = "library";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, name, artikul, date, author FROM add_book";
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
</body>
</html>
<html>
<body>
<h2>Добавление книг в библиотеку</h2>
<form method="POST" action="">
    <input name="name" type="text" placeholder="Наименование"/>
    <input name="artikul" type="text" placeholder="Артикул"/>
    <input name="date" type="text" placeholder="Дата добавления"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input type="submit" value="Отправить"/>
</form>
<?php
if (!empty($_POST['name']) && !empty($_POST['artikul'])&& !empty ($_POST['date']) && !empty ($_POST['author'])) {
    $name = $_POST['name'];
    $artikul = $_POST['artikul'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'library';
    $db_table = "add_book";
    $mysqli = new mysqli($host, $user, $pass,$db_name);
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
?>
</body>
</html>
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
<h2>Выданные книги</h2>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "library";
$db_table = "vidacha";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, name, author, date, sotrudnik, srok, chitatel FROM vidacha";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
    echo "<br><br><table><tr><th>id</th><th>name</th><th>author</th><th>date</th><th>sotrudnik</th><th>srok</th><th>chitatel</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"]  . "</td>";
        echo "<td>" . $result_row["name"]    . "</td>";
        echo "<td>" . $result_row["author"]    . "</td>";
        echo "<td>" . $result_row["date"]    . "</td>";
        echo "<td>" . $result_row["sotrudnik"]   . "</td>";
        echo "<td>" . $result_row["srok"]    . "</td>";
        echo "<td>" . $result_row["chitatel"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
<h2>Выдача книг</h2>
<form method="POST" action="">
    <input name="name" type="text" placeholder="Название книги"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input name="date" type="text" placeholder="Дата выдачи"/>
    <input name="sotrudnik" type="text" placeholder="Сотрудник"/>
    <input name="srok" type="text" placeholder="Срок выдачи"/>
    <input name="chitatel" type="text" placeholder="Читатель"/>
    <input type="submit" value="Отправить"/>
</form>
<?php
if (!empty($_POST['name']) && !empty($_POST['author']) &&!empty($_POST['date']) && !empty($_POST['sotrudnik']) && !empty ($_POST['srok']) && !empty ($_POST['chitatel'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $sotrudnik = $_POST['sotrudnik'];
    $srok = $_POST['srok'];
    $chitatel = $_POST['chitatel'];
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db_name = "library";
    $db_table = 'vidacha';
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    if ($mysqli->connect_error) {
        die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    $result = $mysqli->query("INSERT INTO " . $db_table . "(name, author, date, sotrudnik, srok, chitatel) VALUES ('$name', '$author', '$date','$sotrudnik', '$srok', '$chitatel')");
    if ($result == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}
?>
</body>
</html>
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
<h2>Возврат книг</h2>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "library";
$db_table = "vozvrat";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, date, name, author, sotrudnik FROM vozvrat";
    $statement = $db->prepare($sql);
    $statement->execute();
    $result_array = $statement->fetchAll();
    echo "<br><br><table><tr><th>id</th><th>date</th><th>name</th><th>author</th><th>sotrudnik</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"]  . "</td>";
        echo "<td>" . $result_row["date"]    . "</td>";
        echo "<td>" . $result_row["name"]    . "</td>";
        echo "<td>" . $result_row["author"]    . "</td>";
        echo "<td>" . $result_row["sotrudnik"]   . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
catch(PDOException $e) {
    echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
<h2>Возврат книг</h2>
<form method="POST" action="">
    <input name="date" type="text" placeholder="Дата возврата"/>
    <input name="name" type="text" placeholder="Название книги"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input name="sotrudnik" type="text" placeholder="Сотрудник"/>
    <input type="submit" value="Отправить"/>
</form>
<?php
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
?>
</body>
</html>
