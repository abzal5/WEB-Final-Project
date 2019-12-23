-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2019 г., 18:22
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `users` int(11) NOT NULL,
  `uslugi` int(11) NOT NULL,
  `comments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `Name` varchar(20) NOT NULL,
  `Text` text NOT NULL,
  `key_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `first`
--

CREATE TABLE `first` (
  `id` int(11) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `first`
--

INSERT INTO `first` (`id`, `data`) VALUES
(0, 'users'),
(1, 'uslugi'),
(2, 'comments');

-- --------------------------------------------------------

--
-- Структура таблицы `human`
--

CREATE TABLE `human` (
  `Name` varchar(20) NOT NULL,
  `Email` int(20) NOT NULL,
  `Password` int(20) NOT NULL,
  `key_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `human`
--

INSERT INTO `human` (`Name`, `Email`, `Password`, `key_id`) VALUES
('bot', 20, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `titel`
--

CREATE TABLE `titel` (
  `Title` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(30) NOT NULL,
  `key_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `titel`
--

INSERT INTO `titel` (`Title`, `Description`, `Price`, `key_id`) VALUES
('Zamena battery', 'nedorogo skidka', 7000, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `Name` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`Name`, `id`) VALUES
('Battery', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `uslugi` (`uslugi`),
  ADD UNIQUE KEY `users` (`users`),
  ADD UNIQUE KEY `comments` (`comments`);

--
-- Индексы таблицы `first`
--
ALTER TABLE `first`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `human`
--
ALTER TABLE `human`
  ADD UNIQUE KEY `email` (`Email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `first`
--
ALTER TABLE `first`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
