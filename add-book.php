<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'book-link.php';
echo bookLink(), addBookLink();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Добавление книг в библиотеку</title>
    <style>
        label{display: inline-block;width: 170px;}
        form > div{margin-bottom: 5px;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
<body>
<h2>Добавление книг в библиотеку</h2>
<form method="POST" action="">
    <input name="name" type="text" placeholder="Наименование"/>
    <input name="artikul" type="text" placeholder="Артикул"/>
    <input name="date" type="text" placeholder="Дата добавления"/>
    <input name="author" type="text" placeholder="Автор"/>
    <input type="submit" value="Отправить"/>
</form>
</body>
</html>