<?
include 'login-biblio.php';
file_get_contents('login-biblio.php');
include 'book-link.php';
echo bookLink();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Книги в библиотеке</title>
    <style>
        label{display: inline-block;width: 170px;}
        form > div{margin-bottom: 5px;}
        td:nth-child(5),td:nth-child(6){text-align:center;}
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
    </style>
</head>
</html>
