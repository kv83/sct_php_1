<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'book-link.php';
echo bookLink();
include 'vozvrat-link.php';
echo vozvratTable (), vozvratLink();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Возврат книг</title>
    <style>
        label{display: inline-block;width: 170px;}
        form > div{margin-bottom: 5px;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
<h2>Возврат книг</h2>
<form method="POST" action="">
    <input name="date" type="text" placeholder="Дата возврата"/>
    <input name="name" type="text" placeholder="Название книги"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input name="sotrudnik" type="text" placeholder="Сотрудник"/>
    <input type="submit" value="Отправить"/>
</form>
</html>