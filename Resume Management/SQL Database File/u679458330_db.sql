
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2016 at 03:42 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u679458330_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `name` varchar(80) NOT NULL,
  `f_name` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `gen` varchar(6) NOT NULL,
  `mar_sta` varchar(10) NOT NULL,
  `relig` varchar(30) NOT NULL,
  `comm` varchar(3) NOT NULL,
  `lang1` varchar(15) NOT NULL,
  `lang2` varchar(15) NOT NULL,
  `lang3` varchar(15) NOT NULL,
  `ed_cr_1` varchar(100) NOT NULL,
  `ed_bd_1` varchar(100) NOT NULL,
  `ed_yr_1` varchar(100) NOT NULL,
  `ed_perc_1` varchar(100) NOT NULL,
  `ed_cr_2` varchar(100) NOT NULL,
  `ed_bd_2` varchar(100) NOT NULL,
  `ed_yr_2` varchar(100) NOT NULL,
  `ed_perc_2` varchar(100) NOT NULL,
  `ed_cr_3` varchar(100) NOT NULL,
  `ed_bd_3` varchar(100) NOT NULL,
  `ed_yr_3` varchar(100) NOT NULL,
  `ed_perc_3` varchar(100) NOT NULL,
  `ed_cr_4` varchar(100) NOT NULL,
  `ed_bd_4` varchar(100) NOT NULL,
  `ed_yr_4` varchar(100) NOT NULL,
  `ed_perc_4` varchar(100) NOT NULL,
  `ed_cr_5` varchar(100) NOT NULL,
  `ed_bd_5` varchar(100) NOT NULL,
  `ed_yr_5` varchar(100) NOT NULL,
  `ed_perc_5` varchar(100) NOT NULL,
  `ed_cr_6` varchar(100) NOT NULL,
  `ed_bd_6` varchar(100) NOT NULL,
  `ed_yr_6` varchar(100) NOT NULL,
  `ed_perc_6` varchar(100) NOT NULL,
  `fresh` varchar(3) NOT NULL,
  `ex_pos_1` varchar(100) NOT NULL,
  `ex_ins_1` varchar(100) NOT NULL,
  `ex_prd_1` varchar(100) NOT NULL,
  `ex_pos_2` varchar(100) NOT NULL,
  `ex_ins_2` varchar(100) NOT NULL,
  `ex_prd_2` varchar(100) NOT NULL,
  `ex_pos_3` varchar(100) NOT NULL,
  `ex_ins_3` varchar(100) NOT NULL,
  `ex_prd_3` varchar(100) NOT NULL,
  `ex_pos_4` varchar(100) NOT NULL,
  `ex_ins_4` varchar(100) NOT NULL,
  `ex_prd_4` varchar(100) NOT NULL,
  `ex_pos_5` varchar(100) NOT NULL,
  `ex_ins_5` varchar(100) NOT NULL,
  `ex_prd_5` varchar(100) NOT NULL,
  `ex_pos_6` varchar(100) NOT NULL,
  `ex_ins_6` varchar(100) NOT NULL,
  `ex_prd_6` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `regn` varchar(50) NOT NULL,
  `cty` varchar(50) NOT NULL,
  `post_pref` varchar(40) NOT NULL,
  `sub_pref` varchar(30) NOT NULL,
  `lan_no` varchar(15) NOT NULL,
  `mob_no` varchar(13) NOT NULL,
  `eid` varchar(80) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`name`, `f_name`, `dob`, `gen`, `mar_sta`, `relig`, `comm`, `lang1`, `lang2`, `lang3`, `ed_cr_1`, `ed_bd_1`, `ed_yr_1`, `ed_perc_1`, `ed_cr_2`, `ed_bd_2`, `ed_yr_2`, `ed_perc_2`, `ed_cr_3`, `ed_bd_3`, `ed_yr_3`, `ed_perc_3`, `ed_cr_4`, `ed_bd_4`, `ed_yr_4`, `ed_perc_4`, `ed_cr_5`, `ed_bd_5`, `ed_yr_5`, `ed_perc_5`, `ed_cr_6`, `ed_bd_6`, `ed_yr_6`, `ed_perc_6`, `fresh`, `ex_pos_1`, `ex_ins_1`, `ex_prd_1`, `ex_pos_2`, `ex_ins_2`, `ex_prd_2`, `ex_pos_3`, `ex_ins_3`, `ex_prd_3`, `ex_pos_4`, `ex_ins_4`, `ex_prd_4`, `ex_pos_5`, `ex_ins_5`, `ex_prd_5`, `ex_pos_6`, `ex_ins_6`, `ex_prd_6`, `addr`, `regn`, `cty`, `post_pref`, `sub_pref`, `lan_no`, `mob_no`, `eid`) VALUES
