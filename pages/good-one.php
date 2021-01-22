<?php require_once "good-all.php";?>
<?php
if (!empty($_GET['id'])) {
    $s = mysqli_query(connect(), "SELECT id, name, price, info  FROM goods WHERE id = '" . (int) $_GET['id'] . "'");
    $result = mysqli_fetch_array($s);
    ?>
    <p>Id - <?php echo $result['id']; ?></p>
    <p>Наименование - <?php echo $result['name']; ?></p>
    <p>Цена - <?php echo $result['price']; ?></p>
    <p>Информация - <?php echo $result['info']; ?></p>
<?php }
?>
