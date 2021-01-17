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
            <li><a href="?page=users-all">Все пользователи</a></li>
            <li><a href="?page=auth-form">Авторизация</a></li>
            <li><a href="?page=good-all">Информация о товарах</a></li>
        </ul>
    ';
}
function getFoot ()
{
    return '
    <footer><ul>
            <li><a href="?page=fromus">О нас</a></li>
            <li><a href="?page=contacts">Контакты</a></li>
            </ul>
		<address>Контактные данные автора сайта</address>
	</footer>
	';
}