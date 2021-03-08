<html>
<body>
<h2>Добавление сотрудников</h2>
<form method="POST" action="">
    <input name="login" type="text" placeholder="Логин"/>
    <input name="password" type="text" placeholder="Пароль"/>
    <input name="fio" type="text" placeholder="ФИО"/>
    <input name="dolzhnost" type="text" placeholder="Должность"/>
    <input type="submit" value="Отправить"/>
</form>
<?php
if (!empty($_POST['login']) && !empty($_POST['password'])&& !empty ($_POST['fio']) && !empty ($_POST['dolzhnost'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $fio = $_POST['fio'];
    $dolzhnost = $_POST['dolzhnost'];
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'add_sotrudnik';
    $db_table = "dannie";
    $db_table1 = "log_pass";
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
?>
</body>
</html>


