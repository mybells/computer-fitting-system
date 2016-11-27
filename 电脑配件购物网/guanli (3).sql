-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-12 10:21:47
-- 服务器版本： 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guanli`
--
CREATE DATABASE IF NOT EXISTS `guanli` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `guanli`;

-- --------------------------------------------------------

--
-- 表的结构 `gouwu`
--

DROP TABLE IF EXISTS `gouwu`;
CREATE TABLE IF NOT EXISTS `gouwu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `yonghu` varchar(20) NOT NULL,
  `商品名称` varchar(50) NOT NULL,
  `单价` varchar(10) NOT NULL,
  `数量` int(50) NOT NULL,
  `小计` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gouwu`
--

INSERT INTO `gouwu` (`id`, `yonghu`, `商品名称`, `单价`, `数量`, `小计`, `date`) VALUES
(1, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:28'),
(2, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:28'),
(3, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:29'),
(4, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:31'),
(5, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:22:37'),
(6, 'gao', 'Intel/英特尔 i7 6700 酷睿第6代cpu', '2249.0', 1, '2249.0', '2016-09-10 18:22:39'),
(7, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:24'),
(8, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:26'),
(9, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:27:27'),
(10, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:21:37'),
(45, '2', '三星曲面显示器 27寸 高清PS4液晶显示屏', '1399.0', 1, '1399.0', '2016-09-10 23:01:07'),
(46, '2', 'Intel/英特尔 i7 6700 酷睿第6代cpu', '2249.0', 1, '2249.0', '2016-09-10 23:01:23'),
(43, '2', '金士顿 台式机内存', '145.0', 1, '145.0', '2016-09-10 22:56:20'),
(44, '2', '金士顿 台式机内存', '145.0', 1, '145.0', '2016-09-10 22:56:29'),
(47, '2', '联想 地狱烈焰 14寸游戏电脑', '4500', 2, '9000', '2016-09-11 10:55:06'),
(50, '3', '联想 地狱烈焰 14寸游戏电脑', '4500', 1, '4500', '2016-09-11 14:19:25'),
(52, 'admin', '联想 地狱烈焰 14寸游戏电脑', '4500', 1, '4500', '2016-09-12 16:12:22'),
(53, 'admin', '联想 地狱烈焰 14寸游戏电脑', '4500', 1, '4500', '2016-09-12 16:27:29'),
(54, '2', '联想 地狱烈焰 14寸游戏电脑', '4500', 1, '4500', '2016-09-12 17:52:01');

-- --------------------------------------------------------

--
-- 表的结构 `gouwuche`
--

DROP TABLE IF EXISTS `gouwuche`;
CREATE TABLE IF NOT EXISTS `gouwuche` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `yonghu` varchar(20) NOT NULL,
  `商品名称` varchar(50) NOT NULL,
  `单价` varchar(20) NOT NULL,
  `数量` int(20) NOT NULL,
  `小计` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gouwuche`
--

