<?php
function letText($name, $age, $address)
{
    if  ($age%10 == 1) {
        $text = 'год';
    } elseif ($age%10 > 1 && $age %10 < 5) {
        $text = 'года';
    } else if ($age%10 >4 && $age%10 <21 ) {
        $text = "лет";
    }
echo "$name,  $address, $age, $text ";}
letText('Пётр', 105, ' Москва, ул.Академика Королёва, 12 ');

