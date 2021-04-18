-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2021 г., 23:13
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
(22, 'Старик и море', '244', '09.12.2020', 'Э.Хемингуэй');

-- --------------------------------------------------------

--
-- Структура таблицы `dannie_klient`
--

CREATE TABLE `dannie_klient` (
  `id` int(100) NOT NULL,
  `fio` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_pass_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dannie_klient`
--

INSERT INTO `dannie_klient` (`id`, `fio`, `passport`, `log_pass_id`) VALUES
(6, 'Иванов Пётр Иванович', '2505543345', 6),
(7, 'Иванова Мария Андреевна', '2509123456', 7),
(8, 'Симеонов Андрей Петрович', '3456678909', 8),
(9, 'Павлов Антон Анатольевич', '1234567890', 9),
(10, 'Варкова Анна Владимировна', '4567890123', 10),
(11, 'Петров Борис Викторович', '1234567891', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `dannie_sotrudnik`
--

CREATE TABLE `dannie_sotrudnik` (
  `id` int(100) NOT NULL,
  `fio` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dolzhnost` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_pass_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dannie_sotrudnik`
--

INSERT INTO `dannie_sotrudnik` (`id`, `fio`, `dolzhnost`, `log_pass_id`) VALUES
(1, 'Петрова Лариса Сергеевна', 'Библиотекарь', 1),
(2, 'Петрова Лариса Ивановна', 'Архивариус', 2),
(3, 'Смирнов Иван Васильевич', 'Архивариус', 3),
(4, 'Петраков Андрей Петрович', 'Директор', 4),
(5, 'Петра Лариса Ивановна', 'Библиотекарь', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` blob NOT NULL,
  `id_book` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'user2', '963'),
(2, 'user1', '11122'),
(3, 'user3', '963'),
(4, 'user4', '158'),
(5, 'user11', '111'),
(6, 'Petya', '111'),
(7, 'Mary', '111'),
(8, 'Andry', '789'),
(9, 'Anton', '899'),
(10, 'Anna', '345'),
(11, 'Petya', 't6y');

-- --------------------------------------------------------

--
-- Структура таблицы `vidacha`
--

CREATE TABLE `vidacha` (
  `id` int(110) NOT NULL,
  `id_book` int(100) NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sotrudnik` int(100) NOT NULL,
  `srok` int(40) NOT NULL,
  `id_chitatel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vidacha`
--

INSERT INTO `vidacha` (`id`, `id_book`, `date`, `id_sotrudnik`, `srok`, `id_chitatel`) VALUES
(1, 1, '17.03.2021', 1, 14, 6),
(8, 2, '17.03.2021', 1, 14, 7),
(11, 3, '17.03.2021', 1, 14, 8),
(13, 5, '10.01.2021', 1, 14, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `vozvrat`
--

CREATE TABLE `vozvrat` (
  `id` int(100) NOT NULL,
  `date_vozvrat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sotrudnik` int(100) NOT NULL,
  `id_vidacha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vozvrat`
--

INSERT INTO `vozvrat` (`id`, `date_vozvrat`, `id_sotrudnik`, `id_vidacha`) VALUES
(5, '30.03.2021', 1, 1),
(7, '13.02.2021', 1, 8),
(8, '30.03.2021', 1, 11),
(9, '21.01.2021', 1, 13);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`log_pass_id`);

--
-- Индексы таблицы `dannie_sotrudnik`
--
ALTER TABLE `dannie_sotrudnik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sotrudnik` (`id`),
  ADD KEY `id_sotrudnik_2` (`id`),
  ADD KEY `id` (`log_pass_id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_book` (`id_book`);

--
-- Индексы таблицы `log_pass`
--
ALTER TABLE `log_pass`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vidacha`
--
ALTER TABLE `vidacha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sotrudnik` (`id_sotrudnik`),
  ADD KEY `id_chitatel` (`id_chitatel`),
  ADD KEY `id_book` (`id_book`);

--
-- Индексы таблицы `vozvrat`
--
ALTER TABLE `vozvrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sotrudnik` (`id_sotrudnik`),
  ADD KEY `id_vidacha` (`id_vidacha`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `log_pass`
--
ALTER TABLE `log_pass`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  ADD CONSTRAINT `dannie_klient_ibfk_1` FOREIGN KEY (`log_pass_id`) REFERENCES `log_pass` (`id`);

--
-- Ограничения внешнего ключа таблицы `dannie_sotrudnik`
--
ALTER TABLE `dannie_sotrudnik`
  ADD CONSTRAINT `dannie_sotrudnik_ibfk_1` FOREIGN KEY (`log_pass_id`) REFERENCES `log_pass` (`id`);

--
-- Ограничения внешнего ключа таблицы `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `add_book` (`id`);

--
-- Ограничения внешнего ключа таблицы `vidacha`
--
ALTER TABLE `vidacha`
  ADD CONSTRAINT `vidacha_ibfk_3` FOREIGN KEY (`id_book`) REFERENCES `add_book` (`id`),
  ADD CONSTRAINT `vidacha_ibfk_4` FOREIGN KEY (`id_chitatel`) REFERENCES `dannie_klient` (`log_pass_id`),
  ADD CONSTRAINT `vidacha_ibfk_5` FOREIGN KEY (`id_sotrudnik`) REFERENCES `dannie_sotrudnik` (`log_pass_id`);

--
-- Ограничения внешнего ключа таблицы `vozvrat`
--
ALTER TABLE `vozvrat`
  ADD CONSTRAINT `vozvrat_ibfk_1` FOREIGN KEY (`id_vidacha`) REFERENCES `vidacha` (`id`),
  ADD CONSTRAINT `vozvrat_ibfk_2` FOREIGN KEY (`id_sotrudnik`) REFERENCES `dannie_sotrudnik` (`log_pass_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
