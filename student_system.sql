-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2014 at 09:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE IF NOT EXISTS `add_course` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`id`, `course_name`, `course_code`) VALUES
(1, 'Laravel', 'ITS 001'),
(2, 'Asp.Net', 'ITS 002'),
(3, 'Ubity 3D', 'ITS 003');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE IF NOT EXISTS `add_student` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`id`, `first_name`, `last_name`) VALUES
(8, 'Doha', 'Hasan'),
(10, '', ''),
(11, '', ''),
(12, 'Shajjad', 'Shuvo');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_table`
--

CREATE TABLE IF NOT EXISTS `mapping_table` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `student_id` int(15) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mapping_table`
--

INSERT INTO `mapping_table` (`id`, `first_name`, `last_name`, `student_id`, `course_name`, `course_id`) VALUES
(1, 'Shajjad', 'Shuvo', 0, '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
