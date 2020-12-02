<!doctype html>
<html>
<head>
    <title> Сортировка массивов </title>
</head>
<body>
<?php
    $a = [2,5,7,6];
    $b = [3,2,5,1,9];
    $arr_1 = array_diff($a, $b);
    $arr_2 = array_diff($b, $a);
    asort ($arr_1);
    asort ($arr_2);
    $c=implode(', ',$arr_1);
    $d=implode(', ',$arr_2);
        echo 'Числа из массива 1, отсутствующие в массиве 2:  ' . $c. '<hr>';
        echo 'Числа из массива 2, отсутствующие в массиве 1:  ' . $d. '<hr>';
?>
</body>
</html>