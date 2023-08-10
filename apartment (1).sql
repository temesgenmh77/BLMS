-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2022 at 02:34 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

DROP TABLE IF EXISTS `residents`;
CREATE TABLE IF NOT EXISTS `residents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(25) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sex` int(11) NOT NULL,
  `college` varchar(70) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `disable` int(5) NOT NULL,
  `dis_type` varchar(50) NOT NULL,
  `ewsu` float NOT NULL,
  `euni` float NOT NULL,
  `etvet` float NOT NULL,
  `marital` int(11) NOT NULL,
  `instructor` varchar(10) NOT NULL,
  `child` int(11) NOT NULL,
  `cur_wsu` float NOT NULL,
  `pos_wsu` float NOT NULL,
  `pos_uni` float NOT NULL,
  `pos_tvet` float NOT NULL,
  `filename` varchar(100) NOT NULL,
  `result` float NOT NULL,
  `app_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `remark` varchar(300) DEFAULT NULL,
  `WSU_emp` varchar(50) DEFAULT NULL,
  `uni_start_end` varchar(150) DEFAULT NULL,
  `tvet_start_end` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `empid`, `fname`, `email`, `phone`, `sex`, `college`, `department`, `rank`, `disable`, `dis_type`, `ewsu`, `euni`, `etvet`, `marital`, `instructor`, `child`, `cur_wsu`, `pos_wsu`, `pos_uni`, `pos_tvet`, `filename`, `result`, `app_date`, `status`, `remark`, `WSU_emp`, `uni_start_end`, `tvet_start_end`) VALUES
(1, 'WSU/MIS/00735', 'Temesgen Mengistu Helana', 'teme.me.he@gmail.com', '0921232323', 0, 'School of informatics', 'Computer Science', 40, 0, 'No', 22.1096, 1.6274, 0, 10, 'No', 2, 7, 3.00822, 0, 0, 'Temesgen Mengistu Helana_Ontology and Web Usage Mining towards an Intelligent Web focusing .pdf', 82.737, '2022-03-20 11:41:51', 'approved', 'Wow', '01-10-2011-GC', '01_02-10-2011 GC', ''),
(2, 'WSU/MIS/00679', 'Feven Teferi', 'feventeferi@yahoo.com', '0912456789', 7, 'School of informatics', 'Computer Science', 35, 0, 'No', 19.0959, 0, 0, 10, 'No', 2, 10, 0, 0, 0, 'Feven Teferi_2016-0287-eng.pdf', 83.0959, '2022-03-20 13:41:02', 'approved', 'done', '01-08-2014-EC', '', ''),
(3, 'WSU/MIS/00021', 'Alemayehu Asfaw Amamoo', 'adane@hms.com', '0912456789', 0, 'College of Social science', 'Geography', 40, 10, 'No', 5.96575, 1.31096, 2.60137, 0, 'No', 0, 0, 3.25479, 0, 0, 'Alemayehu Asfaw Amamoo_Web Personalisation based on User Interaction.pdf', 63.1329, '2022-03-21 00:58:50', 'approved', 'cool', '01-11-2019-GC', '01-02-2015 GC to 03-01-2019 GC', '20-03-2011-GC to 13-01-2015-GC');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

DROP TABLE IF EXISTS `work_experience`;
CREATE TABLE IF NOT EXISTS `work_experience` (
  `eid` int(11) NOT NULL,
  `edate` varchar(15) NOT NULL,
  `e1study` varchar(20) DEFAULT NULL,
  `e1level` varchar(20) DEFAULT NULL,
  `e1sdate` varchar(20) DEFAULT NULL,
  `e1rdate` varchar(20) DEFAULT NULL,
  `e2study` varchar(20) DEFAULT NULL,
  `e2level` varchar(20) DEFAULT NULL,
  `e2sdate` varchar(20) DEFAULT NULL,
  `e2rdate` varchar(20) DEFAULT NULL,
  `e3study` varchar(20) DEFAULT NULL,
  `e3level` varchar(20) DEFAULT NULL,
  `e3sdate` varchar(20) DEFAULT NULL,
  `e3rdate` varchar(20) DEFAULT NULL,
  `udate` varchar(20) DEFAULT NULL,
  `u1study` varchar(20) DEFAULT NULL,
  `u1level` varchar(20) DEFAULT NULL,
  `u1sdate` varchar(20) DEFAULT NULL,
  `u1rdate` varchar(20) DEFAULT NULL,
  `u2study` varchar(20) DEFAULT NULL,
  `u2level` varchar(20) DEFAULT NULL,
  `u2sdate` varchar(20) DEFAULT NULL,
  `u2rdate` varchar(20) DEFAULT NULL,
  `u3study` varchar(20) DEFAULT NULL,
  `u3level` varchar(20) DEFAULT NULL,
  `u3sdate` varchar(20) DEFAULT NULL,
  `u3rdate` varchar(20) DEFAULT NULL,
  `cdate` varchar(20) DEFAULT NULL,
  `c1study` varchar(20) DEFAULT NULL,
  `c1level` varchar(20) DEFAULT NULL,
  `c1sdate` varchar(20) DEFAULT NULL,
  `c1rdate` varchar(20) DEFAULT NULL,
  `c2study` varchar(20) DEFAULT NULL,
  `c2level` varchar(20) DEFAULT NULL,
  `c2sdate` varchar(20) DEFAULT NULL,
  `c2rdate` varchar(20) DEFAULT NULL,
  `c3study` varchar(20) DEFAULT NULL,
  `c3level` varchar(20) DEFAULT NULL,
  `c3sdate` varchar(20) DEFAULT NULL,
  `c3rdate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
