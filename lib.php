<!doctype html>
<html>
<head>
    <title> Передача данных </title>
</head>
<body>
<?php
function getPage ()
{
    if ($_GET["page"] == 1) {
        include 'page/1.php';
    }
    if ($_GET["page"] == 2) {
        include 'page/2.php';
    } elseif (!is_numeric($_GET['page']) or $_GET["page"] ==""){
        include 'page/1.php';
    }
    echo '<br>Передано методом '.$_SERVER['REQUEST_METHOD'];
}
getPage();
    function logic ()
    {
        $file = "log.txt";
        $col_zap = 999;
        $date = date("H:i:s d.m.Y");
        $home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $lines = file($file);
        while (count($lines) > $col_zap) array_shift($lines);
        $lines[] = $date . "|" . $home . "|\r\n";
        file_put_contents($file, $lines);
}
logic ();
?>
</body>
</html>
