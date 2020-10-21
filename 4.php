<?php
function letText($name, $age, array $text, $address)
{
    $f = array($age % 10, $age % 100);
    if($f[1] > 10 && $f[1] < 20) {
        return $text[2];
    } elseif ($f[0] > 1 && $f[0] < 5) {
        return $text[1];
    } else if ($f[0] == 1) {
        return $text[0];
    }
    return $text[2];
}
$name = ' Пётр ';
$age = 50;
$address = ' Москва, ул.Академика Королёва, 12 ';
echo $name, $age, ' ', letText($name, $age, array('год,', 'года,', 'лет,'), $address), $address;
?>