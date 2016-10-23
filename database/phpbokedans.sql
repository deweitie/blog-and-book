-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 05 月 24 日 15:11
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phpbokedans`
--

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(2, 'a', 'a', '超级管理员', '2016-03-05 10:51:02');

-- --------------------------------------------------------

--
-- 表的结构 `dx`
--

CREATE TABLE IF NOT EXISTS `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `dx`
--

INSERT INTO `dx` (`ID`, `leibie`, `content`, `addtime`) VALUES
(1, '系统简介', '5', '2016-03-05 10:51:02'),
(2, '系统公告', '52016-03-05 10:51:02', '2016-03-05 10:51:02');

-- --------------------------------------------------------

--
-- 表的结构 `gerenwenzhang`
--

CREATE TABLE IF NOT EXISTS `gerenwenzhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(300) DEFAULT NULL,
  `neirong` text,
  `fujian` varchar(50) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `gerenwenzhang`
--

INSERT INTO `gerenwenzhang` (`id`, `biaoti`, `neirong`, `fujian`, `faburen`, `addtime`, `issh`) VALUES
(3, '2', '2', 'uploadfile/4.zip', '555', '2016-03-05 10:51:02', '是'),
(4, '2', '2', '', '555', '2016-03-05 10:51:02', '是'),
(5, '2', '2', '', '555', '2016-03-05 10:51:02', '是');

-- --------------------------------------------------------

--
-- 表的结构 `liuyanban`
--

CREATE TABLE IF NOT EXISTS `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `liuyanban`
--


-- --------------------------------------------------------

--
-- 表的结构 `rizhileibie`
--

CREATE TABLE IF NOT EXISTS `rizhileibie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=21 ;

--
-- 导出表中的数据 `rizhileibie`
--

INSERT INTO `rizhileibie` (`id`, `leibie`, `addtime`) VALUES
(19, 'hao', '2016-05-24 15:49:40'),
(20, 'news', '2016-05-24 15:49:46');

-- --------------------------------------------------------

--
-- 表的结构 `rizhixinxi`
--

CREATE TABLE IF NOT EXISTS `rizhixinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(50) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `tupian` varchar(50) DEFAULT NULL,
  `jianjie` text,
  `jiage` varchar(50) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=25 ;

--
-- 导出表中的数据 `rizhixinxi`
--

INSERT INTO `rizhixinxi` (`id`, `bianhao`, `mingcheng`, `leibie`, `tupian`, `jianjie`, `jiage`, `faburen`, `addtime`, `issh`) VALUES
(18, '001', '4', '4', 'uploadfile/1.jpg', '介绍', '198', '管理员', '2016-03-08 10:51:02', '否'),
(19, '002', '4', '4', 'uploadfile/2.jpg', '介绍', '268', '管理员', '2016-03-08 10:51:02', '否'),
(20, '003', '4', '4', 'uploadfile/3.jpg', '介绍', '145', '管理员', '2016-03-08 10:51:02', '否'),
(21, '004', '4', '4', 'uploadfile/3.jpg', '介绍', '158', '管理员', '2016-03-08 10:51:02', '否'),
(22, 'gewgwe', '4', '4', 'uploadfile/4.jpg', '介绍', '22', '管理员', '2016-03-08 10:51:02', '是'),
(23, '3333333333333333333', '4', '4', '', '33333333333333333333', '33', 'a', '2016-03-27 22:48:15', '是'),
(24, '2', '4', '4', 'uploadfile/13.jpg', '2222', '2', 'a', '2016-05-17 01:14:43', '否');

-- --------------------------------------------------------

--
-- 表的结构 `xinwentongzhi`
--

CREATE TABLE IF NOT EXISTS `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET gb2312 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `neirong` text CHARACTER SET gb2312,
  `tianjiaren` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  `issh` varchar(10) CHARACTER SET gb2312 DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- 导出表中的数据 `xinwentongzhi`
--

INSERT INTO `xinwentongzhi` (`id`, `biaoti`, `leibie`, `neirong`, `tianjiaren`, `addtime`, `shouyetupian`, `dianjilv`, `issh`) VALUES
(48, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/1.jpg', 3, '否'),
(49, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/2.jpg', 4, '是'),
(50, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/3.jpg', 2, '是'),
(51, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/1.jpg', 8, '否'),
(52, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/2.jpg', 6, '否'),
(63, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/1.jpg', 3, '否'),
(64, '4', 'mynews', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/2.jpg', 6, '否'),
(65, '4', '4', 'mynews', 'a', '2016-03-05 10:37:34', 'uploadfile/3.jpg', 18, '否'),
(66, '4', 'mynews', 'mynews', 'a', '2016-05-17 01:12:21', '', 2, '否'),
(67, '4', 'mynews', 'mynews', 'a', '2016-05-17 01:13:00', '', 2, '否'),
(68, '4', 'mynews', 'mynews', 'a', '2016-05-17 01:15:20', '', 9, '否'),
(69, 'mynews', 'mynews', 'mynews', 'a', '2016-05-24 15:55:01', '', 5, '否');

-- --------------------------------------------------------

--
-- 表的结构 `yonghuzhuce`
--

CREATE TABLE IF NOT EXISTS `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  `cx` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `yonghuzhuce`
--

INSERT INTO `yonghuzhuce` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `diqu`, `Email`, `zhaopian`, `addtime`, `issh`, `cx`) VALUES
(26, 'c', 'c', 'c', '男', '浙江', 'c@qq.com', 'uploadfile/14.jpg', '2016-03-05 10:37:34', '是', '会员');

-- --------------------------------------------------------

--
-- 表的结构 `youqinglianjie`
--

CREATE TABLE IF NOT EXISTS `youqinglianjie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) DEFAULT NULL,
  `wangzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=21 ;

--
-- 导出表中的数据 `youqinglianjie`
--

INSERT INTO `youqinglianjie` (`id`, `wangzhanmingcheng`, `wangzhi`, `addtime`) VALUES
(16, '百度', 'http://www.baidu.com', '2016-04-25 19:49:15'),
(17, '谷歌', 'http://www.google.cn', '2016-04-25 19:49:15'),
(18, '新浪', 'http://www.sina.com', '2016-04-25 19:49:15'),
(19, 'QQ', 'http://www.qq.com', '2016-04-25 19:49:15'),
(20, '网易', 'http://www.163.com', '2016-04-25 19:49:15');
