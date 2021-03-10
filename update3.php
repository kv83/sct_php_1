<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = 'library';
$db_table = "dannie_sotrudnik";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id =       $_POST['id'];
    $fio =    $_POST['fio'];
    $dolzhnost = $_POST['dolzhnost'];
    if(empty($id)){
        echo "Вы не задали ID строки для обновления данных!";
        return;
    }
    $update_columns = array();
    if(trim($fio) !== "")   { $update_columns[] = "fio = :fio"; }
    if(trim($dolzhnost) !== ""){ $update_columns[] = "dolzhnost = :dolzhnost"; }
    if(sizeof($update_columns > 0)){
        $sql = "UPDATE dannie_sotrudnik SET " . implode(", ", $update_columns) . " WHERE id=:id";
        $statement = $db->prepare($sql);
        $statement->bindParam(":id", $id);
        if(trim($fio) !== ""){
            $statement->bindParam(":fio", $fio);
        }
        if(trim($dolzhnost) !== ""){
            $statement->bindParam(":dolzhnost", $dolzhnost);
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
