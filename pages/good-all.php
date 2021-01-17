<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'sct';
$link = mysqli_connect($host, $user, $pass, $db_name);
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
$sql = mysqli_query($link, 'SELECT id, name, price, info FROM goods');
while ($result = mysqli_fetch_array($sql)) {
    echo "Наименование: {$result['name']}: Цена: {$result['price']}  ".
        '<a href="?page=good-one&id=">Введите ID товара для вывода подробной информации</a>'."<br>";
}
?>
<hr><a href="?page=add">Форма добавления товаров на склад</a>

