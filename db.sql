-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                8.4.3 - MySQL Community Server - GPL
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- tablo yapısı dökülüyor sirius.ads_campaigns
CREATE TABLE IF NOT EXISTS `ads_campaigns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gad_campaignid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_group_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.ads_campaigns: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.api_keys
CREATE TABLE IF NOT EXISTS `api_keys` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `youtube_channel_id` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recaptcha_site_key` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recaptcha_secret_key` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.api_keys: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `api_keys` (`id`, `youtube_channel_id`, `recaptcha_site_key`, `recaptcha_secret_key`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

-- tablo yapısı dökülüyor sirius.blades
CREATE TABLE IF NOT EXISTS `blades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.blades: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `blades` (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES
	(1, 'Normal', 'normal', '2025-11-24 16:52:40', '2025-11-24 16:52:40'),
	(2, 'Hizmetler', 'hizmetler', '2025-11-24 20:07:03', '2025-11-24 20:07:03'),
	(3, 'Hizmet Detay', 'hizmet-detay', '2025-11-24 21:13:40', '2025-11-24 21:13:40');

-- tablo yapısı dökülüyor sirius.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.brands: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.cache: ~3 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('laravel_cache_blades', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:3:{i:0;O:16:"App\\Models\\Blade":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:6:"blades";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:5:{s:2:"id";i:1;s:4:"name";s:6:"Normal";s:4:"file";s:6:"normal";s:10:"created_at";s:19:"2025-11-24 19:52:40";s:10:"updated_at";s:19:"2025-11-24 19:52:40";}s:11:"\0*\0original";a:5:{s:2:"id";i:1;s:4:"name";s:6:"Normal";s:4:"file";s:6:"normal";s:10:"created_at";s:19:"2025-11-24 19:52:40";s:10:"updated_at";s:19:"2025-11-24 19:52:40";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:2:{i:0;s:4:"name";i:1;s:4:"file";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}i:1;O:16:"App\\Models\\Blade":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:6:"blades";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:5:{s:2:"id";i:2;s:4:"name";s:9:"Hizmetler";s:4:"file";s:9:"hizmetler";s:10:"created_at";s:19:"2025-11-24 23:07:03";s:10:"updated_at";s:19:"2025-11-24 23:07:03";}s:11:"\0*\0original";a:5:{s:2:"id";i:2;s:4:"name";s:9:"Hizmetler";s:4:"file";s:9:"hizmetler";s:10:"created_at";s:19:"2025-11-24 23:07:03";s:10:"updated_at";s:19:"2025-11-24 23:07:03";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:2:{i:0;s:4:"name";i:1;s:4:"file";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}i:2;O:16:"App\\Models\\Blade":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:6:"blades";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:5:{s:2:"id";i:3;s:4:"name";s:12:"Hizmet Detay";s:4:"file";s:12:"hizmet-detay";s:10:"created_at";s:19:"2025-11-25 00:13:40";s:10:"updated_at";s:19:"2025-11-25 00:13:40";}s:11:"\0*\0original";a:5:{s:2:"id";i:3;s:4:"name";s:12:"Hizmet Detay";s:4:"file";s:12:"hizmet-detay";s:10:"created_at";s:19:"2025-11-25 00:13:40";s:10:"updated_at";s:19:"2025-11-25 00:13:40";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:2:{i:0;s:4:"name";i:1;s:4:"file";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764105220),
	('laravel_cache_brands', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764097022),
	('laravel_cache_fastMenus', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:0:{}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764095214),
	('laravel_cache_languages', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:1:{i:0;O:19:"App\\Models\\Language":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:9:"languages";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:6:{s:2:"id";i:1;s:4:"name";s:8:"Türkçe";s:4:"code";s:2:"tr";s:6:"active";i:0;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:17:52";}s:11:"\0*\0original";a:6:{s:2:"id";i:1;s:4:"name";s:8:"Türkçe";s:4:"code";s:2:"tr";s:6:"active";i:0;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-11 11:17:52";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:3:{i:0;s:4:"name";i:1;s:4:"code";i:2;s:6:"active";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764103531),
	('laravel_cache_navbarMenus', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:4:{i:0;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:1;s:4:"name";s:8:"Kurumsal";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:37";s:10:"updated_at";s:19:"2025-11-19 18:15:03";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:1;s:4:"name";s:8:"Kurumsal";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:37";s:10:"updated_at";s:19:"2025-11-19 18:15:03";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:1;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:2;s:4:"name";s:13:"Hizmetlerimiz";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:46";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:2;s:4:"name";s:13:"Hizmetlerimiz";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:46";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:2;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:3;s:4:"name";s:6:"Galeri";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:54";s:10:"updated_at";s:19:"2025-11-19 18:15:01";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:3;s:4:"name";s:6:"Galeri";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:54";s:10:"updated_at";s:19:"2025-11-19 18:15:01";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:3;O:19:"App\\Models\\Category":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:10:"categories";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:15:{s:2:"id";i:4;s:4:"name";s:10:"İletişim";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:59";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:11:"\0*\0original";a:15:{s:2:"id";i:4;s:4:"name";s:10:"İletişim";s:4:"note";N;s:5:"image";N;s:9:"show_menu";i:1;s:13:"show_homepage";i:0;s:11:"show_footer";i:0;s:10:"show_panel";i:0;s:3:"hit";N;s:15:"parent_category";N;s:14:"translation_of";N;s:7:"lang_id";N;s:10:"created_at";s:19:"2025-11-19 18:14:59";s:10:"updated_at";s:19:"2025-11-19 18:15:02";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:4:"name";i:1;s:4:"note";i:2;s:5:"image";i:3;s:3:"hit";i:4;s:15:"parent_category";i:5;s:14:"translation_of";i:6;s:7:"lang_id";i:7;s:9:"show_menu";i:8;s:13:"show_homepage";i:9;s:11:"show_footer";i:10;s:10:"show_panel";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764095214),
	('laravel_cache_pages', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:3:{i:0;O:15:"App\\Models\\Page":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:5:"pages";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:16:{s:2:"id";i:1;s:5:"title";s:12:"Hakkımızda";s:4:"slug";s:10:"hakkimizda";s:7:"content";s:3039:"<p>Aracınız sadece sizi bir yerden bir yere götüren bir taşıt değil; tarzınızı, zevkinizi ve kişiliğinizi yansıtan en özel yol arkadaşınızdır. Adana\'da hizmet veren <strong>Sirius Car Design</strong> olarak biz, bu yansımanın en kusursuz ve çarpıcı haliyle ortaya çıkması için çalışıyoruz. Otomobil bakım, koruma ve tasarım alanında yıllara dayanan teknik deneyimimizi, tutkuyla harmanladığımız işçiliğimizle birleştiriyoruz. Hedefimiz net: Aracınıza sadece bakım yapmak değil, ona kalıcı bir değer katmak.</p>\r\n\r\n<h2>Adana’da Detaylara Önem Verenlerin Buluşma Noktası</h2>\r\n\r\n<p>Sirius Car Design, sıradan bir oto yıkama noktası olmanın çok ötesindedir. Biz, estetikle işlevselliği birleştiren, <strong>profesyonel car detailing</strong>, <strong>seramik kaplama</strong> ve <strong>PPF kaplama (Boya Koruma Filmi)</strong> gibi uzmanlık gerektiren alanlarda hizmet veren kapsamlı bir estetik merkeziyiz. Aracınızın fabrika çıkışı görünümünü korumakla kalmıyor, uyguladığımız <strong>cam filmi</strong>, <strong>jant boyama</strong> ve <strong>araç folyo kaplama</strong> işlemleriyle onu hayalinizdeki görünüme kavuşturuyoruz. Her işlemde amacımız, sahibine özel, premium bir deneyim sunmak ve aracın standartlarını yükseltmektir.</p>\r\n\r\n<h2>Müşteri Memnuniyeti Bir "İş" Değil, Bir "İlişkidir"</h2>\r\n\r\n<p>Kapımızdan giren her araç sahibi bizim için sadece bir müşteri değil, uzun soluklu bir yol arkadaşıdır. Aracınızı bize teslim ettiğinizde yalnızca teknik bir hizmet almazsınız; aynı zamanda sizi anlayan, aracınızın ihtiyaçlarını doğru analiz eden ve bütçenize en uygun çözümleri sunan samimi bir ekiple tanışırsınız. İster <strong>detaylı temizlik</strong> ile aracınızı ferahlatın, ister boya koruma ile yatırımınızı güvence altına alın; tüm süreç boyunca şeffaf, bilgilendirici ve güven veren bir iletişim kurmayı taahhüt ediyoruz.</p>\r\n\r\n<h2>Kalite, Güven ve Tutkuyla Harmanlanmış Teknoloji</h2>\r\n\r\n<p>Yaptığımız işin teknik tarafını ciddiye alıyoruz. Tüm <strong>oto bakım ve onarım</strong> süreçlerimizde, dünya standartlarında kabul görmüş en kaliteli ürünleri ve son teknoloji ekipmanları kullanıyoruz. Sektördeki gelişmeleri ve yenilikçi uygulama tekniklerini yakından takip eden eğitimli personelimizle, Adana\'da standartları belirliyoruz.</p>\r\n\r\n<p>İşimizi yalnızca profesyonelce değil, büyük bir tutkuyla yapıyoruz. Çünkü otomobiller bizim için sadece metal yığınları değil; her biri kendine has karakteri olan birer yaşam tarzı. <strong>Sirius Car Design</strong> olarak, her sürüşün mükemmel bir başlangıcı hak ettiğine inanıyoruz.</p>\r\n\r\n<p>Aracınızı bize emanet edin; onu yalnızca temizleyip güzelleştirmekle kalmayalım. <strong>Adana\'nın en iyi oto koruma</strong> çözümleriyle onu yenileyelim, koruyalım ve sizi trafikte özel hissettirecek o ışıltıyı geri kazandıralım.</p>";s:5:"image";s:19:"hakkimizda-elrs.jpg";s:16:"breadcrumb_image";N;s:7:"is_main";i:1;s:8:"blade_id";i:1;s:11:"category_id";i:8;s:14:"translation_of";N;s:11:"parent_page";N;s:7:"lang_id";N;s:9:"published";i:1;s:10:"created_at";s:19:"2025-11-24 20:04:46";s:10:"updated_at";s:19:"2025-11-24 20:44:59";s:10:"deleted_at";N;}s:11:"\0*\0original";a:16:{s:2:"id";i:1;s:5:"title";s:12:"Hakkımızda";s:4:"slug";s:10:"hakkimizda";s:7:"content";s:3039:"<p>Aracınız sadece sizi bir yerden bir yere götüren bir taşıt değil; tarzınızı, zevkinizi ve kişiliğinizi yansıtan en özel yol arkadaşınızdır. Adana\'da hizmet veren <strong>Sirius Car Design</strong> olarak biz, bu yansımanın en kusursuz ve çarpıcı haliyle ortaya çıkması için çalışıyoruz. Otomobil bakım, koruma ve tasarım alanında yıllara dayanan teknik deneyimimizi, tutkuyla harmanladığımız işçiliğimizle birleştiriyoruz. Hedefimiz net: Aracınıza sadece bakım yapmak değil, ona kalıcı bir değer katmak.</p>\r\n\r\n<h2>Adana’da Detaylara Önem Verenlerin Buluşma Noktası</h2>\r\n\r\n<p>Sirius Car Design, sıradan bir oto yıkama noktası olmanın çok ötesindedir. Biz, estetikle işlevselliği birleştiren, <strong>profesyonel car detailing</strong>, <strong>seramik kaplama</strong> ve <strong>PPF kaplama (Boya Koruma Filmi)</strong> gibi uzmanlık gerektiren alanlarda hizmet veren kapsamlı bir estetik merkeziyiz. Aracınızın fabrika çıkışı görünümünü korumakla kalmıyor, uyguladığımız <strong>cam filmi</strong>, <strong>jant boyama</strong> ve <strong>araç folyo kaplama</strong> işlemleriyle onu hayalinizdeki görünüme kavuşturuyoruz. Her işlemde amacımız, sahibine özel, premium bir deneyim sunmak ve aracın standartlarını yükseltmektir.</p>\r\n\r\n<h2>Müşteri Memnuniyeti Bir "İş" Değil, Bir "İlişkidir"</h2>\r\n\r\n<p>Kapımızdan giren her araç sahibi bizim için sadece bir müşteri değil, uzun soluklu bir yol arkadaşıdır. Aracınızı bize teslim ettiğinizde yalnızca teknik bir hizmet almazsınız; aynı zamanda sizi anlayan, aracınızın ihtiyaçlarını doğru analiz eden ve bütçenize en uygun çözümleri sunan samimi bir ekiple tanışırsınız. İster <strong>detaylı temizlik</strong> ile aracınızı ferahlatın, ister boya koruma ile yatırımınızı güvence altına alın; tüm süreç boyunca şeffaf, bilgilendirici ve güven veren bir iletişim kurmayı taahhüt ediyoruz.</p>\r\n\r\n<h2>Kalite, Güven ve Tutkuyla Harmanlanmış Teknoloji</h2>\r\n\r\n<p>Yaptığımız işin teknik tarafını ciddiye alıyoruz. Tüm <strong>oto bakım ve onarım</strong> süreçlerimizde, dünya standartlarında kabul görmüş en kaliteli ürünleri ve son teknoloji ekipmanları kullanıyoruz. Sektördeki gelişmeleri ve yenilikçi uygulama tekniklerini yakından takip eden eğitimli personelimizle, Adana\'da standartları belirliyoruz.</p>\r\n\r\n<p>İşimizi yalnızca profesyonelce değil, büyük bir tutkuyla yapıyoruz. Çünkü otomobiller bizim için sadece metal yığınları değil; her biri kendine has karakteri olan birer yaşam tarzı. <strong>Sirius Car Design</strong> olarak, her sürüşün mükemmel bir başlangıcı hak ettiğine inanıyoruz.</p>\r\n\r\n<p>Aracınızı bize emanet edin; onu yalnızca temizleyip güzelleştirmekle kalmayalım. <strong>Adana\'nın en iyi oto koruma</strong> çözümleriyle onu yenileyelim, koruyalım ve sizi trafikte özel hissettirecek o ışıltıyı geri kazandıralım.</p>";s:5:"image";s:19:"hakkimizda-elrs.jpg";s:16:"breadcrumb_image";N;s:7:"is_main";i:1;s:8:"blade_id";i:1;s:11:"category_id";i:8;s:14:"translation_of";N;s:11:"parent_page";N;s:7:"lang_id";N;s:9:"published";i:1;s:10:"created_at";s:19:"2025-11-24 20:04:46";s:10:"updated_at";s:19:"2025-11-24 20:44:59";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:12:{i:0;s:5:"title";i:1;s:4:"slug";i:2;s:7:"content";i:3;s:5:"image";i:4;s:16:"breadcrumb_image";i:5;s:11:"category_id";i:6;s:11:"parent_page";i:7;s:8:"blade_id";i:8;s:14:"translation_of";i:9;s:7:"lang_id";i:10;s:9:"published";i:11;s:7:"is_main";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:1;O:15:"App\\Models\\Page":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:5:"pages";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:16:{s:2:"id";i:2;s:5:"title";s:13:"Hizmetlerimiz";s:4:"slug";s:13:"hizmetlerimiz";s:7:"content";s:1086:"<p><strong>Adana’da aracınız için en kapsamlı ve profesyonel bakım çözümlerini</strong> mi arıyorsunuz? Sirius Oto Design olarak, sadece bir yıkama değil, aracınızın değerini koruyan üst düzey uygulamalar sunuyoruz. <strong>Adana car detailing ve oto kuaför</strong> sektöründe, lüks segmentten standart kullanıma kadar her araca özel teknik çözümler geliştiriyoruz.</p>\r\n\r\n<p>Hizmet yelpazemiz; boyayı güneş yanıklarına ve çiziklere karşı koruyan <strong>seramik kaplama</strong> ve <strong>PPF kaplama (boya koruma filmi)</strong> uygulamalarından, sürüş konforunuzu artıran garantili cam filmi ve ısı yalıtımı çözümlerine kadar uzanır. Ayrıca <strong>oto yıkama</strong>, <strong>detaylı iç temizlik</strong>, <strong>jant boyama</strong> ve <strong>araç folyo kaplama</strong> gibi estetik işlemlerle aracınızı ilk günkü kondisyonuna getiriyoruz. Aşağıda, Adana’nın en titiz ustaları tarafından sunulan tüm hizmetlerimizi inceleyebilir, aracınızın ihtiyacı olan profesyonel dokunuşu keşfedebilirsiniz.</p>";s:5:"image";N;s:16:"breadcrumb_image";N;s:7:"is_main";i:1;s:8:"blade_id";i:2;s:11:"category_id";i:2;s:14:"translation_of";N;s:11:"parent_page";N;s:7:"lang_id";N;s:9:"published";i:1;s:10:"created_at";s:19:"2025-11-24 23:53:44";s:10:"updated_at";s:19:"2025-11-24 23:53:44";s:10:"deleted_at";N;}s:11:"\0*\0original";a:16:{s:2:"id";i:2;s:5:"title";s:13:"Hizmetlerimiz";s:4:"slug";s:13:"hizmetlerimiz";s:7:"content";s:1086:"<p><strong>Adana’da aracınız için en kapsamlı ve profesyonel bakım çözümlerini</strong> mi arıyorsunuz? Sirius Oto Design olarak, sadece bir yıkama değil, aracınızın değerini koruyan üst düzey uygulamalar sunuyoruz. <strong>Adana car detailing ve oto kuaför</strong> sektöründe, lüks segmentten standart kullanıma kadar her araca özel teknik çözümler geliştiriyoruz.</p>\r\n\r\n<p>Hizmet yelpazemiz; boyayı güneş yanıklarına ve çiziklere karşı koruyan <strong>seramik kaplama</strong> ve <strong>PPF kaplama (boya koruma filmi)</strong> uygulamalarından, sürüş konforunuzu artıran garantili cam filmi ve ısı yalıtımı çözümlerine kadar uzanır. Ayrıca <strong>oto yıkama</strong>, <strong>detaylı iç temizlik</strong>, <strong>jant boyama</strong> ve <strong>araç folyo kaplama</strong> gibi estetik işlemlerle aracınızı ilk günkü kondisyonuna getiriyoruz. Aşağıda, Adana’nın en titiz ustaları tarafından sunulan tüm hizmetlerimizi inceleyebilir, aracınızın ihtiyacı olan profesyonel dokunuşu keşfedebilirsiniz.</p>";s:5:"image";N;s:16:"breadcrumb_image";N;s:7:"is_main";i:1;s:8:"blade_id";i:2;s:11:"category_id";i:2;s:14:"translation_of";N;s:11:"parent_page";N;s:7:"lang_id";N;s:9:"published";i:1;s:10:"created_at";s:19:"2025-11-24 23:53:44";s:10:"updated_at";s:19:"2025-11-24 23:53:44";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:12:{i:0;s:5:"title";i:1;s:4:"slug";i:2;s:7:"content";i:3;s:5:"image";i:4;s:16:"breadcrumb_image";i:5;s:11:"category_id";i:6;s:11:"parent_page";i:7;s:8:"blade_id";i:8;s:14:"translation_of";i:9;s:7:"lang_id";i:10;s:9:"published";i:11;s:7:"is_main";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}i:2;O:15:"App\\Models\\Page":34:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:5:"pages";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:16:{s:2:"id";i:3;s:5:"title";s:13:"Car Detailing";s:4:"slug";s:13:"car-detailing";s:7:"content";s:3142:"<p>Aracınızın gerçek estetiği, detaylarda gizlidir. Sirius Oto Design olarak, Adana\'da sunduğumuz profesyonel Car Detailing hizmetiyle, aracınızı standart temizlik kalıplarının ötesine taşıyoruz. Sadece görünen kirleri değil, aracın gözeneklerine işlemiş zamanın yorgunluğunu siliyor, aracınıza fabrika çıkışı kondisyonunu ve hijyenini geri kazandırıyoruz.</p>\r\n\r\n<h2>Car Detailing Nedir? Neden Standart Yıkamadan Farklıdır?</h2>\r\n\r\n<p>Car Detailing (Oto Detaylandırma), sıradan bir oto yıkama işlemi değildir; kapsamlı bir yenileme, bakım ve koruma prosedürüdür. Sirius Oto Design atölyesinde, aracınızın hem iç yaşam alanı hem de dış yüzeyi, nanoteknolojik ürünler ve profesyonel ekipmanlarla "mikron" seviyesinde ele alınır.</p>\r\n\r\n<p>Süreç boyunca döşeme, deri, plastik, vinil, cam ve motor aksamları için ayrı ayrı pH dengeli, materyale zarar vermeyen özel solüsyonlar kullanıyoruz. Amacımız sadece temiz bir görüntü sağlamak değil, aracınızın ömrünü uzatmak ve prestijini artırmaktır.</p>\r\n\r\n<h2>Hizmet Kapsamımızda Neler Var?</h2>\r\n\r\n<h3>1. Derinlemesine İç Detaylı Temizlik ve Sterilizasyon</h3>\r\n\r\n<p>Aracınızın içinde gözle görülmeyen bakteriler, koltuklara sinmiş lekeler ve klima kanallarındaki tozlar sağlığınızı tehdit edebilir.</p>\r\n\r\n<p><strong>Koltuk ve Döşeme Temizliği</strong>: Kumaş veya deri fark etmeksizin, dokuya zarar vermeden kusursuz leke çıkarma işlemi.</p>\r\n\r\n<p><strong>Kokpit ve Trim Bakımı</strong>: Torpido, kapı panelleri ve havalandırma ızgaraları antistatik ürünlerle temizlenir ve beslenir.</p>\r\n\r\n<p><strong>Taban ve Tavan Temizliği</strong>: En zorlu bölgeler olan tavan döşemesi ve taban halısındaki kirler vakumlu ve buharlı sistemlerle arındırılır.</p>\r\n\r\n<h3>2. Dış Detaylandırma ve Motor Bakımı</h3>\r\n\r\n<p>Dış yüzeyde sadece su ve sabun yetmez; boyanın nefes alması gerekir.</p>\r\n\r\n<p><strong>Boya Dekontaminasyonu</strong>: Kaportaya yapışan demir tozları, reçine ve zift kalıntıları kil (clay bar) uygulaması ile temizlenir.</p>\r\n\r\n<p><strong>Jant ve Motor Temizliği</strong>: Jantlardaki balata tozları ve motor bloğundaki yağ kalıntıları, güvenli kimyasallarla parlatılır ve koruma altına alınır.</p>\r\n\r\n<h2>Neden Sirius Car Detailing? (Hizmetin Faydaları)</h2>\r\n\r\n<p>Adana\'nın tozlu yapısı ve sıcak iklimi araçları çabuk yıpratır. Uzman dokunuşlarımızla elde edeceğiniz avantajlar şunlardır:</p>\r\n\r\n<p><strong>Tam Hijyen</strong>: Araç içi akarlar, bakteriler ve kötü kokular (sigara, nem vb.) ozonlama ve dezenfeksiyon ile %99 oranında yok edilir.</p>\r\n\r\n<p><strong>Değer Artışı</strong>: Detayları parlayan, trimi beslenmiş ve motoru temiz bir araç, ikinci el değerini her zaman korur.</p>\r\n\r\n<p><strong>Kalıcı Koruma</strong>: Temizlenen plastik ve deri aksamlar UV ışınlarına karşı koruyucu sütlerle beslenir, çatlamalar önlenir.</p>\r\n\r\n<p><strong>Maksimum Estetik</strong>: Jantlardan egzoz uçlarına kadar her nokta parlatılarak aracınızın görsel çekiciliği artırılır.</p>";s:5:"image";N;s:16:"breadcrumb_image";N;s:7:"is_main";i:1;s:8:"blade_id";i:3;s:11:"category_id";i:6;s:14:"translation_of";N;s:11:"parent_page";N;s:7:"lang_id";N;s:9:"published";i:1;s:10:"created_at";s:19:"2025-11-25 00:13:29";s:10:"updated_at";s:19:"2025-11-25 00:13:55";s:10:"deleted_at";N;}s:11:"\0*\0original";a:16:{s:2:"id";i:3;s:5:"title";s:13:"Car Detailing";s:4:"slug";s:13:"car-detailing";s:7:"content";s:3142:"<p>Aracınızın gerçek estetiği, detaylarda gizlidir. Sirius Oto Design olarak, Adana\'da sunduğumuz profesyonel Car Detailing hizmetiyle, aracınızı standart temizlik kalıplarının ötesine taşıyoruz. Sadece görünen kirleri değil, aracın gözeneklerine işlemiş zamanın yorgunluğunu siliyor, aracınıza fabrika çıkışı kondisyonunu ve hijyenini geri kazandırıyoruz.</p>\r\n\r\n<h2>Car Detailing Nedir? Neden Standart Yıkamadan Farklıdır?</h2>\r\n\r\n<p>Car Detailing (Oto Detaylandırma), sıradan bir oto yıkama işlemi değildir; kapsamlı bir yenileme, bakım ve koruma prosedürüdür. Sirius Oto Design atölyesinde, aracınızın hem iç yaşam alanı hem de dış yüzeyi, nanoteknolojik ürünler ve profesyonel ekipmanlarla "mikron" seviyesinde ele alınır.</p>\r\n\r\n<p>Süreç boyunca döşeme, deri, plastik, vinil, cam ve motor aksamları için ayrı ayrı pH dengeli, materyale zarar vermeyen özel solüsyonlar kullanıyoruz. Amacımız sadece temiz bir görüntü sağlamak değil, aracınızın ömrünü uzatmak ve prestijini artırmaktır.</p>\r\n\r\n<h2>Hizmet Kapsamımızda Neler Var?</h2>\r\n\r\n<h3>1. Derinlemesine İç Detaylı Temizlik ve Sterilizasyon</h3>\r\n\r\n<p>Aracınızın içinde gözle görülmeyen bakteriler, koltuklara sinmiş lekeler ve klima kanallarındaki tozlar sağlığınızı tehdit edebilir.</p>\r\n\r\n<p><strong>Koltuk ve Döşeme Temizliği</strong>: Kumaş veya deri fark etmeksizin, dokuya zarar vermeden kusursuz leke çıkarma işlemi.</p>\r\n\r\n<p><strong>Kokpit ve Trim Bakımı</strong>: Torpido, kapı panelleri ve havalandırma ızgaraları antistatik ürünlerle temizlenir ve beslenir.</p>\r\n\r\n<p><strong>Taban ve Tavan Temizliği</strong>: En zorlu bölgeler olan tavan döşemesi ve taban halısındaki kirler vakumlu ve buharlı sistemlerle arındırılır.</p>\r\n\r\n<h3>2. Dış Detaylandırma ve Motor Bakımı</h3>\r\n\r\n<p>Dış yüzeyde sadece su ve sabun yetmez; boyanın nefes alması gerekir.</p>\r\n\r\n<p><strong>Boya Dekontaminasyonu</strong>: Kaportaya yapışan demir tozları, reçine ve zift kalıntıları kil (clay bar) uygulaması ile temizlenir.</p>\r\n\r\n<p><strong>Jant ve Motor Temizliği</strong>: Jantlardaki balata tozları ve motor bloğundaki yağ kalıntıları, güvenli kimyasallarla parlatılır ve koruma altına alınır.</p>\r\n\r\n<h2>Neden Sirius Car Detailing? (Hizmetin Faydaları)</h2>\r\n\r\n<p>Adana\'nın tozlu yapısı ve sıcak iklimi araçları çabuk yıpratır. Uzman dokunuşlarımızla elde edeceğiniz avantajlar şunlardır:</p>\r\n\r\n<p><strong>Tam Hijyen</strong>: Araç içi akarlar, bakteriler ve kötü kokular (sigara, nem vb.) ozonlama ve dezenfeksiyon ile %99 oranında yok edilir.</p>\r\n\r\n<p><strong>Değer Artışı</strong>: Detayları parlayan, trimi beslenmiş ve motoru temiz bir araç, ikinci el değerini her zaman korur.</p>\r\n\r\n<p><strong>Kalıcı Koruma</strong>: Temizlenen plastik ve deri aksamlar UV ışınlarına karşı koruyucu sütlerle beslenir, çatlamalar önlenir.</p>\r\n\r\n<p><strong>Maksimum Estetik</strong>: Jantlardan egzoz uçlarına kadar her nokta parlatılarak aracınızın görsel çekiciliği artırılır.</p>";s:5:"image";N;s:16:"breadcrumb_image";N;s:7:"is_main";i:1;s:8:"blade_id";i:3;s:11:"category_id";i:6;s:14:"translation_of";N;s:11:"parent_page";N;s:7:"lang_id";N;s:9:"published";i:1;s:10:"created_at";s:19:"2025-11-25 00:13:29";s:10:"updated_at";s:19:"2025-11-25 00:13:55";s:10:"deleted_at";N;}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:1:{s:10:"deleted_at";s:8:"datetime";}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:12:{i:0;s:5:"title";i:1;s:4:"slug";i:2;s:7:"content";i:3;s:5:"image";i:4;s:16:"breadcrumb_image";i:5;s:11:"category_id";i:6;s:11:"parent_page";i:7;s:8:"blade_id";i:8;s:14:"translation_of";i:9;s:7:"lang_id";i:10;s:9:"published";i:11;s:7:"is_main";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:16:"\0*\0forceDeleting";b:0;}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764105235),
	('laravel_cache_seo', 'O:39:"Illuminate\\Database\\Eloquent\\Collection":2:{s:8:"\0*\0items";a:3:{i:0;O:14:"App\\Models\\Seo":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:4:"seos";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:1;s:5:"title";s:13:"Car Detailing";s:11:"description";s:135:"Adana car detailing ve detaylı temizlik hizmetiyle aracınız ilk günkü hijyenine kavuşsun. Profesyonel iç-dış bakım Sirius\'ta.";s:9:"canonical";i:3;s:7:"page_id";i:3;s:10:"created_at";s:19:"2025-11-25 00:15:34";s:10:"updated_at";s:19:"2025-11-25 00:15:34";}s:11:"\0*\0original";a:7:{s:2:"id";i:1;s:5:"title";s:13:"Car Detailing";s:11:"description";s:135:"Adana car detailing ve detaylı temizlik hizmetiyle aracınız ilk günkü hijyenine kavuşsun. Profesyonel iç-dış bakım Sirius\'ta.";s:9:"canonical";i:3;s:7:"page_id";i:3;s:10:"created_at";s:19:"2025-11-25 00:15:34";s:10:"updated_at";s:19:"2025-11-25 00:15:34";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:4:{i:0;s:5:"title";i:1;s:11:"description";i:2;s:9:"canonical";i:3;s:7:"page_id";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}i:1;O:14:"App\\Models\\Seo":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:4:"seos";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:2;s:5:"title";s:12:"Hakkımızda";s:11:"description";s:116:"Adana\'da car detailing, seramik kaplama ve oto bakım uzmanı Sirius Car Design ile aracınızın değerini koruyun.";s:9:"canonical";i:1;s:7:"page_id";i:1;s:10:"created_at";s:19:"2025-11-25 00:19:21";s:10:"updated_at";s:19:"2025-11-25 00:19:21";}s:11:"\0*\0original";a:7:{s:2:"id";i:2;s:5:"title";s:12:"Hakkımızda";s:11:"description";s:116:"Adana\'da car detailing, seramik kaplama ve oto bakım uzmanı Sirius Car Design ile aracınızın değerini koruyun.";s:9:"canonical";i:1;s:7:"page_id";i:1;s:10:"created_at";s:19:"2025-11-25 00:19:21";s:10:"updated_at";s:19:"2025-11-25 00:19:21";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:4:{i:0;s:5:"title";i:1;s:11:"description";i:2;s:9:"canonical";i:3;s:7:"page_id";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}i:2;O:14:"App\\Models\\Seo":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:4:"seos";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:7:{s:2:"id";i:3;s:5:"title";s:25:"Araç Koruma ve Detailing";s:11:"description";s:122:"Adana\'da car detailing, seramik kaplama, PPF ve oto yıkama hizmetleri. Profesyonel araç koruma ve bakım çözümlerimiz";s:9:"canonical";i:2;s:7:"page_id";i:2;s:10:"created_at";s:19:"2025-11-25 00:24:22";s:10:"updated_at";s:19:"2025-11-25 00:24:22";}s:11:"\0*\0original";a:7:{s:2:"id";i:3;s:5:"title";s:25:"Araç Koruma ve Detailing";s:11:"description";s:122:"Adana\'da car detailing, seramik kaplama, PPF ve oto yıkama hizmetleri. Profesyonel araç koruma ve bakım çözümlerimiz";s:9:"canonical";i:2;s:7:"page_id";i:2;s:10:"created_at";s:19:"2025-11-25 00:24:22";s:10:"updated_at";s:19:"2025-11-25 00:24:22";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:4:{i:0;s:5:"title";i:1;s:11:"description";i:2;s:9:"canonical";i:3;s:7:"page_id";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}}s:28:"\0*\0escapeWhenCastingToString";b:0;}', 1764105862),
	('laravel_cache_siteSettings', 'O:23:"App\\Models\\SiteSettings":33:{s:13:"\0*\0connection";s:5:"mysql";s:8:"\0*\0table";s:13:"site_settings";s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:12:"incrementing";b:1;s:7:"\0*\0with";a:0:{}s:12:"\0*\0withCount";a:0:{}s:19:"preventsLazyLoading";b:0;s:10:"\0*\0perPage";i:15;s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;s:28:"\0*\0escapeWhenCastingToString";b:0;s:13:"\0*\0attributes";a:14:{s:2:"id";i:1;s:9:"site_name";s:17:"Sirius Car Design";s:4:"logo";s:8:"logo.svg";s:7:"favicon";s:11:"favicon.svg";s:11:"footer_logo";s:15:"footer-logo.svg";s:10:"store_link";N;s:9:"seo_brand";s:23:"Sirius Car Design Adana";s:9:"seo_title";s:40:"Profesyonel Oto Bakım ve Koruma Merkezi";s:15:"seo_description";s:125:"Adana\'da profesyonel car detailing, oto yıkama, seramik ve PPF hizmetleri. Aracınıza Sirius uzmanlığıyla değer katın.";s:9:"head_code";N;s:11:"header_code";N;s:11:"footer_code";N;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-24 22:00:23";}s:11:"\0*\0original";a:14:{s:2:"id";i:1;s:9:"site_name";s:17:"Sirius Car Design";s:4:"logo";s:8:"logo.svg";s:7:"favicon";s:11:"favicon.svg";s:11:"footer_logo";s:15:"footer-logo.svg";s:10:"store_link";N;s:9:"seo_brand";s:23:"Sirius Car Design Adana";s:9:"seo_title";s:40:"Profesyonel Oto Bakım ve Koruma Merkezi";s:15:"seo_description";s:125:"Adana\'da profesyonel car detailing, oto yıkama, seramik ve PPF hizmetleri. Aracınıza Sirius uzmanlığıyla değer katın.";s:9:"head_code";N;s:11:"header_code";N;s:11:"footer_code";N;s:10:"created_at";s:19:"2025-11-11 11:17:52";s:10:"updated_at";s:19:"2025-11-24 22:00:23";}s:10:"\0*\0changes";a:0:{}s:11:"\0*\0previous";a:0:{}s:8:"\0*\0casts";a:0:{}s:17:"\0*\0classCastCache";a:0:{}s:21:"\0*\0attributeCastCache";a:0:{}s:13:"\0*\0dateFormat";N;s:10:"\0*\0appends";a:0:{}s:19:"\0*\0dispatchesEvents";a:0:{}s:14:"\0*\0observables";a:0:{}s:12:"\0*\0relations";a:0:{}s:10:"\0*\0touches";a:0:{}s:27:"\0*\0relationAutoloadCallback";N;s:26:"\0*\0relationAutoloadContext";N;s:10:"timestamps";b:1;s:13:"usesUniqueIds";b:0;s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:11:"\0*\0fillable";a:11:{i:0;s:9:"site_name";i:1;s:4:"logo";i:2;s:7:"favicon";i:3;s:11:"footer_logo";i:4;s:10:"store_link";i:5;s:9:"seo_brand";i:6;s:9:"seo_title";i:7;s:15:"seo_description";i:8;s:9:"head_code";i:9;s:11:"header_code";i:10;s:11:"footer_code";}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}}', 1764097223);

-- tablo yapısı dökülüyor sirius.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.cache_locks: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.campaign_visits
CREATE TABLE IF NOT EXISTS `campaign_visits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `utm_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gad_campaignid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_group_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gclid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gbraid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `referrer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landing_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.campaign_visits: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `note` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.categories: ~7 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `categories` (`id`, `name`, `note`, `image`, `show_menu`, `show_homepage`, `show_footer`, `show_panel`, `hit`, `parent_category`, `translation_of`, `lang_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Kurumsal', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:37', '2025-11-19 15:15:03', NULL),
	(2, 'Hizmetlerimiz', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:46', '2025-11-19 15:15:02', NULL),
	(3, 'Galeri', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:54', '2025-11-19 15:15:01', NULL),
	(4, 'İletişim', NULL, NULL, 1, 0, 0, 0, NULL, NULL, NULL, NULL, '2025-11-19 15:14:59', '2025-11-19 15:15:02', NULL),
	(5, 'PPF Kaplama', NULL, NULL, 1, 0, 0, 0, NULL, 2, NULL, NULL, '2025-11-20 08:17:16', '2025-11-20 08:25:00', NULL),
	(6, 'Car Detailing', NULL, NULL, 1, 0, 0, 0, NULL, 2, NULL, NULL, '2025-11-20 08:24:44', '2025-11-20 08:25:07', NULL),
	(7, 'Seramik Kaplama', NULL, NULL, 1, 0, 0, 0, NULL, 2, NULL, NULL, '2025-11-20 08:24:56', '2025-11-20 08:25:01', NULL),
	(8, 'Hakkımızda', NULL, NULL, 1, 0, 0, 0, 1, 1, NULL, NULL, '2025-11-24 17:04:21', '2025-11-24 17:04:26', NULL);

-- tablo yapısı dökülüyor sirius.certificates
CREATE TABLE IF NOT EXISTS `certificates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `certificates_lang_id_foreign` (`lang_id`),
  CONSTRAINT `certificates_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.certificates: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.contacts: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `contacts` (`id`, `name`, `email`, `email2`, `phone`, `phone2`, `address`, `country`, `city`, `state`, `person`, `map`, `hit`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Sirius Car Design', 'info@siriuscardesign.com', NULL, '0322 911 08 71', NULL, 'Süleyman Demirel Blv. Huzurevleri Mah. 77248 Sok. Ferhat Özkan Apt. Altı İş Yeri', 'Türkiye', 'Adana', 'Çukurova', NULL, NULL, 1, '2025-11-16 14:32:58', '2025-11-16 14:50:46', NULL);

-- tablo yapısı dökülüyor sirius.contact_forms
CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.contact_forms: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.failed_jobs: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint unsigned DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `faqs_page_id_foreign` (`page_id`),
  CONSTRAINT `faqs_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.faqs: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint unsigned NOT NULL,
  `hit` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_page_id_foreign` (`page_id`),
  CONSTRAINT `galleries_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.galleries: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.home_page_management
CREATE TABLE IF NOT EXISTS `home_page_management` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `home_page_management_page_id_foreign` (`page_id`),
  CONSTRAINT `home_page_management_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.home_page_management: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.jobs: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.job_batches: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.languages: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `languages` (`id`, `name`, `code`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Türkçe', 'tr', 0, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

-- tablo yapısı dökülüyor sirius.media_uploads
CREATE TABLE IF NOT EXISTS `media_uploads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.media_uploads: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.migrations: ~32 rows (yaklaşık) tablosu için veriler indiriliyor
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

-- tablo yapısı dökülüyor sirius.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breadcrumb_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.pages: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `image`, `breadcrumb_image`, `is_main`, `blade_id`, `category_id`, `translation_of`, `parent_page`, `lang_id`, `published`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Hakkımızda', 'hakkimizda', '<p>Aracınız sadece sizi bir yerden bir yere götüren bir taşıt değil; tarzınızı, zevkinizi ve kişiliğinizi yansıtan en özel yol arkadaşınızdır. Adana\'da hizmet veren <strong>Sirius Car Design</strong> olarak biz, bu yansımanın en kusursuz ve çarpıcı haliyle ortaya çıkması için çalışıyoruz. Otomobil bakım, koruma ve tasarım alanında yıllara dayanan teknik deneyimimizi, tutkuyla harmanladığımız işçiliğimizle birleştiriyoruz. Hedefimiz net: Aracınıza sadece bakım yapmak değil, ona kalıcı bir değer katmak.</p>\r\n\r\n<h2>Adana’da Detaylara Önem Verenlerin Buluşma Noktası</h2>\r\n\r\n<p>Sirius Car Design, sıradan bir oto yıkama noktası olmanın çok ötesindedir. Biz, estetikle işlevselliği birleştiren, <strong>profesyonel car detailing</strong>, <strong>seramik kaplama</strong> ve <strong>PPF kaplama (Boya Koruma Filmi)</strong> gibi uzmanlık gerektiren alanlarda hizmet veren kapsamlı bir estetik merkeziyiz. Aracınızın fabrika çıkışı görünümünü korumakla kalmıyor, uyguladığımız <strong>cam filmi</strong>, <strong>jant boyama</strong> ve <strong>araç folyo kaplama</strong> işlemleriyle onu hayalinizdeki görünüme kavuşturuyoruz. Her işlemde amacımız, sahibine özel, premium bir deneyim sunmak ve aracın standartlarını yükseltmektir.</p>\r\n\r\n<h2>Müşteri Memnuniyeti Bir "İş" Değil, Bir "İlişkidir"</h2>\r\n\r\n<p>Kapımızdan giren her araç sahibi bizim için sadece bir müşteri değil, uzun soluklu bir yol arkadaşıdır. Aracınızı bize teslim ettiğinizde yalnızca teknik bir hizmet almazsınız; aynı zamanda sizi anlayan, aracınızın ihtiyaçlarını doğru analiz eden ve bütçenize en uygun çözümleri sunan samimi bir ekiple tanışırsınız. İster <strong>detaylı temizlik</strong> ile aracınızı ferahlatın, ister boya koruma ile yatırımınızı güvence altına alın; tüm süreç boyunca şeffaf, bilgilendirici ve güven veren bir iletişim kurmayı taahhüt ediyoruz.</p>\r\n\r\n<h2>Kalite, Güven ve Tutkuyla Harmanlanmış Teknoloji</h2>\r\n\r\n<p>Yaptığımız işin teknik tarafını ciddiye alıyoruz. Tüm <strong>oto bakım ve onarım</strong> süreçlerimizde, dünya standartlarında kabul görmüş en kaliteli ürünleri ve son teknoloji ekipmanları kullanıyoruz. Sektördeki gelişmeleri ve yenilikçi uygulama tekniklerini yakından takip eden eğitimli personelimizle, Adana\'da standartları belirliyoruz.</p>\r\n\r\n<p>İşimizi yalnızca profesyonelce değil, büyük bir tutkuyla yapıyoruz. Çünkü otomobiller bizim için sadece metal yığınları değil; her biri kendine has karakteri olan birer yaşam tarzı. <strong>Sirius Car Design</strong> olarak, her sürüşün mükemmel bir başlangıcı hak ettiğine inanıyoruz.</p>\r\n\r\n<p>Aracınızı bize emanet edin; onu yalnızca temizleyip güzelleştirmekle kalmayalım. <strong>Adana\'nın en iyi oto koruma</strong> çözümleriyle onu yenileyelim, koruyalım ve sizi trafikte özel hissettirecek o ışıltıyı geri kazandıralım.</p>', 'hakkimizda-elrs.jpg', NULL, 1, 1, 8, NULL, NULL, NULL, 1, '2025-11-24 17:04:46', '2025-11-24 17:44:59', NULL),
	(2, 'Hizmetlerimiz', 'hizmetlerimiz', '<p><strong>Adana’da aracınız için en kapsamlı ve profesyonel bakım çözümlerini</strong> mi arıyorsunuz? Sirius Oto Design olarak, sadece bir yıkama değil, aracınızın değerini koruyan üst düzey uygulamalar sunuyoruz. <strong>Adana car detailing ve oto kuaför</strong> sektöründe, lüks segmentten standart kullanıma kadar her araca özel teknik çözümler geliştiriyoruz.</p>\r\n\r\n<p>Hizmet yelpazemiz; boyayı güneş yanıklarına ve çiziklere karşı koruyan <strong>seramik kaplama</strong> ve <strong>PPF kaplama (boya koruma filmi)</strong> uygulamalarından, sürüş konforunuzu artıran garantili cam filmi ve ısı yalıtımı çözümlerine kadar uzanır. Ayrıca <strong>oto yıkama</strong>, <strong>detaylı iç temizlik</strong>, <strong>jant boyama</strong> ve <strong>araç folyo kaplama</strong> gibi estetik işlemlerle aracınızı ilk günkü kondisyonuna getiriyoruz. Aşağıda, Adana’nın en titiz ustaları tarafından sunulan tüm hizmetlerimizi inceleyebilir, aracınızın ihtiyacı olan profesyonel dokunuşu keşfedebilirsiniz.</p>', NULL, NULL, 1, 2, 2, NULL, NULL, NULL, 1, '2025-11-24 20:53:44', '2025-11-24 20:53:44', NULL),
	(3, 'Car Detailing', 'car-detailing', '<p>Aracınızın gerçek estetiği, detaylarda gizlidir. Sirius Oto Design olarak, Adana\'da sunduğumuz profesyonel Car Detailing hizmetiyle, aracınızı standart temizlik kalıplarının ötesine taşıyoruz. Sadece görünen kirleri değil, aracın gözeneklerine işlemiş zamanın yorgunluğunu siliyor, aracınıza fabrika çıkışı kondisyonunu ve hijyenini geri kazandırıyoruz.</p>\r\n\r\n<h2>Car Detailing Nedir? Neden Standart Yıkamadan Farklıdır?</h2>\r\n\r\n<p>Car Detailing (Oto Detaylandırma), sıradan bir oto yıkama işlemi değildir; kapsamlı bir yenileme, bakım ve koruma prosedürüdür. Sirius Oto Design atölyesinde, aracınızın hem iç yaşam alanı hem de dış yüzeyi, nanoteknolojik ürünler ve profesyonel ekipmanlarla "mikron" seviyesinde ele alınır.</p>\r\n\r\n<p>Süreç boyunca döşeme, deri, plastik, vinil, cam ve motor aksamları için ayrı ayrı pH dengeli, materyale zarar vermeyen özel solüsyonlar kullanıyoruz. Amacımız sadece temiz bir görüntü sağlamak değil, aracınızın ömrünü uzatmak ve prestijini artırmaktır.</p>\r\n\r\n<h2>Hizmet Kapsamımızda Neler Var?</h2>\r\n\r\n<h3>1. Derinlemesine İç Detaylı Temizlik ve Sterilizasyon</h3>\r\n\r\n<p>Aracınızın içinde gözle görülmeyen bakteriler, koltuklara sinmiş lekeler ve klima kanallarındaki tozlar sağlığınızı tehdit edebilir.</p>\r\n\r\n<p><strong>Koltuk ve Döşeme Temizliği</strong>: Kumaş veya deri fark etmeksizin, dokuya zarar vermeden kusursuz leke çıkarma işlemi.</p>\r\n\r\n<p><strong>Kokpit ve Trim Bakımı</strong>: Torpido, kapı panelleri ve havalandırma ızgaraları antistatik ürünlerle temizlenir ve beslenir.</p>\r\n\r\n<p><strong>Taban ve Tavan Temizliği</strong>: En zorlu bölgeler olan tavan döşemesi ve taban halısındaki kirler vakumlu ve buharlı sistemlerle arındırılır.</p>\r\n\r\n<h3>2. Dış Detaylandırma ve Motor Bakımı</h3>\r\n\r\n<p>Dış yüzeyde sadece su ve sabun yetmez; boyanın nefes alması gerekir.</p>\r\n\r\n<p><strong>Boya Dekontaminasyonu</strong>: Kaportaya yapışan demir tozları, reçine ve zift kalıntıları kil (clay bar) uygulaması ile temizlenir.</p>\r\n\r\n<p><strong>Jant ve Motor Temizliği</strong>: Jantlardaki balata tozları ve motor bloğundaki yağ kalıntıları, güvenli kimyasallarla parlatılır ve koruma altına alınır.</p>\r\n\r\n<h2>Neden Sirius Car Detailing? (Hizmetin Faydaları)</h2>\r\n\r\n<p>Adana\'nın tozlu yapısı ve sıcak iklimi araçları çabuk yıpratır. Uzman dokunuşlarımızla elde edeceğiniz avantajlar şunlardır:</p>\r\n\r\n<p><strong>Tam Hijyen</strong>: Araç içi akarlar, bakteriler ve kötü kokular (sigara, nem vb.) ozonlama ve dezenfeksiyon ile %99 oranında yok edilir.</p>\r\n\r\n<p><strong>Değer Artışı</strong>: Detayları parlayan, trimi beslenmiş ve motoru temiz bir araç, ikinci el değerini her zaman korur.</p>\r\n\r\n<p><strong>Kalıcı Koruma</strong>: Temizlenen plastik ve deri aksamlar UV ışınlarına karşı koruyucu sütlerle beslenir, çatlamalar önlenir.</p>\r\n\r\n<p><strong>Maksimum Estetik</strong>: Jantlardan egzoz uçlarına kadar her nokta parlatılarak aracınızın görsel çekiciliği artırılır.</p>', NULL, NULL, 1, 3, 6, NULL, NULL, NULL, 1, '2025-11-24 21:13:29', '2025-11-24 21:13:55', NULL);

-- tablo yapısı dökülüyor sirius.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.password_reset_tokens: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_label_unique` (`label`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.permissions: ~26 rows (yaklaşık) tablosu için veriler indiriliyor
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

-- tablo yapısı dökülüyor sirius.popups
CREATE TABLE IF NOT EXISTS `popups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.popups: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.press_kits
CREATE TABLE IF NOT EXISTS `press_kits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `press_kits_lang_id_foreign` (`lang_id`),
  CONSTRAINT `press_kits_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.press_kits: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.references
CREATE TABLE IF NOT EXISTS `references` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int DEFAULT '0',
  `published` tinyint(1) DEFAULT '0',
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `references_lang_id_foreign` (`lang_id`),
  CONSTRAINT `references_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.references: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.roles: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
	(1, 'Super Admin', 'super-admin', '2025-11-11 08:17:52', '2025-11-11 08:17:52');

-- tablo yapısı dökülüyor sirius.role_permissions
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

-- sirius.role_permissions: ~25 rows (yaklaşık) tablosu için veriler indiriliyor
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

-- tablo yapısı dökülüyor sirius.role_users
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

-- sirius.role_users: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `role_users` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

-- tablo yapısı dökülüyor sirius.seos
CREATE TABLE IF NOT EXISTS `seos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `canonical` bigint unsigned NOT NULL,
  `page_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seos_canonical_foreign` (`canonical`),
  KEY `seos_page_id_foreign` (`page_id`),
  CONSTRAINT `seos_canonical_foreign` FOREIGN KEY (`canonical`) REFERENCES `pages` (`id`),
  CONSTRAINT `seos_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.seos: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `seos` (`id`, `title`, `description`, `canonical`, `page_id`, `created_at`, `updated_at`) VALUES
	(1, 'Car Detailing', 'Adana car detailing ve detaylı temizlik hizmetiyle aracınız ilk günkü hijyenine kavuşsun. Profesyonel iç-dış bakım Sirius\'ta.', 3, 3, '2025-11-24 21:15:34', '2025-11-24 21:15:34'),
	(2, 'Hakkımızda', 'Adana\'da car detailing, seramik kaplama ve oto bakım uzmanı Sirius Car Design ile aracınızın değerini koruyun.', 1, 1, '2025-11-24 21:19:21', '2025-11-24 21:19:21'),
	(3, 'Araç Koruma ve Detailing', 'Adana\'da car detailing, seramik kaplama, PPF ve oto yıkama hizmetleri. Profesyonel araç koruma ve bakım çözümlerimiz', 2, 2, '2025-11-24 21:24:22', '2025-11-24 21:24:22');

-- tablo yapısı dökülüyor sirius.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.sessions: ~4 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('JsLyusugWW85OF9Wp6fxwdbHxD4bfvvxlkQz8iR0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGI3OHVLWWNJM25CakVWQklYd1BiN3Z2U3ptNVZiNUl0d2FPVEdSMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vc2lyaXVzLnRlc3QvY2FyLWRldGFpbGluZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1764019981);

-- tablo yapısı dökülüyor sirius.site_settings
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_link` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_brand` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_code` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `header_code` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_code` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.site_settings: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `site_settings` (`id`, `site_name`, `logo`, `favicon`, `footer_logo`, `store_link`, `seo_brand`, `seo_title`, `seo_description`, `head_code`, `header_code`, `footer_code`, `created_at`, `updated_at`) VALUES
	(1, 'Sirius Car Design', 'logo.svg', 'favicon.svg', 'footer-logo.svg', NULL, 'Sirius Car Design Adana', 'Profesyonel Oto Bakım ve Koruma Merkezi', 'Adana\'da profesyonel car detailing, oto yıkama, seramik ve PPF hizmetleri. Aracınıza Sirius uzmanlığıyla değer katın.', NULL, NULL, NULL, '2025-11-11 08:17:52', '2025-11-24 19:00:23');

-- tablo yapısı dökülüyor sirius.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) DEFAULT '0',
  `hit` int DEFAULT '0',
  `lang_id` bigint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_lang_id_foreign` (`lang_id`),
  CONSTRAINT `sliders_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.sliders: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `mobile_image`, `url`, `published`, `hit`, `lang_id`, `created_at`, `updated_at`) VALUES
	(1, 'Sirius Car Detailing', NULL, 'sirius-car-detailing.jpg', NULL, NULL, 1, 1, NULL, '2025-11-14 07:11:05', '2025-11-14 07:11:09');

-- tablo yapısı dökülüyor sirius.social_media
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contacts_id` bigint unsigned NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `threads` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reddit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `social_media_contacts_id_foreign` (`contacts_id`),
  CONSTRAINT `social_media_contacts_id_foreign` FOREIGN KEY (`contacts_id`) REFERENCES `contacts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.social_media: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.special_categories
CREATE TABLE IF NOT EXISTS `special_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `special_categories_name_unique` (`name`),
  KEY `special_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `special_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.special_categories: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

-- tablo yapısı dökülüyor sirius.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.users: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Bülent ERCAN', 'info@cdrsoft.com.tr', NULL, '$2y$12$Ytlk.EUClwBbQ9gElDmw0eizEf5En9OROGcWIAyEQCEyV.Fq/SSCq', NULL, '2025-11-11 08:17:52', '2025-11-11 08:17:52');

-- tablo yapısı dökülüyor sirius.user_visits
CREATE TABLE IF NOT EXISTS `user_visits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `visited_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_visits_ip_address_visited_date_index` (`ip_address`,`visited_date`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.user_visits: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
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
	(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-24', '2025-11-24 10:53:08', '2025-11-24 10:53:08'),
	(11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-25', '2025-11-24 21:00:15', '2025-11-24 21:00:15'),
	(12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-25', '2025-11-24 21:00:15', '2025-11-24 21:00:15'),
	(13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', '2025-11-25', '2025-11-24 21:00:15', '2025-11-24 21:00:15');

-- tablo yapısı dökülüyor sirius.visited_user_calls
CREATE TABLE IF NOT EXISTS `visited_user_calls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- sirius.visited_user_calls: ~0 rows (yaklaşık) tablosu için veriler indiriliyor

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
