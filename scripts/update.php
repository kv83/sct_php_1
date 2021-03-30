<html>
<head>
    <title>Itog</title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = new mysqli('localhost','root','root','library');
$id=$_REQUEST['id'];
$id2=$_REQUEST['id'];
$login=trim($_REQUEST['login']);
$password=trim($_REQUEST['password']);
$fio=trim($_REQUEST['fio']);
$dolzhnost=trim($_REQUEST['dolzhnost']);
$update_sql = "UPDATE log_pass_sotrudnik SET id='$id', login='$login', password='$password' WHERE id='$id'";
$update_sql2 = "UPDATE dannie_sotrudnik SET id='$id2', fio='$fio', dolzhnost='$dolzhnost' WHERE id='$id'";
mysqli_query($db, $update_sql) or die("Ошибка вставки" . mysqli_error());
mysqli_query ($db, $update_sql2) or die("Ошибка вставки" . mysqli_error());
echo '<p>Запись успешно обновлена!</p>';
?>
<a href="select_change.php">Вернуться к выбору записей для редактирования</a><br/><br/>
</body>
</html>
