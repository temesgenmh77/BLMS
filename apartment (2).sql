-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2022 at 02:36 PM
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
  `filename` varchar(150) NOT NULL,
  `result` float NOT NULL,
  `app_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `remark` varchar(300) DEFAULT NULL,
  `WSU_emp` varchar(50) DEFAULT NULL,
  `uni_start_end` varchar(150) DEFAULT NULL,
  `tvet_start_end` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `empid`, `fname`, `email`, `phone`, `sex`, `college`, `department`, `rank`, `disable`, `dis_type`, `ewsu`, `euni`, `etvet`, `marital`, `instructor`, `child`, `cur_wsu`, `pos_wsu`, `pos_uni`, `pos_tvet`, `filename`, `result`, `app_date`, `status`, `remark`, `WSU_emp`, `uni_start_end`, `tvet_start_end`) VALUES
(1, 'WSU/MIS/00735', 'Temesgen Mengistu Helana', 'teme.me.he@gmail.com', '0921232323', 0, 'School of informatics', 'Computer Science', 40, 0, 'No', 22.1096, 1.6274, 0, 10, 'No', 2, 7, 3.00822, 0, 0, 'Temesgen Mengistu Helana_Ontology and Web Usage Mining towards an Intelligent Web focusing .pdf', 82.737, '2022-03-20 11:41:51', 'approved', 'Wow', '01-10-2011-GC', '01_02-10-2011 GC', ''),
(2, 'WSU/MIS/00679', 'Feven Teferi', 'feventeferi@yahoo.com', '0912456789', 7, 'School of informatics', 'Computer Science', 35, 0, 'No', 19.0959, 0, 0, 10, 'No', 2, 10, 0, 0, 0, 'Feven Teferi_2016-0287-eng.pdf', 83.0959, '2022-03-20 13:41:02', 'approved', 'done', '01-08-2014-EC', '', ''),
(3, 'WSU/MIS/00021', 'Alemayehu Asfaw Amamoo', 'adane@hms.com', '0912456789', 0, 'College of Social science', 'Geography', 40, 10, 'No', 5.96575, 1.31096, 2.60137, 0, 'No', 0, 0, 3.25479, 0, 0, 'Alemayehu Asfaw Amamoo_Web Personalisation based on User Interaction.pdf', 63.1329, '2022-03-21 00:58:50', 'approved', 'cool', '01-11-2019-GC', '01-02-2015 GC to 03-01-2019 GC', '20-03-2011-GC to 13-01-2015-GC'),
(4, 'WSU/MIS/00679', 'Mergiya Melese', 'bereket@hms.com', '0921232323', 0, 'School of informatics', 'Computer Science', 20, 0, 'No', 5.33562, 0, 0, 0, 'No', 0, 0, 0, 0, 0, 'Mergiya Melese_Web Personalisation based on User Interaction.pdf', 25.3356, '2022-03-21 02:58:16', 'approved', 'wow', '01-02-2020-GC', '', ''),
(5, 'WSU/MIS/0067', 'Mergiya Melese', 'teme.me.he@gmail.com', '+251911456789', 0, 'School of informatics', 'Computer Science', 20, 0, 'No', 5.33562, 0, 0, 0, 'No', 0, 0, 0, 0, 0, 'Mergiya Melese_Ontology and Web Usage Mining towards an Intelligent Web focusing .pdf', 25.3356, '2022-03-21 03:01:21', 'approved', 'Done', '01-02-2020-GC', '', ''),
(6, 'EMP/WSU/00000', 'Dr. Habtam Fanta', 'habte@gmail.com', '0916234567', 0, 'School of informatics', 'Computer Science', 45, 0, 'No', 25.3493, 0, 0, 10, 'No', 3, 0, 10, 0, 0, 'Dr. Habtam Fanta_20157800326.pdf', 93, '2022-03-21 05:30:30', 'approved', 'Wow', '01-08-2007-GC', '', ''),
(7, 'WSU/MIS/0012', 'Paulos Bogale', 'paulos@gmail.com', '0913330987', 0, 'School of informatics', 'Computer Science', 35, 0, 'No', 18.1849, 0, 0, 0, 'No', 0, 7, 9.1726, 0, 0, 'Paulos Bogale_3D Transformation - Tutorialspoint.pdf', 62.3575, '2022-03-21 05:53:08', 'approved', 'WOW', '12-12-2012-GC', '', ''),
(8, 'WSU/MIS/00678', 'Alemayehu Asfaw Amamoo', 'bereket@hms.com', '0922131912', 7, 'School of informatics', 'Computer Science', 35, 0, 'No', 19.0616, 0, 0, 10, 'No', 2, 10, 0, 0, 0, 'Alemayehu Asfaw Amamoo_3D Transformation - Tutorialspoint.pdf', 83.0616, '2022-03-22 00:35:09', 'approved', 'Cool', '08-08-2014-GC', '', ''),
(9, 'WSU/MIS/0067', 'Feven Teferi', 'feventeferi@yahoo.com', '+251911456789', 7, 'School of informatics', 'Computer Science', 35, 0, 'No', 19.1096, 0, 0, 10, 'No', 2, 10, 0, 0, 0, 'Feven Teferi_3D Transformation - Tutorialspoint.pdf', 83.1096, '2022-03-22 13:57:06', 'approved', 'Just good!', '01-08-2014-GC', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `phone`, `username`, `password`, `status`, `created_date`) VALUES
(1, 'temesgen mengistu helana', 'tesfaye@hms.com', '0922131912', 'temesgenm', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2022-03-22');

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
