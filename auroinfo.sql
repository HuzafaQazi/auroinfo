-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 08:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auroinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auro_engineer`
--

CREATE TABLE `auro_engineer` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `ADHAR_NUMBER` varchar(30) DEFAULT NULL,
  `ADDRESS` text NOT NULL,
  `SALARY` varchar(255) DEFAULT NULL,
  `POSITION` int(5) NOT NULL DEFAULT 1,
  `STATUS` int(1) NOT NULL DEFAULT 0,
  `CREATED_ON` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auro_engineer_documents`
--

CREATE TABLE `auro_engineer_documents` (
  `ID` int(10) NOT NULL,
  `ENGINEER_ID` int(10) NOT NULL DEFAULT 0,
  `DOCUMENTS` varchar(500) DEFAULT NULL,
  `TYPE` int(1) NOT NULL DEFAULT 0 COMMENT '1=image, 2=pdf',
  `CREATED_ON` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auro_engineer_experience`
--

CREATE TABLE `auro_engineer_experience` (
  `ID` int(10) NOT NULL,
  `ENGINEER_ID` int(10) NOT NULL DEFAULT 0,
  `NAME` varchar(255) DEFAULT NULL,
  `EXPERIENCE` varchar(50) DEFAULT NULL,
  `CTC` varchar(50) DEFAULT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auro_engineer`
--
ALTER TABLE `auro_engineer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `auro_engineer_documents`
--
ALTER TABLE `auro_engineer_documents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `auro_engineer_experience`
--
ALTER TABLE `auro_engineer_experience`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auro_engineer`
--
ALTER TABLE `auro_engineer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auro_engineer_documents`
--
ALTER TABLE `auro_engineer_documents`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auro_engineer_experience`
--
ALTER TABLE `auro_engineer_experience`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
