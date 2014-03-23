SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `changelog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `changelog`;

CREATE TABLE IF NOT EXISTS `changes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` set('a','f','r') NOT NULL DEFAULT 'a',
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;