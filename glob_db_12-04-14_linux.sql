-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2014 at 07:02 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.6-1ubuntu1.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `FULL_NAME` varchar(40) NOT NULL,
  `DESIGNATION` varchar(50) NOT NULL,
  PRIMARY KEY (`ADMIN_ID`),
  UNIQUE KEY `user_id` (`ADMIN_ID`),
  UNIQUE KEY `user_id_2` (`ADMIN_ID`),
  UNIQUE KEY `user_id_3` (`ADMIN_ID`),
  UNIQUE KEY `user_id_4` (`ADMIN_ID`),
  UNIQUE KEY `user_id_5` (`ADMIN_ID`),
  UNIQUE KEY `ADMIN_ID` (`ADMIN_ID`),
  UNIQUE KEY `ADMIN_ID_2` (`ADMIN_ID`),
  UNIQUE KEY `ADMIN_ID_3` (`ADMIN_ID`),
  UNIQUE KEY `ADMIN_ID_4` (`ADMIN_ID`),
  UNIQUE KEY `ADMIN_ID_5` (`ADMIN_ID`),
  UNIQUE KEY `ADMIN_ID_6` (`ADMIN_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='urname:gaurav,pswd:iamadmin' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ADMIN_ID`, `USERNAME`, `PASSWORD`, `FULL_NAME`, `DESIGNATION`) VALUES
