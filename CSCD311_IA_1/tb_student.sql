-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 04:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `st_id` int(10) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `program` varchar(5) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `stu_status` varchar(20) DEFAULT NULL,
  `guardian_name` varchar(40) DEFAULT NULL,
  `guardian_contact` int(10) DEFAULT NULL,
  `hall_of_residence` varchar(20) DEFAULT NULL,
  `year_of_admission` int(4) DEFAULT NULL,
  `year_of_completion` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`st_id`, `f_name`, `l_name`, `dob`, `gender`, `contact`, `program`, `course`, `email`, `address`, `nationality`, `stu_status`, `guardian_name`, `guardian_contact`, `hall_of_residence`, `year_of_admission`, `year_of_completion`) VALUES
(1064882, 'Kelvin', 'Boahene', '1998-06-30', 'MALE', 574879103, 'BSc.', 'Computer Science', 'kelvinboahene@gmail.com', 'Tema', 'Ghanaian', 'Regular', 'Isaac Amankwah', 572555486, 'Sarbah', 2016, 2020),
(10619557, 'Priscilla', 'Odame', '1999-05-18', 'FEMALE', 242917523, 'BSc.', 'Computer Science', 'priscillaodame5@gmail.com', 'Darkuman', 'Ghanaian', 'Regular', 'Samuel Odame', 246907331, 'Kwapong', 2016, 2020),
(10619757, 'Portia', 'Ansah', '1998-04-19', 'FEMALE', 241604442, 'BSc.', 'Computer Science', 'portiaansah15@gmail.com', 'Darkuman', 'Ghanaian', 'Regular', 'Joseph Ansah', 24617608, 'Kwapong', 2016, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`st_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
