-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 02:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fine_grained`
--

-- --------------------------------------------------------

--
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `file_name` varchar(45) NOT NULL,
  `request` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `size` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'No',
  `status2` varchar(45) NOT NULL DEFAULT 'No',
  `author` varchar(45) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`file_name`, `request`, `date`, `size`, `status`, `status2`, `author`) VALUES
('DATA SCIENCE.docx', 'keerthi@gmail.com', '2021-05-27 03:57:15', '14069', 'Key Request', 'yes', 'Issued');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `skey` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_name`, `size`, `date`, `skey`) VALUES
('4.PNG', '1270117', '2021-05-27 06:26:47', NULL),
('DATA SCIENCE.docx', '14069', '2021-05-21 22:54:51', 'F8!4yPqMU9GK'),
('Day Report - Keerthana (1) (6) (1) (5) (4).xl', '44394', '2021-05-23 20:25:12', NULL),
('Keertana.pdf', '106837', '2021-05-23 20:21:11', NULL),
('New Text Document.txt', '28', '2021-05-27 23:39:00', NULL),
('photo.jpg', '65151', '2021-05-27 06:42:39', NULL),
('Training@Unicoder.docx', '3743270', '2021-05-27 06:22:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_download`
--

CREATE TABLE `f_download` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(45) NOT NULL,
  `down` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_download`
--

INSERT INTO `f_download` (`id`, `file_name`, `down`) VALUES
(1, 'DATA SCIENCE.docx', 'keerthi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `phoneno` varchar(45) NOT NULL,
  `one_key` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `name`, `password`, `mail`, `phoneno`, `one_key`) VALUES
('keerthi', 'keerthi', '123', 'keerthi@gmail.com', '987654321', '8126'),
('keerthi', 'keerthana', '12345', 'keerthisri20393@gmail.com', '9876543210', '3157'),
('varuni', 'varuni', 'qwerty', 'varuni@gmail.com', '7827838838', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trustee`
--

CREATE TABLE `trustee` (
  `file_name` varchar(45) NOT NULL,
  `request` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `size` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `status1` varchar(45) NOT NULL DEFAULT 'No',
  `trust` varchar(45) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trustee`
--

INSERT INTO `trustee` (`file_name`, `request`, `date`, `size`, `status`, `status1`, `trust`) VALUES
('DATA SCIENCE.docx', 'keerthi@gmail.com', '2021-05-27 01:51:53', '14069', 'Request', 'yes', 'Issued'),
('Keertana.pdf', 'keerthi@gmail.com', '2021-05-27 01:53:21', '106837', 'Request', 'yes', 'Issued');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`file_name`,`request`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_name`);

--
-- Indexes for table `f_download`
--
ALTER TABLE `f_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `trustee`
--
ALTER TABLE `trustee`
  ADD PRIMARY KEY (`file_name`,`request`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_download`
--
ALTER TABLE `f_download`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
