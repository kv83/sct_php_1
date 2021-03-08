<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "library";
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $book_id =       $_POST['book_id'];
    $book_name =    $_POST['book_name'];
    $book_artikul =   $_POST['book_artikul'];
    $book_date =    $_POST['book_date'];
    $book_author = $_POST['book_author'];
    if(empty($book_id)){
        echo "Вы не задали ID строки для обновления данных!";
        return;
    }
    $update_columns = array();
    if(trim($book_name) !== "")   { $update_columns[] = "name = :name"; }
    if(trim($book_artikul) !== "")  { $update_columns[] = "artikul = :artikul"; }
    if(trim($book_date) !== "")   { $update_columns[] = "date = :date"; }
    if(trim($book_author) !== ""){ $update_columns[] = "author = :author"; }
    if(sizeof($update_columns > 0)){
        $sql = "UPDATE add_book SET " . implode(", ", $update_columns) . " WHERE id=:id";
        $statement = $db->prepare($sql);
        $statement->bindParam(":id", $book_id);
        if(trim($book_name) !== ""){
            $statement->bindParam(":name", $book_name);
        }
        if(trim($book_artikul) !== ""){
            $statement->bindParam(":artikul", $book_artikul);
        }
        if(trim($book_date) !== ""){
            $statement->bindParam(":date", $book_date);
        }
        if(trim($book_author) !== ""){
            $statement->bindParam(":author", $book_author);
        }
       $statement->execute();

        echo "Запись c ID: " . $book_id . " успешно обновлена!";
    } else { echo "error";}
}

catch(PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
$db = null;
?>
