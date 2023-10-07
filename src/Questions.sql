-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 07, 2023 at 06:32 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `Email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Cat1` decimal(2,1) DEFAULT NULL,
  `Cat2` decimal(2,1) DEFAULT NULL,
  `Cat3` decimal(2,1) DEFAULT NULL,
  `Cat4` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`Email`, `Cat1`, `Cat2`, `Cat3`, `Cat4`) VALUES
('xxeyy.10@demo.com', 1.0, 2.0, 3.5, 2.5),
('xxeyy.11@demo.com', 4.0, 3.5, 1.5, 2.0),
('xxeyy.12@demo.com', 2.0, 3.5, 2.5, 4.0),
('xxeyy.13@demo.com', 4.0, 3.5, 3.5, 2.0),
('xxeyy.14@demo.com', 2.5, 3.5, 3.5, 3.5),
('xxeyy.15@demo.com', 4.0, 3.0, 2.0, 3.5),
('xxeyy.16@demo.com', 3.0, 3.0, 3.0, 2.0),
('xxeyy.17@demo.com', 3.0, 3.0, 3.0, 2.0),
('xxeyy.18@demo.com', 3.5, 3.0, 1.5, 3.5),
('xxeyy.19@demo.com', 3.0, 3.5, 2.5, 4.5),
('xxeyy.1@demo.com', 3.0, 3.0, 3.0, 3.0),
('xxeyy.20@demo.com', 1.0, 1.5, 2.0, 3.5),
('xxeyy.21@demo.com', 4.5, 1.5, 2.5, 4.5),
('xxeyy.22@demo.com', 4.0, 3.0, 4.5, 3.0),
('xxeyy.23@demo.com', 3.5, 3.0, 2.0, 3.0),
('xxeyy.24@demo.com', 3.0, 1.5, 1.5, 3.5),
('xxeyy.25@demo.com', 3.0, 3.5, 3.5, 3.0),
('xxeyy.26@demo.com', 2.0, 3.0, 3.5, 4.0),
('xxeyy.27@demo.com', 3.0, 2.5, 3.5, 1.5),
('xxeyy.28@demo.com', 3.0, 3.0, 2.5, 3.0),
('xxeyy.29@demo.com', 3.5, 3.0, 3.5, 4.5),
('xxeyy.2@demo.com', 3.0, 3.0, 2.0, 2.0),
('xxeyy.30@demo.com', 3.0, 2.0, 3.5, 2.0),
('xxeyy.31@demo.com', 2.5, 4.0, 2.0, 2.5),
('xxeyy.32@demo.com', 3.5, 2.0, 1.5, 2.5),
('xxeyy.33@demo.com', 4.0, 3.0, 3.0, 4.0),
('xxeyy.34@demo.com', 2.5, 2.0, 2.5, 4.0),
('xxeyy.35@demo.com', 1.5, 4.5, 5.0, 2.5),
('xxeyy.36@demo.com', 3.5, 3.0, 2.5, 3.5),
('xxeyy.37@demo.com', 2.5, 4.5, 3.5, 2.0),
('xxeyy.38@demo.com', 4.5, 2.5, 4.0, 4.5),
('xxeyy.39@demo.com', 4.5, 2.5, 2.0, 1.5),
('xxeyy.3@demo.com', 2.5, 4.0, 2.5, 2.5),
('xxeyy.40@demo.com', 1.5, 2.0, 2.0, 2.0),
('xxeyy.41@demo.com', 3.0, 3.5, 2.0, 2.0),
('xxeyy.42@demo.com', 4.0, 3.0, 4.5, 3.0),
('xxeyy.43@demo.com', 5.0, 2.5, 1.5, 4.5),
('xxeyy.44@demo.com', 5.0, 2.0, 2.0, 2.0),
('xxeyy.45@demo.com', 2.0, 5.0, 3.5, 2.0),
('xxeyy.46@demo.com', 2.0, 2.0, 5.0, 2.0),
('xxeyy.47@demo.com', 4.5, 3.0, 4.5, 3.0),
('xxeyy.48@demo.com', 3.0, 3.5, 3.5, 4.0),
('xxeyy.49@demo.com', 3.0, 2.5, 2.5, 2.0),
('xxeyy.4@demo.com', 3.0, 3.0, 2.5, 3.0),
('xxeyy.50@demo.com', 3.0, 3.0, 3.0, 2.0),
('xxeyy.51@demo.com', 2.0, 2.0, 4.0, 3.0),
('xxeyy.52@demo.com', 2.0, 2.5, 2.5, 1.5),
('xxeyy.53@demo.com', 1.0, 2.0, 1.0, 5.0),
('xxeyy.5@demo.com', 3.5, 1.5, 3.5, 5.0),
('xxeyy.6@demo.com', 2.5, 3.0, 3.0, 3.0),
('xxeyy.7@demo.com', 3.0, 3.0, 2.5, 4.0),
('xxeyy.8@demo.com', 4.0, 3.0, 3.0, 4.0),
('xxeyy.9@demo.com', 3.5, 4.0, 2.0, 4.0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