INSERT INTO `gouwuche` (`id`, `yonghu`, `商品名称`, `单价`, `数量`, `小计`, `date`) VALUES
(38, 'ck1', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 07:14:08'),
(43, 'gao', '2249.0', '2249.0', 1, '2249.0', '2016-09-10 10:12:16'),
(44, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 10:12:26'),
(45, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 10:14:01'),
(46, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 18:19:35'),
(47, 'gao', '金士顿 台式机内存', '145.0', 1, '145.0', '2016-09-10 18:19:38'),
(42, 'gao', '1399.0', '1399.0', 1, '1399.0', '2016-09-10 10:12:13'),
(40, 'gao', '联想 地狱烈焰 14寸游戏电脑', '4500.0', 1, '4500.0', '2016-09-10 10:12:06'),
(41, 'gao', '19.9', '19.9', 1, '19.9', '2016-09-10 10:12:10'),
(50, '2', '金士顿 台式机内存', '145.0', 5, '725', '2016-09-10 21:26:23'),
(59, '2', '三星曲面显示器 27寸 高清PS4液晶显示屏', '1399.0', 3, '4197', '2016-09-10 23:01:17'),
(60, '2', '酷睿 i3cpu', '635.0', 4, '2540', '2016-09-10 23:01:21'),
(62, '3', '三星曲面显示器 27寸 高清PS4液晶显示屏', '1399', 3, '4197', '2016-09-11 14:19:37'),
(63, 'admin', '联想 地狱烈焰 14寸游戏电脑', '4500', 1, '4500', '2016-09-12 16:27:31');

-- --------------------------------------------------------

--
-- 表的结构 `guanliyuan`
--

DROP TABLE IF EXISTS `guanliyuan`;
CREATE TABLE IF NOT EXISTS `guanliyuan` (
  `name` varchar(20) NOT NULL,
  `mima` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `guanliyuan`
--

INSERT INTO `guanliyuan` (`name`, `mima`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dizhi` varchar(50) NOT NULL,
  `shouji` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `dizhi`, `shouji`) VALUES
(1, 'gao', '123', '', ''),
(2, 'ck1', '123', '', ''),
(3, 'ck2', '123', '', ''),
(4, 'ck3', '123', '', ''),
(5, 'ck4', '123', '', ''),
(6, '1', '1', '1', '1'),
(7, '2', '2', '2', '2'),
(8, '2', '2', '2', '2'),
(9, '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- 表的结构 `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `shangping` varchar(30) NOT NULL,
  `jiage` float NOT NULL,
  `tupian` varchar(20) NOT NULL,
  `shangpingxiangqing` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `search`
--

INSERT INTO `search` (`id`, `shangping`, `jiage`, `tupian`, `shangpingxiangqing`) VALUES
(1, '联想 台电笔记本电脑 英特尔X', 220, 'computer1.jpg', '台电笔记本电脑 12寸液晶显示屏 英特尔X处理器 4G+64G Linux+Win10双系统 巧克力键盘 USB3.0接口 光盘驱动'),
(2, '联想 地狱烈焰 14寸游戏电脑', 4500, 'computer2.jpg', '联想 地狱烈焰 14寸高分辨率显示屏 8G内存 超强游戏本'),
(3, 'htc 雷霆咆哮 15寸超爽电脑', 5150, 'computer3.jpg', 'htc 雷霆咆哮 14寸高分辨率显示屏 15寸液晶显示屏 8G内存 流畅超爽游戏本'),
(4, '牧马人2宏定义编程机械电竞游戏有线鼠标', 19.9, 'mouse01.jpg', '牧马人2 宏定义编程 机械电竞专业游戏有线鼠标 CF LOL 加重金属 可控呼吸灯'),
(5, '罗技 G300 宏定义编程鼠标', 131, 'mouse02.jpg', 'Logitech/罗技 G300 有线竞技游戏鼠标USB 炫彩可编程 LOL 守望先锋 9键 支持人体工程学'),
(6, '清华同方 无线鼠标 笔记本游戏办公', 26.9, 'mouse03.jpg', '清华同方 七彩炫光 可充电无线鼠标 电脑笔记本游戏办公无线鼠标 6键 USB 锂电池充电 支持人体工程学'),
(7, '三星曲面显示器 27寸 高清PS4液晶显示屏', 1399, 'view1.jpg', '三星曲面显示器27寸 C27F391FH 高清PS4液晶电脑屏幕超24 音频 HDMI VGA 可壁挂'),
(8, '苹果 MC007CH 27英寸宽屏显示器', 7500, 'view2.jpg', 'Apple/苹果 MC007CH 27英寸宽屏 LED Cinema Display显示器'),
(9, '索尼SONY 24英寸3D 液晶显示器', 1500, 'view3.jpg', '日本索尼SONY 24英寸 3D液晶显示器 PS3 游戏 HDMI 带喇叭 可壁挂'),
(10, '金士顿 台式机内存', 145, 'memory1.jpg', '金士顿 台式机内存DDR3 1333 4G三代内存条 兼容1600 2G 8G正品'),
(11, 'AData/威刚 万紫千红系列内存', 225, 'memory2.jpg', 'AData/威刚 万紫千红系列 台式机内存 DDR3 1600 8GB 单条 正品'),
(12, 'HP DELL原装内存 4G', 115, 'memory3.jpg', 'RA4G1600台式机 DDR3 1600 4GB HP科技 DELL原装内存 单条 全国联保'),
(13, 'Intel/英特尔 i7 6700 酷睿第6代cpu', 2249, 'cpu01.jpg', 'Intel/英特尔 i7 6700 四核八线程 主频3.4GHz 三级缓存8M 接口类型LGA1151 含风扇'),
(14, '酷睿 i3cpu', 635, 'cpu02.jpg', '酷睿 i3 6100 双核四线程 六代1151接口 主频3.7GHz'),
(15, 'AMD A8-7650k 盒装cpu', 445, 'cpu03.jpg', 'AMD A8-7650K 盒装四核CPU+六核CPU Socker FM2+/3.3GHz/Max 3.8GHz/4M缓存/28纳米/95W'),
(16, 'ddd', 3, 'ee', 'ee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
