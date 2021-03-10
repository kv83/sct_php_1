<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'book-link.php';
echo bookLink();
include 'vidacha-link.php';
echo vidachaTable(), vidachaLink();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Выдача книг</title>
    <style>
        label{display: inline-block;width: 170px;}
        form > div{margin-bottom: 5px;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
<h2>Выдача книг</h2>
<form method="POST" action="">
    <input name="name" type="text" placeholder="Название книги"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input name="date" type="text" placeholder="Дата выдачи"/>
    <input name="sotrudnik" type="text" placeholder="Сотрудник"/>
    <input name="srok" type="text" placeholder="Срок выдачи"/>
    <input name="chitatel" type="text" placeholder="Читатель"/>
    <input type="submit" value="Отправить"/>
</form>
</html>
