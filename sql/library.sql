-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 08 2021 г., 22:49
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
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `add_book`
--

CREATE TABLE `add_book` (
  `id` int(110) NOT NULL,
  `name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikul` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `add_book`
--

INSERT INTO `add_book` (`id`, `name`, `artikul`, `date`, `author`) VALUES
(1, 'Преступление и наказание', '2', '13.02.2021', 'Ф.М.Достоевский'),
(2, 'Мёртвые души', '24', '11.01.2021', 'Н.В.Гоголь'),
(3, 'Война и мир', '11', '13.02.2021', 'Л.Н.Толстой'),
(5, 'Руслан и Людмила', '46', '17.03.2021', 'А.С.Пушкин'),
(6, 'Приключения Тома Сойера и Гекльберри Финна', '44', '12.12.2020', 'М.Твен'),
(16, 'Путешествие Нильса с дикими гусями', '34', '13.02.2021', 'С.Лагерлёф');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vidacha`
--

CREATE TABLE `vidacha` (
  `id` int(110) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotrudnik` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `srok` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitatel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vidacha`
--

INSERT INTO `vidacha` (`id`, `name`, `author`, `date`, `sotrudnik`, `srok`, `chitatel`) VALUES
(1, 'Война и мир', 'Л.Н.Толстой', '17.03.2021', 'Петрова Лариса Сергеевна', '14 дней', 'Иванов Пётр Иванович'),
(8, 'Мёртвые души', 'Н.В.Гоголь', '17.03.2021', 'Петрова Лариса Сергеевна', '14 дней', 'Иванов Пётр Иванович'),
(11, 'Руслан и Людмила', 'А.С.Пушкин', '17.03.2021', 'Петрова Лариса Сергеевна', '14 дней', 'Иванова Мария Андреевна');

-- --------------------------------------------------------

--
-- Структура таблицы `vozvrat`
--

CREATE TABLE `vozvrat` (
  `id` int(100) NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotrudnik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vozvrat`
--

INSERT INTO `vozvrat` (`id`, `date`, `name`, `author`, `sotrudnik`) VALUES
(5, '30.03.2021', 'Руслан и Людмила', 'А.С.Пушкин', 'Петрова Лариса Сергеевна'),
(7, '13.02.2021', 'Война и мир', 'Л.Н.Толстой', 'Петрова Лариса Сергеевна');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vidacha`
--
ALTER TABLE `vidacha`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vozvrat`
--
ALTER TABLE `vozvrat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vidacha`
--
ALTER TABLE `vidacha`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `vozvrat`
--
ALTER TABLE `vozvrat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
