-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 07:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `reg_id` int(11) NOT NULL,
  `veh_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `vehimg` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bkdate` varchar(255) NOT NULL,
  `purdate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`reg_id`, `veh_id`, `cus_name`, `vehimg`, `price`, `status`, `bkdate`, `purdate`) VALUES
(16, 11, 'rushiket', './uploads/Cadillac-XLR-V-Grey-Car-PNG-Image.png', 450000, 'Purchase Pending', '23rd of December 2022', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_Name` varchar(50) NOT NULL,
  `Cus_Pass` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_Name`, `Cus_Pass`, `Address`) VALUES
('rushiket', '1234', 'Valpoi-Goa'),
('rutij navelkar', '1234', 'panaji-goa');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `Deal_Name` varchar(50) NOT NULL,
  `Deal_Pass` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`Deal_Name`, `Deal_Pass`, `Address`) VALUES
('Benefactor', 'amalgum', 'Chennai-Tamil Nadu'),
('Pegasus', 'onyx', 'Mumbai-Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(100) NOT NULL,
  `deal_name` varchar(100) NOT NULL,
  `veh_price` int(11) NOT NULL,
  `veh_model` varchar(50) NOT NULL,
  `veh_type` varchar(50) NOT NULL,
  `veh_mileage` varchar(100) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `vehimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `deal_name`, `veh_price`, `veh_model`, `veh_type`, `veh_mileage`, `fueltype`, `vehimg`) VALUES
(2, 'Benefactor', 1500000, 'Mercedes Benz SL Class', 'Sports', '16kmpl', 'Petrol', './uploads/Merc benz SL class.png'),
(5, 'Pegasus', 2500000, 'm1', 't1', '9.8kmpl', 'Diesel', './uploads/vehicle-4.png'),
(11, 'Pegasus', 450000, 'm1', 't1', '9.8kmpl', 'Petrol', './uploads/Cadillac-XLR-V-Grey-Car-PNG-Image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `fk_cusname` (`cus_name`),
  ADD KEY `fk_vid` (`veh_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_Name`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`Deal_Name`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`),
  ADD KEY `fk_dealname` (`deal_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_cusname` FOREIGN KEY (`cus_name`) REFERENCES `customer` (`Cus_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vid` FOREIGN KEY (`veh_id`) REFERENCES `vehicle` (`veh_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_dealname` FOREIGN KEY (`deal_name`) REFERENCES `dealer` (`Deal_Name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
