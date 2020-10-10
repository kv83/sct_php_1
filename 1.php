<html>

<body>
<?php
/*$x
$c=(bool)$x;
var_dump($c);
var $x
$c=(bool)$x;
var_dump($c);
$x = null;
$c=(bool)$x;
var_dump($c);
$x = "";
$c=(bool)$x;
var_dump($c);*/
$x = array();
$c=(bool)$x;
var_dump($c);

$x = array('a', 'b');
$c=(bool)$x;
var_dump($c);
$x =false;
$c=(bool) $x;
var_dump($c);
$x =true;
$c=(bool) $x;
var_dump($c);
$x =  1;
$c=(bool) $x;
var_dump($c);
$x = 42;
$c=(bool) $x;
var_dump($c);
$x = 0;
$c=(bool) $x;
var_dump($c);
$x = -1;
$c=(bool) $x;
var_dump($c);
$x ="1";
$c=(bool) $x;
var_dump($c);
$x = "0";
$c=(bool) $x;
var_dump($c);
$x = "-1";
$c=(bool) $x;
var_dump($c);
$x = "php";
$c=(bool) $x;
var_dump($c);
$x ="true";
$c=(bool) $x;
var_dump($c);
$x = "false";
$c=(bool) $x;
var_dump($c);
?>
