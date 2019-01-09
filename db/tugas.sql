-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 06:02 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE IF NOT EXISTS `pelajar` (
  `student_no` varchar(8) NOT NULL,
  `student_name` varchar(32) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(32) NOT NULL,
  `address` varchar(128) NOT NULL,
  `active_flag` varchar(1) NOT NULL,
  `created_by` varchar(16) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(16) NOT NULL,
  `update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`student_no`, `student_name`, `gender`, `birth_date`, `birth_place`, `address`, `active_flag`, `created_by`, `created_on`, `update_by`, `update_on`) VALUES
('BDG0011', 'Adi Permana', 'Laki-laki', '1989-04-16', 'Bandung', 'Kp. Sekarawi\r\n', '', '', '2019-01-09 04:35:27', '', '0000-00-00 00:00:00'),
('BDG0012', 'Lana Wijaya', '', '1988-12-22', 'Bandung', 'Jl.Kubang selatan', '', '', '2019-01-09 04:38:36', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
