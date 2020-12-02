<!doctype html>
<html>
<head>
    <title>Сортировка массивов 2</title>
</head>
<body>
<?php
$massiv = [
    [
        'name' => 'Стул 1',
        'price' => 20,
        'category' => 1
    ],
    [
        'name' => 'Стул 2',
        'price' => 210,
        'category' => 2
    ],
    [
        'name' => 'Стул 3',
        'price' => 15,
        'category' => 2
    ],
    [
        'name' => 'Стул 4',
        'price' => 5,
        'category' => 2
    ]
];
function vozrastanie($a, $b){
    return ($a['price'] > $b['price']);
}
uasort($massiv, 'vozrastanie');
print('<pre>');
print_r($massiv);
print('</pre>');
    ?>
</body>
</html>
