<html>
<head>
    <title>Вносим изменеиния</title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = new mysqli('localhost','root','root','library');
$id = $_REQUEST['log_pass_sotrudnik'];
$select_sql = "SELECT id, login, password FROM log_pass_sotrudnik WHERE id= '$id'";
$id2 = $_REQUEST['dannie_sotrudnik'];
$select_sql2 = "SELECT id, fio, dolzhnost FROM dannie_sotrudnik WHERE id= '$id'";
$result = mysqli_query($db, $select_sql);
$row = mysqli_fetch_array($result);
$result2 = mysqli_query($db, $select_sql2);
$row2 = mysqli_fetch_array($result2);
printf("<form action='update.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>
<label for='login'>Логин:</label><br/>
<input type='text' name='login' size='30' value='%s'><br/>
<label for='password'>Пароль:</label><br/>
<input type='text' name='password' size='30' value='%s'><br/>
<label for='fio'>ФИО:</label><br/>
<input type='text' name='fio' size='30' value='%s'><br/>
<label for='dolzhnost'>Должность</label><br/>
<input name='dolzhnost' type='text'  size='30' value='%s'>
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Редактировать запись'><br/>
</fieldset>
</form>",$row['id'], $row['login'], $row['password'], $row2['fio'], $row2['dolzhnost']);
?>
</body>
</html>
