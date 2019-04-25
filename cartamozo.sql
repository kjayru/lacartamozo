/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100309
 Source Host           : localhost:3306
 Source Schema         : cartamozo

 Target Server Type    : MySQL
 Target Server Version : 100309
 File Encoding         : 65001

 Date: 04/02/2019 09:16:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for assignments
-- ----------------------------
DROP TABLE IF EXISTS `assignments`;
CREATE TABLE `assignments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  `mesa_id` int(10) unsigned NOT NULL,
  `mozo_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `assignments_client_id_foreign` (`client_id`),
  KEY `assignments_menu_id_foreign` (`menu_id`),
  KEY `assignments_mesa_id_foreign` (`mesa_id`),
  KEY `assignments_mozo_id_foreign` (`mozo_id`),
  CONSTRAINT `assignments_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `assignments_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  CONSTRAINT `assignments_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesas` (`id`),
  CONSTRAINT `assignments_mozo_id_foreign` FOREIGN KEY (`mozo_id`) REFERENCES `mozos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for booking
-- ----------------------------
DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `day` date NOT NULL,
  `star` datetime NOT NULL,
  `end` datetime NOT NULL,
  `sector_id` int(10) unsigned NOT NULL,
  `mesa_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `booking_sector_id_foreign` (`sector_id`),
  KEY `booking_mesa_id_foreign` (`mesa_id`),
  KEY `booking_user_id_foreign` (`user_id`),
  CONSTRAINT `booking_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesas` (`id`),
  CONSTRAINT `booking_sector_id_foreign` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`id`),
  CONSTRAINT `booking_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_client_id_foreign` (`client_id`),
  CONSTRAINT `categories_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (2, 'Comida', NULL, 'categories/kqyzjLwBMXgRWF5G7vrzLVk60mDI13udYfOneL0V.jpeg', 1, 16, NULL, '2019-02-04 02:15:49');
INSERT INTO `categories` VALUES (3, 'Bebidas', NULL, 'avatar', 1, 2, NULL, NULL);
INSERT INTO `categories` VALUES (4, 'restaurants', NULL, 'avatar', 1, 4, NULL, NULL);
INSERT INTO `categories` VALUES (5, 'pizzas', NULL, 'avatar', 1, 5, NULL, NULL);
INSERT INTO `categories` VALUES (6, 'Bebidas', NULL, 'categories/7Bglcf50HWGaeJ9TD5nHYuZLulPWgB6MWRAFM4HQ.jpeg', 1, 16, '2019-02-04 01:53:21', '2019-02-04 01:53:21');
COMMIT;

-- ----------------------------
-- Table structure for classifications
-- ----------------------------
DROP TABLE IF EXISTS `classifications`;
CREATE TABLE `classifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of classifications
-- ----------------------------
BEGIN;
INSERT INTO `classifications` VALUES (1, 'Restaurantes', 'restaurantes', '2018-12-13 05:58:24', '2018-12-13 05:58:24');
INSERT INTO `classifications` VALUES (2, 'Comida', 'Rapida', '2018-12-13 05:58:24', '2018-12-13 05:58:24');
INSERT INTO `classifications` VALUES (3, 'Panificación', 'panaderias, pastelerias', '2018-12-13 05:58:24', '2018-12-13 05:58:24');
INSERT INTO `classifications` VALUES (4, 'Cevicherias', 'todos pescados', '2018-12-13 05:58:24', '2018-12-13 05:58:24');
COMMIT;

