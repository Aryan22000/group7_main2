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
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `Email` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Password` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Scope` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Semester` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Email`, `Password`, `Name`, `Scope`, `Semester`) VALUES
('xxeyy.10@demo.com', 'abcd.10', 'xxeyy.10', 'peergroup2', 'Autumn 2023'),
('xxeyy.11@demo.com', 'abcd.11', 'xxeyy.11', 'peergroup3', 'Autumn 2022'),
('xxeyy.12@demo.com', 'abcd.12', 'xxeyy.12', 'peergroup4', 'Autumn 2023'),
('xxeyy.13@demo.com', 'abcd.13', 'xxeyy.13', 'peergroup2', 'Autumn 2022'),
('xxeyy.14@demo.com', 'abcd.14', 'xxeyy.14', 'peergroup1', 'Autumn 2023'),
('xxeyy.15@demo.com', 'abcd.15', 'xxeyy.15', 'peergroup4', 'Autumn 2022'),
('xxeyy.16@demo.com', 'abcd.16', 'xxeyy.16', 'peergroup3', 'Autumn 2023'),
('xxeyy.17@demo.com', 'abcd.17', 'xxeyy.17', 'peergroup1', 'Autumn 2022'),
('xxeyy.18@demo.com', 'abcd.18', 'xxeyy.18', 'peergroup2', 'Autumn 2023'),
('xxeyy.19@demo.com', 'abcd.19', 'xxeyy.19', 'peergroup3', 'Autumn 2022'),
('xxeyy.1@demo.com', 'abcd.1', 'xxeyy.1', 'peergroup1', 'Autumn 2022'),
('xxeyy.20@demo.com', 'abcd.20', 'xxeyy.20', 'peergroup4', 'Autumn 2023'),
('xxeyy.21@demo.com', 'abcd.21', 'xxeyy.21', 'peergroup2', 'Autumn 2022'),
('xxeyy.22@demo.com', 'abcd.22', 'xxeyy.22', 'peergroup1', 'Autumn 2023'),
('xxeyy.23@demo.com', 'abcd.23', 'xxeyy.23', 'peergroup4', 'Autumn 2022'),
('xxeyy.24@demo.com', 'abcd.24', 'xxeyy.24', 'peergroup3', 'Autumn 2023'),
('xxeyy.25@demo.com', 'abcd.25', 'xxeyy.25', 'peergroup1', 'Autumn 2022'),
('xxeyy.26@demo.com', 'abcd.26', 'xxeyy.26', 'peergroup2', 'Autumn 2023'),
('xxeyy.27@demo.com', 'abcd.27', 'xxeyy.27', 'peergroup3', 'Autumn 2022'),
('xxeyy.28@demo.com', 'abcd.28', 'xxeyy.28', 'peergroup4', 'Autumn 2023'),
('xxeyy.29@demo.com', 'abcd.29', 'xxeyy.29', 'peergroup2', 'Autumn 2022'),
('xxeyy.2@demo.com', 'abcd.2', 'xxeyy.2', 'peergroup2', 'Autumn 2023'),
('xxeyy.30@demo.com', 'abcd.30', 'xxeyy.30', 'peergroup1', 'Autumn 2023'),
('xxeyy.31@demo.com', 'abcd.31', 'xxeyy.31', 'peergroup4', 'Autumn 2022'),
('xxeyy.32@demo.com', 'abcd.32', 'xxeyy.32', 'peergroup3', 'Autumn 2023'),
('xxeyy.33@demo.com', 'abcd.33', 'xxeyy.33', 'peergroup1', 'Autumn 2022'),
('xxeyy.34@demo.com', 'abcd.34', 'xxeyy.34', 'peergroup2', 'Autumn 2023'),
('xxeyy.35@demo.com', 'abcd.35', 'xxeyy.35', 'peergroup3', 'Autumn 2022'),
('xxeyy.36@demo.com', 'abcd.36', 'xxeyy.36', 'peergroup4', 'Autumn 2023'),
('xxeyy.37@demo.com', 'abcd.37', 'xxeyy.37', 'peergroup2', 'Autumn 2022'),
('xxeyy.38@demo.com', 'abcd.38', 'xxeyy.38', 'peergroup1', 'Autumn 2023'),
('xxeyy.39@demo.com', 'abcd.39', 'xxeyy.39', 'peergroup4', 'Autumn 2022'),
('xxeyy.3@demo.com', 'abcd.3', 'xxeyy.3', 'peergroup3', 'Autumn 2022'),
('xxeyy.40@demo.com', 'abcd.40', 'xxeyy.40', 'peergroup3', 'Autumn 2023'),
('xxeyy.41@demo.com', 'abcd.41', 'xxeyy.41', 'peergroup1', 'Autumn 2022'),
('xxeyy.42@demo.com', 'abcd.42', 'xxeyy.42', 'peergroup2', 'Autumn 2023'),
('xxeyy.43@demo.com', 'abcd.43', 'xxeyy.43', 'peergroup3', 'Autumn 2022'),
('xxeyy.44@demo.com', 'abcd.44', 'xxeyy.44', 'peergroup4', 'Autumn 2023'),
('xxeyy.45@demo.com', 'abcd.45', 'xxeyy.45', 'peergroup2', 'Autumn 2022'),
('xxeyy.46@demo.com', 'abcd.46', 'xxeyy.46', 'peergroup1', 'Autumn 2023'),
('xxeyy.47@demo.com', 'abcd.47', 'xxeyy.47', 'peergroup4', 'Autumn 2022'),
('xxeyy.48@demo.com', 'abcd.48', 'xxeyy.48', 'peergroup3', 'Autumn 2023'),
('xxeyy.49@demo.com', 'abcd.49', 'xxeyy.49', 'peergroup1', 'Autumn 2022'),
('xxeyy.4@demo.com', 'abcd.4', 'xxeyy.4', 'peergroup4', 'Autumn 2023'),
('xxeyy.50@demo.com', 'abcd.50', 'xxeyy.50', 'peergroup2', 'Autumn 2023'),
('xxeyy.51@demo.com', 'abcd.51', 'xxeyy.51', 'peergroup3', 'Autumn 2022'),
('xxeyy.52@demo.com', 'abcd.52', 'xxeyy.52', 'peergroup4', 'Autumn 2023'),
('xxeyy.53@demo.com', 'abcd.53', 'xxeyy.53', 'peergroup2', 'Autumn 2022'),
('xxeyy.5@demo.com', 'abcd.5', 'xxeyy.5', 'peergroup2', 'Autumn 2022'),
('xxeyy.6@demo.com', 'abcd.6', 'xxeyy.6', 'peergroup1', 'Autumn 2023'),
('xxeyy.7@demo.com', 'abcd.7', 'xxeyy.7', 'peergroup4', 'Autumn 2022'),
('xxeyy.8@demo.com', 'abcd.8', 'xxeyy.8', 'peergroup3', 'Autumn 2023'),
('xxeyy.9@demo.com', 'abcd.9', 'xxeyy.9', 'peergroup1', 'Autumn 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
