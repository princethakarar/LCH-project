-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 09:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lch`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`email`, `password`) VALUES
('16219421024@atmiyaun', '2112');

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE `signup_table` (
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`username`, `email`, `password`) VALUES
('Rathodkeva', 'kevalrathod2112@gmail.com', '2112'),
('dhaval suc', 'dhavalsuchak@gmail.com', '1111'),
('janil vach', 'janilvachhani@gmail.com', '2163'),
('rk', 'keval@gmail.com', '2112'),
('kj', 'keval@gmail.com', '1827'),
('kj', 'keval@gmail.com', '1827'),
('kj', '16219421024@atmiyauni.edu.in', '2334');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
