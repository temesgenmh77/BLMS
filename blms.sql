-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2022 at 05:00 AM
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
-- Database: `blms`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `empid` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `fullname` varchar(60) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `sex` varchar(11) COLLATE utf16_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `rank` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `position` varchar(80) COLLATE utf16_unicode_ci NOT NULL,
  `disable` varchar(5) COLLATE utf16_unicode_ci NOT NULL,
  `disable_detail` varchar(60) COLLATE utf16_unicode_ci NOT NULL,
  `wsu_sdate` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `uni_status` varchar(5) COLLATE utf16_unicode_ci DEFAULT NULL,
  `uni_sdate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `uni_edate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `tvet_status` varchar(5) COLLATE utf16_unicode_ci DEFAULT NULL,
  `tvet_sdate` varchar(30) COLLATE utf16_unicode_ci DEFAULT NULL,
  `tvet_edate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `curr_study_status` varchar(5) CHARACTER SET sjis COLLATE sjis_bin DEFAULT NULL,
  `curr_study_type` varchar(10) COLLATE utf16_unicode_ci DEFAULT NULL,
  `curr_study_level` varchar(60) COLLATE utf16_unicode_ci DEFAULT NULL,
  `curr_start_date` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study1_sponsor` varchar(30) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study1_type` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study1_level` varchar(50) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study1_sdate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study1_edate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study2_sponsor` varchar(50) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study2_type` varchar(30) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study2_level` varchar(50) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study2_sdate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study2_edate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study3_sponsor` varchar(30) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study3_type` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study3_level` varchar(50) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study3_sdate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `study3_edate` varchar(20) COLLATE utf16_unicode_ci DEFAULT NULL,
  `semester1` decimal(10,0) NOT NULL,
  `semester2` decimal(10,0) NOT NULL,
  `semester3` decimal(10,0) NOT NULL,
  `semester4` decimal(10,0) NOT NULL,
  `retire_date` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `comm_complete` int(11) NOT NULL,
  `comm_ongoing` int(11) NOT NULL,
  `uni_affair` int(11) NOT NULL,
  `pre_loan` varchar(5) COLLATE utf16_unicode_ci NOT NULL,
  `comment` varchar(200) COLLATE utf16_unicode_ci DEFAULT NULL,
  `confirm` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `regdate` date NOT NULL,
  `final_updated` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `empid` (`empid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `app_id`, `empid`, `fullname`, `email`, `phone`, `sex`, `college`, `department`, `rank`, `position`, `disable`, `disable_detail`, `wsu_sdate`, `uni_status`, `uni_sdate`, `uni_edate`, `tvet_status`, `tvet_sdate`, `tvet_edate`, `curr_study_status`, `curr_study_type`, `curr_study_level`, `curr_start_date`, `study1_sponsor`, `study1_type`, `study1_level`, `study1_sdate`, `study1_edate`, `study2_sponsor`, `study2_type`, `study2_level`, `study2_sdate`, `study2_edate`, `study3_sponsor`, `study3_type`, `study3_level`, `study3_sdate`, `study3_edate`, `semester1`, `semester2`, `semester3`, `semester4`, `retire_date`, `comm_complete`, `comm_ongoing`, `uni_affair`, `pre_loan`, `comment`, `confirm`, `filename`, `regdate`, `final_updated`) VALUES
(4, '62040352690', '12345671', 'Temesgen mengistu4366', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'temesgen mengistu helana_file.pdf', '2022-05-02', '2022-05-07'),
(5, '69604415821', '21345678', 'Temesgen mengistu4366', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'Feven teferi Haile_lecture1428551142.pdf', '2022-05-02', '2022-05-07'),
(6, '69825902731', '213456781', 'Temesgen mengistu', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'Feven teferi Haile_lecture1428551142.pdf', '2022-05-02', '2022-05-10'),
(7, '90977411841', '100032456', 'Temesgen mengistu4366', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'Betel Kaleb Haile_css_3.ppt', '2022-05-03', '2022-05-07'),
(1, '96479732981', '1221321', 'Temesgen mengistu4366', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'Desta Dana data_Staff Bank Loan Guideline.pdf', '2022-05-04', '2022-05-07'),
(2, '16844293221', '122132', 'Temesgen mengistu', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'Desta Dana data_Staff Bank Loan Guideline.pdf', '2022-05-04', '2022-05-07'),
(3, '40617736341', '12213211', 'Temesgen mengistu4366', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2050-GC', 4, 4, 4, 'Yes', '', 'approved', 'Desta Dana data_Staff Bank Loan Guideline.pdf', '2022-05-04', '2022-05-07'),
(8, '85774560697', '1234567', 'Zeleke Zara', 'temesgen.megistu@gmail.com', '1234567890', 'F', 'School of informatics', 'Computer Science', '3', 'Coordinator', 'No', 'No', '02-04-2004-EC', 'Yes', '15-01-2003-EC', '01-04-2004-EC', '', '---', '---', 'No', '', '', '---', 'WSU', 'full_time', 'Masters', '10-08-2013-GC', '01-05-2015-GC', '', '', '', '---', '---', '', '', '', '---', '---', '83', '81', '93', '90', '10-02-2030-GC', 4, 4, 4, 'Yes', '', 'approved', 'Temesgen mengistu_css_3.ppt', '2022-05-07', '2022-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `app_date`
--

DROP TABLE IF EXISTS `app_date`;
CREATE TABLE IF NOT EXISTS `app_date` (
  `id` int(11) NOT NULL,
  `eappsdate` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `eappedate` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `aappsdate` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `aappedate` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `updated` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `app_date`
--

INSERT INTO `app_date` (`id`, `eappsdate`, `eappedate`, `aappsdate`, `aappedate`, `updated`) VALUES
(1, '12-05-2022', '28-05-2022', '04-09-2014', '20-09-2014', '2022-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

DROP TABLE IF EXISTS `users1`;
CREATE TABLE IF NOT EXISTS `users1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `usertype` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `regdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
