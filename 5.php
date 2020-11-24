<?php
function page(){
    $page = "<html>
    <head>
    <title>{{TITLE}}</title>
    </head>
    <body>
    {{CONTENT}}
    </body>
    </html>";
    return $page;
}
function replaceTitle($html, $newTitle){
    return str_replace("{{TITLE}}", $newTitle, $html);
}
function replaceContent($html, $newContent){
    return str_replace("{{CONTENT}}", $newContent, $html);
}
function getReplace($page, $element, $replacement){
    switch($element){
        case "title" : return replaceTitle($page, $replacement);break;
        case "content" : return replaceContent($page, $replacement);break;
        default : return "";break;
    }
}
$page = page();
$page = getReplace($page, "title", "this is new title");
$page = getReplace($page, "content", "this is new content");
echo $page;

