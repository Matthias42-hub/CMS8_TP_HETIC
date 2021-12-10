CREATE DATABASE monblog;

USE monblog;


CREATE TABLE `articles` (
  `id` int(1) DEFAULT NULL,
  `title` text,
  `content` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
