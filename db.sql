-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.45 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных kohana
CREATE DATABASE IF NOT EXISTS `kohana` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `kohana`;


-- Дамп структуры для таблица kohana.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL COMMENT 'Заголовок',
  `category_id` int(10) unsigned NOT NULL COMMENT 'Категория',
  `content` text NOT NULL COMMENT 'Конент',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT 'Статус',
  PRIMARY KEY (`id`),
  KEY `FK_news_news_categories` (`category_id`),
  CONSTRAINT `FK_news_news_categories` FOREIGN KEY (`category_id`) REFERENCES `news_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COMMENT='Новости';

-- Дамп данных таблицы kohana.news: ~30 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `category_id`, `content`, `status`) VALUES
	(3, 'Третья новость', 2, 'Контент третьей новости', 0),
	(4, 'НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК Четвертая новость', 2, 'Контент четвертой новости', 1),
	(5, 'НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК Пятая новость', 2, 'Контент пятой новости', 1),
	(7, 'НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК НОВЫЙ ЗАГОЛОВОК 22121312322', 2, '', 1),
	(19, 'фывафыаыфваывафыв', 2, 'Это контент', 1),
	(20, 'Эывафыва', 4, 'Это контент', 0),
	(21, 'Это заголовокываываыфва', 3, 'Это контент', 1),
	(22, 'Это заголовок', 4, 'Это контент', 1),
	(23, 'фываыфваыаыва', 3, 'Это контент', 0),
	(24, 'ыфваыфваыва', 3, 'Это контент', 1),
	(25, '23412342134', 4, 'Это контент', 1),
	(26, 'Это заголовок', 2, 'Это контент', 0),
	(27, '23412342134', 3, 'Это контент', 1),
	(28, '123421342134', 4, 'Это контент', 1),
	(29, 'Это заголовок', 2, 'Это контент', 1),
	(30, 'Новая новость', 4, '123123', 1),
	(31, 'lkasjdfhlksjadhflkjasdfh', 2, '', 1),
	(32, 'lkasjdfhlksjadhflkjasdfh', 2, '', 1),
	(33, 'lkasjdfhlksjadhflkjasdfh', 2, '', 1),
	(34, 'lkasjdfhlksjadhflkjasdfh', 2, '', 1),
	(35, 'lkasjdfhlksjadhflkjasdfh', 2, '', 1),
	(36, '123123123', 2, '', 1),
	(37, '123123123', 2, '', 1),
	(38, '123123123', 2, '', 1),
	(39, '123123123', 2, '', 1),
	(40, '123123123', 2, '', 1),
	(41, '123123123', 2, '', 1),
	(42, '123123123', 2, '', 1),
	(43, '123123123', 2, '', 1),
	(44, '123123123123123', 2, '123123123123123123', 1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;


-- Дамп структуры для таблица kohana.news_categories
CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Заголовок',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='Категории новостей';

-- Дамп данных таблицы kohana.news_categories: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` (`id`, `title`) VALUES
	(2, 'Другая категория'),
	(3, 'Категория ТРИ'),
	(4, 'Категория ВАСЯ');
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;


-- Дамп структуры для таблица kohana.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL COMMENT 'Заголовок',
  `content` text NOT NULL COMMENT 'Контент',
  `url` varchar(200) NOT NULL COMMENT 'Ссылка',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT 'Статус',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Страницы';