-- ----------------------------
-- Table structure for client_configuration
-- ----------------------------
DROP TABLE IF EXISTS `client_configuration`;
CREATE TABLE `client_configuration` (
  `client_id` int(11) NOT NULL,
  `configuration_id` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of client_configuration
-- ----------------------------
BEGIN;
INSERT INTO `client_configuration` VALUES (4, 1, 2);
INSERT INTO `client_configuration` VALUES (4, 6, 2);
INSERT INTO `client_configuration` VALUES (4, 7, 2);
INSERT INTO `client_configuration` VALUES (4, 11, 2);
INSERT INTO `client_configuration` VALUES (4, 12, 2);
COMMIT;

-- ----------------------------
-- Table structure for client_service
-- ----------------------------
DROP TABLE IF EXISTS `client_service`;
CREATE TABLE `client_service` (
  `client_id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of client_service
-- ----------------------------
BEGIN;
INSERT INTO `client_service` VALUES (4, 3, 2);
INSERT INTO `client_service` VALUES (4, 5, 2);
INSERT INTO `client_service` VALUES (4, 6, 2);
INSERT INTO `client_service` VALUES (4, 7, 2);
INSERT INTO `client_service` VALUES (4, 8, 2);
INSERT INTO `client_service` VALUES (4, 11, 2);
COMMIT;

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `franchise_id` int(10) unsigned NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `numesas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cashier` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of clients
-- ----------------------------
BEGIN;
INSERT INTO `clients` VALUES (1, 7, '802b6ea97ae809052dfec5f14e27703f.jpg', 'Fadel, Ruecker and Towne', '422 Ena Keys Suite 789\nRickyland, WY 81814', 'South Carrollport', 'Kansas', '+14309073558', -75.56931300, 26.07155200, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (2, 25, '11010e6fe5fbb26de8b0f55bd58ce818.jpg', 'Gerlach-Hoppe', '7244 Bernhard Mountain Suite 377\nSouth Bennyton, TN 42105', 'Tristianhaven', 'New Hampshire', '1-990-970-6118', 46.25278300, 157.74752100, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (3, 4, '0eafd5dd461f07e1543f1a4df223d293.jpg', 'Lehner and Sons', '53338 Adella Dale Suite 388\nSchroederborough, CA 57760', 'Thereseport', 'California', '1-483-357-2620 x7318', 1.57671600, 139.52249600, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (4, 2, '1547364444.jpg', 'Smith, McCullough and Graham', '42856 Funk LoafJacobsonmouth, ND 15874', 'Bauchborough', 'South Carolina', '1-512-971-1590 x4477', 63.73690700, 38.71805200, 20, 2, '2018-12-13 06:08:05', '2019-01-13 07:27:24', 'peru', 'demo@demo.com', 'M', 'cashi', '1547364444.jpg', NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (5, 7, '4074d5a090de420e4fa49f83977ff7d5.jpg', 'Smith, Runte and Cremin', '222 Celestino Vista\nRayborough, ND 48370', 'Faheymouth', 'Missouri', '1-590-859-4621 x56817', 59.68062100, -33.80745300, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (6, 11, 'bafb2bf081e3b62792ff11b2b0f18cc0.jpg', 'Koch Group', '8773 Mae Coves Suite 250\nSouth Eric, MI 76441', 'South Mona', 'Pennsylvania', '+15417134853', -86.78822700, 35.49767300, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (7, 25, '01799978f8d8731fc46ff9e1b298bc9f.jpg', 'Kulas, Vandervort and Wehner', '456 Nestor Meadow Suite 988\nStanville, NC 61842', 'Larkinstad', 'Georgia', '783.945.0637 x460', -58.37349300, 177.63052700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (8, 6, '8279674fc88d90937da95ba7f6cace53.jpg', 'Treutel-McGlynn', '91526 Andy Underpass\nStantonstad, AL 55970-3072', 'Estefaniatown', 'District of Columbia', '(439) 452-8702', 75.59965300, -4.81367500, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (9, 7, 'ec6fbfa1e3fa9069d9d36c21f838310d.jpg', 'Goldner-Reilly', '86878 Hodkiewicz Circles Suite 615\nKuhnfort, NY 47250', 'West Alberthatown', 'Virginia', '1-541-753-8909', -28.28785500, -62.47848700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (10, 6, 'b013c27c3a8b7950d717e028c85e0533.jpg', 'Bradtke, D\'Amore and Quigley', '97930 Yasmine Mills\nTremblayside, MI 83408-7878', 'North Antwonside', 'Alabama', '1-645-965-9370 x4514', 79.12783700, -154.78999800, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (11, 28, 'c75b449447ccd3cde3ef9fe62233785f.jpg', 'Pacocha-Stehr', '828 Julien Bridge Apt. 752\nJessmouth, ND 52167', 'Carterport', 'Arizona', '+1-793-317-2155', -34.50152700, 59.33449700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (12, 9, 'bcfc8ea518a602e5fb43c47c5dcc8ae7.jpg', 'Mueller LLC', '47470 Zulauf Roads Suite 697\nEast Gayview, WI 63214-8924', 'Breitenbergfurt', 'South Carolina', '(280) 258-4767', -81.80547800, -125.90861600, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (13, 12, 'd1dc0e316df0c14845ea5e72f26bf322.jpg', 'Huels, Hintz and Funk', '628 Koepp Mountain Apt. 986\nLake Damion, NM 62441-3433', 'Binsville', 'Tennessee', '+13099940906', -8.02262400, -35.73427200, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (14, 27, '9c6f8731f75a4fccb49a8f865d6951db.jpg', 'Leffler PLC', '241 Emily Ports\nSouth Danikaland, NE 19163', 'North Gerhard', 'Utah', '719.214.8493 x780', 5.83227800, -46.93871700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (15, 15, 'c9d5c90a726665ed8c9a6d21953f33b5.jpg', 'Wehner, Hudson and Steuber', '110 Tatum Trail Suite 719\nPort Miguel, TN 18235-3788', 'Torpbury', 'New Hampshire', '914.969.7417', -17.40842900, -66.06557000, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (16, 1, '0b638a2e5a99e703f036e9a9e10b329b.jpg', 'Boyle, Rempel and Kunde', '37916 Larson Trail\nKarianeberg, IL 82158', 'Schmittview', 'Wyoming', '943.312.5892', -84.11907100, -155.13875100, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (17, 22, '1aeaa1c187c3f367d82e8c257ac56270.jpg', 'Ritchie, O\'Kon and Dickens', '598 McDermott Village Suite 565\nEast Abdullahland, GA 93095', 'Hauckton', 'Alaska', '389-213-0892', -42.93981500, 92.47116400, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (18, 24, 'c97b50a37253cd95ec2469afec8dd850.jpg', 'Kiehn and Sons', '969 Sanford Squares\nSouth Gerrystad, KS 29491', 'Cheyennehaven', 'North Carolina', '+1.653.219.1453', 8.59955000, -172.85835300, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (19, 24, 'd8146956977fd3eca047d03da7541ede.jpg', 'Botsford-Medhurst', '60814 Ebert Road Suite 532\nNorth Martin, CA 33637-7164', 'O\'Konshire', 'Ohio', '231.542.7985 x169', 82.69119400, -92.99844700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (20, 9, '375948b006dd666debe29e09e9aa1630.jpg', 'Gusikowski, Raynor and Bins', '6333 Berge Brook Apt. 196\nWest Geraldineberg, ME 31263', 'North Jessica', 'Texas', '(527) 213-8471', -64.05310400, -49.36487900, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (21, 13, '9d8dea02ca478262d9f138a9f5978249.jpg', 'Rutherford, Walker and Hills', '37452 Conroy Bypass\nEast Ocie, NJ 93419-3985', 'Lake Yvonne', 'Utah', '+1-768-455-5928', 56.62458300, -93.01136700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (22, 10, 'b22e78262624c1a054d73797402dc058.jpg', 'Jacobs-Zulauf', '803 Giovani Mountain Apt. 043\nNew Cloyd, VT 44366-8629', 'Breannaview', 'Alaska', '684-765-1957', 20.69616800, -70.23097800, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (23, 11, 'b9e3455d6215a054a244879f4520d871.jpg', 'Raynor, Sipes and Prohaska', '576 Runte Dam Suite 075\nHaleyport, ND 58991', 'Sammybury', 'District of Columbia', '(512) 579-4420 x8966', 70.85123300, 110.32598200, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (24, 18, '49d7acf44c2c410c477a841cac147425.jpg', 'Kulas-Considine', '85421 Shanny Mission Suite 845\nEast Bertram, NC 62309', 'New Alyce', 'Mississippi', '235-844-9656', -57.96039700, 35.90500700, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (25, 21, '05db5b73e9f91b2344aff508d6471974.jpg', 'Jacobs-Kris', '6236 Torrance Fall Suite 227\nBeahanborough, HI 29713', 'Port Halle', 'Maryland', '928.754.9214 x69606', 85.17334800, -71.26208200, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (26, 26, '92c582749ff3c3ffaa546acb7b5a3e40.jpg', 'Hand and Sons', '71066 Kertzmann Drive\nErinland, SC 29758', 'Feilborough', 'Oregon', '+1 (884) 562-3312', 10.74489900, -59.70578400, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (27, 3, '6da9d9e67e78e3b6225a089e7ee1f05c.jpg', 'D\'Amore-Grant', '84730 Henry Inlet\nSouth Carmellaside, UT 39975', 'North Stellahaven', 'Connecticut', '(484) 831-7260 x5850', -49.33810900, -120.69167000, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (28, 7, '771393e2e92aa15a8e4235d5fb010b0e.jpg', 'Littel-Upton', '93841 Turner Loop\nAlexandrineland, NC 83639-3327', 'Boehmmouth', 'Ohio', '+19157730511', -79.07147200, 99.75641400, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (29, 15, 'd6c857584c37b2f0b76b610544f0c779.jpg', 'Smitham, Lindgren and Mosciski', '5822 Brandy Valleys Apt. 518\nErnserville, AR 46811', 'North Mitchellchester', 'Hawaii', '784-899-5354 x70815', -75.24241400, -175.02180800, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (30, 7, '4b1160e8b3cc66cc6d490f9c2b6934c4.jpg', 'Huel-Considine', '5028 Carlo Street\nParkerton, KY 55871-4988', 'Hudsonmouth', 'Missouri', '809.645.7449 x365', 57.22114800, 94.29514600, 20, 2, '2018-12-13 06:08:05', '2018-12-13 06:08:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (31, 8, '898a373d5eef40d52054a78e1aa2563a.jpg', 'Fadel, Bahringer and Jaskolski', '31300 Charlotte Keys Suite 407\nNedport, OK 35037-8837', 'Maehaven', 'Alabama', '510.678.4897 x181', 55.78396800, -127.61776200, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (32, 2, 'c0639e87f964577ff3c7ee745f7e235c.jpg', 'Morar-Wolff', '5285 Maia Gateway\nNorth Sydnie, DC 66910-0842', 'New Reymundo', 'Rhode Island', '(873) 771-0319', 17.80665300, -163.95535900, 20, 1, '2018-12-13 06:08:06', '2019-01-14 03:23:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (33, 8, '071431d212fd0ecb39944e7e04dee244.jpg', 'Herman-Runolfsdottir', '83357 Crist Highway Apt. 776\nPort Nasir, ND 61395', 'North Shemarhaven', 'Arizona', '830.779.4646', -87.32437900, -137.72545100, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (34, 30, 'e86cfe7e862ca3fc23d28982ac8345a9.jpg', 'Bogan-Towne', '223 Schultz Streets Suite 851\nLake Diamond, NM 86622', 'North Karine', 'Maryland', '(959) 234-2953 x4178', -64.01415900, 162.21688800, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (35, 10, 'df5a3e4bd93393e55a88de2f6095ea27.jpg', 'Schneider, Conn and Goodwin', '6622 Altenwerth Ports Apt. 934\nOsinskiland, MI 51406-1276', 'Schmidtberg', 'Nevada', '(726) 314-4139 x832', 41.57671300, 83.23046700, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (36, 25, '680ce99900ad3823d4b6e1b3a41fc55e.jpg', 'Kuvalis-Feeney', '44059 Sporer Heights Apt. 140\nNorth Eloy, OK 45921', 'Morrisstad', 'Nevada', '393-837-5243 x2746', -84.89695600, 66.00447200, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (37, 22, 'fd769c459e12a6f6785c37cad14aea99.jpg', 'Oberbrunner, Pollich and Aufderhar', '8539 Mohr Mission Apt. 121\nBayerburgh, MS 56692-2714', 'West Abelshire', 'Kansas', '1-948-757-9965 x08936', -59.29784600, -55.25444400, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (38, 30, '8f5a1d027ceef4450a978e571ff4144d.jpg', 'Schoen LLC', '62732 Katelin Track\nMcCulloughport, TN 14904', 'South Stephanie', 'Vermont', '1-298-592-9796 x9962', 9.67762800, 146.27133900, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (39, 28, '35fa730181a54cc50ff7c95ede577461.jpg', 'Parker-Mueller', '9386 Walker Overpass\nNew Jamison, MS 11779-0553', 'New Zelmafurt', 'Kansas', '+1-869-774-4193', -72.84906500, -27.68683400, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (40, 9, '34f8ec25f0b60680c02b93de46af199d.jpg', 'Rempel Inc', '702 Kreiger Prairie Apt. 408\nBaumbachborough, NM 46873-3749', 'New Chanellestad', 'Illinois', '730-741-8535', 33.83550600, 177.38211800, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (41, 25, '538fbf871cc52b13327bcfb183210ac9.jpg', 'Hermiston PLC', '1419 Gail Union\nPort Norval, WY 03964-3018', 'New Ludwig', 'New Mexico', '209.968.1173', -44.75774800, 37.35788300, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (42, 21, '24b9917dcb1d243e61b30005fdb32255.jpg', 'Macejkovic Group', '8324 Schamberger Lakes\nLueilwitzfort, CA 21406-7693', 'North Domenic', 'Nevada', '270-484-8580 x155', -85.32612800, -134.93330900, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (43, 7, '33a47ccf1bf6158303c11d4fbbff4414.jpg', 'Douglas, Green and Collins', '657 Goodwin Gateway Apt. 325\nSedrickberg, HI 45228', 'Lake Eugene', 'Maryland', '+1-848-524-8902', 52.72504400, -71.75754400, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (44, 21, '3bfc196da64c2db529b57e210a6e2fa3.jpg', 'Schinner, VonRueden and Kihn', '143 Alisa Ramp\nLaurenmouth, WI 03124', 'Einoville', 'Delaware', '1-218-427-3996', 21.12280100, -173.90136800, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (45, 8, '378b0c25fc9874eae3a99ab5219fe9bf.jpg', 'Shields Inc', '9456 Lemke Turnpike Suite 734\nFlorenceshire, ID 04307-4949', 'Pfannerstillview', 'Illinois', '219.401.2593 x7544', 20.07037400, -67.53019000, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (46, 12, '4aeefef5e0bd8e20aca3e1d803ebdd59.jpg', 'Turcotte, Mann and Kozey', '176 Veum Junctions Apt. 905\nNew Lela, FL 79167-3824', 'Annehaven', 'Nebraska', '1-618-692-0095 x8635', -5.03124300, -153.18438800, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (47, 6, '89f30b42e815f0700c65dffbc384a66a.jpg', 'Kassulke-Bahringer', '89197 Skylar Mission\nCollinstown, NM 72737', 'Donnellyton', 'Arkansas', '437.285.9366 x1774', 75.31304400, 159.60865600, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (48, 8, 'de96bb6140914ce7d9177d0bf03a23f7.jpg', 'Hermiston, Boyer and Witting', '6142 Oral Summit\nSouth Alessandrashire, SC 82917', 'Lake Veldafurt', 'District of Columbia', '241-948-7521 x96130', -69.55618300, -144.49215900, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (49, 27, '2503e8c3d4992f5b2bb808a4bc017179.jpg', 'Corkery, Cummings and Stiedemann', '65893 D\'Amore Orchard\nPort Valentinemouth, MS 85191', 'Adolfville', 'Connecticut', '+1-447-535-6866', 75.13903200, -45.51984900, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (50, 30, '62418e063bd48b186332fc2b748d00dc.jpg', 'Ankunding LLC', '755 Desiree Corners\nAliciaton, CO 95382', 'Lake Spencer', 'Wisconsin', '+1-538-995-8554', -15.50390900, 171.79575700, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (51, 26, 'bdb159bb5aa63e956fe7d9820a6f7d2e.jpg', 'Wiegand, Bauch and Denesik', '514 Reba Spur\nNikkiland, ID 95679', 'Hamillhaven', 'Indiana', '+1 (671) 340-2282', 60.34069600, -130.12954000, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (52, 25, 'ee0fc8d7f4aeefe785b47a26e641f754.jpg', 'Gibson, Pfeffer and Reynolds', '78273 Hackett Forks Suite 061\nConnellyland, KS 94923-5847', 'New Marcellusland', 'Vermont', '515-232-5946', -62.81456500, -134.63723200, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (53, 24, '3b4bf50d48deadde210f335a6fe8825a.jpg', 'Macejkovic-Ward', '296 Boyle Alley Suite 336\nLeeshire, NJ 02649', 'Lake Novella', 'Oregon', '(542) 484-6354', -11.16477600, 92.98121300, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (54, 12, 'f4fb38534fea08e486f592b4f4ecfa01.jpg', 'Lang, Kshlerin and Hudson', '83821 Audrey Falls Apt. 556\nNorth Audra, IN 61323-9564', 'South Abraham', 'Connecticut', '683.624.3150', 36.79813500, -137.77745700, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (55, 26, '1285b302f6883dd11d035c4031595eeb.jpg', 'Rolfson-Grant', '745 Tillman Pass Apt. 260\nBalistrerimouth, WA 32743-6530', 'Lake Deeview', 'Florida', '(854) 732-3383', 34.82720200, 63.16279600, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (56, 15, '314597ac365c42f611907d70ea343e31.jpg', 'Robel and Sons', '8282 Bradtke Loaf Apt. 495\nTorranceview, TX 48995', 'East Samborough', 'Connecticut', '685.352.0073 x8643', -46.62133900, 176.01603500, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (57, 7, '716628118991acef22902de89ce277aa.jpg', 'Fisher, Rau and Schamberger', '602 Thiel Forest\nHomenickton, MI 45520-7973', 'Karleytown', 'Alaska', '582-702-9671 x497', 34.87765300, 84.76006200, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (58, 14, '8ab5cbb749f3bcad1a102de0e65c5770.jpg', 'Bruen-Reinger', '291 Schowalter Lane\nShaniemouth, VA 30014-9362', 'New Dariana', 'Illinois', '+1-430-584-8592', 27.78363200, -46.19463400, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (59, 4, '361fc5c4ec7813907dd1d4016608a78c.jpg', 'Terry, Boyle and Fisher', '884 Kemmer Court Suite 027\nWest Dejastad, IA 75193', 'Olsonberg', 'Nebraska', '+1.637.863.5613', -3.20642000, 3.52890700, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (60, 27, '625697177a0fcfd5d83f2fd5b6f63f7a.jpg', 'Padberg LLC', '748 Bergnaum Fall\nSouth Gennaro, PA 82317', 'Alessiaside', 'New Jersey', '+1 (515) 571-2402', -88.39456000, 33.77006000, 20, 2, '2018-12-13 06:08:06', '2018-12-13 06:08:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (61, 2, '1547366091.jpg', 'pedro', 'lima 188', 'lima', 'provincia', '231123321', -12.04637310, -77.04275400, 10, 2, '2019-01-13 07:54:52', '2019-01-13 07:54:52', 'peru', 'asdf@sdd.com', 'M', 'vria', '1547366092.jpg', NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (62, 2, '1547438464.jpg', 'demo', 'lima calle aruba 188', 'lima', 'lima', '123123123', -12.20713760, -77.01200070, 10, 2, '2019-01-14 04:01:04', '2019-01-14 04:01:04', 'peru', 'asda@sdd.com', 'M', 'patt', '1547438464.jpg', NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (63, 2, '1547439240.jpg', 'deom3', 'lima lopez aldana 149', 'lima', 'lima', '123123123', -12.07732850, -77.01669310, 10, 2, '2019-01-14 04:14:00', '2019-01-14 04:14:00', 'peru', 'asd@sdd.com', 'M', 'patrt', '1547439240.jpg', NULL, NULL, NULL, NULL);
INSERT INTO `clients` VALUES (64, 2, '1547440863.jpg', 'demeo4', 'lima calle pizarro 113', 'lima', 'lima', '123123123', -12.11359390, -76.97596740, 10, 2, '2019-01-14 04:41:03', '2019-01-14 04:41:03', 'peru', 'asd@sddd.com', 'F', 'asdfsaf', '1547440863.jpg', NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for clients_photo
-- ----------------------------
DROP TABLE IF EXISTS `clients_photo`;
CREATE TABLE `clients_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of clients_photo
-- ----------------------------
BEGIN;
INSERT INTO `clients_photo` VALUES (1, 4, '1547411204.jpg', '2019-01-13 20:26:44', '2019-01-13 20:26:44');
INSERT INTO `clients_photo` VALUES (2, 4, '1547411204.jpg', '2019-01-13 20:26:44', '2019-01-13 20:26:44');
INSERT INTO `clients_photo` VALUES (3, 4, '1547411204.jpg', '2019-01-13 20:26:44', '2019-01-13 20:26:44');
INSERT INTO `clients_photo` VALUES (4, 4, '1547411204.jpg', '2019-01-13 20:26:44', '2019-01-13 20:26:44');
COMMIT;

-- ----------------------------
-- Table structure for codeqrs
-- ----------------------------
DROP TABLE IF EXISTS `codeqrs`;
CREATE TABLE `codeqrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesa_id` int(11) NOT NULL,
  `path` varchar(200) DEFAULT NULL,
  `detalle` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `coment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for configurations
-- ----------------------------
DROP TABLE IF EXISTS `configurations`;
CREATE TABLE `configurations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of configurations
-- ----------------------------
BEGIN;
INSERT INTO `configurations` VALUES (1, 'Delivery', NULL, '2019-01-13 21:20:12', '2019-01-13 21:20:12');
INSERT INTO `configurations` VALUES (2, 'Promociones', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (3, 'Ver precio en el carro', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (4, 'Redes Sociales', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (5, 'Publicidad', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (6, 'Marketing', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (7, 'Cobrar cubiertos', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (8, 'Mozo', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (9, 'Sistema de puntos', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (10, 'Ver precio en la carta', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (11, 'Avisos', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (12, 'Mensajes push', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (13, 'Idiomas', NULL, NULL, NULL);
INSERT INTO `configurations` VALUES (14, 'Precios totales en cuenta', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for coupons
-- ----------------------------
DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `descuent` enum('2x1','10%','15%','20%','25%','30%','35%','40%') COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `uses` int(11) NOT NULL DEFAULT 1,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coupons_client_id_foreign` (`client_id`),
  CONSTRAINT `coupons_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for delivery
-- ----------------------------
DROP TABLE IF EXISTS `delivery`;
CREATE TABLE `delivery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `menu_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `delivery_menu_id_foreign` (`menu_id`),
  CONSTRAINT `delivery_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for franchisees
-- ----------------------------
DROP TABLE IF EXISTS `franchisees`;
CREATE TABLE `franchisees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `names` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `package_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `classification_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `franchisees_package_id_foreign` (`package_id`),
  KEY `franchisees_user_id_foreign` (`user_id`),
  KEY `franchisees_classification_id_foreign` (`classification_id`),
  CONSTRAINT `franchisees_classification_id_foreign` FOREIGN KEY (`classification_id`) REFERENCES `classifications` (`id`),
  CONSTRAINT `franchisees_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  CONSTRAINT `franchisees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of franchisees
-- ----------------------------
BEGIN;
INSERT INTO `franchisees` VALUES (1, 'Ms. Madie Medhurst I', '5171 Batz Courts Apt. 362\nNorth Winona, HI 12733', 'Port Bryce', 'Pennsylvania', '536-609-4177', 'dahlia95@example.net', 'e39c2cf914ab92ef80189d3eae4054c5.jpg', 2, 1, 30, 2, '2018-12-13 05:59:34', '2019-01-11 15:30:36');
INSERT INTO `franchisees` VALUES (2, 'Breanna Wolff DVM', '77183 Therese Canyon\nWest Tevinmouth, ME 32559-0622', 'East Alvina', 'Pennsylvania', '(703) 534-9827 x60601', 'torp.arianna@example.com', 'd06f32fc24a0b244d70f509786851044.jpg', 2, 3, 25, 3, '2018-12-13 05:59:34', '2019-01-11 15:30:53');
INSERT INTO `franchisees` VALUES (3, 'Sydnie Hand', '73935 Lillian Alley Suite 807\nWest Jaymeborough, IL 12201-2295', 'Jordanside', 'Idaho', '818.920.1162', 'flubowitz@example.net', 'a6bb3831e231dcbe0053a720e7ec81dd.jpg', 1, 3, 29, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (4, 'Emily Auer', '623 Quitzon Dam Apt. 184\nGudruntown, NC 74446-5759', 'West Dovieburgh', 'Colorado', '+1.682.775.0495', 'emely.dietrich@example.net', '76f68e6d7e38ab20ccb30ff549c2a4e7.jpg', 1, 3, 28, 4, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (5, 'Berry Abshire', '99350 Blick Crescent Apt. 366\nO\'Konton, VA 87128', 'Grahamborough', 'Montana', '+1.582.680.3256', 'barton.gustave@example.net', 'f2a895dd13b8a342889eedd8b2b39b97.jpg', 1, 1, 16, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (6, 'Dr. Dolores Erdman Jr.', '59970 Effertz Plaza Suite 978\nHarrystad, MT 94264-4428', 'Rhettview', 'New Hampshire', '(295) 936-9473', 'margarita.mitchell@example.net', 'c0ad64005ad575aae71e63789d96975f.jpg', 1, 3, 12, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (7, 'Coby Mueller', '9671 Isaiah Port\nPort Ilene, AZ 61973', 'Torpview', 'Florida', '1-860-278-6781 x2916', 'retta21@example.com', '24f6fcb8c4ad8e378668e0bf4656a239.jpg', 1, 2, 6, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (8, 'Flo Runolfsdottir III', '5022 Dina Row\nJastfurt, ME 70603-0642', 'Port Georgettemouth', 'New Mexico', '+1 (248) 313-5084', 'trent.kozey@example.net', 'b3f1f2e845274f96db5bb1d9d71d28f9.jpg', 1, 1, 2, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (9, 'Elliott Corwin', '1040 Boyle Ramp\nNicolasport, MA 54760', 'Paulinebury', 'New Mexico', '+19162992004', 'senger.keyshawn@example.net', 'db9f923c09be1a52f607b5be4e7e7fa6.jpg', 1, 2, 30, 4, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (10, 'Vicenta Brekke', '4287 Sebastian View Suite 195\nWest Sharon, PA 40114', 'Electamouth', 'Illinois', '(256) 518-8782', 'kfisher@example.org', '1c009dafdea9dd60816b528d6ad713ee.jpg', 1, 3, 7, 2, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (11, 'Katlyn Mitchell I', '29986 VonRueden Stravenue Suite 762\nEast Delia, HI 72723', 'Penelopeton', 'Tennessee', '1-989-653-5069', 'josue69@example.com', '13f92ff45e2ab0246575c612765260d4.jpg', 1, 3, 16, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (12, 'Kip Lockman', '91539 Emard Stravenue\nEast Lucienneview, NE 30231', 'South Elnaville', 'New Hampshire', '1-929-910-3675', 'gennaro85@example.com', 'df4d7747492780267d656831b6469db0.jpg', 1, 2, 22, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (13, 'Reed Parisian', '8214 Ebert Courts Suite 063\nGreenholtshire, IA 15858-9962', 'East Tevinport', 'Nevada', '1-738-767-6943 x35070', 'amanda.bradtke@example.org', '199870f0b32c7e4615a9a148b79f3bf7.jpg', 1, 3, 6, 2, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (14, 'Eliseo Crona', '868 Mayra Knolls\nNorth Julienbury, IA 55301', 'Lake Laronmouth', 'Alabama', '1-591-231-4499', 'upton.edna@example.com', '7f391740558b87090b27b7db922a3172.jpg', 1, 3, 7, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (15, 'Nelle Nitzsche', '1850 Minerva Greens Suite 810\nSheilaland, VT 96564', 'West German', 'Oklahoma', '+1-949-656-2644', 'lawrence24@example.net', '91024882f975e0526866cde8003d8430.jpg', 1, 1, 22, 4, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (16, 'Deanna O\'Keefe', '93832 Kovacek Prairie\nEast Brannon, HI 85379', 'Hettingershire', 'Kansas', '(942) 246-8322', 'marjorie94@example.com', 'd3a53ad42a11382c5b47053332eed171.jpg', 1, 1, 14, 4, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (17, 'Rosina Hauck', '75956 Edna Key\nHarrisfort, OR 93064', 'New Elinorechester', 'Nevada', '454.218.4886 x3149', 'nmayer@example.org', '0a7fc2cbc84665f06544213d19984d71.jpg', 1, 3, 12, 4, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (18, 'Travis Witting DDS', '3581 Salma Station\nRyanhaven, VT 23822-6699', 'South Jacquesberg', 'South Dakota', '(363) 885-2054 x91612', 'delfina19@example.com', 'f72338367cfe9400aee3f170634e8735.jpg', 1, 3, 6, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (19, 'Clifford Gorczany', '6659 Kuhic Mall\nEast Kasandra, NE 42520-6633', 'South Kennethstad', 'Washington', '845-859-7536 x044', 'newton16@example.org', '501ebac0300a7c5821b3fb64819470b4.jpg', 1, 2, 27, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (20, 'Anna Toy', '476 Nathaniel Mountain Apt. 392\nWest Koryside, AR 08468', 'New Myronfort', 'Utah', '592-321-1996 x0054', 'nikita57@example.net', 'da0be8816a0aadd85ddc9f04f459e3a3.jpg', 1, 3, 10, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (21, 'Maiya Hoppe V', '1066 Gulgowski Pass\nAldenfurt, DE 84383-0232', 'Jennyferport', 'Virginia', '(748) 638-5864', 'roob.kailee@example.org', '1ca0ab0adb51ce40299f0fe20821d9e9.jpg', 1, 2, 19, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (22, 'Gust Marks', '96436 Bradtke Divide Suite 748\nHartmannhaven, NE 47542-8299', 'Eltonstad', 'Massachusetts', '582.501.0504 x9579', 'lwilderman@example.net', '8f7ee184df1ab058a04ab8c6cc9f4980.jpg', 1, 1, 14, 2, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (23, 'Art Yost', '88123 Hettie Trace Suite 744\nEast Alphonso, AL 18345-0509', 'Port Kevon', 'Tennessee', '872.486.0901', 'pcormier@example.org', 'e0e978ce6b0b9dcdf18fa4f6419eb705.jpg', 1, 2, 21, 2, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (24, 'Ben Ruecker', '36736 Wunsch Drives Suite 302\nRickiebury, ME 08067-3536', 'Damonland', 'Washington', '(739) 640-9519', 'kiel25@example.com', '545cc5ac9c6cf5b3d8a9f0eb4671f664.jpg', 1, 2, 20, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (25, 'Shyanne Klein', '39881 Rogahn Valleys Suite 444\nBartolettibury, KS 50816-9505', 'North Amy', 'Oklahoma', '341-807-8412', 'xboehm@example.com', 'd8efbb8b6ebdebedfc79efa4ee811d22.jpg', 1, 3, 14, 3, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (26, 'Clifton Spencer', '65858 Goldner Spring\nNew Stephonton, CO 91232', 'East Narcisoside', 'Maine', '+1 (479) 780-4123', 'btrantow@example.net', 'd1eea86acbe6184750d04d6417ceef73.jpg', 1, 3, 30, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (27, 'Daniela Hyatt', '115 Schimmel Hills\nMitchellmouth, AL 94553', 'Lake Raoulview', 'Utah', '1-860-740-3729', 'estel14@example.com', '330132a9badc1736866350fe458dbaad.jpg', 1, 3, 21, 2, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (28, 'Henry Nolan Sr.', 'calle lopez aldana 151', 'lima', 'New Jersey', '480-913-5241 x4139', 'aanderson@example.com', '1547218941.jpg', 1, 2, 14, 3, '2018-12-13 05:59:34', '2019-01-11 15:02:21');
INSERT INTO `franchisees` VALUES (29, 'Dr. Lora Hessel', '977 Douglas Road\nAdolphusborough, OR 74433', 'Schulistberg', 'Nevada', '(826) 910-9529 x1337', 'lou27@example.com', 'a9da6b2bf9ad7ab9c051931c8bc86e06.jpg', 1, 2, 8, 1, '2018-12-13 05:59:34', '2018-12-13 05:59:34');
INSERT INTO `franchisees` VALUES (30, 'Rico Ratke V', '70875 Myrtle Port Suite 469Vladimirview, SC 34172', 'lima', 'lima', '1-491-945-4145 x25728', 'kyler78@example.com', '1547218749.PNG', 1, 3, 18, 1, '2018-12-13 05:59:34', '2019-01-11 14:59:09');
INSERT INTO `franchisees` VALUES (31, 'demos', 'lima juan de arona 151', 'lima', 'lima', '123123123', 'asd@add.com', '1547226332.jpg', 2, 2, 1, 1, '2019-01-11 17:05:32', '2019-01-11 17:05:32');
COMMIT;

-- ----------------------------
-- Table structure for gifts
-- ----------------------------
DROP TABLE IF EXISTS `gifts`;
CREATE TABLE `gifts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `repeat` tinyint(1) NOT NULL,
  `points_open` int(11) NOT NULL,
  `sistema` enum('gps chekin','Por Cercania','QR','CODIGO') COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance_permit` int(11) NOT NULL,
  `zone_gtm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit_start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limit_end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prize` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gifts_client_id_foreign` (`client_id`),
  CONSTRAINT `gifts_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for helps
-- ----------------------------
DROP TABLE IF EXISTS `helps`;
CREATE TABLE `helps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for ingredient_photo
-- ----------------------------
DROP TABLE IF EXISTS `ingredient_photo`;
CREATE TABLE `ingredient_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ingredient_id` int(10) unsigned NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ingredient_photo_ingredient_id_foreign` (`ingredient_id`),
  CONSTRAINT `ingredient_photo_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ingredient_photo
-- ----------------------------
BEGIN;
INSERT INTO `ingredient_photo` VALUES (1, 5, 'ingredients/5c575474d290a.jpg', '2019-02-03 20:52:04', '2019-02-03 20:52:04');
INSERT INTO `ingredient_photo` VALUES (2, 5, 'ingredients/5c575474d6306.jpg', '2019-02-03 20:52:04', '2019-02-03 20:52:04');
INSERT INTO `ingredient_photo` VALUES (3, 5, 'ingredients/5c575474d933f.jpg', '2019-02-03 20:52:04', '2019-02-03 20:52:04');
INSERT INTO `ingredient_photo` VALUES (4, 6, 'ingredients/5c5754ccd67bb.jpg', '2019-02-03 20:53:32', '2019-02-03 20:53:32');
INSERT INTO `ingredient_photo` VALUES (5, 6, 'ingredients/5c5754ccd9c90.jpg', '2019-02-03 20:53:32', '2019-02-03 20:53:32');
INSERT INTO `ingredient_photo` VALUES (6, 6, 'ingredients/5c5754ccdd1ea.jpg', '2019-02-03 20:53:32', '2019-02-03 20:53:32');
INSERT INTO `ingredient_photo` VALUES (7, 6, 'ingredients/5c5754ccde4dd.jpg', '2019-02-03 20:53:32', '2019-02-03 20:53:32');
INSERT INTO `ingredient_photo` VALUES (8, 7, 'ingredients/5c5787b00fe1a.jpg', '2019-02-04 00:30:40', '2019-02-04 00:30:40');
INSERT INTO `ingredient_photo` VALUES (9, 1, 'ingredients/5c578b3489568.jpg', '2019-02-04 00:45:40', '2019-02-04 00:45:40');
INSERT INTO `ingredient_photo` VALUES (10, 2, 'ingredients/5c578b4d221a7.jpg', '2019-02-04 00:46:05', '2019-02-04 00:46:05');
INSERT INTO `ingredient_photo` VALUES (11, 3, 'ingredients/5c578b604a9e6.jpg', '2019-02-04 00:46:24', '2019-02-04 00:46:24');
INSERT INTO `ingredient_photo` VALUES (12, 4, 'ingredients/5c578b6c24b44.jpg', '2019-02-04 00:46:36', '2019-02-04 00:46:36');
COMMIT;

-- ----------------------------
-- Table structure for ingredients
-- ----------------------------
DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE `ingredients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `calorias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ingredients_client_id_foreign` (`client_id`),
  CONSTRAINT `ingredients_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ingredients
-- ----------------------------
BEGIN;
INSERT INTO `ingredients` VALUES (1, 'Arroz norteño', 14.00, '1000', 16, 'bolsa de 5 kilos', '2019-02-03 20:42:58', '2019-02-04 00:45:40');
INSERT INTO `ingredients` VALUES (2, 'cebollas arequipeñas', 20.00, '100', 16, '10 kilos', '2019-02-03 20:45:47', '2019-02-04 00:46:05');
INSERT INTO `ingredients` VALUES (3, 'papa', 10.00, '40', 16, '10 kilos', '2019-02-03 20:47:45', '2019-02-03 20:47:45');
INSERT INTO `ingredients` VALUES (4, 'aji', 1.00, '100', 16, '1kilo', '2019-02-03 20:50:30', '2019-02-03 20:50:30');
INSERT INTO `ingredients` VALUES (5, 'Panes', 10.00, '1000', 16, '200gr', '2019-02-03 20:52:04', '2019-02-03 20:52:04');
INSERT INTO `ingredients` VALUES (6, 'mantequilla', 8.00, '2000', 16, 'mantquilla pura', '2019-02-03 20:53:32', '2019-02-03 20:53:32');
INSERT INTO `ingredients` VALUES (7, 'Arroz paisana', 14.00, '1000', 16, 'bolsa de 5kilos', '2019-02-04 00:30:40', '2019-02-04 00:30:40');
COMMIT;

-- ----------------------------
-- Table structure for job_pushs
-- ----------------------------
DROP TABLE IF EXISTS `job_pushs`;
CREATE TABLE `job_pushs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `push_id` int(10) unsigned NOT NULL,
  `type_list_id` int(10) unsigned NOT NULL,
  `latitud` decimal(9,6) NOT NULL,
  `longitud` decimal(9,6) NOT NULL,
  `radius` decimal(9,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_pushs_push_id_foreign` (`push_id`),
  KEY `job_pushs_type_list_id_foreign` (`type_list_id`),
  CONSTRAINT `job_pushs_push_id_foreign` FOREIGN KEY (`push_id`) REFERENCES `pushs` (`id`),
  CONSTRAINT `job_pushs_type_list_id_foreign` FOREIGN KEY (`type_list_id`) REFERENCES `type_lists` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for job_turns
-- ----------------------------
DROP TABLE IF EXISTS `job_turns`;
CREATE TABLE `job_turns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for menu_ingredient
-- ----------------------------
DROP TABLE IF EXISTS `menu_ingredient`;
CREATE TABLE `menu_ingredient` (
  `menu_id` int(10) unsigned NOT NULL,
  `ingredient_id` int(10) unsigned NOT NULL,
  KEY `menu_ingredient_menu_id_foreign` (`menu_id`),
  KEY `menu_ingredient_ingredient_id_foreign` (`ingredient_id`),
  CONSTRAINT `menu_ingredient_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`),
  CONSTRAINT `menu_ingredient_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price1` decimal(8,2) NOT NULL,
  `price2` decimal(8,2) DEFAULT NULL,
  `igv` int(11) NOT NULL,
  `calories` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cheff` int(11) DEFAULT NULL,
  `celiaco` int(11) DEFAULT NULL,
  `delivery` int(11) DEFAULT NULL,
  `vegetariano` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menus_category_id_foreign` (`category_id`),
  CONSTRAINT `menus_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for menus_photo
-- ----------------------------
DROP TABLE IF EXISTS `menus_photo`;
CREATE TABLE `menus_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menus_photo_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menus_photo_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for mesas
-- ----------------------------
DROP TABLE IF EXISTS `mesas`;
CREATE TABLE `mesas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nummesa` int(11) NOT NULL,
  `estado` int(1) DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mesas_client_id_foreign` (`client_id`),
  CONSTRAINT `mesas_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of mesas
-- ----------------------------
BEGIN;
INSERT INTO `mesas` VALUES (1, 35, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (2, 40, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (3, 54, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (4, 47, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (5, 32, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (6, 4, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (7, 57, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (8, 17, '/dist/img/qr_sample.png', 7, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (9, 11, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (10, 7, '/dist/img/qr_sample.png', 2, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (11, 14, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (12, 38, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (13, 54, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (14, 49, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (15, 14, '/dist/img/qr_sample.png', 3, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (16, 26, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (17, 9, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (18, 23, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (19, 55, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (20, 23, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (21, 54, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (22, 33, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (23, 11, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (24, 19, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (25, 43, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (26, 18, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (27, 22, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (28, 19, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (29, 31, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (30, 25, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (31, 14, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (32, 12, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (33, 8, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (34, 43, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (35, 43, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (36, 18, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (37, 28, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (38, 19, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (39, 19, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (40, 9, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (41, 52, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (42, 47, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (43, 35, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (44, 39, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (45, 11, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (46, 51, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (47, 25, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (48, 49, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (49, 26, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (50, 15, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (51, 37, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (52, 37, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (53, 27, '/dist/img/qr_sample.png', 19, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (54, 28, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (55, 48, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (56, 8, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (57, 14, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (58, 58, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (59, 10, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (60, 30, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (61, 47, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (62, 12, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (63, 29, '/dist/img/qr_sample.png', 2, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (64, 27, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (65, 34, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (66, 30, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (67, 44, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (68, 14, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (69, 32, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (70, 16, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (71, 21, '/dist/img/qr_sample.png', 19, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (72, 55, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (73, 52, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (74, 32, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (75, 38, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (76, 5, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (77, 43, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (78, 23, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (79, 5, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (80, 50, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (81, 54, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (82, 43, '/dist/img/qr_sample.png', 7, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (83, 41, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (84, 41, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (85, 15, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (86, 59, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (87, 56, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (88, 7, '/dist/img/qr_sample.png', 2, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (89, 17, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (90, 5, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (91, 30, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (92, 40, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (93, 51, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (94, 55, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (95, 51, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (96, 47, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (97, 11, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (98, 35, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (99, 59, '/dist/img/qr_sample.png', 7, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (100, 11, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (101, 18, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (102, 25, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (103, 23, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (104, 41, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (105, 22, '/dist/img/qr_sample.png', 19, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (106, 1, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (107, 7, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (108, 28, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (109, 33, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:37', '2018-12-13 06:20:37');
INSERT INTO `mesas` VALUES (110, 24, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (111, 46, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (112, 29, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (113, 57, '/dist/img/qr_sample.png', 19, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (114, 47, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (115, 46, '/dist/img/qr_sample.png', 3, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (116, 49, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (117, 25, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (118, 49, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (119, 27, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (120, 11, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (121, 1, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (122, 38, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (123, 47, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (124, 54, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (125, 19, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (126, 30, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (127, 58, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (128, 55, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (129, 9, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (130, 11, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (131, 16, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (132, 35, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (133, 44, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (134, 9, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (135, 31, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (136, 36, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (137, 27, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (138, 59, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (139, 39, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (140, 45, '/dist/img/qr_sample.png', 20, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (141, 30, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (142, 19, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (143, 59, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (144, 20, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (145, 30, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (146, 23, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (147, 46, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (148, 58, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (149, 2, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (150, 56, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (151, 45, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (152, 46, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (153, 51, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (154, 18, '/dist/img/qr_sample.png', 2, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (155, 48, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (156, 56, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (157, 7, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (158, 27, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (159, 7, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (160, 4, '/dist/img/qr_sample.png', 1, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (161, 53, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (162, 28, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (163, 13, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (164, 24, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (165, 32, '/dist/img/qr_sample.png', 14, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (166, 16, 'mesa piso 1', 2, 1, '2018-12-13 06:20:38', '2019-02-03 03:46:18');
INSERT INTO `mesas` VALUES (167, 54, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (168, 53, '/dist/img/qr_sample.png', 3, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (169, 41, '/dist/img/qr_sample.png', 3, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (170, 9, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (171, 49, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (172, 39, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (173, 20, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (174, 30, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (175, 43, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (176, 17, '/dist/img/qr_sample.png', 19, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (177, 2, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (178, 34, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (179, 50, '/dist/img/qr_sample.png', 3, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (180, 5, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (181, 40, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (182, 23, '/dist/img/qr_sample.png', 3, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (183, 6, '/dist/img/qr_sample.png', 10, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (184, 54, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (185, 37, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (186, 59, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (187, 52, '/dist/img/qr_sample.png', 18, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (188, 35, '/dist/img/qr_sample.png', 4, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (189, 3, '/dist/img/qr_sample.png', 2, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (190, 13, '/dist/img/qr_sample.png', 16, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (191, 33, '/dist/img/qr_sample.png', 2, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (192, 3, '/dist/img/qr_sample.png', 5, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (193, 48, '/dist/img/qr_sample.png', 11, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (194, 19, '/dist/img/qr_sample.png', 8, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (195, 18, '/dist/img/qr_sample.png', 6, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (196, 28, '/dist/img/qr_sample.png', 13, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (197, 31, '/dist/img/qr_sample.png', 15, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (198, 24, '/dist/img/qr_sample.png', 12, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (199, 19, '/dist/img/qr_sample.png', 9, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (200, 21, '/dist/img/qr_sample.png', 17, 1, '2018-12-13 06:20:38', '2018-12-13 06:20:38');
INSERT INTO `mesas` VALUES (201, 16, 'mesa piso 1', 1, 2, '2019-02-03 02:54:58', '2019-02-03 02:54:58');
INSERT INTO `mesas` VALUES (202, 16, 'mesa 3 piso 1', 3, 2, '2019-02-03 03:11:07', '2019-02-03 03:11:07');
INSERT INTO `mesas` VALUES (203, 16, 'mesa 4 piso 1', 4, 2, '2019-02-03 03:13:43', '2019-02-03 03:13:43');
INSERT INTO `mesas` VALUES (204, 16, 'mesa piso 1', 6, 2, '2019-02-03 03:14:54', '2019-02-03 03:49:01');
INSERT INTO `mesas` VALUES (205, 16, 'mesa piso 1', 5, 2, '2019-02-03 03:15:09', '2019-02-03 03:15:09');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2015_01_20_084450_create_roles_table', 1);
INSERT INTO `migrations` VALUES (4, '2015_01_20_084525_create_role_user_table', 1);
INSERT INTO `migrations` VALUES (5, '2015_01_24_080208_create_permissions_table', 1);
INSERT INTO `migrations` VALUES (6, '2015_01_24_080433_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (7, '2015_12_04_003040_add_special_role_column', 1);
INSERT INTO `migrations` VALUES (8, '2015_12_08_054127_create_classifications_table', 1);
INSERT INTO `migrations` VALUES (9, '2017_10_17_170735_create_permission_user_table', 1);
INSERT INTO `migrations` VALUES (10, '2018_11_19_035137_create_packages_table', 1);
INSERT INTO `migrations` VALUES (11, '2018_11_19_035139_create_franchisees_table', 1);
INSERT INTO `migrations` VALUES (12, '2018_11_19_035631_create_clients_table', 1);
INSERT INTO `migrations` VALUES (13, '2018_11_19_040953_create_mozos_table', 1);
INSERT INTO `migrations` VALUES (14, '2018_11_19_040954_create_mesas_table', 1);
INSERT INTO `migrations` VALUES (15, '2018_11_19_054736_create_categories_table', 1);
INSERT INTO `migrations` VALUES (16, '2018_11_19_064220_create_statistics_table', 1);
INSERT INTO `migrations` VALUES (17, '2018_11_19_070736_create_turns_table', 1);
INSERT INTO `migrations` VALUES (18, '2018_12_08_051253_create_menus_table', 1);
INSERT INTO `migrations` VALUES (19, '2018_12_08_051254_create_menus_photo_table', 1);
INSERT INTO `migrations` VALUES (20, '2018_12_08_051255_create_delivery_table', 1);
INSERT INTO `migrations` VALUES (21, '2018_12_08_051256_create_ingredients_table', 1);
INSERT INTO `migrations` VALUES (22, '2018_12_08_051257_create_ingredient_photo_table', 1);
INSERT INTO `migrations` VALUES (23, '2018_12_08_052000_create_assignments_table', 1);
INSERT INTO `migrations` VALUES (24, '2018_12_08_060313_create_state_sales_table', 1);
INSERT INTO `migrations` VALUES (25, '2018_12_08_060422_create_type_sales_table', 1);
INSERT INTO `migrations` VALUES (26, '2018_12_08_060539_create_payment_methods_table', 1);
INSERT INTO `migrations` VALUES (27, '2018_12_08_060716_create_job_turns_table', 1);
INSERT INTO `migrations` VALUES (28, '2018_12_08_062344_create_sales_table', 1);
INSERT INTO `migrations` VALUES (29, '2018_12_08_064528_create_sectors_table', 1);
INSERT INTO `migrations` VALUES (30, '2018_12_08_065000_create_booking_table', 1);
INSERT INTO `migrations` VALUES (31, '2018_12_08_065112_create_points_table', 1);
INSERT INTO `migrations` VALUES (32, '2018_12_08_070750_create_news_type_clients_table', 1);
INSERT INTO `migrations` VALUES (33, '2018_12_08_070803_create_news_list_clients_table', 1);
INSERT INTO `migrations` VALUES (34, '2018_12_08_070820_create_news_templates_table', 1);
INSERT INTO `migrations` VALUES (35, '2018_12_08_070831_create_news_campaign_table', 1);
INSERT INTO `migrations` VALUES (36, '2018_12_08_070856_create_newsletters_table', 1);
INSERT INTO `migrations` VALUES (37, '2018_12_08_072757_create_push_lists_table', 1);
INSERT INTO `migrations` VALUES (38, '2018_12_08_072916_create_push_list_user_table', 1);
INSERT INTO `migrations` VALUES (39, '2018_12_08_073015_create_push_types_table', 1);
INSERT INTO `migrations` VALUES (40, '2018_12_08_073025_create_type_lists_table', 1);
INSERT INTO `migrations` VALUES (41, '2018_12_08_073028_create_pushs_table', 1);
INSERT INTO `migrations` VALUES (42, '2018_12_08_080154_create_job_pushs_table', 1);
INSERT INTO `migrations` VALUES (43, '2018_12_08_081346_create_coupons_table', 1);
INSERT INTO `migrations` VALUES (44, '2018_12_08_081957_create_gifts_table', 1);
INSERT INTO `migrations` VALUES (45, '2018_12_08_083200_create_comments_table', 1);
INSERT INTO `migrations` VALUES (46, '2018_12_08_083201_create_ratings_table', 1);
INSERT INTO `migrations` VALUES (47, '2018_12_08_085704_create_helps_table', 1);
INSERT INTO `migrations` VALUES (48, '2018_12_09_213243_create_salsas_table', 1);
INSERT INTO `migrations` VALUES (49, '2018_12_10_021255_create_menu_ingredient_table', 1);
COMMIT;

-- ----------------------------
-- Table structure for mozos
-- ----------------------------
DROP TABLE IF EXISTS `mozos`;
CREATE TABLE `mozos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mozos_client_id_foreign` (`client_id`),
  CONSTRAINT `mozos_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of mozos
-- ----------------------------
BEGIN;
INSERT INTO `mozos` VALUES (1, 'mozos/UGllVltayjFIW9un9eislMxYBjjx2BqX0i2eYsZ0.jpeg', 'William Torres', 'los alamos 1020', 'lima', 'peru', 'lima', '9345345345', 'asd@asdd.com', 'M', 1, 16, '2019-02-03 01:32:17', '2019-02-03 02:12:45');
INSERT INTO `mozos` VALUES (2, 'mozos/O3UngarSgGAwdSpWqQhpm3bF5RISVW5yyMzLOMZe.jpeg', 'Pedro Ubilluz', 'los ubillus 1200', 'lima', 'peru', 'lima', '945345243', 'wil@sff.com', 'M', 1, 16, '2019-02-03 01:34:51', '2019-02-03 02:13:04');
COMMIT;

-- ----------------------------
-- Table structure for news_campaign
-- ----------------------------
DROP TABLE IF EXISTS `news_campaign`;
CREATE TABLE `news_campaign` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for news_list_clients
-- ----------------------------
DROP TABLE IF EXISTS `news_list_clients`;
CREATE TABLE `news_list_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `news_type_client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_list_clients_user_id_foreign` (`user_id`),
  KEY `news_list_clients_news_type_client_id_foreign` (`news_type_client_id`),
  CONSTRAINT `news_list_clients_news_type_client_id_foreign` FOREIGN KEY (`news_type_client_id`) REFERENCES `news_type_clients` (`id`),
  CONSTRAINT `news_list_clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for news_templates
-- ----------------------------
DROP TABLE IF EXISTS `news_templates`;
CREATE TABLE `news_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `htmlcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for news_type_clients
-- ----------------------------
DROP TABLE IF EXISTS `news_type_clients`;
CREATE TABLE `news_type_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for newsletters
-- ----------------------------
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE `newsletters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_campaign_id` int(10) unsigned NOT NULL,
  `news_template_id` int(10) unsigned NOT NULL,
  `news_list_client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `newsletters_news_campaign_id_foreign` (`news_campaign_id`),
  KEY `newsletters_news_template_id_foreign` (`news_template_id`),
  KEY `newsletters_news_list_client_id_foreign` (`news_list_client_id`),
  CONSTRAINT `newsletters_news_campaign_id_foreign` FOREIGN KEY (`news_campaign_id`) REFERENCES `news_campaign` (`id`),
  CONSTRAINT `newsletters_news_list_client_id_foreign` FOREIGN KEY (`news_list_client_id`) REFERENCES `news_list_clients` (`id`),
  CONSTRAINT `newsletters_news_template_id_foreign` FOREIGN KEY (`news_template_id`) REFERENCES `news_templates` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for packages
-- ----------------------------
DROP TABLE IF EXISTS `packages`;
CREATE TABLE `packages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `promo` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of packages
-- ----------------------------
BEGIN;
INSERT INTO `packages` VALUES (1, 'Platinum', 2000.00, 1800.00, 1, '2018-12-13 05:59:01', '2018-12-13 05:59:01');
INSERT INTO `packages` VALUES (2, 'ORO', 1800.00, 1650.00, 1, '2018-12-13 05:59:01', '2018-12-13 05:59:01');
INSERT INTO `packages` VALUES (3, 'Plata', 1500.00, 1300.00, 1, '2018-12-13 05:59:01', '2018-12-13 05:59:01');
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for payment_methods
-- ----------------------------
DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE `payment_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for permission_user
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES (1, 'Navegar usuarios', 'users.index', 'Lista y navega usuarios', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (2, 'ver detalle', 'users.show', 'ver detalle usuarios', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (3, 'Edicion usuarios', 'users.edit', 'editar detalle usuarios', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (4, 'Eliminar usuarios', 'users.destroy', 'Elimnar usuarios', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (5, 'Navegar rol', 'roles.index', 'Lista y navega rol', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (6, 'ver detalle rol', 'roles.show', 'ver detalle rol', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (7, 'crear  rol', 'roles.create', 'ver detalle rol', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (8, 'Edicion rol', 'roles.edit', 'editar detalle rol', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (9, 'Eliminar rol', 'roles.destroy', 'Elimnar rol', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (10, 'Navegar franquicia', 'franchisees.index', 'Lista y navega franquicia', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (11, 'ver detalle franquicia', 'franchisees.show', 'ver detalle franquicia', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (12, 'crear  franquicia', 'franchisees.create', 'ver detalle franquicia', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (13, 'Edicion franquicia', 'franchisees.edit', 'editar detalle franquicia', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
INSERT INTO `permissions` VALUES (14, 'Eliminar franquicia', 'franchisees.destroy', 'Elimnar franquicia', '2018-12-13 05:46:23', '2018-12-13 05:46:23');
COMMIT;

-- ----------------------------
-- Table structure for points
-- ----------------------------
DROP TABLE IF EXISTS `points`;
CREATE TABLE `points` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `points_user_id_foreign` (`user_id`),
  CONSTRAINT `points_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price1` decimal(8,2) DEFAULT NULL,
  `price2` decimal(8,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES (1, 2, 'products/fR1CKIYZPZ1k5zFShHqSUwAscXsD8vch61RiSom1.jpeg', 'arroz con pato', 12.00, 14.50, '2019-02-03 17:00:09', '2019-02-03 19:39:08');
INSERT INTO `products` VALUES (2, 2, 'products/75vFmAX2Q8wH7PPRId3ZKuXrCnqMENmHGjqA9fok.jpeg', 'pollo al horno', 12.50, 13.00, '2019-02-03 19:15:06', '2019-02-03 19:15:06');
COMMIT;

-- ----------------------------
-- Table structure for push_list_user
-- ----------------------------
DROP TABLE IF EXISTS `push_list_user`;
CREATE TABLE `push_list_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `push_list_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `push_list_user_push_list_id_foreign` (`push_list_id`),
  KEY `push_list_user_user_id_foreign` (`user_id`),
  CONSTRAINT `push_list_user_push_list_id_foreign` FOREIGN KEY (`push_list_id`) REFERENCES `push_lists` (`id`),
  CONSTRAINT `push_list_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for push_lists
-- ----------------------------
DROP TABLE IF EXISTS `push_lists`;
CREATE TABLE `push_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for push_types
-- ----------------------------
DROP TABLE IF EXISTS `push_types`;
CREATE TABLE `push_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for pushs
-- ----------------------------
DROP TABLE IF EXISTS `pushs`;
CREATE TABLE `pushs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for ratings
-- ----------------------------
DROP TABLE IF EXISTS `ratings`;
CREATE TABLE `ratings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(10) unsigned NOT NULL,
  `valorate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_comment_id_foreign` (`comment_id`),
  CONSTRAINT `ratings_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
BEGIN;
INSERT INTO `role_user` VALUES (1, 1, 1, '2019-01-10 21:46:07', '2019-01-10 21:46:11');
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES (1, 'Administrador', 'admin', 'Administrador general', '2018-12-13 05:55:41', '2018-12-13 05:55:41', 'all-access');
INSERT INTO `roles` VALUES (2, 'Franquicia', 'anunciante', 'Administrador de franquicias', '2018-12-13 05:55:41', '2018-12-13 05:55:41', NULL);
INSERT INTO `roles` VALUES (3, 'Mozo', 'mozo', 'mozo ', '2018-12-13 05:55:41', '2018-12-13 05:55:41', NULL);
INSERT INTO `roles` VALUES (4, 'Caja', 'caja', 'caja ventas ', '2018-12-13 05:55:41', '2018-12-13 05:55:41', NULL);
INSERT INTO `roles` VALUES (5, 'usuario', 'usuario', 'usuario app o restaurant', '2018-12-13 05:55:41', '2018-12-13 05:55:41', NULL);
COMMIT;

-- ----------------------------
-- Table structure for sales
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mozo_id` int(10) unsigned NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `payment_method_id` int(10) unsigned NOT NULL,
  `mesa_id` int(10) unsigned NOT NULL,
  `importe` decimal(8,2) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_mozo_id_foreign` (`mozo_id`),
  KEY `sales_client_id_foreign` (`client_id`),
  KEY `sales_payment_method_id_foreign` (`payment_method_id`),
  KEY `sales_mesa_id_foreign` (`mesa_id`),
  CONSTRAINT `sales_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `sales_mesa_id_foreign` FOREIGN KEY (`mesa_id`) REFERENCES `mesas` (`id`),
  CONSTRAINT `sales_mozo_id_foreign` FOREIGN KEY (`mozo_id`) REFERENCES `mozos` (`id`),
  CONSTRAINT `sales_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for salsas
-- ----------------------------
DROP TABLE IF EXISTS `salsas`;
CREATE TABLE `salsas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `salsas_client_id_foreign` (`client_id`),
  CONSTRAINT `salsas_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of salsas
-- ----------------------------
BEGIN;
INSERT INTO `salsas` VALUES (1, 'Rocoto', 'salsas/OQ0jXGpqGwMFfuGaYw07FRFT0bqHaBgAAhUx4snh.jpeg', '1k de rocoto sureño', 120.00, 16, '2019-02-04 02:37:44', '2019-02-04 03:19:38');
COMMIT;

-- ----------------------------
-- Table structure for sectors
-- ----------------------------
DROP TABLE IF EXISTS `sectors`;
CREATE TABLE `sectors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
BEGIN;
INSERT INTO `services` VALUES (1, 'Comer fuer', NULL, NULL, NULL);
INSERT INTO `services` VALUES (2, 'Wi-Fi', NULL, NULL, NULL);
INSERT INTO `services` VALUES (3, 'Sin reserva', NULL, NULL, NULL);
INSERT INTO `services` VALUES (4, 'Se cobra cubierto', '', NULL, NULL);
INSERT INTO `services` VALUES (5, 'Acceso para discapacitados', NULL, NULL, NULL);
INSERT INTO `services` VALUES (6, 'se aceptan mascotas', NULL, NULL, NULL);
INSERT INTO `services` VALUES (7, 'Se puede ir en grupos', NULL, NULL, NULL);
INSERT INTO `services` VALUES (8, 'Acceso para discapacitados', NULL, NULL, NULL);
INSERT INTO `services` VALUES (9, 'Bar completo', NULL, NULL, NULL);
INSERT INTO `services` VALUES (10, 'Estacionamiento', NULL, NULL, NULL);
INSERT INTO `services` VALUES (11, 'Sin delivery', NULL, NULL, NULL);
INSERT INTO `services` VALUES (12, 'Abierto 24 hrs', NULL, NULL, NULL);
INSERT INTO `services` VALUES (13, 'Comida para celiacos', NULL, NULL, NULL);
INSERT INTO `services` VALUES (14, 'Comida vegetariana', NULL, NULL, NULL);
INSERT INTO `services` VALUES (15, 'Sin gluten', NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for state_sales
-- ----------------------------
DROP TABLE IF EXISTS `state_sales`;
CREATE TABLE `state_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for statistics
-- ----------------------------
DROP TABLE IF EXISTS `statistics`;
CREATE TABLE `statistics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `points` int(11) NOT NULL,
  `pointusage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `statistics_client_id_foreign` (`client_id`),
  CONSTRAINT `statistics_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for turns
-- ----------------------------
DROP TABLE IF EXISTS `turns`;
CREATE TABLE `turns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for type_lists
-- ----------------------------
DROP TABLE IF EXISTS `type_lists`;
CREATE TABLE `type_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `push_list_id` int(10) unsigned NOT NULL,
  `push_type_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_lists_push_list_id_foreign` (`push_list_id`),
  KEY `type_lists_push_type_id_foreign` (`push_type_id`),
  CONSTRAINT `type_lists_push_list_id_foreign` FOREIGN KEY (`push_list_id`) REFERENCES `push_lists` (`id`),
  CONSTRAINT `type_lists_push_type_id_foreign` FOREIGN KEY (`push_type_id`) REFERENCES `push_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for type_sales
-- ----------------------------
DROP TABLE IF EXISTS `type_sales`;
CREATE TABLE `type_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Tessie Kreiger', 'Pfeffer', 'admin@qcomo.com', NULL, '+5712848074627', 'F', 48, '32d263bd980280b591d59e3647997949.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '1zGvPaxGUz', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (2, 'Tomas McClure II', 'Nitzsche', 'will.volkman@example.com', NULL, '+2320658479014', 'M', 23, 'c5c2b245b1c6e04695109fc6370ce836.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '69kcRoNdhA', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (3, 'Deon Prohaska', 'Koss', 'klein.kristoffer@example.org', NULL, '+6644867639836', 'F', 25, '001a69570b123df25c7353a921b1c34d.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '7mDEqclGM6', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (4, 'Riley Gutmann', 'Dicki', 'yernser@example.com', NULL, '+7995997032608', 'F', 50, 'fef3bd96e80e948b49b4c199b2369d52.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'K8jr7XWYBE', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (5, 'Oleta Becker', 'Will', 'rcorwin@example.net', NULL, '+7955951761488', 'F', 21, 'b7e0119cf58cf40754c76e253c8317da.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'rP0AzwDaUi', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (6, 'Eryn Flatley', 'Gleichner', 'thiel.gianni@example.com', NULL, '+4227346415405', 'M', 37, '4d42f51d4a7a5d1f4302d1894481df78.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'd5f6fgV7uO', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (7, 'Valerie Runolfsdottir', 'Christiansen', 'aditya62@example.com', NULL, '+8022827856328', 'M', 35, '55fe68a3e2f821ff8742ba8b6c148614.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Kz5asqlH6I', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (8, 'London Ortiz', 'Marvin', 'julian.weimann@example.com', NULL, '+6347064572084', 'M', 39, '693ee94c12c89406aa5e808587e81fe7.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'eUk4tKdcAf', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (9, 'Reta Rodriguez', 'Schamberger', 'kuvalis.macy@example.org', NULL, '+5007185067146', 'M', 21, '2ae27e8af336a4e75c1b2614a17a9097.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '8tl08Xcr8c', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (10, 'Mr. Larue Satterfield', 'Rolfson', 'blick.gennaro@example.net', NULL, '+9710826918544', 'F', 20, 'cdf95d557fd564de2e61ecf639e3e297.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'HtfvGW8Nwg', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (11, 'Franz Blick', 'Fisher', 'zcremin@example.com', NULL, '+5343498839527', 'F', 35, '2f9d49e98ac225cae3bcb8699df91f1e.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'OYrulvP9uA', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (12, 'Julianne Cartwright', 'Swaniawski', 'daniel.isabel@example.net', NULL, '+2056051022035', 'F', 25, '55862bbc902299b07858b11625d49afb.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'VkchZUlJQa', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (13, 'Kayleigh Stracke', 'Wilderman', 'weber.alexandre@example.com', NULL, '+2506247956824', 'M', 27, '72f93e4aa3a17a81d30a54d8825d9053.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Gx7PWMr1Rf', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (14, 'Esther Lubowitz', 'Simonis', 'juana.muller@example.org', NULL, '+7492645697973', 'F', 41, 'ae4e43a4182aced4b722202ec3904e62.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '4cgi7uK5uu', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (15, 'Ms. Sonya Kozey', 'Champlin', 'stamm.alf@example.net', NULL, '+6983592624033', 'F', 26, '8a09da2cdea18c95156771e5fab89a48.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '48U5PfjaQd', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (16, 'Mrs. Janet Paucek', 'Schmidt', 'nikolaus.roscoe@example.com', NULL, '+1345188817177', 'F', 33, '8ca08f6597b4417c599d2960555b455b.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ZoHGwLkK8F', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (17, 'Arielle Jaskolski', 'Thiel', 'jeremie.runte@example.net', NULL, '+6446580957519', 'F', 33, '9deccb3acdcc948f51a5897342cec009.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'WIUCQKoufU', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (18, 'Dr. Helene Wyman', 'Satterfield', 'ruecker.bethany@example.org', NULL, '+5394871257610', 'F', 41, 'f3c3f235d598ce4f59e46723fe05abca.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'mmmpFSj2oS', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (19, 'Kaylah Pacocha', 'Strosin', 'vtoy@example.org', NULL, '+1208101928774', 'F', 21, 'e8547a58e57e3d4fce70c833b50e93f5.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'd5cpZiSkCw', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (20, 'Austin Cruickshank', 'Schroeder', 'julie.hodkiewicz@example.net', NULL, '+2905445395713', 'M', 49, '4957942f3b21a84b602c3b9ea63c72d1.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'xj4H1nZvtU', '2018-12-13 05:55:40', '2018-12-13 05:55:40');
INSERT INTO `users` VALUES (21, 'Jaunita Spinka', 'Von', 'javier46@example.org', NULL, '+4934805808525', 'M', 29, 'b00fef037703b934092fa297083ee32f.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '58yUeFVylJ', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (22, 'Prof. Catharine Bashirian MD', 'DuBuque', 'janis09@example.net', NULL, '+6681610768311', 'M', 46, '865d3d03c31230ca6745137089e18473.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'lNBefDUMEP', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (23, 'Jacinthe Kessler', 'Nikolaus', 'rwindler@example.com', NULL, '+7661542527387', 'F', 47, '529d7ea45b122aeba528344b8c012539.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'L2L4jxi8N1', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (24, 'Bo Ledner I', 'Volkman', 'kihn.tressa@example.net', NULL, '+4325167359282', 'M', 41, 'f4a22360552f15734aad12260754d497.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '3esjuOzHFs', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (25, 'Stuart Considine', 'Kunde', 'delbert.kovacek@example.org', NULL, '+5057842294218', 'M', 48, '7820ca441ef8649dd276b85fedfa3108.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'SSFjJsFZH6', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (26, 'Shayna Dicki', 'Sawayn', 'christiansen.kellen@example.net', NULL, '+6427775925876', 'M', 30, '1c85bb3a3b59e578693f6708488c5adc.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'F4M426h0Xo', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (27, 'Chauncey Hudson DVM', 'Quigley', 'lorenzo67@example.com', NULL, '+7799092408369', 'M', 40, 'eaf2bfcbf8fd41b6815c52d52e20d7ca.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'kgkZPSVFDC', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (28, 'Hildegard Conn', 'Cormier', 'tyra.cormier@example.net', NULL, '+8659348520313', 'M', 34, 'ccd3b37555f6a3eb0267285481d6cbd4.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'NGTjfxFLvy', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (29, 'Dino Eichmann', 'Feil', 'mikayla15@example.org', NULL, '+1459892897982', 'F', 22, '3e3225ac55533084d84130a1b3797ab7.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'i22Zro4rOu', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
INSERT INTO `users` VALUES (30, 'Kaleb Lebsack', 'Koepp', 'wkris@example.org', NULL, '+8992650193292', 'M', 21, '575c300dc4a0db06d3050ad5632a5a04.jpg', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Y7ZwsD6kDS', '2018-12-13 05:55:41', '2018-12-13 05:55:41');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
