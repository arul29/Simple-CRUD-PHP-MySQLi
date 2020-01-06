-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 06:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_student`
--

CREATE TABLE `college_student` (
  `student_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `majors` varchar(40) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_student`
--

INSERT INTO `college_student` (`student_id`, `name`, `majors`, `gender`, `address`) VALUES
('1111', 'Kenzo', 'Civil', 'Male', 'Yogyakarta'),
('2222', 'Iyan', 'Architect', 'Male', 'Yogyakarta'),
('3333', 'Andi', 'Informatics', 'Male', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_student`
--
ALTER TABLE `college_student`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
