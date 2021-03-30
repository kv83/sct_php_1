<?php
function sotrudnikLink ()
{
    if (!empty($_POST['login']) && !empty($_POST['password']) && !empty ($_POST['fio']) && !empty ($_POST['dolzhnost'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $fio = $_POST['fio'];
        $dolzhnost = $_POST['dolzhnost'];
        $db_table = "dannie_sotrudnik";
        $db_table1 = "log_pass_sotrudnik";
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
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
    }

    function addKlientTable ()
{
        mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
        try {
            $db = new mysqli('localhost', 'root', 'root', 'library');
            $db->set_charset('utf8');
            $sql = "SELECT log_pass_klient.id, log_pass_klient.login, log_pass_klient.password , dannie_klient.id, dannie_klient.fio, dannie_klient.passport FROM log_pass_klient, dannie_klient where log_pass_klient.id=dannie_klient.id";
            if(!$statement = $db->prepare($sql))
                throw new Exception($db->error);
            $statement->execute();
            $result_array = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
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
        } catch (Exception $e) {
            echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
        }
}


function addKlientLink ()
{
    if (!empty($_POST['login']) && !empty($_POST['password']) && !empty ($_POST['fio']) && !empty ($_POST['passport'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $fio = $_POST['fio'];
        $passport = $_POST['passport'];
        $db_table = "dannie_klient";
        $db_table1 = "log_pass_klient";
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
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

function vidachaTable()
{
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
    try {
        $db = new mysqli('localhost', 'root', 'root', 'library');
        $db->set_charset('utf8');
        $sql = "SELECT id, name, author, date, sotrudnik, srok, chitatel FROM vidacha";
        if(!$statement = $db->prepare($sql))
            throw new Exception($db->error);
            $statement->execute();
            $result_array = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        echo "<br><br><table><tr><th>id</th><th>name</th><th>author</th><th>date</th><th>sotrudnik</th><th>srok</th><th>chitatel</th></tr>";
        foreach ($result_array as $result_row) {
            echo "<tr>";
            echo "<td>" . $result_row["id"] . "</td>";
            echo "<td>" . $result_row["name"] . "</td>";
            echo "<td>" . $result_row["author"] . "</td>";
            echo "<td>" . $result_row["date"] . "</td>";
            echo "<td>" . $result_row["sotrudnik"] . "</td>";
            echo "<td>" . $result_row["srok"] . "</td>";
            echo "<td>" . $result_row["chitatel"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } catch (Exception $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
}

function vidachaLink()
{
    if (!empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['date']) && !empty($_POST['sotrudnik']) && !empty ($_POST['srok']) && !empty ($_POST['chitatel'])) {
        $name = $_POST['name'];
        $author = $_POST['author'];
        $date = $_POST['date'];
        $sotrudnik = $_POST['sotrudnik'];
        $srok = $_POST['srok'];
        $chitatel = $_POST['chitatel'];
        $db_table = 'vidacha';
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
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
}

function vozvratTable()
{
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
    try {
    $db = new mysqli('localhost', 'root', 'root', 'library');
    $db->set_charset('utf8');
    $sql = "SELECT id, date, name, author, sotrudnik FROM vozvrat";
    if(!$statement = $db->prepare($sql))
        throw new Exception($db->error);
    $statement->execute();
    $result_array = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
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
    } catch (Exception $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
}

function vozvratLink()
{
    if (!empty($_POST['date']) && !empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['sotrudnik'])) {
        $date = $_POST['date'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $sotrudnik = $_POST['sotrudnik'];
        $db_table = 'vozvrat';
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
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

function biblioLink()
{
    if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
        $query = 'SELECT * FROM log_pass_sotrudnik WHERE login="' . $login . '" AND password="' . $password . '"';
        $result = mysqli_query($mysqli, $query);
        $users = mysqli_fetch_assoc($result);
        if (!empty($users)) {
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $users['id'];
            $_SESSION['login'] = $users['login'];
            include 'login-biblio.php';
        } else {
            echo 'Введён неверный логин или пароль';
        }
    }
}

function authReader()
{
    if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
        $query = 'SELECT*FROM log_pass_klient WHERE login="' . $login . '" AND password="' . $password . '"';
        $result = mysqli_query($mysqli, $query);
        $users = mysqli_fetch_assoc($result);
        if (!empty($users)) {
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $users['id'];
            $_SESSION['login'] = $users['login'];
            include 'login-reader.php';
        } else {
            echo 'Введён неверный логин или пароль';
        }
    }
}

function lichnyTable()
{
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
    try {
    $db = new mysqli('localhost', 'root', 'root', 'library');
    $db->set_charset('utf8');
    $sql = "SELECT log_pass_sotrudnik.id, log_pass_sotrudnik.login, log_pass_sotrudnik.password , dannie_sotrudnik.id, dannie_sotrudnik.fio, dannie_sotrudnik.dolzhnost FROM log_pass_sotrudnik, dannie_sotrudnik where log_pass_sotrudnik.id=dannie_sotrudnik.id";
    if(!$statement = $db->prepare($sql))
        throw new Exception($db->error);
    $statement->execute();
    $result_array = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
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
    } catch (Exception $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
}

function bookLink()
{
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
    try {
    $db = new mysqli('localhost', 'root', 'root', 'library');
    $db->set_charset('utf8');
    $sql = "SELECT id, name, artikul, date, author FROM add_book";
    if(!$statement = $db->prepare($sql))
        throw new Exception($db->error);
    $statement->execute();
    $result_array = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
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
    } catch (Exception $e) {
        echo "Ошибка при создании записи в базе данных: " . $e->getMessage();
    }
}

function addBookLink()
{
    if (!empty($_POST['name']) && !empty($_POST['artikul']) && !empty ($_POST['date']) && !empty ($_POST['author'])) {
        $name = $_POST['name'];
        $artikul = $_POST['artikul'];
        $date = $_POST['date'];
        $author = $_POST['author'];
        $db_table = "add_book";
        $mysqli = new mysqli('localhost', 'root', 'root', 'library');
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





