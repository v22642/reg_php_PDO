-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 17 2021 г., 14:36
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bofer`
--

CREATE TABLE `bofer` (
  `IDa` int NOT NULL,
  `IDb` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `book_avtor`
--

CREATE TABLE `book_avtor` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `book_avtor`
--

INSERT INTO `book_avtor` (`id`, `name`) VALUES
(1, 'лёха');

-- --------------------------------------------------------

--
-- Структура таблицы `book_book`
--

CREATE TABLE `book_book` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `release_date` varchar(12) NOT NULL,
  `avaBook` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `book_book`
--

INSERT INTO `book_book` (`id`, `name`, `description`, `release_date`, `avaBook`) VALUES
(1, 'книга', 'кккккккккккккккккккккккккккккккккккк', '22222', '../imgBook/1639495181загружено (2).jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `book_g`
--

CREATE TABLE `book_g` (
  `id` int NOT NULL,
  `name_book` int NOT NULL,
  `description` int NOT NULL,
  `release_date` int NOT NULL,
  `avatar_book` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int UNSIGNED NOT NULL,
  `lagin` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`id`, `lagin`, `password`, `email`, `avatar`, `user`) VALUES
(36, 'e', 'c4ca4238a0b923820dcc509a6f75849b', 'vlad@gmail.com', '../kartenka/1638707348unnamed.jpg', NULL),
(37, 'q', 'c81e728d9d4c2f636f067f89cc14862c', 'vlad@gmail.com', '../kartenka/1638714081unnamed.jpg', NULL),
(38, 'vlad', '698d51a19d8a121ce581499d7b701668', 'vlad@gmail.com', '../kartenka/1638715657загружено (1).jpg', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bofer`
--
ALTER TABLE `bofer`
  ADD KEY `IDa` (`IDa`);

--
-- Индексы таблицы `book_avtor`
--
ALTER TABLE `book_avtor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_book`
--
ALTER TABLE `book_book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book_avtor`
--
ALTER TABLE `book_avtor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `book_book`
--
ALTER TABLE `book_book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bofer`
--
ALTER TABLE `bofer`
  ADD CONSTRAINT `bofer_ibfk_1` FOREIGN KEY (`IDa`) REFERENCES `book_avtor` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
