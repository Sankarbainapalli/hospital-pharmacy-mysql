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
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `patient_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobilenumber` varchar(60) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5) ON UPDATE CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`patient_id`, `name`, `mobilenumber`, `doctorname`, `course`, `amount`, `date`, `created_at`) VALUES
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-20', '0000-00-00 00:00:00.00000'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-20', '2018-06-20 10:29:54.02026'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'COSTOCHONDRAL INJECTION', '500', '2018-06-20', '2018-06-20 10:33:54.51401'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'PERIPHERAL NERVE BLOCKS', '240', '2018-06-20', '2018-06-20 10:35:56.76600'),
('20061801', 'Sowmya', '8886021616', 'Mrs sumitra', 'INTERLAMINAR EPIDURAL INJECTION', '240', '2018-06-20', '2018-06-20 10:56:44.82439'),
('20061803', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '240', '2018-06-20', '2018-06-20 11:11:42.40673'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'INTERLAMINAR EPIDURAL INJECTION', '500', '2018-06-20', '2018-06-20 12:03:23.15808'),
('20061800', 'Sankar', '7661910404', 'Mr Gupta', 'kNEE JOINT INJECTION', '240', '2018-06-20', '2018-06-20 15:05:38.87117');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
