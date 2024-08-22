CREATE DATABASE IF NOT EXISTS `test-stend`;
USE `test-stend`;

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `items` (`name`, `description`) VALUES
('Item 1', 'Description of Item 1'),
('Item 2', 'Description of Item 2');