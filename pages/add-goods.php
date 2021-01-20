<html>
<body>
    <form method="POST" action="">
    <input name="name" type="text" placeholder="Имя"/>
    <input name="price" type="text" placeholder="Цена"/>
    <input name="info" type="text" placeholder="Информация о товаре"/>
    <input type="submit" value="Отправить"/>
    </form>
<?php
if (!empty($_POST['name']) && !empty($_POST['price'])&& !empty ($_POST['info'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $info = $_POST['info'];
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'sct';
    $db_table = "goods";
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    if ($mysqli->connect_error) {
        die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    $result = $mysqli->query("INSERT INTO " . $db_table . " (name, price, info) VALUES ('$name','$price', '$info')");
    if ($result == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}
?>
</body>
</html>
