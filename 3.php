<?php
    $getContent = '<html>
        <head>
        <title>{{TITLE}}</title>
        </head>
        <body>
        {{CONTENT}}
        </body>
        </html>';
    $value = array('{{TITLE}}'=>'Заголовок','{{CONTENT}}'=>'Контент');
    getReplace($value, array(&$getContent));
    function getReplace($array,$text){
        if(!is_array($text))
        {
            $text=array();
            $text[]=&$text;
    }
    for($l = count($text ); $l--;)
    foreach($array as $k=>$val)
    {
    $text[$l] = str_replace ($k, $val, $text[$l]);
}
}
echo $getContent;