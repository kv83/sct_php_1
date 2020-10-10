<html>
<body>
<?php
/*$x
$c = isset($x);
var_dump($c);
var $x
$c = isset($x);
var_dump($c);*/
$x = null;
$c = isset($x);
var_dump($c);
$x = "";
$c = isset($x);
var_dump($c);
$x = array();
$c = isset($x);
var_dump($c);

$x = array('a', 'b');
$c = isset($x);
var_dump($c);
$x =false;
$c = isset($x);
var_dump($c);
$x =true;
$c = isset($x);
var_dump($c);
$x =  1;
$c = isset($x);
var_dump($c);
$x = 42;
$c = isset($x);
var_dump($c);
$x = 0;
$c = isset($x);
var_dump($c);
$x = -1;
$c = isset($x);
var_dump($c);
$x ="1";
$c = isset($x);
var_dump($c);
$x = "0";
$c = isset($x);
var_dump($c);
$x = "-1";
$c = isset($x);
var_dump($c);
$x = "php";
$c = isset($x);
var_dump($c);
$x ="true";
$c = isset($x);
var_dump($c);
$x = "false";
$c = isset($x);
var_dump($c);
?>
