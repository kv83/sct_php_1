<html>
<body>
<?php
/*$x
$c = empty ($x);
var_dump($c);
var $x
$c = empty ($x);
var_dump($c);*/
$x = null;
$c = empty ($x);
var_dump($c);
$x = "";
$c = empty ($x);
var_dump($c);
$x = array();
$c = empty ($x);
var_dump($c);

$x = array('a', 'b');
$c = empty ($x);
var_dump($c);
$x =false;
$c = empty ($x);
var_dump($c);
$x =true;
$c = empty ($x);
var_dump($c);
$x =  1;
$c = empty ($x);
var_dump($c);
$x = 42;
$c = empty ($x);
var_dump($c);
$x = 0;
$c = empty ($x);
var_dump($c);
$x = -1;
$c = empty ($x);
var_dump($c);
$x ="1";
$c = empty ($x);
var_dump($c);
$x = "0";
$c = empty ($x);
var_dump($c);
$x = "-1";
$c = empty ($x);
var_dump($c);
$x = "php";
$c = empty ($x);
var_dump($c);
$x ="true";
$c = empty ($x);
var_dump($c);
$x = "false";
$c = empty ($x);
var_dump($c);
?>

