-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2022 at 06:25 AM
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
  `fname` varchar(60) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `college` varchar(70) NOT NULL,
  `department` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `disable` int(11) NOT NULL,
  `dis_type` varchar(50) NOT NULL,
  `ewsu` int(11) NOT NULL,
  `euni` int(11) NOT NULL,
  `etvet` int(11) NOT NULL,
  `marital` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `cur_wsu` int(11) NOT NULL,
  `pos_wsu` int(11) NOT NULL,
  `pos_uni` int(11) NOT NULL,
  `pos_tvet` int(11) NOT NULL,
  `docs` varchar(80) NOT NULL,
  `app_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `fname`, `sex`, `college`, `department`, `level`, `rank`, `disable`, `dis_type`, `ewsu`, `euni`, `etvet`, `marital`, `instructor`, `child`, `cur_wsu`, `pos_wsu`, `pos_uni`, `pos_tvet`, `docs`, `app_date`) VALUES
(1, 'Temesgen Mengistu Helana', 'M', 'College of engineering', 'Computer Science', 'masters', 'Ass. Professor', 1, 'No', 8, 0, 0, 1, 1, 2, 5, 0, 0, 0, 'Assessment to challenges of biodiversity in Ethiopia.docx', '2022-03-07 13:38:28'),
(2, 'feven teferi', 'F', '', 'Computer Science', 'Masters', 'Lecturer', 0, 'No', 5, 0, 0, 2, 0, 2, 3, 0, 0, 0, 'Assessment to challenges of biodiversity in Ethiopia.docx', '2022-03-09 03:37:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
