-- --------------------------------------------------------
-- 主機:                           127.0.0.1
-- 伺服器版本:                        11.2.2-MariaDB - mariadb.org binary distribution
-- 伺服器作業系統:                      Win64
-- HeidiSQL 版本:                  12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 傾印 team_database 的資料庫結構
CREATE DATABASE IF NOT EXISTS `team_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `team_database`;

-- 傾印  資料表 team_database.activity 結構
CREATE TABLE IF NOT EXISTS `activity` (
  `Activity_ID` int(11) NOT NULL DEFAULT 0,
  `Date` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Activity_name` varchar(20) NOT NULL,
  `Application_number` int(11) NOT NULL,
  `Register_number` int(11) NOT NULL,
  `Absence_number` int(11) NOT NULL,
  `DriveLink_of_data` varchar(200) NOT NULL,
  `Type` tinyint(1) NOT NULL DEFAULT 0,
  `Photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Activity_ID`),
  UNIQUE KEY `Activity_ID` (`Activity_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.activity 的資料：~10 rows (近似值)
INSERT INTO `activity` (`Activity_ID`, `Date`, `Address`, `Activity_name`, `Application_number`, `Register_number`, `Absence_number`, `DriveLink_of_data`, `Type`, `Photo`) VALUES
	(1, '2022-12-13', '藏月弓道場', '新生賽', 3, 2, 1, 'https://www.thenet.com.tw', 1, '12.jpg'),
	(2, '2023-04-01', '藏月弓道場', '碧羽季', 5, 5, 0, 'https://www.facebook.com/profile.php?id=100057593313494', 1, '123.jpg'),
	(3, '2023-09-19', 'B1多功能教室', '新生茶會', 5, 5, 0, 'https://www.facebook.com/profile.php?id=100057593313494', 1, '111.jpg'),
	(4, '2023-09-26', 'B1多功能教室', '112年第一次社課', 11, 3, 1, 'https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D', 0, '121.jpg'),
	(5, '2023-10-03', 'B1多功能教室', '112年第二次社課', 11, 7, 0, 'https://dnn800.thenet.tw', 0, '100.jpg'),
	(6, '2023-10-10', 'B1多功能教室', '112年第三次社課', 11, 3, 2, 'https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D', 0, '113.jpg'),
	(7, '2023-10-17', 'B1多功能教室', '112年第四次社課', 11, 5, 1, 'https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D', 0, '151.jpg'),
	(8, '2024-01-20', 'B1多功能教室', '112年第五次社課', 11, 4, 2, 'https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D', 0, NULL),
	(9, '2024-02-01', 'B1多功能教室', '1112年第六次社課', 11, 5, 3, 'https://www.instagram.com/ntutnicekyudo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D', 0, NULL),
	(10, '2024-05-21', '藏月弓道場', '台日交流', 5, 2, 3, 'https://www.facebook.com/profile.php?id=100057593313494', 1, NULL);

-- 傾印  檢視 team_database.activity_class_data 結構
-- 建立臨時表格，以解決檢視依存性錯誤
CREATE TABLE `activity_class_data` (
	`Date` DATE NOT NULL,
	`Address` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Activity_name` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Application_number` INT(11) NOT NULL,
	`truecome` BIGINT(21) NOT NULL,
	`falsecome` BIGINT(21) NOT NULL,
	`nonregister` BIGINT(23) NOT NULL
) ENGINE=MyISAM;

-- 傾印  檢視 team_database.activity_data 結構
-- 建立臨時表格，以解決檢視依存性錯誤
CREATE TABLE `activity_data` (
	`Date` DATE NOT NULL,
	`Address` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Activity_name` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`DriveLink_of_data` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- 傾印  資料表 team_database.activity_notes 結構
CREATE TABLE IF NOT EXISTS `activity_notes` (
  `Activity_ID` int(11) NOT NULL DEFAULT 0,
  `User_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Payment_date` datetime DEFAULT NULL,
  `Payment_status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Activity_ID`,`User_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `activity_notes_ibfk_1` FOREIGN KEY (`Activity_ID`) REFERENCES `activity` (`Activity_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `activity_notes_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `member` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.activity_notes 的資料：~8 rows (近似值)
INSERT INTO `activity_notes` (`Activity_ID`, `User_ID`, `Date`, `Payment_date`, `Payment_status`) VALUES
	(1, 109590001, '2022-12-13', '2022-11-10 18:30:00', 1),
	(1, 109590003, '2022-12-13', '2022-11-10 19:03:00', 1),
	(1, 109590004, '2022-12-13', '2022-11-10 18:30:00', 1),
	(2, 109590001, '2023-04-01', '2023-03-19 18:30:00', 1),
	(2, 109590002, '2023-04-01', '2023-03-19 18:30:00', 1),
	(2, 109590003, '2023-04-01', '2023-03-19 18:30:00', 1),
	(2, 109590004, '2023-04-01', '2023-03-19 18:30:00', 1),
	(2, 109590010, '2023-04-01', '2023-03-19 18:30:00', 1);

-- 傾印  資料表 team_database.arrow_data 結構
CREATE TABLE IF NOT EXISTS `arrow_data` (
  `Object_ID` varchar(20) NOT NULL,
  `Length` int(11) NOT NULL DEFAULT 0,
  `Model` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Object_ID`),
  UNIQUE KEY `Object_ID` (`Object_ID`),
  CONSTRAINT `arrow_data_ibfk_1` FOREIGN KEY (`Object_ID`) REFERENCES `equipment_data` (`Object_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.arrow_data 的資料：~3 rows (近似值)
INSERT INTO `arrow_data` (`Object_ID`, `Length`, `Model`) VALUES
	('A1', 95, 2015),
	('A2', 100, 2015),
	('A3', 110, 2018);

-- 傾印  資料表 team_database.bow_data 結構
CREATE TABLE IF NOT EXISTS `bow_data` (
  `Object_ID` varchar(20) NOT NULL,
  `Brand_name` varchar(20) NOT NULL,
  `Length` varchar(20) NOT NULL DEFAULT '0',
  `Stress` int(11) NOT NULL DEFAULT 0,
  `Outer_fabric` varchar(20) DEFAULT '0',
  `Sack` varchar(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Object_ID`),
  UNIQUE KEY `Object_ID` (`Object_ID`),
  CONSTRAINT `bow_data_ibfk_1` FOREIGN KEY (`Object_ID`) REFERENCES `equipment_data` (`Object_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.bow_data 的資料：~5 rows (近似值)
INSERT INTO `bow_data` (`Object_ID`, `Brand_name`, `Length`, `Stress`, `Outer_fabric`, `Sack`) VALUES
	('B1', '橘', '並寸', 8, '綠弓捲布', '藍內袋'),
	('B2', '直心(大)', '二寸伸', 8, '綠弓捲布', '黑內袋'),
	('B3', '葵', '二寸伸', 9, '綠弓捲布', '深綠內袋'),
	('B4', '秋芳', '二寸伸', 15, '紅弓袋', '黃內袋'),
	('B5', '練心', '四寸伸', 10, '深藍弓捲布', '藍內袋');

-- 傾印  資料表 team_database.class_notes 結構
CREATE TABLE IF NOT EXISTS `class_notes` (
  `Class_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Is_attend` tinyint(1) NOT NULL DEFAULT 0,
  `Absence_reason` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Class_ID`,`User_ID`),
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `class_notes_ibfk_1` FOREIGN KEY (`Class_ID`) REFERENCES `activity` (`Activity_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `class_notes_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `member` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.class_notes 的資料：~29 rows (近似值)
INSERT INTO `class_notes` (`Class_ID`, `User_ID`, `Date`, `Is_attend`, `Absence_reason`) VALUES
	(3, 109590002, '2023-09-19', 1, NULL),
	(3, 109590003, '2023-09-19', 1, NULL),
	(3, 109590004, '2023-09-19', 1, NULL),
	(3, 111590001, '2023-09-19', 1, NULL),
	(3, 111590028, '2023-09-19', 1, NULL),
	(4, 109590001, '2023-09-26', 0, 'Sleeping'),
	(4, 109590002, '2023-09-26', 1, NULL),
	(4, 111590001, '2023-09-26', 1, NULL),
	(4, 111590002, '2023-09-26', 1, NULL),
	(5, 109590001, '2023-10-03', 1, NULL),
	(5, 109590002, '2023-10-03', 1, NULL),
	(5, 109590003, '2023-10-03', 1, NULL),
	(5, 111590001, '2023-10-03', 1, NULL),
	(5, 111590002, '2023-10-03', 1, NULL),
	(5, 111590003, '2023-10-03', 1, NULL),
	(5, 111590004, '2023-10-03', 1, NULL),
	(6, 109590001, '2023-10-10', 1, NULL),
	(6, 109590002, '2023-10-10', 1, NULL),
	(6, 111590001, '2023-10-10', 0, 'Sick'),
	(6, 111590002, '2023-10-10', 1, NULL),
	(6, 111590003, '2023-10-10', 0, 'Sleeping'),
	(7, 109590001, '2023-10-17', 1, NULL),
	(7, 109590002, '2023-10-17', 1, NULL),
	(7, 109590003, '2023-10-17', 0, 'Sick'),
	(7, 111590001, '2023-10-17', 1, NULL),
	(7, 111590002, '2023-10-17', 1, NULL),
	(7, 111590003, '2023-10-17', 1, NULL),
	(8, 123456789, '2024-01-08', 1, NULL),
	(8, 987654321, '2024-01-10', 0, '321321');

-- 傾印  資料表 team_database.damage 結構
CREATE TABLE IF NOT EXISTS `damage` (
  `Repair_ID` int(11) NOT NULL,
  `Object_ID` varchar(20) NOT NULL,
  `Status_description` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Repair_ID`),
  KEY `Object_ID` (`Object_ID`),
  CONSTRAINT `damage_ibfk_1` FOREIGN KEY (`Object_ID`) REFERENCES `equipment_data` (`Object_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `damage_ibfk_2` FOREIGN KEY (`Repair_ID`) REFERENCES `repair_order` (`Repair_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.damage 的資料：~8 rows (近似值)
INSERT INTO `damage` (`Repair_ID`, `Object_ID`, `Status_description`) VALUES
	(1, 'B3', 0),
	(4, 'B3', 1),
	(5, 'B3', 0),
	(7, 'B3', 0),
	(8, 'B3', 1),
	(9, 'A1', 1),
	(12, 'B1', 0),
	(13, 'B1', 0);

-- 傾印  資料表 team_database.equipment_data 結構
CREATE TABLE IF NOT EXISTS `equipment_data` (
  `Object_ID` varchar(20) NOT NULL,
  `Photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Object_ID`),
  UNIQUE KEY `Object_ID` (`Object_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.equipment_data 的資料：~12 rows (近似值)
INSERT INTO `equipment_data` (`Object_ID`, `Photo`) VALUES
	('A1', 'A1.jpg'),
	('A2', 'A2.jpg'),
	('A3', 'A3.jpg'),
	('B1', 'B1.jpg'),
	('B2', 'B2.jpg'),
	('B3', 'B3.jpg'),
	('B4', 'B4.jpg'),
	('B5', 'B5.jpg'),
	('C1', 'C1.jpg'),
	('C2', 'C2.jpg'),
	('C3', 'C3.jpg'),
	('C4', 'C4.jpg');

-- 傾印  資料表 team_database.glove_data 結構
CREATE TABLE IF NOT EXISTS `glove_data` (
  `Object_ID` varchar(20) NOT NULL,
  `Glove_size` varchar(20) NOT NULL,
  PRIMARY KEY (`Object_ID`),
  UNIQUE KEY `Object_ID` (`Object_ID`),
  CONSTRAINT `glove_data_ibfk_1` FOREIGN KEY (`Object_ID`) REFERENCES `equipment_data` (`Object_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.glove_data 的資料：~4 rows (近似值)
INSERT INTO `glove_data` (`Object_ID`, `Glove_size`) VALUES
	('C1', 'S'),
	('C2', 'M'),
	('C3', 'ML'),
	('C4', 'L');

-- 傾印  資料表 team_database.member 結構
CREATE TABLE IF NOT EXISTS `member` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Register_date` datetime DEFAULT NULL,
  `User_class` varchar(20) DEFAULT NULL,
  `Permission` int(11) NOT NULL DEFAULT 0,
  `Draw_Length` int(11) DEFAULT NULL,
  `Glove_size` varchar(20) DEFAULT NULL,
  `Shitagake_size` varchar(20) DEFAULT NULL,
  `Photo` varchar(200) DEFAULT '',
  `Pw` varchar(50) NOT NULL,
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.member 的資料：~12 rows (近似值)
INSERT INTO `member` (`User_ID`, `User_Name`, `Register_date`, `User_class`, `Permission`, `Draw_Length`, `Glove_size`, `Shitagake_size`, `Photo`, `Pw`) VALUES
	(109590001, '陳零壹', '2021-09-12 19:03:07', '資訊工程系', 1, 91, 'L', 'big', '212.jpg', ''),
	(109590002, '陸零二', '2021-09-12 19:03:07', '資訊工程系', 0, 81, 'M', 'medium', '213.jpg', ''),
	(109590003, '杜陵三', '2021-09-12 19:03:07', '資訊工程系', 1, 87, 'ML', 'medium', '233.jpg', ''),
	(109590004, '林零四', '2021-09-12 19:03:07', '資訊工程系', 1, 94, 'L', 'big', '321.jpg', ''),
	(109590010, '陳大名', '2021-09-12 19:03:07', '資訊工程系', 1, 88, 'ML', 'medium', '215.jpg', ''),
	(111590001, '顏廷雨', '2023-09-19 18:40:31', '資訊工程系', 0, 86, 'ML', 'medium', '216.jpg', ''),
	(111590002, '翁香珍', '2023-09-19 18:45:22', '資訊工程系', 0, 83, 'M', 'small', '217.jpg', ''),
	(111590003, '賴上停', '2023-09-19 19:00:42', '資訊工程系', 0, 90, 'L', 'medium', '228.jpg', ''),
	(111590004, '吳豪資', '2023-09-19 19:21:00', '資訊工程系', 0, 98, 'L', 'big', '229.jpg', ''),
	(111590028, '王曉明', '2023-09-19 19:04:06', '資訊工程系', 0, 84, 'S', 'small', '230.jpg', ''),
	(123456789, '幹部', '2023-12-30 16:10:51', '資訊工程系', 1, 91, 'L', 'big', '', '123'),
	(987654321, '社員', '2024-01-08 22:19:25', '資訊工程系', 0, NULL, NULL, NULL, '', '321');

-- 傾印  資料表 team_database.personal_practice_status 結構
CREATE TABLE IF NOT EXISTS `personal_practice_status` (
  `User_ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Practice_hall` varchar(20) NOT NULL,
  `Distance` varchar(20) DEFAULT NULL,
  `Number_of_practice` int(11) DEFAULT NULL,
  `Number_of_hits` int(11) DEFAULT NULL,
  KEY `User_ID` (`User_ID`),
  CONSTRAINT `personal_practice_status_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `member` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.personal_practice_status 的資料：~9 rows (近似值)
INSERT INTO `personal_practice_status` (`User_ID`, `Date`, `Practice_hall`, `Distance`, `Number_of_practice`, `Number_of_hits`) VALUES
	(109590010, '2022-10-19', 'B1多功能教室', '15m', 16, 7),
	(109590010, '2022-10-22', 'B1多功能教室', '15m', 16, 9),
	(109590010, '2022-10-25', 'B1多功能教室', '15m', 30, 11),
	(109590010, '2022-11-08', 'B1多功能教室', '15m', 8, 2),
	(109590010, '2022-11-22', 'B1多功能教室', '15m', 12, 6),
	(109590010, '2022-10-19', 'B1多功能教室', '15m', 16, 7),
	(111590028, '2023-12-26', 'B1多功能教室', '1m', 4, 4),
	(109590010, '2023-12-26', 'B1多功能教室', '15m', 16, 12),
	(123456789, '2024-01-11', 'B1多功能教室', '15m', 10, 2);

-- 傾印  檢視 team_database.personal_prectice_data 結構
-- 建立臨時表格，以解決檢視依存性錯誤
CREATE TABLE `personal_prectice_data` (
	`User_ID` INT(11) NOT NULL,
	`User_Name` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Date` DATE NOT NULL,
	`Practice_hall` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Distance` VARCHAR(20) NULL COLLATE 'utf8mb4_general_ci',
	`Number_of_practice` INT(11) NULL,
	`Number_of_hits` INT(11) NULL
) ENGINE=MyISAM;

-- 傾印  資料表 team_database.repair_order 結構
CREATE TABLE IF NOT EXISTS `repair_order` (
  `Repair_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Object_ID` varchar(20) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Object_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Repair_ID`),
  UNIQUE KEY `Repair_ID` (`Repair_ID`),
  KEY `Repair_Object_ID` (`Object_ID`),
  KEY `Repair_User_ID` (`User_ID`),
  CONSTRAINT `repair_order_ibfk_1` FOREIGN KEY (`Object_ID`) REFERENCES `equipment_data` (`Object_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `repair_order_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `member` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- 正在傾印表格  team_database.repair_order 的資料：~8 rows (近似值)
INSERT INTO `repair_order` (`Repair_ID`, `Object_ID`, `User_ID`, `Date`, `Object_description`) VALUES
	(1, 'B3', 123456789, '2024-01-01 15:44:43', ''),
	(4, 'B3', 109590001, '2023-01-28 20:00:01', NULL),
	(5, 'B3', 123456789, '2024-01-01 15:52:17', NULL),
	(7, 'B1', 123456789, '2024-01-01 17:53:28', ''),
	(8, 'B3', 123456789, '2024-01-01 18:01:59', '1231231232123213'),
	(9, 'A1', 123456789, '2024-01-01 22:32:16', '有幾根壞掉了'),
	(12, 'B1', 123456789, '2024-01-08 22:17:41', '12346587'),
	(13, 'B1', 123456789, '2024-01-10 19:24:33', '123456789');

-- 傾印  檢視 team_database.activity_class_data 結構
-- 移除臨時表格，並建立最終檢視結構
DROP TABLE IF EXISTS `activity_class_data`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `activity_class_data` AS SELECT DATE AS Date, Address, Activity_name, Application_number, ifnull(b.cnt, 0) AS truecome, ifnull(a.cnt, 0) AS falsecome, (Application_number - (ifnull(b.cnt, 0) + ifnull(a.cnt, 0))) AS nonregister
FROM activity aaa
left JOIN (SELECT class_ID,Is_attend, COUNT(*) AS cnt FROM `class_notes` WHERE Is_attend = 0 GROUP BY class_ID, Is_attend) a
ON aaa.Activity_ID = a.class_ID
left JOIN (SELECT class_ID,Is_attend, COUNT(*) AS cnt FROM `class_notes` WHERE Is_attend = 1 GROUP BY class_ID, Is_attend) b
ON aaa.Activity_ID = b.class_ID 
WHERE aaa.`Type` = 0
ORDER BY DATE DESC ;

-- 傾印  檢視 team_database.activity_data 結構
-- 移除臨時表格，並建立最終檢視結構
DROP TABLE IF EXISTS `activity_data`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `activity_data` AS SELECT DATE AS Date, Address, Activity_name, DriveLink_of_data
FROM activity
ORDER BY DATE DESC ;

-- 傾印  檢視 team_database.personal_prectice_data 結構
-- 移除臨時表格，並建立最終檢視結構
DROP TABLE IF EXISTS `personal_prectice_data`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `personal_prectice_data` AS SELECT pps.User_ID, m.User_Name, pps.Date, pps.Practice_hall, pps.Distance, pps.Number_of_practice, pps.Number_of_hits
FROM (personal_practice_status pps natural join member m)
ORDER BY pps.User_ID ASC, pps.Date DESC ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
