-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 08:09 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE `cse` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fsubj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`id`, `fname`, `fsubj`) VALUES
(1, 'B.kiran kumar reddy', 'Management Science'),
(3, 'M.Praveen Kumar', 'DataMining Data Wharehousing'),
(4, 'Syed Riyazul Hiq', 'Advaced Computer Architecture'),
(5, 'Y.rokeshkumar', 'Cloud Computing'),
(6, 'G.Obula Reddy', 'Data base Security'),
(7, 'Ramudu', 'Linux programming');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `somthing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `result`, `somthing`) VALUES
(1, 'po', 'fname', ''),
(2, 'l', 'sname', ''),
(3, 'ln', 'branch', ''),
(4, 'klmv', 'fname', ''),
(5, 'kjc', 'sname', ''),
(6, 'jk', 'branch', ''),
(7, 'kiran', 'fname', ''),
(8, 'lala', 'sname', ''),
(9, 'lalalalalalala', 'branch', '');

-- --------------------------------------------------------

--
-- Table structure for table `otps`
--

CREATE TABLE `otps` (
  `Id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otps`
--

INSERT INTO `otps` (`Id`, `date`, `otp`) VALUES
(1, '2019-08-28 13:22:01', '70813'),
(2, '2019-08-28 13:22:03', '99038'),
(3, '2019-08-28 13:22:04', '67466'),
(4, '2019-08-28 13:22:05', '65260');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse`
--
ALTER TABLE `cse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse`
--
ALTER TABLE `cse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `otps`
--
ALTER TABLE `otps`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
