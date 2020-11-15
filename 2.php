<!doctype html>
<html>
<head>
    <title>Функции 2</title>
</head>
<body>
<?php
function mb_ucfirst($string, $enc = 'UTF-8')
{
    return mb_strtoupper(mb_substr($string, 0, 1, $enc), $enc) .
        mb_substr($string, 1, mb_strlen($string, $enc), $enc);
}
    $str = "пРИВЕТ МИР!";
    $str = mb_ucfirst(mb_strtolower($str));
    $a =array (" " => "_");
        if ($str[strlen($str) - 1] == '.' or $str[strlen($str)-1] == '!'
        or $str[strlen($str) - 1] == ',' or $str[strlen($str) - 1] == '?')
{
    echo strtr ($str, $a);
}  else {
    $str = trim($str) . ".";
    echo strtr ($str, $a);
}
?>
</body>
</html>