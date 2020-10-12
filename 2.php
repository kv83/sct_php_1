<html>
<body>
<?php
$x1=rand(-100, 100);
$x2=rand(-100, 100);
$x3=rand(-100, 100);
    if ($x1>=$x2 and $x1>=$x3 and $x2>=$x3) {
        echo($x3 . ',' . $x2 . ',' . $x1);
    }
    if ($x1>=$x2 and $x1>=$x3 and $x3>=$x2) {
        echo($x2 . ',' . $x3 . ',' . $x1);
    }
    if ($x2>=$x1 and $x2>=$x3 and $x1>=$x3) {
        echo($x3 . ',' . $x1 . ',' . $x2);
    }
    if ($x2>=$x1 and $x2>=$x3 and $x3>=$x1) {
        echo($x1 . ',' . $x3 . ',' . $x2);
    }
    if ($x3>=$x1 and $x3>=$x2 and $x1>=$x2) {
        echo($x2 . ',' . $x1 . ',' . $x3);
    }
    if ($x3>=$x1 and $x3>=$x2 and $x2>=$x1) {
        echo($x1 . ',' . $x2 . ',' . $x3);
    }
    ?>
</body>
</html>
