-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2024 г., 16:15
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `estonian_awards`
--

-- --------------------------------------------------------

--
-- Структура таблицы `activations`
--

CREATE TABLE `activations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `activations`
--

INSERT INTO `activations` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'УВАЖАЕМЫЕ РАДИОЛЮБИТЕЛИ', 'В свете последних событий хотим довести до Вашего сведения, что Клуб Радиолюбителей Эстонии hf-uhf.eu занимает нейтральную позицию и не участвует в политических распрях.\r\n\r\nКаждый имеет право на собственное мнение и его выражение и каждый имеет право соглашаться или нет с мнением оппонента. Наша позиция в данном вопросе - нейтральная.\r\n\r\nМы не призываем к каким-либо действиям, каждый решает для себя сам относительно своих интересов и убеждений.\r\n\r\nВсем удачи и 73 !\r\n\r\nАдминистрация клуба.', '2024-03-05'),
(2, '60-Й ЛЕТНИЙ ЛАГЕРЬ ЭСТОНСКИХ РАДИОЛЮБИТЕЛЕЙ', '60-й летний лагерь радиолюбителей Эстонии пройдет в этот раз в середине июля, с 14 по 16 июля. Валгамаа, хутор Торупилли.\r\n\r\nОткрытие встречи состоится в субботу, 15 июля, в 11:00, но в пятницу, 14 июля, участники уже ждут гостей - в этом году мы планируем больше мероприятий на пятницу, чем обычно!\r\n\r\nПлата за участие в лагере - член ERAÜ 15 евро, член его семьи 10 евро, дети 5 евро, гости 25 евро. В плату также входит субботний суп и вымпел (кроме членов семьи и детей).\r\n\r\nТакже можно приобрести футболку с символикой союза радиолюбителей. Программа встречи и более подробное расписание еще готовятся и будут опубликованы позже.\r\n\r\nhttps://www.erau.ee/et/ueritused/suvised-kokkutulekud/339-kokkutulek-eelinfo-avalehele\r\n\r\nДо встречи летом в Валгамаа!', '2024-03-03');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SOTA', '2020-12-23', '2020-12-23'),
(2, 'IOTA ', '2020-12-23', '2024-03-31'),
(3, 'ARLHS', '2020-12-23', '2020-12-23'),
(4, 'COTA', '2024-03-06', '2024-03-05'),
(5, 'ESFF', '2024-04-04', '2024-03-12');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `body` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'NAME OF CASTLE: ANGERJA LINNUSE VAREMED', 'Location: Kohila vald, Hageri kihelkond, Harjumaa', 'ES-00001.jpg', 4, '2021-05-03', '2021-05-03'),
(2, 'NAME OF CASTLE: HAAPSALU (HAPSAL) CASTLE', 'Location: Lossiplats 3, HAAPSALU', 'ES-00002.jpg', 4, '2024-03-05', '2024-03-06'),
(3, 'NAME OF CASTLE: EDISE', 'Location: Edise', 'COTA.jpg', 4, '2024-03-05', '2024-03-05'),
(4, 'NAME OF CASTLE: HELME (HELMET) CASTLE', 'Location: TIRVA', 'ES-00004.jpg', 4, '2024-03-05', '2024-03-05'),
(5, 'NAME OF CASTLE: JARVE', 'Location: Järve', 'ES-00005.jpg\r\n', 4, '2024-03-06', '2024-03-15'),
(10, '', 'Location: Suur Munamägi', 'ESES-001.jpg', 1, '2024-03-05', '2024-03-05'),
(11, '', 'Location: Kuutsemägi', 'SOTA.jpg', 1, '2024-03-03', '2024-03-04'),
(12, '', 'Location: Emumägi\r\n', 'SOTA.jpg', 1, '2024-03-03', '2024-03-04'),
(13, '', 'Location: Hiiumaa / Saaremaa / Laanemaa County group', 'IOTA.jpg', 2, '2024-03-05', '2024-03-06'),
(14, '', 'Location: Tallinn & Harjumaa / Virumaa County group', 'IOTA.jpg', 2, '2024-03-04', '2024-03-04'),
(15, '', 'Location: Parnumaa County / Saaremaa County South group', 'IOTA.jpg', 2, '2024-03-03', '2024-03-04'),
(16, 'Lighthouse Name: Abruka Front (Saaremaa Island)', 'Location: Abruka isl\r\n', 'EST-001.jpg\r\n', 3, '2024-03-05', '2024-03-05'),
(17, 'Lighthouse Name: Harilaiu/Harilaid', '', 'ARLHS.jpg', 3, '2024-03-04', '2024-03-04'),
(18, 'Lighthouse Name: Hiimaa', '', 'ARLHS.jpg', 3, '2024-03-03', '2024-03-04'),
(19, 'Lighthouse Name: Irbes', '', 'ARLHS.jpg', 3, '2024-03-03', '2024-03-04'),
(20, 'Lighthouse Name: Kessu Light Beacon', '', 'ARLHS.jpg', 3, '2024-03-12', '2024-03-08'),
(21, 'Reference name: Karula', '', 'ESFF.jpg', 5, '2024-03-05', '2024-03-05'),
(22, 'Reference name: Lahemaa', '', 'ESFF.jpg', 5, '2024-03-03', '2024-03-04'),
(23, 'Reference name: Matsalu', '', 'ESFF.jpg', 5, '2024-03-03', '2024-03-04'),
(24, 'Reference name: Soomaa', '', 'ESFF.jpg', 5, '2024-03-03', '2024-03-04'),
(25, 'Reference name: Vilsandi', '', 'ESFF.jpg', 5, '2024-03-12', '2024-03-08');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `role` enum('user','admin','manager','') COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin@ea.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'admin', 'admin', '2021-05-05', '2024-03-27'),
(2, 'manager@ea.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'manager', 'manager', '2021-05-05', '2024-03-27'),
(3, 'user@ea.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'user', 'user', '2021-05-05', '2021-05-05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
