-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 08 月 27 日 01:32
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bookinfo`
--
CREATE DATABASE IF NOT EXISTS `bookinfo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bookinfo`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `gdutbookss`
--

CREATE TABLE IF NOT EXISTS `gdutbookss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(225) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `author` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `press` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pressdate` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pages` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `keywords` varchar(225) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `total` int(12) NOT NULL,
  `lent` int(12) NOT NULL,
  `uploadtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `gdutbookss`
--

INSERT INTO `gdutbookss` (`id`, `bookid`, `name`, `type`, `author`, `press`, `pressdate`, `price`, `pages`, `keywords`, `total`, `lent`, `uploadtime`) VALUES
(6, 'A002A28', '哲学是什么', '哲学', '张富贵', '清华大学出版社', '2013-08', '30', '492', '哲学 张富贵', 3, 2, '2014-05-24'),
(7, 'A001B30', '论哲学之修养', '哲学', '刘明清', '电子工业出版社', '2011-02', '21', '201', '哲学 修养 刘明清', 4, 1, '2014-05-24'),
(9, 'B349F34', '经济是什么', '经济学', '李克强', '中南海出版社', '2014-02', '58', '357', '经济 李克强', 8, 3, '2014-05-24'),
(10, 'B403G32', '论中美经济的可持续', '经济学', '易志忠', '经济科学出版社', '2012-04', '42', '239', '中美经济 经济 可持续 易志忠', 5, 5, '2014-05-24'),
(11, 'T429C32', 'MySQL数据库', '计算机', '罗俊秀', '南方日报出版社', '2012-06', '38', '206', 'MySQL 数据库  罗俊秀', 8, 2, '2014-05-25'),
(12, 'I458B39', '生活的艺术', '文学', '林语堂', '湖南大学出版社', '1993-08', '38', '341', '生活 艺术 文学', 9, 0, '2014-05-25'),
(13, 'I481A49', '锵锵三人行', '文学', '窦文涛', '凤凰出版社', '2011-09', '23', '219', '锵锵三人行 窦文涛', 4, 0, '2014-05-25'),
(14, 'E582C59', '军事专家', '军事', '黄华华', '江西文化出版社', '1999-09', '21', '421', '军事 黄华华', 3, 1, '2014-05-25'),
(15, 'K847V87', '国家地理', '历史、地理', '单琳', '中国大百科全书出版社', '2009-07', '49', '378', '国家地理 单琳', 2, 1, '2014-05-25'),
(16, 'K381G39', '斯里兰卡', '历史、地理', '林妲', '中信出版社', '2008-12', '42', '312', '斯里兰卡 林妲', 3, 1, '2014-05-25'),
(17, 'K312B32', '自在台湾', '历史、地理', '马英九', '中国大百科全书出版社', '2009-08', '39', '312', '自在台湾 马英九', 4, 1, '2014-05-25');

-- --------------------------------------------------------

--
-- 表的结构 `gdutuser`
--

CREATE TABLE IF NOT EXISTS `gdutuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `unit` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `registerdate` date NOT NULL,
  `uploadtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `gdutuser`
--

INSERT INTO `gdutuser` (`id`, `category`, `userid`, `name`, `sex`, `password`, `unit`, `email`, `tel`, `address`, `registerdate`, `uploadtime`) VALUES
(8, '教师', '000023451', '陈绮贞', '女', 'e10adc3949ba59abbe56e057f20f883e', '管理学院', 'chenqizhen@gmail.com', '13728123481', '西区教师公寓B栋', '0000-00-00', '2014-05-23'),
(9, '教师', '000045632', '文章', '男', 'e10adc3949ba59abbe56e057f20f883e', '机电学院', 'wenzhang@gmail.com', '13832912812', '东区教师公寓A栋', '0000-00-00', '2014-05-24'),
(10, '学生', '3111001459', '许锦标', '男', 'e10adc3949ba59abbe56e057f20f883e', '自动化学院', 'xujingbiao@gmail.com', '13428312389', '西十四', '0000-00-00', '2014-05-24'),
(11, '学生', '3111001458', '谢晓聪', '男', 'e10adc3949ba59abbe56e057f20f883e', '自动化学院', 'xiexiaocong@gmail.com', '13456423321', '西十三', '0000-00-00', '2014-08-27'),
(12, '学生', '3111001461', '张可乐', '男', 'd41d8cd98f00b204e9800998ecf8427e', '自动化学院', 'zhangkele@gmail.com', '13751848253', '西十四', '2014-05-24', '2014-08-26'),
(13, '学生', '3111001457', '吴原杰', '男', 'e10adc3949ba59abbe56e057f20f883e', '自动化学院', 'wuyuanjie@gmail.com', '13424149485', '西十四', '2014-05-25', '2014-05-25'),
(14, '学生', '3211001468', '李湘儿', '女', 'e10adc3949ba59abbe56e057f20f883e', '自动化学院', 'lixianger@gmail.com', '13248379201', '东十二', '2014-05-25', '2014-05-25'),
(15, '教师', '000078472', '吴青峰', '男', 'e10adc3949ba59abbe56e057f20f883e', '外国语学院', 'wuqingfeng@gmail.com', '13842931849', '西七', '2014-05-25', '2014-05-25'),
(16, '学生', '3111001460', '叶勇发', '男', 'd41d8cd98f00b204e9800998ecf8427e', '自动化学院', 'yeyongfa@gmail.com', '18837291321', '西十四', '2014-05-25', '2014-08-26');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(225) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `tel`, `address`) VALUES
(1, 'smiling', '35204591ae1edf5074ab088ec7d67934', 'smiling@qq.com', '13011253665', '北京市丰台区万柳桥南'),
(2, 'xiaoma', '0f0fadae4575dc905b5a4e19e711d622', 'xiaoma@qq.com', '12364997997', '12364997997'),
(3, 'xiaoxiao', '0f0fadae4575dc905b5a4e19e711d622', 'xiaoxiao@qq.com', 'xiaoxiao', 'xiaoxiao'),
(4, 'nihao', '194ce5d0b89c47ff6b30bfb491f9dc26', 'nihao@qq.com', '13256321556', '33166'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', '455179635@qq.com', '18825182206', 'xishisi');

-- --------------------------------------------------------

--
-- 表的结构 `userlent`
--

CREATE TABLE IF NOT EXISTS `userlent` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `bookid` varchar(255) COLLATE utf8_bin NOT NULL,
  `bookname` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `author` varchar(255) COLLATE utf8_bin NOT NULL,
  `press` varchar(255) COLLATE utf8_bin NOT NULL,
  `userid` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `lentdate` date NOT NULL,
  PRIMARY KEY (`id`,`lentdate`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=196 ;

--
-- 转存表中的数据 `userlent`
--

INSERT INTO `userlent` (`id`, `bookid`, `bookname`, `type`, `author`, `press`, `userid`, `username`, `lentdate`) VALUES
(98, 'T429C32', 'MySQL数据库', '计算机', '罗俊秀', '南方日报出版社', '3111001460', '叶勇发', '2014-05-25'),
(99, 'A002A28', '哲学是什么', '哲学', '张富贵', '清华大学出版社', '3111001457', '吴原杰', '2014-05-25'),
(184, 'E582C59', '军事专家', '军事', '黄华华', '江西文化出版社', '3111001461', '张可乐', '2014-08-26'),
(185, 'K847V87', '国家地理', '历史、地理', '单琳', '中国大百科全书出版社', '3111001461', '张可乐', '2014-08-26'),
(186, 'I481A49', '锵锵三人行', '文学', '窦文涛', '凤凰出版社', '3111001461', '张可乐', '2014-08-26'),
(190, 'E582C59', '军事专家', '军事', '黄华华', '江西文化出版社', '3111001458', '谢晓聪', '2014-08-27'),
(191, 'K847V87', '国家地理', '历史、地理', '单琳', '中国大百科全书出版社', '3111001458', '谢晓聪', '2014-08-27'),
(194, 'K381G39', '斯里兰卡', '历史、地理', '林妲', '中信出版社', '3111001458', '谢晓聪', '2014-08-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
