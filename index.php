<!doctype html>
<html>
<head>
    <title> Буферизация </title>
</head>
<body>
<?php
include 'lib.php';
ob_start();
{
    $content = ob_get_contents();
}
ob_end_clean();
getPage();
logic ();
    $contents = file_get_contents ( __DIR__ . DIRECTORY_SEPARATOR . 'html/main.html' );
        echo str_replace ( '{{CONTENT1}}', "$content", $contents );
?>
</body>
</html>