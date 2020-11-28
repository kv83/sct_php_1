<!doctype html>
<html>
<head>
    <title>Массивы 2</title>
</head>
<body>
<?php
$tovar = [
        'phone' => ['nokia 3110', 'motorola e5', 'meizu 8'],
        'furniture' => ['divan', 'stol', 'stul'],
        'auto' => ['toplivo', 'antifriz', 'maslo']
];
    foreach ($tovar as $key=>$value){
        if (is_array($value)){
            echo $key.' => <br>';
            foreach ($value as $value1) {
               echo $value1.'<br>';
           }
        }
}
?>
</body>
</html>
