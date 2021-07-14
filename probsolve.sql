-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 12:40 PM
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
-- Database: `probsolve`
--

-- --------------------------------------------------------

--
-- Table structure for table `machine related problem`
--

CREATE TABLE `machine related problem` (
  `probdes` varchar(300) NOT NULL,
  `probsol` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine related problem`
--

INSERT INTO `machine related problem` (`probdes`, `probsol`) VALUES
('coolant pipe jammed.', 'check pressure, if pressure OK, replace pipe then set to correct value.'),
('new prob', 'solution input'),
('new new prob', 'new sol'),
('new machine', 'new sol'),
('test1', 'solv test 1');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `probdes` varchar(300) NOT NULL,
  `probsol` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`probdes`, `probsol`) VALUES
('machine nahi chalat hai', 'company band kardo.'),
('new other', 'new solo'),
('matter not found', 'matter found'),
('try', 'sol try');

-- --------------------------------------------------------

--
-- Table structure for table `probtable`
--

CREATE TABLE `probtable` (
  `pt_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `to_table` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `probtable`
--

INSERT INTO `probtable` (`pt_id`, `cat_id`, `to_table`) VALUES
(1, 1, 'machine related problem'),
(2, 2, 'tool related problem'),
(3, 3, 'work piece related problem'),
(4, 4, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `requestedprob`
--

CREATE TABLE `requestedprob` (
  `id` int(255) NOT NULL,
  `probdes` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestedprob`
--

INSERT INTO `requestedprob` (`id`, `probdes`, `category`) VALUES
(1, '1st request', 'machine related problem'),
(2, '2nd request', 'tool related problem'),
(3, '3rd request', 'work piece related problem'),
(4, '4th request', 'others'),
(5, '4th request', 'others'),
(6, 'latest by 14/07', 'machine related problem');

-- --------------------------------------------------------

--
-- Table structure for table `tool related problem`
--

CREATE TABLE `tool related problem` (
  `probdes` varchar(300) NOT NULL,
  `probsol` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tool related problem`
--

INSERT INTO `tool related problem` (`probdes`, `probsol`) VALUES
('frequent breaking of tool tip.', 'check CNC-Code for Speed, RPM & Position of work piece.\r\n'),
('new tool', 'new tool sol');

-- --------------------------------------------------------

--
-- Table structure for table `work piece related problem`
--

CREATE TABLE `work piece related problem` (
  `probdes` varchar(300) NOT NULL,
  `probsol` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work piece related problem`
--

INSERT INTO `work piece related problem` (`probdes`, `probsol`) VALUES
('Burr Appearing on Work Piece', 'Check depth of cut'),
('new work', 'new work sol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `probtable`
--
ALTER TABLE `probtable`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `requestedprob`
--
ALTER TABLE `requestedprob`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `probtable`
--
ALTER TABLE `probtable`
  MODIFY `pt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requestedprob`
--
ALTER TABLE `requestedprob`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
