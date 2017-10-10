-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 10 朁E10 日 21:00
-- サーバのバージョン： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shin_expense`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `monthly_contribution`
--

CREATE TABLE IF NOT EXISTS `monthly_contribution` (
  `monthly_contribution_id` int(121) NOT NULL AUTO_INCREMENT,
  `income_id` int(121) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`monthly_contribution_id`),
  UNIQUE KEY `income_id` (`income_id`,`user_id`),
  UNIQUE KEY `income_id_2` (`income_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
