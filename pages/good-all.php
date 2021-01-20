<?php
function connect () {
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db_name = 'sct';
$link = mysqli_connect($host, $user, $pass, $db_name);
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
} else {
return $link;
}
}
$s = mysqli_query(connect(), 'SELECT id, name, price, info FROM goods');
while ($result = mysqli_fetch_array($s)) {
    echo "Наименование: {$result['name']}: Цена: {$result['price']}".
        '<a href="?page=good-one&id=' . $result['id']. '"> Подробнее </a>'."<br>";
}
?>
<hr><a href="?page=add-goods">Форма добавления товаров на склад</a>

