<!doctype html>
<html>
<head>
    <title>Функции 2</title>
</head>
<body>
<?php
    $str = "HAVE A NICE DAY  ";
    $str = ucfirst(strtolower($str));
    $a =array (" " => "_");
        if ($str[strlen($str) - 1] == '.' or $str[strlen($str) - 1] == '!'
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