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
-- База данных: `add_klient`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dannie`
--

CREATE TABLE `dannie` (
  `id` int(100) NOT NULL,
  `fio` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dannie`
--

INSERT INTO `dannie` (`id`, `fio`, `passport`) VALUES
(3, 'Иванов Пётр Иванович', '2505543345'),
(5, 'Иванова Мария Андреевна', '2509123456'),
(6, 'Симеонов Андрей Петрович', '3456678909'),
(7, 'Павлов Антон Анатольевич', '1234567890');

-- --------------------------------------------------------

--
-- Структура таблицы `log_pass`
--

CREATE TABLE `log_pass` (
  `id` int(100) NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `log_pass`
--

INSERT INTO `log_pass` (`id`, `login`, `password`) VALUES
(3, 'Petya', '111'),
(5, 'Mary', '111'),
(6, 'Andry', '789'),
(7, 'Anton', '899');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `log_pass`
--
ALTER TABLE `log_pass`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dannie`
--
ALTER TABLE `dannie`
  ADD CONSTRAINT `dannie_ibfk_1` FOREIGN KEY (`id`) REFERENCES `log_pass` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
