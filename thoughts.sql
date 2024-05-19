-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 02:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thoughts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(400) NOT NULL,
  `ad_password` varchar(4) NOT NULL,
  `ad_conf_password` varchar(4) NOT NULL,
  `ad_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_password`, `ad_conf_password`, `ad_email`) VALUES
(0, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `all_thoughts`
--

CREATE TABLE `all_thoughts` (
  `thoughts_id` int(11) NOT NULL,
  `thoughts_name` varchar(200) NOT NULL,
  `thoughts_image` varchar(500) NOT NULL,
  `keywords` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL,
  `conf_password` varchar(6) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `education` varchar(500) NOT NULL,
  `contect_number` int(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `lang_spoken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `conf_password`, `name`, `email`, `gender`, `age`, `education`, `contect_number`, `address`, `lang_spoken`) VALUES
(1, 'nikuu', 'nikuu', 'nikuu', 'dnb', '', '', 0, '', 0, '', ''),
(2, 'a', 'a', 'a', 'a', '', '', 0, '', 0, '', ''),
(3, 'manav', 'manav', 'manav', '', '', '', 0, '', 0, '', ''),
(4, 'vaibhav', 'vaibha', 'vaibha', '', '', '', 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `types_name` varchar(200) NOT NULL,
  `types_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `all_thoughts`
--
ALTER TABLE `all_thoughts`
  ADD PRIMARY KEY (`thoughts_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
