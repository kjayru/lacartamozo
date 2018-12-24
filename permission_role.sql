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

 Date: 18/12/2018 10:49:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
BEGIN;
INSERT INTO `permission_role` VALUES (1, 1, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (2, 2, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (3, 3, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (4, 4, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (5, 5, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (6, 6, 1, '2018-12-08 23:14:04', '2018-12-08 23:14:09');
INSERT INTO `permission_role` VALUES (7, 7, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (8, 8, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (9, 9, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (11, 10, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (12, 11, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (13, 12, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (14, 13, 1, NULL, NULL);
INSERT INTO `permission_role` VALUES (15, 14, 1, NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
