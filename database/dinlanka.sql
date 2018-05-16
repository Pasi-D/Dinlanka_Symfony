-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 04:26 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinlanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `air__freight`
--

CREATE TABLE `air__freight` (
  `id` int(11) NOT NULL,
  `departure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departure_date` datetime NOT NULL,
  `arrival` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arrival_date` datetime NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `airFreight_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Your_Message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `id` int(11) NOT NULL,
  `model_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_mapping__air`
--

CREATE TABLE `invoice_mapping__air` (
  `id` int(11) NOT NULL,
  `Bill_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dinLankaBill_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_mapping__sea`
--

CREATE TABLE `invoice_mapping__sea` (
  `id` int(11) NOT NULL,
  `Bill_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dinLankaBill_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sea__freight`
--

CREATE TABLE `sea__freight` (
  `id` int(11) NOT NULL,
  `departure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departure_date` datetime NOT NULL,
  `arrival` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arrival_date` datetime NOT NULL,
  `current_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seaFreight_bill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `join_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `permissions` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air__freight`
--
ALTER TABLE `air__freight`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3E4E68531A8C12F5` (`bill_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C7A2EC1B7975B7E7` (`model_id`),
  ADD UNIQUE KEY `UNIQ_C7A2EC1B737452E1` (`model_name`);

--
-- Indexes for table `invoice_mapping__air`
--
ALTER TABLE `invoice_mapping__air`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8E8F1E85D5312B69` (`Bill_id`),
  ADD UNIQUE KEY `UNIQ_8E8F1E85283849E1` (`dinLankaBill_id`);

--
-- Indexes for table `invoice_mapping__sea`
--
ALTER TABLE `invoice_mapping__sea`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B9266749D5312B69` (`Bill_id`),
  ADD UNIQUE KEY `UNIQ_B9266749283849E1` (`dinLankaBill_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_AA08CB10A76ED395` (`user_id`);

--
-- Indexes for table `sea__freight`
--
ALTER TABLE `sea__freight`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_18EEB31CB6152A56` (`seaFreight_bill`),
  ADD UNIQUE KEY `UNIQ_18EEB31C1A8C12F5` (`bill_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `air__freight`
--
ALTER TABLE `air__freight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_mapping__air`
--
ALTER TABLE `invoice_mapping__air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_mapping__sea`
--
ALTER TABLE `invoice_mapping__sea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sea__freight`
--
ALTER TABLE `sea__freight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `air__freight`
--
ALTER TABLE `air__freight`
  ADD CONSTRAINT `FK_3E4E68531A8C12F5` FOREIGN KEY (`bill_id`) REFERENCES `invoice_mapping__air` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_AA08CB10A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `sea__freight`
--
ALTER TABLE `sea__freight`
  ADD CONSTRAINT `FK_18EEB31C1A8C12F5` FOREIGN KEY (`bill_id`) REFERENCES `invoice_mapping__sea` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
