-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 11 2018 г., 13:52
-- Версия сервера: 5.6.16
-- Версия PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `php1level5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_galerey` int(2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `size` int(4) NOT NULL,
  `count` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `id_galerey`, `img`, `title`, `alt`, `size`, `count`) VALUES
(1, 1, '/public_html/img/j1.jpg', 'Катер современный', 'Катер', 30, 1),
(2, 1, '/public_html/img/j2.jpg', 'Испанский корабль', 'Каравела', 30, 1),
(3, 2, '/public_html/img/j3.jpg', 'Английский корабль', 'Линкор', 100, 1),
(4, 2, '/public_html/img/j4.jpg', 'Русский фрегат', 'Фрегат', 100, 60);

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE IF NOT EXISTS `otziv` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_galerey` int(2) NOT NULL,
  `Aftor` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Структура таблицы `otziv_nout`
--

CREATE TABLE IF NOT EXISTS `otziv_nout` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `marka` varchar(255) NOT NULL,
  `Aftor` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `count` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `src`, `name`, `text`, `count`) VALUES
(1, '/public_html/img/nout1.jpg', ' HP 15 A4-9120', ' 4Gb 500Gb AMD Radeon R3 series 15,6 FHD BT Cam 2620мАч \r\n Free DOS Черный 15-bw025ur 1ZK18EA HP 15 A4-9120 ', 26),
(2, '/public_html/img/nout2.jpg', ' ASUS X540YA', 'E1-6010 2Gb 500Gb AMD Radeon R2 series 15,6 HD BT Cam 2600мАч Free DOS Черный/Золотистый X540YA-XO534D 90NB0CN1-M09290   ', 70),
(3, '/public_html/img/nout3.jpg ', 'ASUS X540YA ', ' E1-6010 4Gb 500Gb AMD Radeon R2 series 15,6 HD BT Cam 2600мАч Free DOS Серебристый X540YA-XO648D 90NB0CN3-M10410 \r\n', 15),
(4, '/public_html/img/nout4.jpg ', 'Lenovo IdeaPad 110-15 ', ' A9-9400 4Gb 500Gb AMD Radeon R5 series 15,6 HD BT Cam 2200мАч Win10 Черный 80TR000GRK ', 1),
(5, '/public_html/img/nout5.jpg', 'MSI GP62M', '7RDX-1659RU Leopard i7-7700HQ 8Gb 1Tb nV GTX1050 4Gb 15,6 FHD BT Cam 4400мАч Win10 Черный', 36);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
