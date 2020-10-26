-- --------------------------------------------------------
-- Host :                       127.0.0.1
-- Server Version:           	8.0.14 - MySQL Community Server - GPL
-- Server OS:                	Win64
-- HeidiSQL Version:            9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export database's structure for from_sicily
CREATE DATABASE IF NOT EXISTS `from_sicily`
/*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `from_sicily`;
SET default_storage_engine=InnoDB;
ALTER DATABASE from_sicily CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- Export table's structure of from_sicily. article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `name` varchar(256) NOT NULL,
  `descriptionFR` varchar(2000) DEFAULT NULL,
  `descriptionIT` varchar(2000) DEFAULT NULL,
  `descriptionEN` varchar(2000) DEFAULT NULL,
  `price` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. article_ingredient
CREATE TABLE IF NOT EXISTS `article_ingredient` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `article` int unsigned NOT NULL, -- article
  `ingredient` int unsigned NOT NULL, -- ingredient
  `quantity` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. ingredient
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `name` varchar(256) NOT NULL,
  `origin` varchar(256) DEFAULT NULL,
  `customer` varchar(256) DEFAULT NULL,
  `quantity` float unsigned NOT NULL,
  `price` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. notice
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `user` int unsigned NOT NULL, -- user
  `score` tinyint unsigned NOT NULL,
  `comment` varchar(512) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. order
CREATE TABLE IF NOT EXISTS `order` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `user` int unsigned NOT NULL, -- user
  `type` varchar(20) NOT NULL,
  `delay` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. order_article
CREATE TABLE IF NOT EXISTS `order_article` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `order` int unsigned NOT NULL, -- order
  `article` int unsigned NOT NULL, -- article
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. reservation
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `user` int unsigned NOT NULL, -- user
  `location` varchar(20) NOT NULL,
  `nbGuests` tinyint unsigned NOT NULL,
  `delay` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. reservation_article
CREATE TABLE IF NOT EXISTS `reservation_article` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `reservation` int unsigned NOT NULL, -- reservation
  `article` int unsigned NOT NULL, -- article
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `privilege` tinyint unsigned NOT NULL DEFAULT 0,
  `pseudo` varchar(25) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int unsigned DEFAULT NULL,
  `password` varchar(65535) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. user_articleScore
CREATE TABLE IF NOT EXISTS `user_articleScore` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `user` int unsigned NOT NULL, -- user
  `article` int unsigned NOT NULL, -- article
  `score` tinyint unsigned NOT NULL,
  `comment` varchar(512) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Export table's structure of from_sicily. user_dislike
CREATE TABLE IF NOT EXISTS `user_dislike` (
  `id` int unsigned AUTO_INCREMENT NOT NULL,
  `user` int unsigned NOT NULL, -- user
  `article` int unsigned DEFAULT NULL, -- article
  `ingredient` int unsigned DEFAULT NULL, -- ingredient
  PRIMARY KEY (`id`)
);

ALTER TABLE `article_ingredient`
ADD FOREIGN KEY (`article`) REFERENCES `article`(`id`);
ALTER TABLE `article_ingredient`
ADD FOREIGN KEY (`ingredient`) REFERENCES `ingredient`(`id`);

ALTER TABLE `notice`
ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);

ALTER TABLE `order`
ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);

ALTER TABLE `order_article`
ADD FOREIGN KEY (`order`) REFERENCES `order`(`id`);
ALTER TABLE `order_article`
ADD FOREIGN KEY (`article`) REFERENCES `article`(`id`);

ALTER TABLE `reservation`
ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);

ALTER TABLE `reservation_article`
ADD FOREIGN KEY (`reservation`) REFERENCES `reservation`(`id`);
ALTER TABLE `reservation_article`
ADD FOREIGN KEY (`article`) REFERENCES `article`(`id`);

ALTER TABLE `user_articleScore`
ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);
ALTER TABLE `user_articleScore`
ADD FOREIGN KEY (`article`) REFERENCES `article`(`id`);

ALTER TABLE `user_dislike`
ADD FOREIGN KEY (`user`) REFERENCES `user`(`id`);
ALTER TABLE `user_dislike`
ADD FOREIGN KEY (`article`) REFERENCES `article`(`id`);
ALTER TABLE `user_dislike`
ADD FOREIGN KEY (`ingredient`) REFERENCES `ingredient`(`id`);

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
