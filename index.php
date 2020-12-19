<!doctype html>
<html>
<head>
    <title> Буферизация </title>
</head>
<body>
<?php
ob_start();
{
    include 'lib.php';
    $content = ob_get_contents();
}
ob_end_clean();
$contents = file_get_contents ( __DIR__ . DIRECTORY_SEPARATOR . 'html/main.html' );
echo str_replace ( '{{CONTENT1}}', "$content", $contents );
?>
</body>
</html>