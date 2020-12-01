<!doctype html>
<html>
<head>
    <title>Решение</title>
</head>
<body>
<?php
function vozvrat($a, $b) {
    if($a === $b) {
        echo 'Числа равны';
        return;
    }
    $arr = range($a, $b);
    sort($arr);
    echo implode(' ', $arr);
}
vozvrat(12,2) // По-моему проще некуда
?>
</body>
</html>