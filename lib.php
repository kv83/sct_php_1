<?php
function getContent()
{
    ob_start();
    include getPageName();
    return ob_get_clean();
}
function getPageName()
{
    $mainPage = __DIR__ . '/pages/main.php';
    if (empty($_GET['page'])) {
         return $mainPage;
    }
    $pageName = __DIR__ . '/pages/' . trim($_GET['page']) . '.php';
    if (file_exists($pageName)) {
        return $pageName;
    }
    return $mainPage;
}
function getMenu()
{
    return '
        <ul>
            <li><a href="?page=main">Главная</a></li>
            <li><a href="?page=auth-biblio">Авторизация сотрудников библиотеки</a></li>
            <li><a href="?page=auth-reader-page">Авторизация читателей</a></li>
        </ul>
    ';
}
