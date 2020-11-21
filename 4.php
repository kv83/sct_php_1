<title>Таблица умножения</title>
<?php
function umnozh ()
{
    $i = 10;
    $j = 10;
    echo "<table border=\"10\">";
    for ($a = 1; $a < $i; $a++) {
        echo '<tr>';
        for ($b = 1; $b < $j; $b++)
            echo '<td>' . $b * $a . '</td>';
        echo '</tr>';
    }
    echo "</table>";
}
echo umnozh ();
