-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 30 2014 г., 13:48
-- Версия сервера: 5.5.27
-- Версия PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kursa4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `patronymic` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `description` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `surname`, `name`, `patronymic`, `type_id`, `description`) VALUES
(3, 'Гиламов', 'Данис', 'Рафисович', 0, 'Тест'),
(4, 'Гиламов', 'Данис', 'Рафисович', 0, 'Тест'),
(5, 'Гиламов', 'Данис', 'Рафисович', 0, 'Тест'),
(6, 'Гиламов', 'Данис', 'Рафисович', 0, ''),
(7, 'Гиламов', 'Данис', 'Рафисович', 0, 'ыыфыфыфв'),
(8, 'aasas', 'sadasa', 'asd', 0, 'asdads'),
(9, 'dadsdsaaas', 'dadsdsasadsad', 'dasdsaadsasd', 4, 'adsdasadsadsasd');

-- --------------------------------------------------------

--
-- Структура таблицы `clients_rooms`
--

CREATE TABLE IF NOT EXISTS `clients_rooms` (
  `client_id` int(11) NOT NULL,
  `room_id` int(3) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  KEY `client_id` (`client_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `discount`) VALUES
(2, 'Постоянный', 5),
(4, 'Super VIP', 25);

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('lux','halflux','default') COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('free','close','reserv') COLLATE utf8_unicode_ci NOT NULL,
  `count` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id`, `type`, `price`, `status`, `count`) VALUES
(2, 'halflux', 300, 'free', 3);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `clients_rooms`
--
ALTER TABLE `clients_rooms`
  ADD CONSTRAINT `clients_rooms_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `clients_rooms` (`client_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
