<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = 'library';
$db_table1 = "log_pass_sotrudnik";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id =       $_POST['id'];
    $login =    $_POST['login'];
    $password =   $_POST['password'];
    if(empty($id)){
        echo "Вы не задали ID строки для обновления данных!";
        return;
    }
    $update_columns = array();
    if(trim($login) !== "")   { $update_columns[] = "login = :login"; }
    if(trim($password) !== "")  { $update_columns[] = "password = :password"; }
    if(sizeof($update_columns > 0)){
       $sql = "UPDATE log_pass_sotrudnik  SET " . implode(", ", $update_columns) . " WHERE id=:id";
       $statement = $db->prepare($sql);
        $statement->bindParam(":id", $id);
        if(trim($login) !== ""){
            $statement->bindParam(":login", $login);
        }
        if(trim($password) !== ""){
            $statement->bindParam(":password", $password);
        }
       $statement->execute();
        echo "Запись c ID: " . $id . " успешно обновлена!";
    } else { echo "error";}
}
catch(PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
