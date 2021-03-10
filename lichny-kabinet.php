<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'lichny-kabinet-link.php';
echo lichnyTable ();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет сотрудников</title>
    <style>
        label{display: inline-block;width: 170px;}
        form > div{margin-bottom: 5px;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
<h2>Изменить логин или пароль</h2>
<form action="update2.php" method="POST">
    <div>
        <label for="id">Выберите ID строки *:</label>
        <input type="number" id="id" name="id" required>
    </div>
    <div>
        <label for="login">Логин</label>
        <input type="text" id="login" name="login">
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="text" id="password" name="password">
    </div>
    <input type="submit" value="Обновить запись">
</form>

<h2>Изменить ФИО или должность</h2>
<form action="update3.php" method="POST">
    <div>
        <label for="id">Выберите ID строки *:</label>
        <input type="number" id="id" name="id" required>
    </div>
        <div>
            <label for="fio">ФИО</label>
            <input type="text" id="fio" name="fio">
        </div>
        <div>
            <label for="dolzhnost">Должность</label>
            <input type="text" id="dolzhnost" name="dolzhnost">
        </div>
        <input type="submit" value="Обновить запись">
    </form>
    </body>
    </html>
