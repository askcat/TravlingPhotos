-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3308
-- 生成日期： 2020-09-05 05:33:15
-- 服务器版本： 8.0.18
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `myweb`
--
create database myweb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use myweb;

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

-- DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL DEFAULT 'guest',
  `gender` varchar(10) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_ro_0900_ai_ci;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `role`, `gender`) VALUES
(1, 'dxr35657', 'daxiongren', '1716702942@qq.com', 'admin', '男'),
(2, 'zhou', 'zhou..', '1716702942@qq.com', 'guest', '男');

-- --------------------------------------------------------

--
-- 表的结构 `imageres`
--

-- DROP TABLE IF EXISTS `imageres`;
CREATE TABLE IF NOT EXISTS `imageres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `audioid` int(10) NOT NULL,
  `description` text COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `path` varchar(1000) COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `count` int(10) NOT NULL,
  `location` text COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  `userid` int(10) NOT NULL,
  `position` text COLLATE utf8mb4_ro_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_ro_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
