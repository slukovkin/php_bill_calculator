-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3300
-- Время создания: Ноя 29 2022 г., 22:20
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `billcalc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `electro`
--

CREATE TABLE `electro` (
  `id` int(11) NOT NULL,
  `counter_prev` int(8) DEFAULT NULL,
  `counter_current` int(8) DEFAULT NULL,
  `counter_acc` int(8) DEFAULT NULL,
  `sum` float DEFAULT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gaz`
--

CREATE TABLE `gaz` (
  `id` int(11) NOT NULL,
  `counter_prev` int(8) DEFAULT NULL,
  `counter_current` int(8) DEFAULT NULL,
  `counter_acc` int(8) DEFAULT NULL,
  `sum` float DEFAULT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `electro_price` float DEFAULT NULL,
  `water_price` float DEFAULT NULL,
  `gaz_price` float DEFAULT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `water`
--

CREATE TABLE `water` (
  `id` int(11) NOT NULL,
  `counter_prev` int(8) DEFAULT NULL,
  `counter_current` int(8) DEFAULT NULL,
  `counter_acc` int(8) DEFAULT NULL,
  `sum` float DEFAULT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `electro`
--
ALTER TABLE `electro`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gaz`
--
ALTER TABLE `gaz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `electro`
--
ALTER TABLE `electro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gaz`
--
ALTER TABLE `gaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `water`
--
ALTER TABLE `water`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
