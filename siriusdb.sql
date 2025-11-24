/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `ads_campaigns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gad_campaignid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_group_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `api_keys` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `youtube_channel_id` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recaptcha_site_key` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recaptcha_secret_key` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `api_keys` (`id`, `youtube_channel_id`, `recaptcha_site_key`, `recaptcha_secret_key`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `blades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel_cache_apiKey', 'O:18:"App\\Models\\ApiKeys":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:8:"api_keys";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:1;s:18:"youtube_channel_id";N;s:18:"recaptcha_site_key";N;s:20:"recaptcha_secret_key";N;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:17:52";}s:11:"\0*\0original";a:6:{s:2:"id";i:1;s:18:"youtube_channel_id";N;s:18:"recaptcha_site_key";N;s:20:"recaptcha_secret_key";N;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:17:52";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:3:{i:0;s:18:"youtube_channel_id";i:1;s:18:"recaptcha_site_key";i:2;s:20:"recaptcha_secret_key";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}', 1762935472),
	('laravel_cache_blades', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1763713291),
	('laravel_cache_brands', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764067988),
	('laravel_cache_categories', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:7:{i:0;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:1;s:4:"name";s:8:"Kurumsal";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:37";s:10:"updated_at";s:19:"2025-11-19 18:15:03";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:1;s:4:"name";s:8:"Kurumsal";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:37";s:10:"updated_at";s:19:"2025-11-19 18:15:03";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:1;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:2;s:4:"name";s:13:"Hizmetlerimiz";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:46";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:2;s:4:"name";s:13:"Hizmetlerimiz";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:46";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:2;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:3;s:4:"name";s:6:"Galeri";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:54";s:10:"updated_at";s:19:"2025-11-19 18:15:01";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:3;s:4:"name";s:6:"Galeri";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:54";s:10:"updated_at";s:19:"2025-11-19 18:15:01";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:3;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:4;s:4:"name";s:10:"İletişim";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:59";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:4;s:4:"name";s:10:"İletişim";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:59";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:4;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:5;s:4:"name";s:11:"PPF Kaplama";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";i:2;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-20 11:17:16";s:10:"updated_at";s:19:"2025-11-20 11:25:00";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:5;s:4:"name";s:11:"PPF Kaplama";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";i:2;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-20 11:17:16";s:10:"updated_at";s:19:"2025-11-20 11:25:00";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:5;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:6;s:4:"name";s:13:"Car Detailing";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";i:2;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-20 11:24:44";s:10:"updated_at";s:19:"2025-11-20 11:25:07";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:6;s:4:"name";s:13:"Car Detailing";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";i:2;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-20 11:24:44";s:10:"updated_at";s:19:"2025-11-20 11:25:07";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:6;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:7;s:4:"name";s:15:"Seramik Kaplama";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";i:2;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-20 11:24:56";s:10:"updated_at";s:19:"2025-11-20 11:25:01";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:7;s:4:"name";s:15:"Seramik Kaplama";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";i:2;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-20 11:24:56";s:10:"updated_at";s:19:"2025-11-20 11:25:01";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1763713507),
	('laravel_cache_contacts', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:1:{i:0;O:19:"App\\Models\\Contacts":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:8:"contacts";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:16:{s:2:"id";i:1;s:4:"name";s:17:"Sirius Car Design";s:5:"email";s:24:"info@siriuscardesign.com";s:6:"email2";N;s:5:"phone";s:14:"0322 911 08 71";s:6:"phone2";N;s:7:"address";s:85:"Süleyman Demirel Blv. Huzurevleri Mah. 77248 Sok. Ferhat Özkan Apt. Altı İş Yeri";s:7:"country";s:8:"Türkiye";s:4:"city";s:5:"Adana";s:5:"state";s:9:"Çukurova";s:6:"person";N;s:3:"map";N;s:3:"hit";i:1;s:10:"created_at";s:19:"2025-11-16 17:32:58";s:10:"updated_at";s:19:"2025-11-16 17:50:46";s:10:"deleted_at";N;}s:11:"\0*\0original";a:16:{s:2:"id";i:1;s:4:"name";s:17:"Sirius Car Design";s:5:"email";s:24:"info@siriuscardesign.com";s:6:"email2";N;s:5:"phone";s:14:"0322 911 08 71";s:6:"phone2";N;s:7:"address";s:85:"Süleyman Demirel Blv. Huzurevleri Mah. 77248 Sok. Ferhat Özkan Apt. Altı İş Yeri";s:7:"country";s:8:"Türkiye";s:4:"city";s:5:"Adana";s:5:"state";s:9:"Çukurova";s:6:"person";N;s:3:"map";N;s:3:"hit";i:1;s:10:"created_at";s:19:"2025-11-16 17:32:58";s:10:"updated_at";s:19:"2025-11-16 17:50:46";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:12:{i:0;s:4:"name";i:1;s:5:"email";i:2;s:6:"email2";i:3;s:5:"phone";i:4;s:6:"phone2";i:5;s:7:"address";i:6;s:7:"country";i:7;s:4:"city";i:8;s:5:"state";i:9;s:6:"person";i:10;s:3:"map";i:11;s:3:"hit";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1763391046),
	('laravel_cache_fastMenus', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764067989),
	('laravel_cache_languages', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:1:{i:0;O:19:"App\\Models\\Language":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:9:"languages";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:1;s:4:"name";s:8:"Türkçe";s:4:"code";s:2:"tr";s:6:"active";i:0;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:17:52";}s:11:"\0*\0original";a:6:{s:2:"id";i:1;s:4:"name";s:8:"Türkçe";s:4:"code";s:2:"tr";s:6:"active";i:0;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:17:52";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:3:{i:0;s:4:"name";i:1;s:4:"code";i:2;s:6:"active";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1763651671),
	('laravel_cache_medias', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1763713286),
	('laravel_cache_navbarMenus', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:4:{i:0;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:1;s:4:"name";s:8:"Kurumsal";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:37";s:10:"updated_at";s:19:"2025-11-19 18:15:03";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:1;s:4:"name";s:8:"Kurumsal";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:37";s:10:"updated_at";s:19:"2025-11-19 18:15:03";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:1;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:2;s:4:"name";s:13:"Hizmetlerimiz";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:46";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:2;s:4:"name";s:13:"Hizmetlerimiz";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:46";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:2;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:3;s:4:"name";s:6:"Galeri";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:54";s:10:"updated_at";s:19:"2025-11-19 18:15:01";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:3;s:4:"name";s:6:"Galeri";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:54";s:10:"updated_at";s:19:"2025-11-19 18:15:01";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:3;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:4;s:4:"name";s:10:"İletişim";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:59";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:4;s:4:"name";s:10:"İletişim";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:59";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764067989),
	('laravel_cache_siteSettings', 'O:23:"App\\Models\\SiteSettings":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:13:"site_settings";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:13:{s:2:"id";i:1;s:9:"site_name";s:17:"Sirius Car Design";s:4:"logo";s:8:"logo.svg";s:7:"favicon";s:11:"favicon.svg";s:11:"footer_logo";s:15:"footer-logo.svg";s:10:"store_link";N;s:9:"seo_title";N;s:15:"seo_description";N;s:9:"head_code";N;s:11:"header_code";N;s:11:"footer_code";N;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:32:04";}s:11:"\0*\0original";a:13:{s:2:"id";i:1;s:9:"site_name";s:17:"Sirius Car Design";s:4:"logo";s:8:"logo.svg";s:7:"favicon";s:11:"favicon.svg";s:11:"footer_logo";s:15:"footer-logo.svg";s:10:"store_link";N;s:9:"seo_title";N;s:15:"seo_description";N;s:9:"head_code";N;s:11:"header_code";N;s:11:"footer_code";N;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:32:04";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:10:{i:0;s:9:"site_name";i:1;s:4:"logo";i:2;s:7:"favicon";i:3;s:11:"footer_logo";i:4;s:10:"store_link";i:5;s:9:"seo_title";i:6;s:15:"seo_description";i:7;s:9:"head_code";i:8;s:11:"header_code";i:9;s:11:"footer_code";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}', 1764067988);

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `campaign_visits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `utm_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gad_campaignid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_group_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gclid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gbraid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `referrer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `note` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` tinyint(1) DEFAULT '0',
  `show_homepage` tinyint(1) DEFAULT '0',
  `show_footer` tinyint(1) DEFAULT '0',
  `show_panel` tinyint(1) DEFAULT '0',
  `hit` int DEFAULT NULL,
  `parent_category` bigint unsigned DEFAULT NULL,
  `translation_of` bigint unsigned DEFAULT NULL,
  `lang_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_parent_category_foreign` (`parent_category`),
  KEY `categories_translation_of_foreign` (`translation_of`),
  KEY `categories_lang_id_foreign` (`lang_id`),
  CONSTRAINT `categories_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE SET NULL,
  CONSTRAINT `categories_parent_category_foreign` FOREIGN KEY (`parent_category`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `categories_translation_of_foreign` FOREIGN KEY (`translation_of`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `name`, `note`, `image`, `show_menu`, `show_homepage`, `show_footer`, `show_panel`, `hit`, `parent_category`, `translation_of`, `lang_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Kurumsal', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:37', '2025-11-19 15:15:03', NULL),
	(2, 'Hizmetlerimiz', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:46', '2025-11-19 15:15:02', NULL),
	(3, 'Galeri', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:54', '2025-11-19 15:15:01', NULL),
	(4, 'İletişim', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:59', '2025-11-19 15:15:02', NULL),
	(5, 'PPF Kaplama', NULL, NULL, 1, 0, 0, 0, NULL, 2, NULL, NULL, '2025-11-20 08:17:16', '2025-11-20 08:25:00', NULL),
	(6, 'Car Detailing', NULL, NULL, 1, 0, 0, 0, NULL, 2, NULL, NULL, '2025-11-20 08:24:44', '2025-11-20 08:25:07', NULL),
	(7, 'Seramik Kaplama', NULL, NULL, 1, 0, 0, 0, NULL, 2, NULL, NULL, '2025-11-20 08:24:56', '2025-11-20 08:25:01', NULL);

CREATE TABLE IF NOT EXISTS `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `certificates_lang_id_foreign` (`lang_id`),
  CONSTRAINT `certificates_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contacts` (`id`, `name`, `email`, `email2`, `phone`, `phone2`, `address`, `country`, `city`, `state`, `person`, `map`, `hit`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Sirius Car Design', 'info@siriuscardesign.com', NULL, '0322 911 08 71', NULL, 'Süleyman Demirel Blv. Huzurevleri Mah. 77248 Sok. Ferhat Özkan Apt. Altı İş Yeri', 'Türkiye', 'Adana', 'Çukurova', NULL, NULL, 1, '2025-11-16 14:32:58', '2025-11-16 14:50:46', NULL);

CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `failed_jobs` (
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


CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint unsigned DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `faqs_page_id_foreign` (`page_id`),
  CONSTRAINT `faqs_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint unsigned NOT NULL,
  `hit` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_page_id_foreign` (`page_id`),
  CONSTRAINT `galleries_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `home_page_management` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `home_page_management_page_id_foreign` (`page_id`),
  CONSTRAINT `home_page_management_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `languages` (`id`, `name`, `code`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Türkçe', 'tr', 0, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `media_uploads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_05_07_093414_create_languages_table', 1),
	(5, '2025_05_08_163844_create_blades_table', 1),
	(6, '2025_05_10_151237_create_categories_table', 1),
	(7, '2025_05_14_142951_create_pages_table', 1),
	(8, '2025_05_15_171809_create_seos_table', 1),
	(9, '2025_05_16_001851_create_site_settings_table', 1),
	(10, '2025_05_16_200028_create_contacts_table', 1),
	(11, '2025_05_17_050949_create_social_media_table', 1),
	(12, '2025_05_18_174831_create_roles_table', 1),
	(13, '2025_05_18_174931_create_role_users_table', 1),
	(14, '2025_05_20_123632_create_permissions_table', 1),
	(15, '2025_05_20_134157_create_role_permissions_table', 1),
	(16, '2025_05_20_182251_create_api_keys_table', 1),
	(17, '2025_05_21_102858_create_sliders_table', 1),
	(18, '2025_05_21_195231_create_popups_table', 1),
	(19, '2025_05_21_201618_create_references_table', 1),
	(20, '2025_05_21_205346_create_certificates_table', 1),
	(21, '2025_05_21_234315_create_press_kits_table', 1),
	(22, '2025_05_23_134319_create_galleries_table', 1),
	(23, '2025_06_20_110350_create_special_categories_table', 1),
	(24, '2025_06_23_134014_create_brands_table', 1),
	(25, '2025_07_03_102915_create_ads_campaigns_table', 1),
	(26, '2025_07_03_173740_create_campaign_visits_table', 1),
	(27, '2025_07_06_152740_create_user_visits_table', 1),
	(28, '2025_07_07_170218_create_visited_user_calls_table', 1),
	(29, '2025_08_03_114601_create_media_uploads_table', 1),
	(30, '2025_08_09_224848_create_contact_forms_table', 1),
	(31, '2025_08_30_224318_create_faqs_table', 1),
	(32, '2025_09_02_144652_create_home_page_management_table', 1);

CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breadcrumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT '0',
  `blade_id` bigint unsigned DEFAULT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `translation_of` bigint unsigned DEFAULT NULL,
  `parent_page` bigint unsigned DEFAULT NULL,
  `lang_id` bigint unsigned DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`),
  KEY `pages_blade_id_foreign` (`blade_id`),
  KEY `pages_category_id_foreign` (`category_id`),
  KEY `pages_translation_of_foreign` (`translation_of`),
  KEY `pages_parent_page_foreign` (`parent_page`),
  KEY `pages_lang_id_foreign` (`lang_id`),
  CONSTRAINT `pages_blade_id_foreign` FOREIGN KEY (`blade_id`) REFERENCES `blades` (`id`) ON DELETE SET NULL,
  CONSTRAINT `pages_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE SET NULL,
  CONSTRAINT `pages_parent_page_foreign` FOREIGN KEY (`parent_page`) REFERENCES `pages` (`id`) ON DELETE SET NULL,
  CONSTRAINT `pages_translation_of_foreign` FOREIGN KEY (`translation_of`) REFERENCES `pages` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_label_unique` (`label`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
	(1, 'Özel Menüler', 'ozel-menuler', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(2, 'Kullanıcılar', 'kullanicilar', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(3, 'Roller', 'roller', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(4, 'Yetkiler', 'yetkiler', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(5, 'İzinler', 'izinler', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(6, 'Yetki İzinleri', 'yetki-izinleri', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(7, 'Ayarlar', 'ayarlar', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(8, 'Blade', 'blade', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(9, 'Dil', 'dil', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(10, 'Kategori', 'kategori', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(11, 'Sayfa', 'sayfa', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(12, 'Slider', 'slider', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(13, 'Galeri', 'galeri', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(14, 'Referanslar', 'referanslar', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(15, 'Sertifikalar', 'sertifikalar', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(16, 'Basın Kiti', 'basin-kiti', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(17, 'Popup', 'popup', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(18, 'Seo', 'seo', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(19, 'İletişim', 'iletisim', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(20, 'Medya', 'medya', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(21, 'İletişim Formları', 'iletisim-formlari', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(22, 'Markalarımız', 'markalarimiz', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(23, 'Reklam Kampanyaları', 'reklam-kampanyalari', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(24, 'Özel Menu Ayarları', 'ozel-menu-ayarlari', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(25, 'SSS', 'sss', '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(26, 'Anasayfa Yönetimi', 'anasayfa-yonetimi', '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `popups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `press_kits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `press_kits_lang_id_foreign` (`lang_id`),
  CONSTRAINT `press_kits_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `references` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int DEFAULT '0',
  `published` tinyint(1) DEFAULT '0',
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `references_lang_id_foreign` (`lang_id`),
  CONSTRAINT `references_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
	(1, 'Super Admin', 'super-admin', '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `role_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_permissions_role_id_foreign` (`role_id`),
  KEY `role_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(2, 1, 2, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(3, 1, 3, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(4, 1, 4, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(5, 1, 5, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(6, 1, 6, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(7, 1, 7, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(8, 1, 8, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(9, 1, 9, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(10, 1, 10, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(11, 1, 11, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(12, 1, 12, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(13, 1, 13, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(14, 1, 14, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(15, 1, 15, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(16, 1, 16, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(17, 1, 17, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(18, 1, 18, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(19, 1, 19, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(20, 1, 20, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(21, 1, 21, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(22, 1, 22, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(23, 1, 23, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(24, 1, 24, '2025-11-11 08:17:52', '2025-11-11 08:17:52'),
	(25, 1, 25, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `role_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_users_user_id_foreign` (`user_id`),
  KEY `role_users_role_id_foreign` (`role_id`),
  CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role_users` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `seos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canonical` bigint unsigned NOT NULL,
  `page_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seos_canonical_foreign` (`canonical`),
  KEY `seos_page_id_foreign` (`page_id`),
  CONSTRAINT `seos_canonical_foreign` FOREIGN KEY (`canonical`) REFERENCES `pages` (`id`),
  CONSTRAINT `seos_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('5wO8i2MKXyiE8DR4k3HfpXyiBFdj933iJZSZPaSf', 1, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib1ZXVTVSV3hJeWlzeTgxQjY0N2lSQW1zRllUc29kOTFhaVJ5ZnI1byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763627780),
	('BVRGZSj1xzopXY1JFOCsvhaayfdRBw9DkCJT7jtZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZW83QXdseXdEVUlRVkY3dVdHbnpNa1c3SFQzMWRvek5nVjZ5dWxrUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jbXMvY2F0ZWdvcnkiO319', 1763641997),
	('Ck57iKLvc2AeIBTTFsVWpYfM74IrMoCF0SugnZyw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicGJab1B0ZEJWOHFHTWdyWEtlb0hLelFWVzBRSWhVMVBxaFJEQ0J2SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jbXMvY2F0ZWdvcnkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763651857),
	('r8FJQ0l669ieyGayWmPhDwbmUDRT9ELwhLgnvRq5', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3VNU0hsYVN4eHhkOWVQWmlrcncwYW5VM3FPNG13ZUFUU2VYa0F3OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1763985232);

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_link` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_code` longtext COLLATE utf8mb4_unicode_ci,
  `header_code` longtext COLLATE utf8mb4_unicode_ci,
  `footer_code` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `site_settings` (`id`, `site_name`, `logo`, `favicon`, `footer_logo`, `store_link`, `seo_title`, `seo_description`, `head_code`, `header_code`, `footer_code`, `created_at`, `updated_at`) VALUES
	(1, 'Sirius Car Design', 'logo.svg', 'favicon.svg', 'footer-logo.svg', NULL, NULL, NULL, NULL, NULL, NULL, '2025-11-11 08:17:52', '2025-11-11 08:32:04');

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) DEFAULT '0',
  `hit` int DEFAULT '0',
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_lang_id_foreign` (`lang_id`),
  CONSTRAINT `sliders_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `mobile_image`, `url`, `published`, `hit`, `lang_id`, `created_at`, `updated_at`) VALUES
	(1, 'Sirius Car Detailing', NULL, 'sirius-car-detailing.jpg', NULL, NULL, 1, 1, NULL, '2025-11-14 07:11:05', '2025-11-14 07:11:09');

CREATE TABLE IF NOT EXISTS `social_media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contacts_id` bigint unsigned NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `threads` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reddit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_media_contacts_id_foreign` (`contacts_id`),
  CONSTRAINT `social_media_contacts_id_foreign` FOREIGN KEY (`contacts_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `special_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `special_categories_name_unique` (`name`),
  KEY `special_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `special_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Bülent ERCAN', 'info@cdrsoft.com.tr', NULL, '$2y$12$Ytlk.EUClwBbQ9gElDmw0eizEf5En9OROGcWIAyEQCEyV.Fq/SSCq', NULL, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

CREATE TABLE IF NOT EXISTS `user_visits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `visited_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_visits_ip_address_visited_date_index` (`ip_address`,`visited_date`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user_visits` (`id`, `ip_address`, `user_agent`, `visited_date`, `created_at`, `updated_at`) VALUES
	(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-11', '2025-11-11 08:17:55', '2025-11-11 08:17:55'),
	(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-12', '2025-11-12 09:57:05', '2025-11-12 09:57:05'),
	(3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-13', '2025-11-13 10:22:08', '2025-11-13 10:22:08'),
	(4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-14', '2025-11-14 06:34:34', '2025-11-14 06:34:34'),
	(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-15', '2025-11-15 08:12:51', '2025-11-15 08:12:51'),
	(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-16', '2025-11-16 07:31:06', '2025-11-16 07:31:06'),
	(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-18', '2025-11-18 15:38:42', '2025-11-18 15:38:42'),
	(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-19', '2025-11-19 10:49:15', '2025-11-19 10:49:15'),
	(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-20', '2025-11-20 07:37:44', '2025-11-20 07:37:44'),
	(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-24', '2025-11-24 10:53:08', '2025-11-24 10:53:08');

CREATE TABLE IF NOT EXISTS `visited_user_calls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
