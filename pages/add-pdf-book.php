<?php
$limit_size = 5120000;
$valid_format = array("pdf");
$error_array = array();
$path_file = "pdf/";
$rand_name = md5(time() . mt_rand(0, 9999));
if($_FILES){
    if($_FILES["upload_file"]["size"] > $limit_size){
        $error_array[] = "Размер файла превышает допустимый!";
    }
    $format = end(explode(".", $_FILES["upload_file"]["name"]));
    if(!in_array($format, $valid_format)){
        $error_array[] = "Формат файла не допустимый!";
    }
    if(empty($error_array)){
        if(is_uploaded_file($_FILES["upload_file"]["tmp_name"])){
            move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path_file . $rand_name . ".$format");
        }else{
            $error_array[] = "Ошибка загрузки!";
        }
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<br/>
<?php if(!empty($error_array)): ?>
    <span style="color: red;">Файл не загружен!</span><br/>
    <?php foreach($error_array as $one_error): ?>
        <span style="color: red;"><?=$one_error;?></span><br/>
    <?php endforeach; ?>
<?php endif; ?>
<?php if(empty($error_array) AND $_FILES): ?>
    <span style="color: green;">Файл успешно загружен!</span><br/>
<?php endif; ?>
<?php
$link = mysqli_connect('localhost', 'root', 'root', 'library');
if (!$link) {
echo 'Ошибка соединения';
}
$sql = mysqli_query($link, "INSERT INTO files (name, path, 'pdf/') VALUES ($rand_name, $path_file)");
?>
<form action="add-pdf-book.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload_file"><br>
    <input type="submit" value="Загрузить"><br>
</form>
</body>
</html>
