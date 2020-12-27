-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 27 2020 г., 17:02
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sct`
--

-- --------------------------------------------------------

--
-- Структура таблицы `изменение статуса заказа`
--

CREATE TABLE `изменение статуса заказа` (
  `ID` int(11) NOT NULL,
  `Заказ` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Роль пользователя` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Статус заказа` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i. Заказан` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ii. Оплачен` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iii. Отправлен` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iv. Доставлен` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `изменение товаров на складе`
--

CREATE TABLE `изменение товаров на складе` (
  `ID` int(11) NOT NULL,
  `Наименование товара` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Изменить` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Удалить` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Добавить` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Вывести` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `изменение товаров на складе специальными пользователями`
--

CREATE TABLE `изменение товаров на складе специальными пользователями` (
  `ID` int(100) NOT NULL,
  `Наименование товара` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Изменить` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Удалить` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Добавить` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Вывести` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `заказ товара пользователем`
--

CREATE TABLE `заказ товара пользователем` (
  `ID` int(100) NOT NULL,
  `Наименование товара` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Количество товара` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Заказать` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `регистрация или авторизация пользователей`
--

CREATE TABLE `регистрация или авторизация пользователей` (
  `ID` int(100) NOT NULL,
  `login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorised` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `изменение статуса заказа`
--
ALTER TABLE `изменение статуса заказа`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `изменение товаров на складе`
--
ALTER TABLE `изменение товаров на складе`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `изменение товаров на складе специальными пользователями`
--
ALTER TABLE `изменение товаров на складе специальными пользователями`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `заказ товара пользователем`
--
ALTER TABLE `заказ товара пользователем`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `регистрация или авторизация пользователей`
--
ALTER TABLE `регистрация или авторизация пользователей`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `изменение статуса заказа`
--
ALTER TABLE `изменение статуса заказа`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `изменение товаров на складе`
--
ALTER TABLE `изменение товаров на складе`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `изменение товаров на складе специальными пользователями`
--
ALTER TABLE `изменение товаров на складе специальными пользователями`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `заказ товара пользователем`
--
ALTER TABLE `заказ товара пользователем`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `регистрация или авторизация пользователей`
--
ALTER TABLE `регистрация или авторизация пользователей`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
