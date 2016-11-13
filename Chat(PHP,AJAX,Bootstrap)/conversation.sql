-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 13 2016 г., 19:54
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `chat2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `conversation`
--

CREATE TABLE IF NOT EXISTS `conversation` (
  `idConversation` int(11) NOT NULL,
  `user` varchar(256) DEFAULT NULL,
  `message` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `conversation`
--

INSERT INTO `conversation` (`idConversation`, `user`, `message`) VALUES
(30, 'Олег', 'Привет'),
(31, 'Олег', 'Привет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`idConversation`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `conversation`
--
ALTER TABLE `conversation`
  MODIFY `idConversation` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
