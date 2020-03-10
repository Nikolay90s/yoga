-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 10 2020 г., 19:25
-- Версия сервера: 5.6.38
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
-- База данных: `yoga`
--
CREATE DATABASE IF NOT EXISTS `yoga` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yoga`;

-- --------------------------------------------------------

--
-- Структура таблицы `ankets`
--

CREATE TABLE `ankets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ankets`
--

INSERT INTO `ankets` (`id`, `user_id`, `image`, `avatar`, `storis`, `created_at`, `updated_at`) VALUES
(1, 2, 'trainer-1.jpg', 'person_3.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL),
(2, 3, 'trainer-2.jpg', 'person_2.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL),
(3, 4, 'trainer-3.jpg', 'person_4.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL),
(4, 5, 'trainer-4.jpg', 'person_1.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smal_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `data`, `title`, `smal_text`, `text`, `created_at`, `updated_at`) VALUES
(1, 'image_1.jpg', '2020-02-21', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(2, 'image_2.jpg', '2020-02-22', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(3, 'image_3.jpg', '2020-02-23', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(4, 'image_4.jpg', '2020-02-24', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(5, 'image_5.jpg', '2020-02-25', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(6, 'image_6.jpg', '2020-02-26', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(7, 'image_2.jpg', '2020-02-10', 'Young Women Doing Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `carts`
--

INSERT INTO `carts` (`id`, `name`, `price`, `time`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Year Card', '449', 'For 1 Year', 'Enjoy All The Features', '<li>Group Classes</li><li>Discuss Fitness Goals</li><li>Group Trainer</li><li>Fitness Orientation</li>', NULL, NULL),
(2, 'Monthly Card', '200', 'For 1 Month', 'Enjoy All The Features', '<li>Group Classes</li><li>Discuss Fitness Goals</li><li>Group Trainer</li><li>Fitness Orientation</li>', NULL, NULL),
(3, 'Weekly Card', '85', 'For 1 Week', 'Enjoy All The Features', '<li>Group Classes</li><li>Discuss Fitness Goals</li><li>Group Trainer</li><li>Fitness Orientation</li>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `checks`
--

CREATE TABLE `checks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ftco_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `checks`
--

INSERT INTO `checks` (`id`, `ftco_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yoga boosts brain power', NULL, NULL),
(2, 1, 'Yoga helps you to breathe better', NULL, NULL),
(3, 1, 'Yoga improves your strength', NULL, NULL),
(4, 1, 'Yoga helps you to focus', NULL, NULL),
(5, 1, 'Yoga helps give meaning to your day', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `classes`
--

INSERT INTO `classes` (`id`, `image`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'program-1.jpg', 'Group Lessons', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(2, 'program-2.jpg', 'Yoga For Beginners', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(3, 'program-4.jpg', 'Yoga For Couples', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(4, 'program-5.jpg', 'Bikram Yoga', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(5, 'program-6.jpg', 'Yoga Barre', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL),
(6, 'program-3.jpg', 'Yoga For Pregnant', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `name`, `email`, `text`, `created_at`, `updated_at`) VALUES
(10, 3, 'Nikolay', 'kolarulit@mail.ru', 'Jjjjjj', '2020-03-05 04:51:01', '2020-03-05 04:51:01'),
(8, 6, 'Nikolay', 'admin@admin.ru', 'Лллллл', '2020-03-05 00:57:49', '2020-03-05 00:57:49'),
(9, 4, 'Nikolay', 'admin@admin.ru', 'Tyytttt', '2020-03-05 01:02:19', '2020-03-05 01:02:19');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `ftcos`
--

CREATE TABLE `ftcos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ftcos`
--

INSERT INTO `ftcos` (`id`, `image`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'intro.jpg', 'Why You Should Go To Yoga', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `gallerys`
--

CREATE TABLE `gallerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallerys`
--

INSERT INTO `gallerys` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gallery-1.jpg', NULL, NULL),
(2, 'gallery-2.jpg', NULL, NULL),
(3, 'gallery-3.jpg', NULL, NULL),
(4, 'gallery-4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'index', NULL, NULL),
(7, 'Classes', 'classes', NULL, NULL),
(8, 'About', 'about', NULL, NULL),
(9, 'Blog', 'blog', NULL, NULL),
(10, 'Contact', 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_18_035520_create_menus_table', 1),
(5, '2020_02_18_115540_create_sliders_table', 2),
(6, '2020_02_18_143523_create_sliders_table', 3),
(7, '2020_02_18_144842_create_sliders_table', 4),
(8, '2020_02_19_034742_create_ftcos_table', 5),
(9, '2020_02_19_142328_create_services_table', 6),
(10, '2020_02_20_031548_create_classes_table', 7),
(11, '2020_02_20_043851_create_carts_table', 8),
(12, '2020_02_20_115319_create_ankets_table', 9),
(13, '2020_02_21_044029_create_blogs_table', 10),
(14, '2020_02_26_031213_create_gallerys_table', 11),
(15, '2020_03_03_143211_create_comments_table', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'flaticon-like', 'Healthy Lifestyle', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>', NULL, NULL),
(2, 'flaticon-lotus', 'Body &amp; Mind Balance', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>', NULL, NULL),
(3, 'flaticon-meditation', 'Meditation Practice', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>', NULL, NULL),
(4, 'flaticon-lotus-1', 'Edeology', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `view` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `Vtext` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buttonName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `view`, `Vtext`, `text`, `buttonName`, `images`, `created_at`, `updated_at`) VALUES
(1, '1', 'Inspiration For Joyful Living. Effective Therapy Against Stress.Flexibility is A Second Power. ', 'Do Yoga today for a better tomorrow', '15 Day Free Trial', 'bg_2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nikolay', 'admin@admin.ru', NULL, '$2y$10$OtN1o9FflkN/7uVF0mn.wuS7M61tS6l6NnWg7KT/3/aHuA/vqY.3a', NULL, '2020-02-20 15:56:44', '2020-02-20 15:56:44'),
(2, 'Liza Brock', '01@01.ru', NULL, '$2y$10$CP3Ls/AOhA0xsZLopR7AQ.bNE8qByt1xU.OLYTzY3QfONiUDGGYFe', NULL, '2020-02-20 15:58:51', '2020-02-20 15:58:51'),
(3, 'Sarah Henderson', '02@02.ru', NULL, '$2y$10$ebT8LKKrjrOmxlRKXkoiYuqhAe3A4/PUWLyh51uuFHr4TyKqe1jAK', NULL, '2020-02-20 16:00:17', '2020-02-20 16:00:17'),
(4, 'Elis Hump', '03@03.ru', NULL, '$2y$10$PQQWZqbhtxSr.Nwry1leiuq0af1DCjQuyuf.r/nAxxVZDuIHw.KhK', NULL, '2020-02-20 16:03:02', '2020-02-20 16:03:02'),
(5, 'Lola Digo', '04@04.ru', NULL, '$2y$10$vGy8r1VowVmwJS5VVePaBeu18abFZEdgNCjkHSGhh3ZIBuEG/f5gC', NULL, '2020-02-20 16:04:38', '2020-02-20 16:04:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ankets`
--
ALTER TABLE `ankets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ankets_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ftcos`
--
ALTER TABLE `ftcos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ankets`
--
ALTER TABLE `ankets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `checks`
--
ALTER TABLE `checks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ftcos`
--
ALTER TABLE `ftcos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