('S.V.Shanmukarajan', 'R.S.Senthilkumar', '1992-12-15', 'MALE', 'Single', 'Hindu', 'BC', 'English', 'Tamil', 'Hindi', 'H.S.C', 'Sri Shanmuka matrci hr. sec school', '2010', '89%', 'B.Ed', 'Kings college', '2014', '88%', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Teacher', 'Kings college of engineering', '2014', 'Teacher', 'engineering', '2016', '', '', '', '', '', '', '', '', '', '', '', '', '131/2,K.K.nagar,\r\nKalavaikarai Main road.', 'Mannargudi', 'Thiruvarur', 'Teaching', 'ENGLISH', '04367-225523', '8220598785', 'shanmukarajan1@gmail.com'),
('Saranya', 'Thangavel', '0000-00-00', 'FEMALE', 'Single', 'Hindu', 'BC', 'Tamil', 'English', '', 'B.Ed', 'Nagai college of Education,Nagapattinam', 'May 2014', '65%', 'MA Tamil', 'Kunthvai Natchiyar Arts & Science College, Thanjavur', 'May 2013', '62%', 'HSC', 'Government Higher Secondary School, Kottur', 'May 2008', '67%', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3/345, Azagirikottagam,\r\nThirukkalar - 614710', 'Mannargudi', 'Thiruvarur', 'Teaching', 'TAMIL', '+919787576188', '+919780043188', 'vnpmuyyam@gmail.com'),
('meenakshi sundaram', 'rajagopal', '1948-04-18', 'MALE', 'Married', 'hindu', 'BC', 'ENGLISH', 'TAMIL', '', 'BCOM', 'MYSORE UNIVERSITY', '1980', '75%', 'SSLC', 'NATIONAL HIGH SCHOOL MQ', '1964', '60%', 'DCOM', 'INDIAN MERCHANTS CHAMBER', '1976', '60%', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'ACCOUNTS MANAGER', 'TVS GROUP OF COMPANIES', '2O YEARS', 'ACCOUNTS MANAGER', 'CHENNAI AIRPORT -QATAR AIRWAYS', '06 YEARS', '', '', '', '', '', '', '', '', '', '', '', '', '48E1 ANNAVASAL SENIYA ST MUTHU PILLAI GARDEN MANNARGUDI', 'MANNARGUDI', 'MANNARGUDI', 'ANY', 'ENGLISH', '0', '9640839305', 'meisun4r@yahoo.com'),
('Praveen', 'Selvakumar', '1992-12-15', 'MALE', 'Divorced', 'Hindu', 'MBC', 'English', 'Tamil', 'Hindi', 'H.S.C', 'Sri Shanmuka matrci hr. sec school', '2010', '89%', 'B.Ed', 'Kings college', '2014', '88%', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Teacher', 'Kings college of engineering', '2014', 'Teacher', 'engineering', '2016', '', '', '', '', '', '', '', '', '', '', '', '', '131/2,K.K.nagar,\r\nKalavaikarai Main road.', 'Mannargudi', 'Thiruvarur', 'Manager', 'BIOLOGY', '84307-285023', '5228598775', 'prave9n@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
