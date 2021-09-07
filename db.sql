CREATE TABLE `codes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `domain__keys` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `domain_id` bigint unsigned NOT NULL,
  `KeyTransformationBase` int NOT NULL,
  `rawScore` int NOT NULL,
  `computedScore` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `domains` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `domainTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `form_controllers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `form_id` bigint unsigned NOT NULL,
  `code_id` bigint unsigned NOT NULL,
  `attempt` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not started',
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `form_fields` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `form_id` bigint unsigned NOT NULL,
  `sequence` int NOT NULL,
  `section` int NOT NULL,
  `fieldName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fieldDescription` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fieldHelp` mediumtext COLLATE utf8mb4_unicode_ci,
  `fieldControl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valOperation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+',
  `domain_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `form_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `form_field_id` bigint unsigned NOT NULL,
  `form_controller_id` bigint unsigned NOT NULL,
  `fieldBooleanValue` tinyint(1) DEFAULT NULL,
  `fieldNumericValue` int NOT NULL DEFAULT '0',
  `fieldTextValue` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `formName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructions` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/* Inserts */

INSERT INTO `codes` (`id`, `value`, `used`, `created_at`, `updated_at`) VALUES
(1, 'xxxxxx', 0, '2021-08-19 23:05:11', '2021-08-19 23:05:11');


INSERT INTO `domain__keys` (`id`, `domain_id`, `KeyTransformationBase`, `rawScore`, `computedScore`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 7, 0, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(2, 1, 100, 8, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(3, 1, 100, 9, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(4, 1, 100, 10, 13, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(5, 1, 100, 11, 13, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(6, 1, 100, 12, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(7, 1, 100, 13, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(8, 1, 100, 14, 25, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(9, 1, 100, 15, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(10, 1, 100, 16, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(11, 1, 100, 17, 38, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(12, 1, 100, 18, 38, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(13, 1, 100, 19, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(14, 1, 100, 20, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(15, 1, 100, 21, 50, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(16, 1, 100, 22, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(17, 1, 100, 23, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(18, 1, 100, 24, 63, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(19, 1, 100, 25, 63, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(20, 1, 100, 26, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(21, 1, 100, 27, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(22, 1, 100, 28, 75, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(23, 1, 100, 29, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(24, 1, 100, 30, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(25, 1, 100, 31, 88, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(26, 1, 100, 32, 88, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(27, 1, 100, 33, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(28, 1, 100, 34, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(29, 1, 100, 35, 100, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(30, 2, 100, 6, 0, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(31, 2, 100, 7, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(32, 2, 100, 8, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(33, 2, 100, 9, 13, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(34, 2, 100, 10, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(35, 2, 100, 11, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(36, 2, 100, 12, 25, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(37, 2, 100, 13, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(38, 2, 100, 14, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(39, 2, 100, 15, 38, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(40, 2, 100, 16, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(41, 2, 100, 17, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(42, 2, 100, 18, 50, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(43, 2, 100, 19, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(44, 2, 100, 20, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(45, 2, 100, 21, 63, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(46, 2, 100, 22, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(47, 2, 100, 23, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(48, 2, 100, 24, 75, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(49, 2, 100, 25, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(50, 2, 100, 26, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(51, 2, 100, 27, 88, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(52, 2, 100, 28, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(53, 2, 100, 29, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(54, 2, 100, 30, 100, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(55, 3, 100, 3, 0, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(56, 3, 100, 4, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(57, 3, 100, 5, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(58, 3, 100, 6, 25, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(59, 3, 100, 7, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(60, 3, 100, 8, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(61, 3, 100, 9, 50, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(62, 3, 100, 10, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(63, 3, 100, 11, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(64, 3, 100, 12, 75, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(65, 3, 100, 13, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(66, 3, 100, 14, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(67, 3, 100, 15, 100, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(68, 4, 100, 8, 0, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(69, 4, 100, 9, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(70, 4, 100, 10, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(71, 4, 100, 11, 13, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(72, 4, 100, 12, 13, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(73, 4, 100, 13, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(74, 4, 100, 14, 19, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(75, 4, 100, 15, 25, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(76, 4, 100, 16, 25, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(77, 4, 100, 17, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(78, 4, 100, 18, 31, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(79, 4, 100, 19, 38, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(80, 4, 100, 20, 38, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(81, 4, 100, 21, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(82, 4, 100, 22, 44, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(83, 4, 100, 23, 50, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(84, 4, 100, 24, 50, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(85, 4, 100, 25, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(86, 4, 100, 26, 56, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(87, 4, 100, 27, 63, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(88, 4, 100, 28, 63, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(89, 4, 100, 29, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(90, 4, 100, 30, 69, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(91, 4, 100, 31, 75, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(92, 4, 100, 32, 75, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(93, 4, 100, 33, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(94, 4, 100, 34, 81, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(95, 4, 100, 35, 88, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(96, 4, 100, 36, 88, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(97, 4, 100, 37, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(98, 4, 100, 38, 94, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(99, 4, 100, 39, 100, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(100, 4, 100, 40, 100, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(101, 5, 100, 2, 2, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(102, 5, 100, 3, 3, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(103, 5, 100, 4, 4, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(104, 5, 100, 5, 5, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(105, 5, 100, 6, 6, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(106, 5, 100, 7, 7, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(107, 5, 100, 8, 8, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(108, 5, 100, 9, 9, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(109, 5, 100, 10, 10, '2021-08-19 23:05:12', '2021-08-19 23:05:12');


INSERT INTO `domains` (`id`, `domainTitle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Domain 1 : Physical', 'Physical', '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(2, 'Domain 2 : Psychological', 'Psychological', '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(3, 'Domain 3 : Social relationships', 'Social relationships', '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(4, 'Domain 4 : Environment', 'Environment', '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(5, 'Overall Quality of Life and General Health', 'QOL', '2021-08-19 23:05:12', '2021-08-19 23:05:12');


INSERT INTO `form_fields` (`id`, `form_id`, `sequence`, `section`, `fieldName`, `fieldDescription`, `fieldHelp`, `fieldControl`, `fieldType`, `valOperation`, `domain_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 'About You', 'Before you begin we would like to ask you to answer a few general questions about yourself', NULL, 'div', 'text description', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(2, 1, 1, 1, 'What is your gender?', '', NULL, 'radiobutton', 'Male,Female', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(3, 1, 2, 1, 'What is you date of birth?', '', NULL, 'Textbox', 'Date', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(4, 1, 3, 1, 'What is the highest education you received?', '', NULL, 'radiobutton', 'None At all,Primary school,Secondary school,Tertiary', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(5, 1, 4, 1, 'What is your marital status?', '', NULL, 'radiobutton', 'Single,Married,Living as married,Separated,Divorced,Widowed', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(6, 1, 5, 1, 'Are you currently ill?', '', NULL, 'radiobutton', 'Yes,No', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(7, 1, 6, 1, 'If something is wrong with your health what do you think it is?', '', NULL, 'Textarea', 'long text', '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(8, 1, 7, 2, 'Instructions', 'This assessment asks how you feel about your quality of life, health, or other areas of your life. Please answer all the questions. If you are unsure about which response to give to a question, please choose the one that appears most appropriate. This can often be your first response.\\n\n            Please keep in mind your standards, hopes, pleasures and concerns. We ask that you think about your life in the last two weeks. For example, thinking about the last two weeks, a question might ask:', NULL, 'ins', NULL, '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(9, 1, 8, 3, 'Instructions', 'Please read each question, assess your feelings, and circle the number on the scale that gives the best answer for you for each question.', NULL, 'ins', NULL, '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(10, 1, 9, 3, 'How would you rate your quality of life?', '', '', 'scale5', 'Very Poor,Poor,Neither poor nor good,Good,Very good', '+', 5, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(11, 1, 10, 3, 'How satisfied are you with your health?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 5, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(12, 1, 11, 3, 'Instructions', 'The following questions ask about <b>how much</b> you have experienced certain things in the last two weeks.', NULL, 'ins', NULL, '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(13, 1, 12, 3, 'To what extent do you feel that physical pain prevents you from doing what you need to do?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,An extreme amount', '-', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(14, 1, 13, 3, 'How much do you need any medical treatment to function in your daily life?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,An extreme amount', '-', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(15, 1, 14, 3, 'How much do you enjoy life?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,An extreme amount', '+', 2, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(16, 1, 15, 3, 'To what extent do you feel your life to be meaningful?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,An extreme amount', '+', 2, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(17, 1, 16, 3, 'How well are you able to concentrate?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,Extremely', '+', 2, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(18, 1, 17, 3, 'How safe do you feel in your daily life?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,Extremely', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(19, 1, 18, 3, 'How healthy is your physical environment?', '', '', 'scale5', 'Not at all,A little,A moderate amount,Very much,Extremely', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(20, 1, 19, 4, 'Instructions', 'The following questions ask about <b>how completely</b> you experience or were able to do certain things in the last two weeks.', NULL, 'ins', NULL, '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(21, 1, 20, 4, 'Do you have enough energy for everyday life?', '', '', 'scale5', 'Not at all,A little,Moderately,Mostly,Completely', '+', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(22, 1, 21, 4, 'Are you able to accept your bodily appearance?', '', '', 'scale5', 'Not at all,A little,Moderately,Mostly,Completely', '+', 2, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(23, 1, 22, 4, 'Have you enough money to meet your needs?', '', '', 'scale5', 'Not at all,A little,Moderately,Mostly,Completely', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(24, 1, 23, 4, 'How available to you is the information that you need in your day-to-day life?', '', '', 'scale5', 'Not at all,A little,Moderately,Mostly,Completely', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(25, 1, 24, 4, 'To what extent do you have the opportunity for leisure activities?', '', '', 'scale5', 'Not at all,A little,Moderately,Mostly,Completely', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(26, 1, 25, 4, 'How well are you able to get around?', '', '', 'scale5', 'Very poor,Poor,Neither poor nor good,Good,Very good', '+', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(27, 1, 26, 5, 'Instructions', 'The following questions ask you to say how <b>good</b> or <b>satisfied</b> you have felt about various aspects of your life over the last two weeks.', NULL, 'ins', NULL, '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(28, 1, 27, 5, 'How satisfied are you with your sleep?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(29, 1, 28, 5, 'How satisfied are you with your ability to perform your daily living activities?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(30, 1, 29, 5, 'How satisfied are you with your capacity for work?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 1, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(31, 1, 30, 5, 'How satisfied are you with yourself?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 2, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(32, 1, 31, 5, 'How satisfied are you with your personal relationships?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 3, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(33, 1, 32, 5, 'How satisfied are you with your sex life?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 3, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(34, 1, 33, 5, 'How satisfied are you with the support you get from your friends?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 3, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(35, 1, 34, 5, 'How satisfied are you with the conditions of your living place?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(36, 1, 35, 5, 'How satisfied are you with your access to health services?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(37, 1, 36, 5, 'How satisfied are you with your mode of transportation?', '', '', 'scale5', 'Very dissatisfied,Dissatisfied,Neither satisfied nor dissatisfied,Satisfied,Very satisfied', '+', 4, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(38, 1, 37, 5, 'Instructions', 'The follow question refers to <b>how often</b> you have felt or experienced certain things in the last two weeks.', NULL, 'ins', NULL, '+', NULL, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12'),
(39, 1, 38, 5, 'How often do you have negative feelings, such as blue mood, despair, anxiety, depression?', '', '', 'scale5', 'Never,Seldom,Quite often,Very often,Always', '-', 2, 1, '2021-08-19 23:05:12', '2021-08-19 23:05:12');


INSERT INTO `forms` (`id`, `formName`, `instructions`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'WHO : Quality of Life Assessment', NULL, 1, '2021-08-19 23:05:11', '2021-08-19 23:05:11');



INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_25_143518_create_form_controllers_table', 1),
(5, '2021_08_01_095447_create_forms_table', 1),
(6, '2021_08_01_100944_create_codes_table', 1),
(7, '2021_08_01_102023_create_form_fields_table', 1),
(8, '2021_08_01_104005_create_domains_table', 1),
(9, '2021_08_01_105549_create_form_values_table', 1),
(10, '2021_08_08_071839_create_domain__keys_table', 1);


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amit Kumar Narotra', 'amit.narotra@gmail.com', '2021-08-19 23:05:11', '$2y$10$8hpz2R2XTSAh5QdT6iqj2OsRYGwe.8Xc0MT4D5btcQ1CqBzsEMzCK', 0, NULL, '2021-08-19 23:05:11', '2021-08-19 23:05:11');