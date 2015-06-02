-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 02 日 08:49
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `weixintp`
--

-- --------------------------------------------------------

--
-- 表的结构 `weixintp_session`
--

CREATE TABLE IF NOT EXISTS `weixintp_session` (
  `session_id` varchar(255) NOT NULL COMMENT 'session表',
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weixintp_session`
--

INSERT INTO `weixintp_session` (`session_id`, `session_expire`, `session_data`) VALUES
('s4rci5bkh0jb95fb48btjukn62', 1433236063, 0x746f6b656e7c733a3130373a223473415a62364e4f516d38747a732d5f52696448737941435f4f5a697861752d356a4e485f70786a6446436b7366676a343069466b63733051596241343667307031415a31554751786578535579776f797a624646574445566b7979487149455f392d6168466667526959223b);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
