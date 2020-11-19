<?php
    $page = "<html>
    <head>
    <title>{{TITLE}}</title>
    </head>
    <body>
    {{CONTENT}}
    </body>
    </html>";
        function replaceTitle($html, $newTitle){
        return str_replace("{{TITLE}}", $newTitle, $html);
    }
            function replaceContent($html, $newContent){
            return str_replace("{{CONTENT}}", $newContent, $html);
        }
                function getReplace($element, $replacement){
                global $page; //по условию задачи функция принимает только 2 параметра, поэтому код страницы я решил получить так
                switch($element){
                case "title" : return replaceTitle($page, $replacement);break;
                case "content" : return replaceContent($page, $replacement);break;
                default : return "";break;
        }
    }
$page = getReplace("title", "this is new title");
$page = getReplace("content", "this is new content");
echo $page;