-- Дамп данных таблицы kohana.pages: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `content`, `url`, `status`) VALUES
	(1, 'Первая страница', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pharetra pretium mauris in blandit. Ut commodo metus elit, quis rhoncus justo egestas eu. Nulla est dolor, hendrerit et turpis eu, egestas venenatis lectus. Proin faucibus arcu a ullamcorper eleifend. Donec urna erat, tempus eu eleifend in, euismod eu massa. Integer laoreet sem nibh, commodo bibendum nulla vulputate vitae. Nunc dolor magna, laoreet vestibulum elit a, feugiat ornare lorem. Cras fringilla est vitae posuere mattis. Sed placerat facilisis viverra. Fusce et est quis dolor vulputate condimentum. In et facilisis quam. Nam est quam, pellentesque non sodales sit amet, eleifend ac nisi.\r\nMaecenas laoreet ultrices ligula eget posuere. Sed ac consectetur augue. Vestibulum et neque at tortor vehicula fermentum sit amet eu ex. Mauris maximus arcu orci, eget ullamcorper justo ullamcorper et. Duis vel mauris non urna venenatis lacinia. Nullam tempus ornare ipsum in ultrices. Morbi et laoreet tortor. Donec euismod nunc id nulla tristique scelerisque. Nulla facilisi. Sed vulputate sapien vitae neque semper, vitae dictum metus scelerisque. Etiam bibendum neque mauris, nec pulvinar lorem rhoncus eget. Quisque sollicitudin porta odio consequat efficitur. Sed vel magna congue, tincidunt orci non, malesuada lorem. Phasellus nec nisl ultricies, tincidunt erat commodo, faucibus ipsum.\r\nPraesent accumsan id leo vitae semper. Sed suscipit dictum ante at venenatis. Donec dignissim consectetur accumsan. Quisque vel laoreet leo, a fermentum lorem. Donec aliquam neque a lorem eleifend malesuada. Cras ac magna imperdiet, accumsan nunc ac, pulvinar eros. Curabitur vel dapibus eros. Nunc nec augue urna. Curabitur imperdiet eget turpis id bibendum. Cras et felis massa. Nunc vehicula elit ac dui gravida, ac lacinia ante fringilla. Praesent faucibus et magna sit amet vulputate.\r\nPellentesque sollicitudin maximus est, at faucibus est ultricies non. Vivamus consectetur ultrices pharetra. Vivamus facilisis mattis vehicula. Nullam dapibus erat dignissim accumsan elementum. Pellentesque dignissim mollis sodales. Cras eu condimentum arcu. Mauris semper metus odio, sit amet lacinia metus suscipit non. Phasellus vehicula lacus eget metus malesuada varius. Integer lacinia, justo in tincidunt lacinia, quam tellus dapibus risus, ac mattis nibh nunc at magna. Nam justo nunc, dapibus in mi condimentum, consectetur sagittis orci. Morbi nisl libero, tincidunt at magna sed, viverra ornare nulla. Nam suscipit sapien vitae rutrum tristique. Sed vel urna urna. Duis venenatis rhoncus leo, ut iaculis metus feugiat sed.\r\nNullam porttitor turpis id dolor mollis, eget cursus sapien ultrices. Praesent eget nibh quis turpis congue ornare. Morbi rhoncus metus ut sem ultricies, quis egestas nisi iaculis. Curabitur varius sapien lacus. In hac habitasse platea dictumst. Morbi efficitur iaculis arcu, sed auctor risus sollicitudin vel. Suspendisse potenti. Vivamus tempus ultrices quam, sed gravida nisl rhoncus ac. Nunc porttitor, nisi sed pellentesque ornare, magna magna bibendum felis, vel faucibus massa magna a metus. Maecenas ullamcorper molestie velit. Nullam imperdiet nunc in tempor posuere. ', '', 1),
	(2, 'Вторая страница', 'consectetur adipiscing elit. Phasellus pharetra pretium mauris in blandit. Ut commodo metus elit, quis rhoncus justo egestas eu. Nulla est dolor, hendrerit et turpis eu, egestas venenatis lectus. Proin faucibus arcu a ullamcorper eleifend. Donec urna erat, tempus eu eleifend in, euismod eu massa. Integeron sodales sit amet, eleifend ac nisi.', '', 1),
	(3, 'Страница Васька', 'Тут был Вася', '', 1),
	(4, 'Новости', '', '/news', 1),
	(5, 'Пользователи', '', '/user', 1);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Дамп структуры для таблица kohana.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kohana.roles: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `description`) VALUES
	(1, 'login', 'Login privileges, granted after account confirmation'),
	(2, 'admin', 'Administrative user, has access to everything.');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Дамп структуры для таблица kohana.roles_users
CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kohana.roles_users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;


-- Дамп структуры для таблица kohana.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kohana.users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Дамп структуры для таблица kohana.user_tokens
CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kohana.user_tokens: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
