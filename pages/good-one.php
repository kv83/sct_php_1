<?php
if (isset($_GET['id'])) {
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db_name = 'sct';
    $link = mysqli_connect($host, $user, $pass, $db_name);
    $sql = mysqli_query($link, "SELECT id, name, price, info  FROM goods WHERE id = '" . (int) $_GET['id'] . "'");
    $result = mysqli_fetch_array($sql);
    ?>
    <p>Id - <?php echo $result['id']; ?></p>
    <p>Наименование - <?php echo $result['name']; ?></p>
    <p>Цена - <?php echo $result['price']; ?></p>
    <p>Информация - <?php echo $result['info']; ?></p>
<?php } elseif (!isset($_GET['id'])) {
    echo 'Введён неверный ID';
}?>
