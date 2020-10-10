<html>
<body>
<?php
$option = 'action2';
?>
<select name = "" id = "">
    <option value = "+" <?php if ($option == 'action1'){echo 'selected';}?>>Сложить</option>
    <option value = "-" <?php if ($option == 'action2'){echo 'selected';}?>>Вычесть</option>
    <option value = "*" <?php if ($option == 'action3'){echo 'selected';}?>>Умножить</option>
    <option value = "/" <?php if ($option == 'action4'){echo 'selected';}?>>Разделить</option>
</select>
</body>
</html>