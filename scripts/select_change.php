<?
include '../pages/login-biblio.php';
?>
<html>
<head>
    <title>Выбор пользователя для редактирования.</title>
</head>
<body>
<form action="../scripts/edit.php" method="post">
    <fieldset>
        <?php
echo 'Выберите сотрудника для редактирования<br><br>';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $db = new mysqli('localhost','root','root','library');
        $select_sql = "SELECT id, login, password FROM log_pass";
        $result = mysqli_query($db, $select_sql);
        $row = mysqli_fetch_array ($result);
        $select_sql2 = " SELECT log_pass_id, fio, dolzhnost FROM dannie_sotrudnik";
        $result2 = mysqli_query($db, $select_sql2);
        $row2 = mysqli_fetch_array ($result2);
        do
        {
            printf("<input type='radio' name='log_pass'  value='%s'>%s %s %s %s %s <br/><br/>", $row['id'], $row['login'], $row['password'], $row2['log_pass_id'], $row2['fio'], $row2['dolzhnost']);
        }
        while ($row = mysqli_fetch_array($result) and $row2 = mysqli_fetch_array($result2))
        ?>
    </fieldset>
    <fieldset>
        <input type="submit" value="Выбрать элемент">
    </fieldset>
</form>
</body>
</html>
