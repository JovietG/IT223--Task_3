-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2026 at 09:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malbino__it223_task_3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `institute` varchar(50) NOT NULL,
  `major` varchar(50) DEFAULT NULL,
  `gwa` decimal(3,2) DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `institute`, `major`, `gwa`, `enrollment_date`) VALUES
(1, 'Mikha Salamander', 'IC', 'Information Technology', 1.75, '2022-09-01'),
(2, 'Maloi Ka', 'IC', 'Information System', 1.50, '2021-09-01'),
(3, 'Stacey King', 'IC', 'Information Technology', 1.50, '2022-02-10'),
(4, 'Aiah Kananaman', 'IAAS', 'Bachelor of Science in Food Technology', 2.00, '2020-09-01'),
(5, 'Gwen Chana', 'ILEGG', 'Bachelor of Public Administration', 2.25, '2023-01-15'),
(6, 'Colet Madelo', 'ILEGG', 'Bachelor of Science in Social Work', 1.75, '2022-02-10'),
(7, 'Jhoanna Grand', 'iteD', 'Bachelor of Arts in Communication', 1.25, '2023-01-15'),
(8, 'Sheena Magdayao', 'iteD', 'Bachelor of Secondary Education', 2.50, '2022-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
