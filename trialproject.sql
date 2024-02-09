-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2024 at 03:59 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitaleb_trialproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `trialproject`
--

CREATE TABLE `trialproject` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medical_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medical_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_maps_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local_area_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RABIVAX` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RABIPUR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Abhayrab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AbhayrabPF` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ChiroRab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Zuvirab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Surerab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BERAB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trialproject`
--
ALTER TABLE `trialproject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trialproject`
--
ALTER TABLE `trialproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
