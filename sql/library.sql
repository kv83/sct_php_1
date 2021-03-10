-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2021 г., 23:25
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
(16, 'Путешествие Нильса с дикими гусями', '34', '13.02.2021', 'С.Лагерлёф'),
(21, 'Вишнёвый сад', '1', '11.12.2020', 'А.П.Чехов'),
(22, 'Старик и море', '2', '09.12.2020', 'Э.Хемингуэй');

-- --------------------------------------------------------

--
-- Структура таблицы `dannie_klient`
--

CREATE TABLE `dannie_klient` (
  `id` int(100) NOT NULL,
  `fio` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dannie_klient`
--

INSERT INTO `dannie_klient` (`id`, `fio`, `passport`) VALUES
(3, 'Иванов Пётр Иванович', '2505543345'),
(5, 'Иванова Мария Андреевна', '2509123456'),
(6, 'Симеонов Андрей Петрович', '3456678909'),
(7, 'Павлов Антон Анатольевич', '1234567890'),
(8, 'Варкова Анна Владимировна', '4567890123');

-- --------------------------------------------------------

--
-- Структура таблицы `dannie_sotrudnik`
--

CREATE TABLE `dannie_sotrudnik` (
  `id` int(110) NOT NULL,
  `fio` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolzhnost` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dannie_sotrudnik`
--

INSERT INTO `dannie_sotrudnik` (`id`, `fio`, `dolzhnost`) VALUES
(1, 'Петрова Лариса Сергеевна', 'Библиотекарь'),
(2, 'Петрова Лариса Ивановна', 'Архивариус'),
(3, 'Смирнов Иван Васильевич', 'Архивариус'),
(4, 'Петраков Андрей Петрович', 'Директор');

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
-- Структура таблицы `log_pass_klient`
--

CREATE TABLE `log_pass_klient` (
  `id` int(100) NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `log_pass_klient`
--

INSERT INTO `log_pass_klient` (`id`, `login`, `password`) VALUES
(3, 'Petya', '111'),
(5, 'Mary', '111'),
(6, 'Andry', '789'),
(7, 'Anton', '899'),
(8, 'Anna', '345');

-- --------------------------------------------------------

--
-- Структура таблицы `log_pass_sotrudnik`
--

CREATE TABLE `log_pass_sotrudnik` (
  `id` int(110) NOT NULL,
  `login` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `log_pass_sotrudnik`
--

INSERT INTO `log_pass_sotrudnik` (`id`, `login`, `password`) VALUES
(1, 'user21', '963'),
(2, 'user1', '111'),
(3, 'user3', '963'),
(4, 'user4', '158');

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
(11, 'Руслан и Людмила', 'А.С.Пушкин', '17.03.2021', 'Петрова Лариса Сергеевна', '14 дней', 'Иванова Мария Андреевна'),
(13, 'Старик и море', 'Э.Хемингуэй', '10.01.2021', 'Петрова Лариса Сергеевна', '14 дней', 'Иванова Мария Андреевна');

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
(7, '13.02.2021', 'Война и мир', 'Л.Н.Толстой', 'Петрова Лариса Сергеевна'),
(8, '30.03.2021', 'Руслан и Людмила', 'А.С.Пушкин', 'Петрова Лариса Сергеевна'),
(9, '21.01.2021', 'Старик и море', 'Э.Хемингуэй', 'Петрова Лариса Сергеевна');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dannie_klient`
--
ALTER TABLE `dannie_klient`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dannie_sotrudnik`
--
ALTER TABLE `dannie_sotrudnik`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_pass_klient`
--
ALTER TABLE `log_pass_klient`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_pass_sotrudnik`
--
ALTER TABLE `log_pass_sotrudnik`
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
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `dannie_klient`
--
ALTER TABLE `dannie_klient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `dannie_sotrudnik`
--
ALTER TABLE `dannie_sotrudnik`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `log_pass_klient`
--
ALTER TABLE `log_pass_klient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `log_pass_sotrudnik`
--
ALTER TABLE `log_pass_sotrudnik`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vidacha`
--
ALTER TABLE `vidacha`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `vozvrat`
--
ALTER TABLE `vozvrat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dannie_klient`
--
ALTER TABLE `dannie_klient`
  ADD CONSTRAINT `dannie_klient_ibfk_1` FOREIGN KEY (`id`) REFERENCES `log_pass_klient` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
