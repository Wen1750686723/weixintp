-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 02 日 09:43
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
-- 表的结构 `weixintp_resource`
--

CREATE TABLE IF NOT EXISTS `weixintp_resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '资源表',
  `href` varchar(128) NOT NULL COMMENT '图片在服务器的位置',
  `type` varchar(16) NOT NULL,
  `media_id` varchar(64) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `weixintp_resource`
--

INSERT INTO `weixintp_resource` (`id`, `href`, `type`, `media_id`, `createtime`) VALUES
(1, 'E:\\www\\weixintp\\Public\\images/bg_passbox.png', 'image', 'FOTCQEaLansHUFGmOJ6i-j07CTaivgnZDCqqiJ5YbHxIFXyXNFQuESkoZQZ3Xa6V', 1433237065),
(2, 'E:\\www\\weixintp\\Public\\img/logo.png', 'image', 'DW7-rHfXT_3XTUvN4NcmSr7W7ircxLLSynfwhzNV-V_kLe2qQOv4SvKwG7OGIrhe', 1433238062);

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
('h6d9u58lamh63k5n2k0iuod7d4', 1433239503, 0x746f6b656e7c733a3130373a2261394945374647474679765f417442475456714e7a7a4433506a58362d4a50322d2d324d4e674d50747069486c326b44416c306c7a452d584b4d2d683352397830307337577a6975303048544f6f41476a657366776a424965446438504a74754c686b32623631714e4f41223b),
('ns26a3q4j8lb4lokamirbbrvo7', 1433238505, 0x746f6b656e7c733a3130373a223335706f5f655548644f5f42364a7a4b412d46596a314d6979694f4c5379554f5259796f785536506c6a43486c30344f6746705a466c76554b63667730463257414b52674b4f5959487769392d786d4c6b364d6b736875743548764b4969574452345166477778564d3345223b);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
