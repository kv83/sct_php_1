<!doctype html>
<html>
<head>
    <title>JSON</title>
</head>
<body>
<?php
    $json = (["89050506568", "89050506545", "335566"]);
    $array2 = json_encode($json);
    $array = json_decode($array2);
    print('<pre>');
    print_r($array);
    print_r($array2);
    print('</pre>');
?>
</body>
</html>
