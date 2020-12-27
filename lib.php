<?php
function getPage ()
{
    if(!is_numeric($_GET['page']) or $_GET["page"] =="" or $_GET["page"] == 1) {
        include 'page/1.php';
    } elseif ($_GET["page"] == 2) {
        include 'page/2.php';
    }
}
    function logic ()
    {
        $file = "log.txt";    //куда пишем логи
        $col_zap = 4999;        //строк в файле не более
        $date = date("H:i:s d.m.Y");        //дата события
        $home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    //какая страница сайта
        $lines = file($file);
        while (count($lines) > $col_zap) array_shift($lines);
        $lines[] = $date . "|" . $home . "|\r\n";
        file_put_contents($file, $lines);
}



