<html>
<body>
<?php
function letText($age, array $text)
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
$age = 51;
echo  $age, ' ', letText($age, array('год', 'года', 'лет'));
?>
</body>
</html>