(1, 'gaurav', '21232f297a57a5a743894a0e4a801fc3', 'Gaurav Parmar', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `AD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POSTER_NAME` varchar(50) NOT NULL,
  `POSTER_EMAIL_ID` varchar(50) NOT NULL,
  `POSTER_CONTACT_NUMBER` varchar(10) NOT NULL,
  `PLACE_NAME` varchar(100) NOT NULL,
  `PLACE_ADDRESS` varchar(200) NOT NULL,
  `AD_TITLE` varchar(100) NOT NULL,
  `AD_CONTENT` varchar(1000) NOT NULL,
  `DATE_AND_TIME` varchar(50) NOT NULL,
  `TIMESTAMP` bigint(20) NOT NULL,
  PRIMARY KEY (`AD_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`AD_ID`, `POSTER_NAME`, `POSTER_EMAIL_ID`, `POSTER_CONTACT_NUMBER`, `PLACE_NAME`, `PLACE_ADDRESS`, `AD_TITLE`, `AD_CONTENT`, `DATE_AND_TIME`, `TIMESTAMP`) VALUES
(1, 'GAURAV PARMAR', 'gauravparmariam@gmail.com', '9479988064', 'ANNAPURNA SWEETS', 'SUDAMA NAGAR, NEAR FUTI KOTHI, INDORE-452009', 'GET NEW BAKERY ITEMS FROM ANNAPURNA SWEETS', 'Now you favorite Annapurna Sweets is having bakery items as well. So come here and get all.', 'Wed, 13-Mar-2013 00:00:03 AM', 1363132803),
(4, 'l;fdfd', 'l', 'l', 'l', 'N/A', 'df', 'fdf', 'Wed, 13-Mar-2013 00:05:33 AM', 1363133133),
(5, 'k', 'kk', 'kkk', 'kkkk', 'kkkkk', 'kkkkkk', 'oooooooooo', 'Wed, 13-Mar-2013 00:06:33 AM', 1363133193),
(6, 'dff''', 'dfdkl'' d''fdf''df      df''d ''d''f', 'kj', 'lkj', 'j', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDYDDDDDDDDDY', 'Wed, 13-Mar-2013 22:43:55 PM', 1363214635),
(7, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'Fri, 15-Mar-2013 23:26:45 PM', 1363390005),
(8, 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDY', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'aaaDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDD', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'Fri, 15-Mar-2013 23:26:50 PM', 1363390010),
(9, 'Gaurav Parmar', 'gauravparmariam@gmail.com', '9999999999', 'Gaurav Institute Of Technology', 'M.G. Road, Indore', 'Best College For B.Tech. In India', 'GIT has been declared as the best college in India for pursuing B.Tech. Hurry up! Get registered today.', 'Mon, 18-Mar-2013 22:27:27 PM', 1363645647);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `FEEDBACK_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULL_NAME` varchar(20) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `COMMENT` varchar(250) NOT NULL,
  `DATE_AND_TIME` varchar(50) NOT NULL,
  `TIMESTAMP` bigint(20) NOT NULL,
  PRIMARY KEY (`FEEDBACK_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`FEEDBACK_ID`, `FULL_NAME`, `EMAIL_ID`, `COMMENT`, `DATE_AND_TIME`, `TIMESTAMP`) VALUES
(5, 'Gaurav', 'gdfjdsfklj', 'This is my comment and this is the best.', 'Sun, 10-Mar-2013 16:55:29 PM', 1362934529),
(12, 'gp', 'kfjksdfjl@kdjfk', 'ldkfl;k', 'Sun, 10-Mar-2013 18:16:00 PM', 1362939360),
(14, 'u', 'u@fg', 'u', 'Sun, 10-Mar-2013 18:23:55 PM', 1362939835),
(15, 'gp', 'dfdf@fjd.com', 'djlfj', 'Mon, 11-Mar-2013 21:45:38 PM', 1363038338),
(16, 'gp', 'dfkj', 'this is a big comment and this can''t be posted in this blog. bla bla bla.you are amazing.', 'Mon, 11-Mar-2013 21:47:28 PM', 1363038448),
(17, 'df', 'df', 'fkdkf lk ;lfkdl lk;fk; kd;fkdkf;dksf;lkkkkkkkkkkkkk ldkfdlskf l;ksf;kdk l;dksfl;kfl;k ffffffffffffffffffffffffffffffffffffffffffffffffffffffffkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkfdlfkdk kdkflk lfkdfkl kfdsl;k lk sdkfdsk kdsk sdlkfl;sdkf;dksf lkkldk', 'Mon, 11-Mar-2013 21:50:17 PM', 1363038617),
(18, 'dfd', 'dfd', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddffffffffffffffffffffffffffffffffffffffffffffffgggggggggggggggggggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhddddd', 'Mon, 11-Mar-2013 22:00:44 PM', 1363039244),
(19, 'sdsd', 'sdsd', 'sdddddddddddddddsgf         dfgdfs;        dfkdfkdjfkd   dfjkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkhjjjjjjjjjhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh kkkkkkkkkkkkkkkdf hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhslllllllllllll hhhhhhhhhhhhhd kkkkk', 'Mon, 11-Mar-2013 22:02:02 PM', 1363039322),
(20, 'dfd', 'df', 'sfdffffffffffffff;             dfjdlkfjldkjf kjdkfjkllffffffffffffffffffffffffffffffffffffffffffffffffffffffffiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii;fjl;jfs.,.vvjkllllllllllllll/,/,./,fjsdklfjdlskjflkjdlf m,jkllllllllllllllllllllllllllllllllfeekkkkkkkkeee', 'Mon, 11-Mar-2013 22:16:43 PM', 1363040203),
(21, 'Gaurav', 'fsdf@fd.com', 'kfjdlkf', 'Mon, 18-Mar-2013 23:36:44 PM', 1363649804),
(22, 'Gaurav parmar', 'fsdff', 'dfffffffffffffffddfds fdsfdsf sdfd fdfffffffffffffffddfds fdsfdsf sdfd fdfffffffffffffffddfds fdsfdsf sdfd fdfffffffffffffffddfds fdsfdsf sdfd fdfffffffffffffffddfds fdsfdsf sdfd fdfffffffffffffffddfds fdsfdsf sdfd fdfffffffffffffffddfds fdsfdsf sdfd', 'Mon, 18-Mar-2013 23:37:12 PM', 1363649832),
(23, 'yo yo', 'd', 'sdjsk', 'Tue, 19-Mar-2013 19:56:37 PM', 1363722997),
(24, 'u', 'u', 'u', 'Tue, 19-Mar-2013 23:54:08 PM', 1363737248),
(25, ''' OR ''''=''', ''' OR ''''=''', ''' OR ''''=''', 'Tue, 19-Mar-2013 23:54:38 PM', 1363737278),
(26, 'g', 'g', 'g', 'Tue, 19-Mar-2013 23:54:54 PM', 1363737294),
(27, 'a', 'a', 'a', 'Tue, 30-Apr-2013 18:16:33 PM', 1367345793),
(28, 'p', 'p', 'p', 'Thu, 02-May-2013 10:30:02', 1367490602),
(30, 'k', 'k', 'k', 'Thu, 02-May-2013 10:30:34', 1367490634),
(31, 'k', 'k', 'k', 'Thu, 02-May-2013 11:25:03', 1367493903),
(32, 'a', 'a', 'a', 'Thu, 02-May-2013 23:34:51', 1367537691),
(33, 'Gaurav', 'gauravparmariam@gmail.com', 'Hi Gaurav. It''s a really nice website. I liked it a lot. Well done bro. Nice work. Keep it up!', 'Thu, 02-May-2013 23:36:14', 1367537774),
(34, 'niks', 'n@gmail.com', 'Hi niks', 'Wed, 08-May-2013 09:58:03', 1368007083),
(35, 'a', 'd', 'd', 'Sat, 11-May-2013 12:20:06', 1368274806),
(36, 'g', 'g', 'g', 'Sat, 11-May-2013 12:20:15', 1368274815),
(37, 'o', 'p', 'a', 'Sat, 11-May-2013 13:58:28', 1368280708),
(38, 'Deepak', 'dj@gmail.com', 'Hi gaurav', 'Sun, 12-May-2013 23:54:18', 1368402858),
(39, 'hhm', 'hm', 'hk', 'Tue, 14-May-2013 12:49:39', 1368535779),
(40, 'hhm', 'h', 'h', 'Tue, 14-May-2013 23:41:48', 1368574908),
(41, 'fd', 'f', 'idiot mad', 'Tue, 14-May-2013 23:50:57', 1368575457),
(42, 'd', 'f', 'mad idiot', 'Tue, 14-May-2013 23:51:26', 1368575486),
(43, 'd', 'd', 'mad', 'Tue, 14-May-2013 23:51:57', 1368575517),
(44, 's', 's', 'mad', 'Tue, 14-May-2013 23:55:31', 1368575731),
(45, 'd', 'd', 'mad', 'Tue, 14-May-2013 23:56:44', 1368575804),
(46, 'df', 'fd', 'mad', 'Tue, 14-May-2013 23:58:11', 1368575891),
(47, 'do', 'd', 'mad', 'Tue, 14-May-2013 23:58:58', 1368575938),
(48, 'df', 'd', 'mad', 'Wed, 15-May-2013 00:04:17', 1368576257),
(49, 'Gaurav', 'gauravparmariam@gmail.com', 'Hi Gaurav. It''s a very cool website.', 'Sun, 01-Dec-2013 09:18:01', 1385889481),
(50, 'ii', 'ii', 'ii', 'Fri, 07-Mar-2014 20:04:40', 1394222680),
(51, 'test', 'k', 'def', 'Tue, 11-Mar-2014 12:29:21', 1394540961),
(52, 'my n', 'my email@er.com', 'my c', 'Tue, 11-Mar-2014 12:30:52', 1394541052),
(53, 'my n', 'my email@er.com', 'my c', 'Tue, 11-Mar-2014 12:32:11', 1394541131),
(54, 'nfojo', 'edjifj@fe.com', 'c', 'Tue, 11-Mar-2014 12:32:56', 1394541176),
(55, 'k', 'k', 'd', 'Tue, 11-Mar-2014 12:37:24', 1394541444),
(56, 'ko', 'kok', 'd', 'Tue, 11-Mar-2014 12:45:31', 1394541931),
(57, 'Gaurav', 'gaurav@gmail.com', 'g', 'Tue, 11-Mar-2014 13:11:15', 1394543475),
(58, 'k', 'k', 'd', 'Tue, 11-Mar-2014 13:16:24', 1394543784),
(59, 'k', 'k', 'a', 'Tue, 11-Mar-2014 13:21:17', 1394544077),
(60, 'k', 'k', 'd', 'Tue, 11-Mar-2014 13:57:01', 1394546221),
(61, 'k', 'k', 'd', 'Tue, 11-Mar-2014 13:57:29', 1394546249),
(62, 'k', 'k', 'k', 'Tue, 11-Mar-2014 13:59:00', 1394546340),
(63, 'Gauav', 'gaurav@gmail.com', 'fkeopkoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooojjjjjjjjjjjjjjjjjjjjjjiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiipdffffffffffffffffffffffffffffffffffffffffffffffffffffseoo feojiojeo ij eio jjjjjjjjjjjjjjjjjjjjjjjjjjfjeofeoij oje ioj ij ojf', 'Tue, 11-Mar-2014 13:59:57', 1394546397),
(64, 'Gaurav Parmar', 'gauravparmariam@gmail.com', 'Awesome website. Good work. Keep it up!', 'Wed, 12-Mar-2014 02:03:56', 1394589836),
(65, 'jjjjjjjjjjjjjjj', 'N/A', 'jjjjjjjjjjjjjjjjjjjjjjjjj', 'Mon, 17-Mar-2014 11:00:03', 1395054003),
(66, 'Nishikant Parmar', 'N/A', 'It is a great website for me', 'Tue, 18-Mar-2014 12:10:51', 1395144651),
(67, 'Gaurav', 'gaurav@gmail.com', 'hello Rajat', 'Tue, 28-Jan-2014 11:16:41', 1390907801),
(68, 'kjlk', 'jk@jkj.com', 'dkl', 'Tue, 28-Jan-2014 11:17:42', 1390907862),
(69, 'rajat', 'jkl@gmal.com', 'hello', 'Fri, 28-Mar-2014 11:19:57', 1396005597),
(71, 'Niks', 'nishikantparmar123@gmail.com', 'Hello Niks', 'Mon, 07-Apr-2014 18:43:09', 1396896189),
(72, 'Hritik', 'hritik@jadu.com', 'New comment from Alien Planet. Let''s rock man!', 'Wed, 09-Apr-2014 18:33:52', 1397068432),
(73, 'Bill Gates', 'billgates@microsoft.com', 'Awesome efforts. Keep it up!', 'Sat, 12-Apr-2014 01:06:44', 1397264804),
(74, 'Mark Zukerberg', 'markz@facebook.com', 'Commendable performance. Will you work for me?', 'Sat, 12-Apr-2014 01:07:58', 1397264878),
(75, 'Bill Gates', 'billgates@microsoft.com', 'Awesome website! I have gone through this website and found that you have really worked hard for this man. Keep the good work going. Will you work with us? Come and join us. We shall pay you really high. Just think about it.', 'Sat, 12-Apr-2014 01:09:47', 1397264987);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(15) NOT NULL,
  `DATE_AND_TIME` varchar(50) NOT NULL,
  `TIMESTAMP` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `IP`, `DATE_AND_TIME`, `TIMESTAMP`) VALUES
(1, '127.0.0.1', 'Wed, 20-Mar-2013 01:11:41 AM', 1363741901),
(2, '127.0.0.1', 'Wed, 20-Mar-2013 01:12:10 AM', 1363741930),
(3, '127.0.0.1', 'Wed, 20-Mar-2013 01:22:32 AM', 1363742552),
(4, '127.0.0.1', 'Wed, 20-Mar-2013 01:32:38 AM', 1363743158),
(5, '127.0.0.1', 'Thu, 11-Apr-2013 16:35:30 PM', 1365698130),
(6, '127.0.0.1', 'Thu, 11-Apr-2013 16:35:55 PM', 1365698155),
(7, '127.0.0.1', 'Thu, 11-Apr-2013 16:38:12 PM', 1365698292),
(8, '127.0.0.1', 'Thu, 11-Apr-2013 23:00:40 PM', 1365721240),
(9, '127.0.0.1', 'Wed, 17-Apr-2013 22:00:12 PM', 1366236012),
(10, '127.0.0.1', 'Thu, 18-Apr-2013 21:25:10 PM', 1366320310),
(11, '127.0.0.1', 'Tue, 30-Apr-2013 15:54:15 PM', 1367337255),
(12, '127.0.0.1', 'Tue, 30-Apr-2013 15:54:41 PM', 1367337281),
(13, '127.0.0.1', 'Tue, 30-Apr-2013 16:32:11 PM', 1367339531),
(14, '127.0.0.1', 'Tue, 30-Apr-2013 17:42:28 PM', 1367343748),
(15, '127.0.0.1', 'Tue, 30-Apr-2013 17:55:07', 1367344507),
(16, '127.0.0.1', 'Tue, 30-Apr-2013 17:55:27', 1367344527),
(17, '127.0.0.1', 'Tue, 30-Apr-2013 17:58:57', 1367344737),
(18, '127.0.0.1', 'Tue, 30-Apr-2013 17:59:09', 1367344749),
(19, '127.0.0.1', 'Wed, 01-May-2013 20:51:58', 1367441518),
(20, '127.0.0.1', 'Wed, 01-May-2013 20:53:48', 1367441628),
(21, '127.0.0.1', 'Thu, 02-May-2013 10:21:03', 1367490063),
(22, '127.0.0.1', 'Thu, 02-May-2013 15:19:54', 1367507994),
(23, '127.0.0.1', 'Thu, 02-May-2013 17:02:00', 1367514120),
(24, '127.0.0.1', 'Thu, 02-May-2013 17:03:41', 1367514221),
(25, '127.0.0.1', 'Thu, 02-May-2013 22:22:09', 1367533329),
(26, '127.0.0.1', 'Thu, 02-May-2013 22:24:14', 1367533454),
(27, '127.0.0.1', 'Thu, 02-May-2013 22:25:02', 1367533502),
(28, '127.0.0.1', 'Thu, 02-May-2013 22:31:21', 1367533881),
(29, '127.0.0.1', 'Thu, 02-May-2013 22:33:06', 1367533986),
(30, '127.0.0.1', 'Thu, 02-May-2013 22:35:01', 1367534101),
(31, '127.0.0.1', 'Thu, 02-May-2013 22:38:53', 1367534333),
(32, '127.0.0.1', 'Thu, 02-May-2013 22:40:20', 1367534420),
(33, '127.0.0.1', 'Thu, 02-May-2013 22:43:23', 1367534603),
(34, '127.0.0.1', 'Thu, 02-May-2013 23:03:18', 1367535798),
(35, '127.0.0.1', 'Thu, 02-May-2013 23:04:32', 1367535872),
(36, '127.0.0.1', 'Thu, 02-May-2013 23:06:50', 1367536010),
(37, '127.0.0.1', 'Thu, 02-May-2013 23:07:57', 1367536077),
(38, '127.0.0.1', 'Thu, 02-May-2013 23:28:51', 1367537331),
(39, '127.0.0.1', 'Thu, 02-May-2013 23:40:58', 1367538058),
(40, '127.0.0.1', 'Thu, 02-May-2013 23:53:48', 1367538828),
(41, '127.0.0.1', 'Fri, 03-May-2013 00:29:53', 1367540993),
(42, '127.0.0.1', 'Fri, 03-May-2013 00:32:46', 1367541166),
(43, '127.0.0.1', 'Fri, 03-May-2013 23:28:30', 1367623710),
(44, '127.0.0.1', 'Sat, 04-May-2013 16:00:01', 1367683201),
(45, '127.0.0.1', 'Sat, 04-May-2013 22:10:25', 1367705425),
(46, '127.0.0.1', 'Sat, 04-May-2013 22:36:09', 1367706969),
(47, '127.0.0.1', 'Sat, 04-May-2013 22:41:34', 1367707294),
(48, '127.0.0.1', 'Wed, 08-May-2013 09:58:50', 1368007130),
(49, '127.0.0.1', 'Sat, 11-May-2013 13:28:15', 1368278895),
(50, '127.0.0.1', 'Sat, 11-May-2013 14:01:31', 1368280891),
(51, '127.0.0.1', 'Sun, 12-May-2013 23:53:10', 1368402790),
(52, '127.0.0.1', 'Mon, 13-May-2013 16:52:04', 1368463924),
(53, '127.0.0.1', 'Mon, 13-May-2013 17:59:22', 1368467962),
(54, '127.0.0.1', 'Tue, 14-May-2013 21:37:29', 1368567449),
(55, '127.0.0.1', 'Tue, 14-May-2013 22:59:04', 1368572344),
(56, '127.0.0.1', 'Tue, 14-May-2013 23:09:59', 1368572999),
(57, '127.0.0.1', 'Tue, 14-May-2013 23:12:44', 1368573164),
(58, '127.0.0.1', 'Tue, 14-May-2013 23:39:03', 1368574743),
(59, '127.0.0.1', 'Sun, 01-Dec-2013 09:14:55', 1385889295),
(60, '127.0.0.1', 'Sun, 01-Dec-2013 09:15:39', 1385889339),
(61, '127.0.0.1', 'Fri, 07-Mar-2014 20:11:25', 1394223085),
(62, '127.0.0.1', 'Fri, 07-Mar-2014 20:12:41', 1394223161),
(63, '127.0.0.1', 'Fri, 07-Mar-2014 23:54:03', 1394236443),
(64, '127.0.0.1', 'Sat, 08-Mar-2014 10:59:46', 1394276386),
(65, '127.0.0.1', 'Sat, 08-Mar-2014 11:07:36', 1394276856),
(66, '127.0.0.1', 'Tue, 11-Mar-2014 22:03:37', 1394575417),
(67, '127.0.0.1', 'Wed, 12-Mar-2014 01:48:30', 1394588910),
(68, '127.0.0.1', 'Wed, 12-Mar-2014 11:55:59', 1394625359),
(69, '127.0.0.1', 'Sun, 26-Jan-2014 21:50:36', 1390773036),
(70, '127.0.0.1', 'Tue, 01-Apr-2014 12:29:45', 1396355385),
(71, '127.0.0.1', 'Mon, 07-Apr-2014 18:40:53', 1396896053),
(72, '127.0.0.1', 'Mon, 07-Apr-2014 19:29:40', 1396898980),
(73, '127.0.0.1', 'Thu, 10-Apr-2014 18:19:55', 1397153995),
(74, '127.0.0.1', 'Fri, 11-Apr-2014 18:11:46', 1397239906),
(75, '127.0.0.1', 'Sat, 12-Apr-2014 00:48:40', 1397263720);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `PLACE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FOR` varchar(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `WEBSITE` varchar(100) NOT NULL,
  `RATING` int(11) NOT NULL,
  `DATE_AND_TIME` varchar(50) NOT NULL,
  `TIMESTAMP` bigint(20) NOT NULL,
  `IMAGE_NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`PLACE_ID`),
  KEY `FOR` (`FOR`),
  KEY `NAME` (`NAME`),
  KEY `DESCRIPTION` (`DESCRIPTION`),
  KEY `RATING` (`RATING`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`PLACE_ID`, `FOR`, `NAME`, `DESCRIPTION`, `ADDRESS`, `CONTACT_NUMBER`, `EMAIL_ID`, `WEBSITE`, `RATING`, `DATE_AND_TIME`, `TIMESTAMP`, `IMAGE_NAME`) VALUES
(36, 'Samosa, kachori, khaman, curd, bread, cakes, namkeen, sweets etc', 'Annapurna Sweets', 'This is a nice place to purchase sweets, namkeens and bakery items.', 'Sudama Nagar, Indore(M.P.)', '0731245698', 'sweets@annapurna.com', 'www.annapurna.com', 261, 'Sat, 11-May-2013 13:37:26', 1368279446, ''),
(42, 'Pizza, burger, cheeze pizza, mashroom pizza, macroni, noodles, coke, french fries etc', 'Pizza Hut', 'Pizza hut is known for its pizzas and service. It also provide home delivery option. Nice place to have pizza. Good place to spend your weekend. You can find veg pizzas, burger, cheeze pizza, mashroom pizza, macroni, noodles, coke, french fries etc', 'Treasure Island, M.G. Road, Indore(M.P.)', '9999999999', 'pizza@pizzahut.com', 'www.pizzahut.com', 53, 'Sat, 12-Apr-2014 00:03:02', 1397260982, '1397260905.jpg'),
(43, 'Pizza, burger, french fries, coke etc', 'Domino''s Pizza', 'This is a good restaurant for family. Pizza, burger, cheeze burger etc can be found here. It has lots of branches all over India and having more than 1000 braches all over the world.', 'Futi Kothi, Indore(M.P.)', '8888888888', 'pizza@dominos.com', 'www.dominos.com', 163, 'Sat, 12-Apr-2014 01:16:41', 1397265401, '1397265401.jpg'),
(44, 'Movies, cinema, theatre, latest movies etc', 'PVR', 'This is a nice place to watch movies.', 'Treasure Island, M.G. Road, Indore(M.P.)', '0731245692', 'pvr@pvr.com', 'www.pvr.com', 230, 'Sat, 11-May-2013 13:44:49', 1368279889, ''),
(45, '3D theatre, cinemas, movies, latest movies etc', 'Inox', 'This is a nice place to watch movies.', 'Sapna Sangeeta, Tower Square, Indore(M.P.)', '0731987892', 'info@inox.com', 'www.inox.com', 124, 'Sat, 11-May-2013 13:45:38', 1368279938, ''),
(97, 'M.TECH.(IT), B.C.A. , M.C.A. , M.B.A., B.COM., MBA(MS), MBA(TA), MBA(APR), MCA, MBA, MTECH, BCOM', 'International Institute of Professional Studies (IIPS) - DAVV', 'It is a nice college for graduation and pg courses.We can do many courses here and get good placements. Many of the students have done lots of courses from here and this can be assumed. Fuzzy logic is an approach to computing based on &quot;degrees of truth&quot; rather than the usual &quot;true or false&quot; (1 or 0) Boolean logic on which the modern computer is based. The idea of fuzzy logic was first advanced by Dr. Lotfi Zadeh of the University of California at Berkeley in the 1960s.', 'Bhanwarkua, Indore(M.P.)', '0731254898', 'iips@iips.edu.in', 'www.iips.edu.in', 825, 'Fri, 11-Apr-2014 23:16:45', 1397258205, '1397258205.jpg'),
(102, 'Samosa, kachori, khaman, curd, bread, cakes, namkeen, sweets etc', 'Jain Misthan Bhandar (JMB)', 'A nice place to have good food.', 'Collectorate, Indore(M.P.)', '9898789848', 'jmb@jmb.com', 'www.jmb.com', 37, 'Sat, 11-May-2013 13:39:36', 1368279576, ''),
(127, 'B.E., BE(IT), BE(CSE), BE(ME), BE(EE)', 'Institute of Engineering and Technology (IET)- DAVV', 'A very nice college to do B.E.. It offers B.E. degree in various streams like- IT, CSE, ME, EE, EC etc.', 'Khandwa Road, Indore(M.P.)', '0731987892', 'info@iet.edu.in', 'www.iet.edu.in', 12, 'Sat, 11-May-2013 13:56:04', 1368280564, ''),
(128, 'samosa, kachori, khaman, curd, bread, cakes, namkeen, sweets etc', 'Apna Sweets', 'This is a very nice place to purchase sweets in the city.', 'A. B. Road, Indore (M.P.)', '7897977979', 'info@apnasweets.com', 'www.apnasweets.com', 0, 'Tue, 14-May-2013 21:39:01', 1368567541, ''),
(129, 'Burger, french fries, cheeze burger, coke, icecream etc', 'McDonald''s', 'McDonald''s is a good place to spend weekend and eat burgers etc', 'Treasure Island, M.G. Road, Indore(M.P.)', '8798486857', 'info@mcdonalds.com', 'www.mcdonalds.com', 0, 'Tue, 14-May-2013 21:43:16', 1368567796, ''),
(130, 'Burger, french fries, cheeze burger, coke, icecream etc', 'McDonald''s', 'McDonald''s is nice place to have burgers.', 'C21 Mall, A. B. Road, Indore (M.P.)', '7868984589', 'info@mcdonalds.com', 'www.mcdonalds.com', 0, 'Tue, 14-May-2013 21:49:06', 1368568146, ''),
(131, 'Movies, cinema, theatre, latest movies etc', 'Inox', 'Inox is a nice place to watch movies. It''s a very good place to spend time with family at weekends.', 'Central Mall, Regal Square, Indore(M.P.)', '7898548957', 'info@inox.com', 'www.inox.com', 0, 'Tue, 14-May-2013 21:53:29', 1368568409, ''),
(132, 'Sweets, kachori, khaman, curd, bread, cakes, namkeen, samosa etc', 'Apna Sweets', 'Apna sweets is a nice place to purchase sweets etc', 'Collectorate, Indore(M.P.)', '7895789548', 'info@apnasweets.com', 'www.apnasweets.com', 7, 'Tue, 14-May-2013 21:55:49', 1368568549, ''),
(133, 'M.Tech., MCA, MTech (IT), BCA', 'School of Computer Science and Information Technology (SCSIT) - DAVV', 'SCSIT is a part of DAVV university and is a nice college to study.', 'DAVV, Takshshila Campus, Khandwa Road, Indore (M.P.)', '9878958789', 'info@scsit.com', 'www.scsit.com', 35, 'Tue, 14-May-2013 22:04:17', 1368569057, ''),
(134, 'B.E., BE(IT), BE(CSE), BE(ME), BE(EE) etc', 'Indian Institute of Technology (IIT), Indore', 'IIT-I is a very nice college for BE and is one of the most premier institutes in India.', 'Khandwa Road, Indore(M.P.)', '0731245698', 'info@iiti.com', 'www.iiti.edu.in', 0, 'Tue, 14-May-2013 22:07:20', 1368569240, ''),
(135, 'Pizza, burger, french fries, coke, maggi, manhcurian, haka noodles etc', 'Domino''s Pizza', 'Domino''s Pizza is a very nice place to have pizzas of all the type.', 'Treasure Island, M.G. Road, Indore(M.P.)', '0731245692', 'info@dominos.com', 'www.dominos.com', 3, 'Sat, 12-Apr-2014 01:17:07', 1397265427, '1397265427.jpg'),
(136, 'Patis, Samosa, Kachori, Icecream, Khaman, Matka Kulfi etc', 'Vijay Chat House', 'Vijay Chat House is a nice place to have some food at Rajwada in Indore.', 'Rajwada, Indore', 'N/A', 'N/A', 'N/A', 2, 'Thu, 10-Apr-2014 18:21:28', 1397154088, ''),
(137, 'Sandwich, burger, baked samosa, french fries, maggi, pizza, pasta, icecream, pastry, cold drinks', 'Sanwariya Sandwich', 'Sanwariya sandwich is a nice place to have sandwich, burger, baked samosa, french fries, maggi, pizza, pasta, icecream, pastry, cold drinks etc', 'Ranjit Hanumanji road, Indore', 'N/A', 'N/A', 'N/A', 30, 'Thu, 10-Apr-2014 18:26:01', 1397154361, ''),
(138, 'jlk', 'lkjll', 'jlkj', 'ljlk', 'jlkjkl', 'jklj', 'lkjlk', 19, 'Fri, 11-Apr-2014 23:15:46', 1397258146, '1397258146.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `privileged_users`
--

CREATE TABLE IF NOT EXISTS `privileged_users` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULL_NAME` varchar(50) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `privileged_users`
--

INSERT INTO `privileged_users` (`USER_ID`, `FULL_NAME`, `EMAIL_ID`, `CONTACT_NUMBER`) VALUES
(1, 'SUGGESTERS', 'G@KFDJ.COME', '9998DES'),
(3, 'NAME', 'SED', 'N/A'),
(4, 'DNAME', 'DED', 'N/A'),
(8, 'j', 'j', 'N/A'),
(9, 'gp', 'kfjksdfjl@kdjfk', ''),
(10, 'hhh', 'dlfj@jdfklj', 'N/A'),
(11, 'u', 'u@fg', 'N/A'),
(12, 'gp', 'dfdf@fjd.com', 'N/A'),
(13, 'gp', 'dfkj', 'N/A'),
(14, 'df', 'df', 'N/A'),
(15, 'dfd', 'dfd', 'N/A'),
(16, 'sdsd', 'sdsd', 'N/A'),
(17, 'dfd', 'df', 'N/A'),
(18, 'l;fdfd', 'l', 'l'),
(19, 'l;fdfd', 'l', 'l'),
(20, 'k', 'kk', 'kkk'),
(21, 'k', 'kk', 'kkk'),
(22, 'dff''', 'dfdkl'' d''fdf''df      df''d ''d''f', 'kj'),
(23, 'dff''', 'dfdkl'' d''fdf''df      df''d ''d''f', 'kj'),
(24, 'j', 'j', 'j'),
(25, 'j', 'j', 'j'),
(26, 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDY'),
(27, 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDYDDDDDDDDDY', 'DDDDDDDDDY'),
(28, 'Gaurav Parmar', 'gauravparmariam@gmail.com', '9999999999'),
(29, 'Gaurav Parmar', 'gauravparmariam@gmail.com', '9999999999'),
(30, 'Gaurav', 'fsdf@fd.com', 'N/A'),
(31, 'Gaurav parmar', 'fsdff', 'N/A'),
(32, 'yo yo', 'd', 'N/A'),
(33, 'u', 'u', 'N/A'),
(34, ''' OR ''''=''', ''' OR ''''=''', 'N/A'),
(35, 'g', 'g', 'N/A'),
(36, 'a', 'a', 'N/A'),
(37, 'p', 'p', 'N/A'),
(38, 'l', 'l', 'N/A'),
(39, 'k', 'k', 'N/A'),
(40, 'k', 'k', 'N/A'),
(41, 'a', 'a', 'N/A'),
(42, 'Gaurav', 'gauravparmariam@gmail.com', 'N/A'),
(43, 'niks', 'n@gmail.com', 'N/A'),
(44, 'a', 'd', 'N/A'),
(45, 'g', 'g', 'N/A'),
(46, 'o', 'p', 'N/A'),
(47, 'Deepak', 'dj@gmail.com', 'N/A'),
(48, 'hhm', 'hm', 'N/A'),
(49, 'hhm', 'h', 'N/A'),
(50, 'fd', 'f', 'N/A'),
(51, 'd', 'f', 'N/A'),
(52, 'd', 'd', 'N/A'),
(53, 's', 's', 'N/A'),
(54, 'd', 'd', 'N/A'),
(55, 'df', 'fd', 'N/A'),
(56, 'do', 'd', 'N/A'),
(57, 'df', 'd', 'N/A'),
(58, 'Gaurav', 'gauravparmariam@gmail.com', 'N/A'),
(59, 'ii', 'ii', 'N/A'),
(60, 'test', 'k', 'N/A'),
(61, 'my n', 'my email@er.com', 'N/A'),
(62, 'my n', 'my email@er.com', 'N/A'),
(63, 'nfojo', 'edjifj@fe.com', 'N/A'),
(64, 'k', 'k', 'N/A'),
(65, 'ko', 'kok', 'N/A'),
(66, 'Gaurav', 'gaurav@gmail.com', 'N/A'),
(67, 'k', 'k', 'N/A'),
(68, 'k', 'k', 'N/A'),
(69, 'k', 'k', 'N/A'),
(70, 'k', 'k', 'N/A'),
(71, 'k', 'k', 'N/A'),
(72, 'Gauav', 'gaurav@gmail.com', 'N/A'),
(73, 'Gaurav Parmar', 'gauravparmariam@gmail.com', 'N/A'),
(74, 'jjjjjjjjjjjjjjj', 'N/A', 'N/A'),
(75, 'Nishikant Parmar', 'N/A', 'N/A'),
(76, 'Gaurav', 'gaurav@gmail.com', 'N/A'),
(77, 'kjlk', 'jk@jkj.com', 'N/A'),
(78, 'rajat', 'jkl@gmal.com', 'N/A'),
(79, 'vfvb', 'bfb@gmail.com', 'N/A'),
(80, 'Niks', 'nishikantparmar123@gmail.com', 'N/A'),
(81, 'Hritik', 'hritik@jadu.com', 'N/A'),
(82, 'jdiofjd', 'nishikantparmar123@gmail.com', 'N/A'),
(83, 'Bill Gates', 'billgates@microsoft.com', 'N/A'),
(84, 'Mark Zukerberg', 'markz@facebook.com', 'N/A'),
(85, 'Bill Gates', 'billgates@microsoft.com', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_users`
--

CREATE TABLE IF NOT EXISTS `subscribed_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'pk',
  `email` varchar(50) NOT NULL COMMENT 'email',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `subscribed_users`
--

INSERT INTO `subscribed_users` (`id`, `email`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, 'gauravparmariam@gmail.com'),
(5, 'gauravparmariam@gmail.com'),
(6, 'gauravparmariam@gmail.com'),
(7, 'gauravparmariamere@gmail.com'),
(8, 'gauravparmariam@gmail.co'),
(9, 'gauravparmariam@gmail.co'),
(10, 'gauravparmariam@gmail.co'),
(11, 'gauravparmariam@gmail.co'),
(12, 'gauravparmariam@gmail.co'),
(13, 'gauravparmariam@gmail.co'),
(14, 'gauravparmariam@gmail.co'),
(15, 'gauravparmariam@gmail.co'),
(16, 'gauravparmariam@gmail.co'),
(17, 'gauravparmariam@gmail.co'),
(18, 'gauravparmariam@gmail.co'),
(19, 'gauravparmariam@gmail.co'),
(20, 'gauravparmariam@gmail.co'),
(21, 'gauravparmariam@gmail.co'),
(22, 'gauravparmariam@gmail.co'),
(23, 'gauravparmariam@gmail.co'),
(24, 'gauravparmariam@gmail.co'),
(25, 'g@dd'),
(26, 'g@dd'),
(27, 'df@df.c'),
(28, 'df@df.c');

-- --------------------------------------------------------

--
-- Table structure for table `temp_ads`
--

CREATE TABLE IF NOT EXISTS `temp_ads` (
  `AD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POSTER_NAME` varchar(50) NOT NULL,
  `POSTER_EMAIL_ID` varchar(50) NOT NULL,
  `POSTER_CONTACT_NUMBER` varchar(10) NOT NULL,
  `PLACE_NAME` varchar(100) NOT NULL,
  `PLACE_ADDRESS` varchar(200) NOT NULL,
  `AD_TITLE` varchar(100) NOT NULL,
  `AD_CONTENT` varchar(1000) NOT NULL,
  `DATE_AND_TIME` varchar(50) NOT NULL,
  `TIMESTAMP` bigint(20) NOT NULL,
  PRIMARY KEY (`AD_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `temp_ads`
--

INSERT INTO `temp_ads` (`AD_ID`, `POSTER_NAME`, `POSTER_EMAIL_ID`, `POSTER_CONTACT_NUMBER`, `PLACE_NAME`, `PLACE_ADDRESS`, `AD_TITLE`, `AD_CONTENT`, `DATE_AND_TIME`, `TIMESTAMP`) VALUES
(1, 't', 't', 't', 't', 't', 'w', 't', 'Tue, 19-Mar-2013 19:58:16 PM', 1363723096),
(2, 'j', 'j', 'j', 'j', 'jj', 'j', 'j', 'Tue, 19-Mar-2013 23:52:05 PM', 1363737125),
(3, 'i', 'ii', 'i', 'i', 'i', 'i', 'iiii', 'Tue, 19-Mar-2013 23:53:39 PM', 1363737219),
(4, 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'Thu, 02-May-2013 10:29:39', 1367490579),
(5, 'd', 'd', '8989898989', 'd', 'd', 'd', 'd', 'Thu, 02-May-2013 11:18:42', 1367493522),
(6, 'as', 's', '5454', 's', 's', 'ss', 'x', 'Thu, 02-May-2013 11:19:55', 1367493595),
(7, 'd', 'd', '4444455555', 'Bikaner Sweets', 'BPL Square, Mandsaur', 'New Ultimate Rasgullas', 'try new.', 'Wed, 08-May-2013 10:05:06', 1368007506),
(8, 'K,LK', 'JKJ', '5475', 'GFHGFH', 'GFHGFH', 'GHGFHF', 'GFHGFHGFHH', 'Tue, 14-May-2013 16:02:17', 1368547337),
(9, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'Tue, 11-Mar-2014 16:57:58', 1394557078);

-- --------------------------------------------------------

--
-- Table structure for table `temp_places`
--

CREATE TABLE IF NOT EXISTS `temp_places` (
  `PLACE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FOR` varchar(200) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(1000) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `WEBSITE` varchar(200) NOT NULL,
  `SUGGESTER_NAME` varchar(50) NOT NULL,
  `SUGGESTER_EMAIL_ID` varchar(50) NOT NULL,
  `DATE_AND_TIME` varchar(50) NOT NULL,
  `TIMESTAMP` bigint(20) NOT NULL,
  `IMAGE_NAME` varchar(100) NOT NULL,
  PRIMARY KEY (`PLACE_ID`),
  KEY `FOR` (`FOR`),
  KEY `NAME` (`NAME`),
  KEY `DESCRIPTION` (`DESCRIPTION`(767))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `temp_places`
--

INSERT INTO `temp_places` (`PLACE_ID`, `FOR`, `NAME`, `DESCRIPTION`, `ADDRESS`, `CONTACT_NUMBER`, `EMAIL_ID`, `WEBSITE`, `SUGGESTER_NAME`, `SUGGESTER_EMAIL_ID`, `DATE_AND_TIME`, `TIMESTAMP`, `IMAGE_NAME`) VALUES
(8, 'g', 'g', 'g', 'gg', 'g', 'g', 'g', 'g', 'g', 'Tue, 19-Mar-2013 23:52:41 PM', 1363737161, ''),
(11, 'h', 'h', 'h', 'h', '5454545454', 'h', 'h', 'h', 'h', 'Thu, 02-May-2013 11:16:10', 1367493370, ''),
(12, 'h', 'h', 'h', 'h', '55', 'fsd', 'j', 'j', 'j', 'Thu, 02-May-2013 11:20:58', 1367493658, ''),
(13, 'a', 'a', 'a', 'a', '5469479846', 'a', 'a', 'a', 'a', 'Sat, 11-May-2013 13:57:39', 1368280659, ''),
(14, 'DFGFDGDF', 'DSFG', 'FDGFDGF', 'FDGDFGDF', '786', '5434', 'JKJ', 'GHKGH', 'HGKGHK', 'Tue, 14-May-2013 16:01:34', 1368547294, ''),
(15, 'l', '', 'l', 'l', 'N/A', 'N/A', 'N/A', 'l', 'N/A', 'Tue, 11-Mar-2014 18:14:13', 1394561653, ''),
(16, 'vvvvvv', '', 'vvvvvvvv', 'vvvvvvv', 'N/A', 'N/A', 'N/A', 'vvvvvv', 'N/A', 'Mon, 17-Mar-2014 10:54:54', 1395053694, ''),
(18, 'w', 'q', 'e', 'r', 'N/A', 'N/A', 'N/A', 'niks', 'N/A', 'Thu, 10-Apr-2014 18:00:21', 1397152821, ''),
(20, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'ded@l.com', 'Thu, 10-Apr-2014 18:42:51', 1397155371, ''),
(21, 'k', 'k', 'dk', 'k', 'k', 'k', 'k', 'k', 'k@gljl.com', 'Fri, 11-Apr-2014 17:34:45', 1397237685, ''),
(22, 'u', 'u', 'uu', 'u', 'u', 'o', 'o', 'o', 'o@ldjl.com', 'Fri, 11-Apr-2014 17:43:49', 1397238229, '1397238229.jpg'),
(23, 'k', 'k', 'k', 'kj', 'jkj', 'kjk', 'kjk', 'kjk', 'kjk@ljl.com', 'Fri, 11-Apr-2014 17:46:28', 1397238388, ''),
(24, 'joij', 'diji', 'oijo', 'j', 'jo', 'ijoij', 'ijo', 'jojo', 'jo@j.com', 'Fri, 11-Apr-2014 17:49:09', 1397238549, ''),
(25, 'kjl', 'jkj', 'i', 'jo', 'jij', 'oij', 'lkj', 'lkjlj', 'lkjl@jlk.cjoj', 'Fri, 11-Apr-2014 17:50:23', 1397238623, 'N/A'),
(26, 'kljkl', 'dfj', 'jjlkj', 'ljkl', 'jlkj', 'llk', 'jlkjl', 'jlkjl', 'ljl@jlf.colfk', 'Fri, 11-Apr-2014 17:51:29', 1397238689, ''),
(28, 'k', 'k', 'kk', 'k', 'k', 'k', 'k', 'k', 'jdl@klj.com', 'Fri, 11-Apr-2014 22:36:18', 1397255778, ''),
(29, 'o', 'new', 'oo', 'o', 'o', 'o', 'o', 'o', 'fljl@jl.c', 'Fri, 11-Apr-2014 22:48:59', 1397256539, '1397261136.jpg'),
(30, 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u@u', 'Sat, 12-Apr-2014 00:40:17', 1397263217, '1397263217.png');

-- --------------------------------------------------------

--
-- Table structure for table `total_hits`
--

CREATE TABLE IF NOT EXISTS `total_hits` (
  `HITS` bigint(20) NOT NULL COMMENT 'Shows the number of times the page has been opened.',
  PRIMARY KEY (`HITS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_hits`
--

INSERT INTO `total_hits` (`HITS`) VALUES
(8662);

-- --------------------------------------------------------

--
-- Table structure for table `total_likes`
--

CREATE TABLE IF NOT EXISTS `total_likes` (
  `LIKES` bigint(20) NOT NULL,
  PRIMARY KEY (`LIKES`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_likes`
--

INSERT INTO `total_likes` (`LIKES`) VALUES
(854);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
