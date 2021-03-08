-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 08 2021 г., 22:51
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
-- База данных: `add_sotrudnik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dannie`
--

CREATE TABLE `dannie` (
  `id` int(110) NOT NULL,
  `fio` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolzhnost` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dannie`
--

INSERT INTO `dannie` (`id`, `fio`, `dolzhnost`) VALUES
(1, 'Петрова Лариса Сергеевна', 'Библиотекарь'),
(2, 'Петров Борис Викторович', 'Системный администратор'),
(3, 'Смирнов Иван Васильевич', 'Архивариус');

-- --------------------------------------------------------

--
-- Структура таблицы `log_pass`
--

CREATE TABLE `log_pass` (
  `id` int(110) NOT NULL,
  `login` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `log_pass`
--

INSERT INTO `log_pass` (`id`, `login`, `password`) VALUES
(1, 'user2', '789'),
(2, 'user1', '111'),
(3, 'user3', '963');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dannie`
--
ALTER TABLE `dannie`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_pass`
--
ALTER TABLE `log_pass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dannie`
--
ALTER TABLE `dannie`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `log_pass`
--
ALTER TABLE `log_pass`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
