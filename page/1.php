<h1>Калькулятор</h1>
<?php
$first = $_POST['number1'];
$second = $_POST['number2'];
//if (!is_numeric($first)) { unset($first); }
//if (!is_numeric($second)) { unset($second); }
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> Калькулятор </title>
</head>
<body>
<form action="" method="post" class="calculate-form">
    <input type="text" name="number1" class="numbers" placeholder="Введите ервое число" value="<?php echo $first; ?>" >
    <select class="operations" name="operation">
        <?php
        $arr= array('plus'=>'+', 'minus'=>'-', 'multiply'=>'*','divide'=>'/');
        foreach ($arr as $k => $v) {
            echo '<option value="'.$k.'"'.($k == $_POST['operation'] ? ' selected="selected"' : '').'>'.$v.'</option>';
        }
        ?>
    </select>
    <input type="text" name="number2" class="numbers" placeholder="Ведите второе число" value="<?php echo $second; ?>" >
    <input class="submit_form" type="submit" name="submit" value="Рассчитать">
</form>
</form>
<?php
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
}
if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
    $error_result = 'Не все поля заполнены';
} else {
    if(!is_numeric($number1) || !is_numeric($number2)) {
        $error_result = "Водить нужно только числа";
    } else switch($operation) {
        case 'plus':
            $result = $number1 + $number2;
            break;
        case 'minus':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if( $number2 == '0')
                $error_result = "На ноль делить нельзя!";
            else
                $result = $number1 / $number2;
            break;
    }
}
if(isset($error_result)) {
    echo "Ошибка: $error_result";
} else {
    echo "Ответ: $result";
}
?>
</body>
</html>



