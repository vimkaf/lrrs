/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `trongate_administrators` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(65) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `trongate_user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `trongate_comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_general_ci,
  `date_created` int DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `target_table` varchar(125) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `update_id` int DEFAULT NULL,
  `code` varchar(6) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `trongate_pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url_string` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_general_ci,
  `meta_description` text COLLATE utf8mb4_general_ci,
  `page_body` text COLLATE utf8mb4_general_ci,
  `date_created` int DEFAULT NULL,
  `last_updated` int DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `trongate_tokens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(125) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int DEFAULT '0',
  `expiry_date` int DEFAULT NULL,
  `code` varchar(3) COLLATE utf8mb4_general_ci DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `trongate_user_levels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `level_title` varchar(125) COLLATE utf8mb4_general_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `trongate_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_level_id` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `trongate_administrators` (`id`, `username`, `password`, `trongate_user_id`) VALUES
(1, 'admin', '$2y$11$SoHZDvbfLSRHAi3WiKIBiu.tAoi/GCBBO4HRxVX1I3qQkq3wCWfXi', 1);








INSERT INTO `trongate_user_levels` (`id`, `level_title`) VALUES
(1, 'admin');


INSERT INTO `trongate_users` (`id`, `code`, `user_level_id`) VALUES
(1, 'UkrXNDCf6Rqe8DJhPs43Cc8HecTB8BzJ', 1);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;