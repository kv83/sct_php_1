<?php
$name = ' Пётр ';
$age = 101;
$address = ' Москва, ул.Академика Королёва, 12 ';
function letText($name, $age, $address)
{
    if  ($age%10 == 1) {
        echo $text = 'год';
    } elseif ($age%10 > 1 && $age %10 < 5) {
        echo $text = 'года';
    } else if ($age%10 >4 && $age%10 <21 ) {
        echo $text = "лет";
    }
}
echo "$name,  $address, $age  ";
letText($name, $age, $address)
?>
