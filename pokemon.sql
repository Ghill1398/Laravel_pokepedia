-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 20:20:38
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abilities`
--

CREATE TABLE `abilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `habilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abilities`
--

INSERT INTO `abilities` (`id`, `habilidad`, `created_at`, `updated_at`) VALUES
(1, 'Habilidad 1', '2019-11-28 17:46:21', '2019-11-28 17:46:21'),
(2, 'Habilidad 2', '2019-11-28 17:46:24', '2019-11-28 17:46:24'),
(3, 'Habilidad 3', '2019-11-28 17:46:29', '2019-11-28 17:46:29'),
(4, 'Habilidad 4', '2019-11-28 18:08:11', '2019-11-28 18:08:11'),
(5, 'Habilidad 5', '2019-11-28 18:09:11', '2019-11-28 18:09:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ability_pokemon`
--

CREATE TABLE `ability_pokemon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idability` bigint(20) UNSIGNED NOT NULL,
  `idpokemon` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ability_pokemon`
--

INSERT INTO `ability_pokemon` (`id`, `idability`, `idpokemon`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpost` bigint(20) UNSIGNED NOT NULL,
  `idusuario` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `idpost`, `idusuario`, `content`) VALUES
(1, 1, 1, 'Comentario 1'),
(2, 1, 1, 'Comentario 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_22_163745_create_pokemon_table', 2),
(19, '2019_11_22_163810_create_abilities_table', 3),
(20, '2019_11_22_163833_create_ability_pokemon_table', 3),
(21, '2019_11_22_164141_create_posts_table', 3),
(22, '2019_11_22_164155_create_comments_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` double(8,2) NOT NULL,
  `estatura` double(8,2) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `nombre`, `peso`, `estatura`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'pokemon1', 12.00, 12.00, '12', '2019-11-22 18:27:28', '2019-11-22 18:27:28'),
(2, 'pokemon2', 12.00, 12.00, '12', '2019-11-23 11:03:16', '2019-11-23 11:03:16'),
(3, 'pokemon3', 12.00, 12.00, '12', '2019-11-23 16:00:11', '2019-11-23 16:00:11'),
(4, 'pokemon4', 11.00, 11.00, '11', '2019-11-27 17:18:09', '2019-11-27 17:18:09'),
(5, 'pokemon5', 23.00, 100.00, '112', '2019-11-28 18:07:45', '2019-11-28 18:07:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpokemon` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idusuario` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `subject`, `idpokemon`, `content`, `idusuario`, `created_at`, `updated_at`) VALUES
(1, 'Subjec1', 1, 'Contenido 1', 1, '2019-11-28 17:45:49', '2019-11-28 17:45:49'),
(2, 'Subjec2', 2, 'Contenido 2', 1, '2019-11-28 17:46:03', '2019-11-28 17:46:03'),
(3, 'Post 3', 2, 'Contenido', 1, '2019-11-28 18:08:33', '2019-11-28 18:08:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'guillermo', 'guillermocorreo@gmail.com', NULL, '$2y$10$1wQ/tTFpg2HKWakOorHWterwyB2rKvYtzekEH5UdCL2/bSBi85cxW', NULL, '2019-11-21 15:40:58', '2019-11-21 15:40:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abilities`
--
ALTER TABLE `abilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abilities_habilidad_unique` (`habilidad`);

--
-- Indices de la tabla `ability_pokemon`
--
ALTER TABLE `ability_pokemon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ability_pokemon_idability_foreign` (`idability`),
  ADD KEY `ability_pokemon_idpokemon_foreign` (`idpokemon`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_idpost_foreign` (`idpost`),
  ADD KEY `comments_idusuario_foreign` (`idusuario`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pokemon_nombre_unique` (`nombre`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_idpokemon_foreign` (`idpokemon`),
  ADD KEY `posts_idusuario_foreign` (`idusuario`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abilities`
--
ALTER TABLE `abilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ability_pokemon`
--
ALTER TABLE `ability_pokemon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ability_pokemon`
--
ALTER TABLE `ability_pokemon`
  ADD CONSTRAINT `ability_pokemon_idability_foreign` FOREIGN KEY (`idability`) REFERENCES `abilities` (`id`),
  ADD CONSTRAINT `ability_pokemon_idpokemon_foreign` FOREIGN KEY (`idpokemon`) REFERENCES `pokemon` (`id`);

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_idpost_foreign` FOREIGN KEY (`idpost`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_idpokemon_foreign` FOREIGN KEY (`idpokemon`) REFERENCES `pokemon` (`id`),
  ADD CONSTRAINT `posts_idusuario_foreign` FOREIGN KEY (`idusuario`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
