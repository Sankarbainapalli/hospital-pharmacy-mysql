-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 11:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_tb`
--

CREATE TABLE `registration_tb` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `attachment` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `amount` int(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `doctors` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patient_id` varchar(255) NOT NULL,
  `patient` varchar(20) NOT NULL,
  `age` int(30) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tb`
--

INSERT INTO `registration_tb` (`id`, `name`, `fathername`, `mobilenumber`, `bloodgroup`, `gender`, `doctorname`, `attachment`, `dateofbirth`, `amount`, `address`, `doctors`, `created_at`, `patient_id`, `patient`, `age`, `date`, `course`) VALUES
(1, 'Sankar', 'Mahendra', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 1000, 'Hyderabad', '', '2018-06-20 09:45:44', '20061800', '', 35, '2018-06-20', ''),
(2, 'Sowmya', 'Mahendra', '8886021616', '', 'Female', 'Mrs sumitra', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 10:55:14', '20061801', '', 23, '2018-06-20', ''),
(3, 'Sowmya', 'Mahendra', '8886021616', '', 'Female', 'Mr Gupta', '', '0000-00-00', 7000, 'Suchitra', '', '2018-06-20 11:07:10', '20061802', '', 23, '2018-06-20', ''),
(4, 'Sankar', 'Dhanupati', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:08:22', '20061803', '', 23, '2018-06-20', ''),
(5, 'Rakesh', 'Raghu', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:16:41', '20061804', '', 23, '2018-06-20', ''),
(6, 'Eswar', 'Dhamodhar', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:20:26', '20061805', '', 23, '2018-06-20', ''),
(7, 'Sanna', 'Trinadh', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 11:25:25', '20061806', '', 30, '2018-06-20', ''),
(8, 'Sijatha', 'Ramesh', '8886021616', '', 'Female', 'Mr Gupta', '', '0000-00-00', 240, 'Suchitra', '', '2018-06-20 11:26:25', '20061807', '', 23, '2018-06-20', ''),
(9, 'Ramana', 'Rajesh', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 240, 'Hyderabad', '', '2018-06-20 12:16:00', 'C0008', '', 35, '2018-06-20', ''),
(10, 'Sankar', 'Ramarao', '7661910404', '', 'Male', 'Mr Gupta', '', '0000-00-00', 500, 'Suchitra', '', '2018-06-20 14:34:49', 'C0009', '', 23, '2018-06-20', ''),
(11, 'Sankar', 'Ramarao', '7661910404', '', 'Male', 'Mrs sumitra', '', '0000-00-00', 7000, 'Hyderabad', '', '2018-06-20 15:04:24', 'C0010', '', 35, '2018-06-20', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_tb`
--
ALTER TABLE `registration_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_tb`
--
ALTER TABLE `registration_tb`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
