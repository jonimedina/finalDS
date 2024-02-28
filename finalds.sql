-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 06:05:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finalds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `rol` varchar(255) NOT NULL,
  `materia1` varchar(255) DEFAULT NULL,
  `aniomateria1` varchar(255) DEFAULT NULL,
  `materia2` varchar(255) DEFAULT NULL,
  `aniomateria2` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `telefono`, `email`, `email_verified_at`, `rol`, `materia1`, `aniomateria1`, `materia2`, `aniomateria2`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jonathan', 'Medina', '1132425722', 'joni@mail.com', NULL, 'Coordinador', 'No corresponde', 'No corresponde', 'No corresponde', 'No corresponde', NULL, NULL, NULL),
(3, 'Rocio', 'Campero', '1158869910', 'rocio@mail.com', NULL, 'Docente', 'Fisica', '2', 'Matemática', '1', NULL, NULL, NULL),
(4, 'Guillermo', 'Martinez', '1145658574', 'guillermo@mail.com', NULL, 'Docente', 'Geografia', '1', 'Historia', '1', NULL, NULL, NULL),
(5, 'Romina', 'Montes', '1132659878', 'romina@mail.com', NULL, 'Docente', 'Matemática', '1', 'Matemática', '2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `escuela` varchar(255) NOT NULL,
  `materia1` varchar(255) NOT NULL,
  `aniomateria1` int(11) NOT NULL,
  `materia2` varchar(255) DEFAULT NULL,
  `aniomateria2` int(11) DEFAULT NULL,
  `retiro` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`, `dni`, `mail`, `escuela`, `materia1`, `aniomateria1`, `materia2`, `aniomateria2`, `retiro`, `created_at`, `updated_at`) VALUES
(1, 'Fernando', 'Blanco', '47585969', 'fernando_blanco@mail.com', 'ET 8 DE 13', 'Matemática', 1, 'Historia', 1, '1', NULL, NULL),
(2, 'Maria', 'Meza', '47585910', 'maria_meza@mail.com', 'ET 8 DE 13', 'Tecnología de la Representación', 1, 'Matemática', 2, '0', NULL, NULL),
(3, 'Damian', 'Perez', '47585911', 'damian_perez@mail.com', 'ET 8 DE 13', 'Tecnología de la Representación', 2, 'Fisica', 2, '0', NULL, NULL),
(4, 'Sabrina', 'Garcia', '47585912', 'sabrina_garcia@mail.com', 'ET 17 DE 13', 'Tecnología de la Representación', 1, 'Geografia', 1, '0', NULL, NULL),
(5, 'Martina', 'Braca', '48521456', 'martina_braca@mail.com', 'ET 23 DE 13', 'Fisica', 3, 'Matemática', 3, '0', NULL, NULL),
(6, 'Ramiro', 'Martin', '45698745', 'ramiro_martin@mail.com', 'ET 8 DE 13', 'Fisica', 2, 'Historia', 1, '0', NULL, NULL),
(7, 'Santiago', 'Zarate', '47585962', 'santiago_zarate@mail.com', 'ET 8 DE 13', 'Tecnología de la Representación', 1, 'Geografía', 1, '0', NULL, NULL),
(8, 'Thiago', 'Paz', '47585920', 'thiago_paz@mail.com', 'ET 8 DE 13', 'Tecnología de la Representación', 2, 'Matemática', 2, '0', NULL, NULL),
(9, 'Fabio', 'Gimenez', '47585911', 'fabio_gimenez@mail.com', 'ET 17 DE 13', 'Historia', 1, 'Matemática', 1, '1', NULL, NULL),
(11, 'Diego', 'Paez', '47585962', 'diego_paez@mail.com', 'ET 8 DE 13', 'Matemática', 1, 'Geografía', 1, '0', NULL, NULL),
(12, 'Julian', 'Calvo', '47585920', 'julian_calvo@mail.com', 'ET 23 DE 13', 'Tecnología de la Representación', 1, 'Matemática', 1, '0', NULL, NULL),
(13, 'Gabriela', 'Gimenez', '41585929', 'gabriela_gimenez@mail.com', 'ET 8 DE 13', 'Matemática', 1, 'Fisica', 2, '0', NULL, NULL),
(14, 'Leandro', 'Garcia', '475859111', 'leandro_garcia@mail.com', 'ET 17 DE 13', 'Tecnología de la Representación', 2, 'Fisica', 2, '0', NULL, NULL),
(15, 'Gabriela', 'Lopez', '475859781', 'gabriela_lopez@mail.com', 'ET 17 DE 13', 'Tecnología de la Representación', 1, 'Geografia', 1, '1', NULL, NULL),
(16, 'Máximo', 'Caceres', '475859781', 'máximo_caceres@mail.com', 'ET 23 DE 13', 'Tecnología de la Representación', 2, 'Historia', 2, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `anio`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Matemática', '1', NULL, NULL, NULL),
(3, 'Matemática', '2', NULL, NULL, NULL),
(4, 'Tecnología de la Representación', '1', NULL, NULL, NULL),
(5, 'Tecnología de la Representación', '2', NULL, NULL, NULL),
(6, 'Fisica', '2', NULL, NULL, NULL),
(7, 'Fisica', '3', NULL, NULL, NULL),
(8, 'Historia', '1', NULL, NULL, NULL),
(9, 'Geografia', '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2023_12_16_052500_create_docentes_table', 1),
(17, '2023_12_19_195859_create_materias_table', 1),
(18, '2023_12_20_045908_create_estudiantes_table', 1),
(19, '2024_01_02_154728_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'docentes.index', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(2, 'docentes.create', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(3, 'docentes.update', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(4, 'docentes.destroy', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(5, 'docentes.buscar', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(6, 'materia.create', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(7, 'estudiantes.index', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(8, 'estudiantes.create', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(9, 'estudiantes.update', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(10, 'estudiantes.destroy', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(11, 'estudiantes.buscar', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(12, 'estudiantes.listado', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Coordinador', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(2, 'Docente', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02'),
(3, 'Preceptor', 'web', '2024-02-26 09:19:02', '2024-02-26 09:19:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(7, 2),
(7, 3),
(8, 1),
(8, 2),
(8, 3),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(11, 3),
(12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL DEFAULT 'Docente',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `rol`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jonathan', 'Coordinador', 'joni@mail.com', NULL, '$2y$12$ZL3NqmZn2QXJC4X8IoerPeUK2CkaWShaO5xra3tC094lfGGlx4C6m', NULL, '2024-02-26 09:20:22', '2024-02-26 09:22:03'),
(5, 'Rocio', 'Docente', 'rocio@mail.com', NULL, '$2y$12$8LjRut82JVEKHSrhhKRUCuNor.fHIS.I4LReaTvcM5ITWM8n2TIX.', NULL, '2024-02-26 10:36:47', '2024-02-26 10:36:47'),
(6, 'Guillermo', 'Docente', 'guillermo@mail.com', NULL, '$2y$12$nhr2jgnzUAr4dCsDWpm75ez01/8f.3jGC2ayaoCvy6cTP/Mb5KE0S', NULL, '2024-02-26 10:38:17', '2024-02-26 10:38:17'),
(7, 'Romina', 'Docente', 'romina@mail.com', NULL, '$2y$12$aO8d.86p7SnwF8aCc3T.NempHmgL3.0g9QGmN02f6dz6FLwqVCYmG', NULL, '2024-02-26 10:39:09', '2024-02-26 10:39:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `docentes_email_unique` (`email`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estudiantes_mail_unique` (`mail`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materias_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `docentes` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
