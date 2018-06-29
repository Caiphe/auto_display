-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2018 at 04:06 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto_display`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_data`
--

CREATE TABLE `car_data` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `id_number` varchar(250) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `number_plate` varchar(255) NOT NULL,
  `car_make` varchar(255) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `addiotional_info` text NOT NULL,
  `pic_1` varchar(255) NOT NULL,
  `pic_2` varchar(255) NOT NULL,
  `pic_3` varchar(255) NOT NULL,
  `car_code` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_data`
--

INSERT INTO `car_data` (`user_id`, `name`, `surname`, `id_number`, `contact_number`, `invoice_number`, `number_plate`, `car_make`, `car_model`, `price`, `transmission`, `color`, `fuel_type`, `seats`, `addiotional_info`, `pic_1`, `pic_2`, `pic_3`, `car_code`, `date_time`) VALUES
(1, 'marc', 'johnson', '910424', '0749026530', '01299', 'ND235-456', 'BMW', 'i8 2017', 250000, 'manual', 'gray', 'Diesel', 4, '', '', '', '', '', '2018-06-13 19:06:21'),
(2, 'heath', 'Palmer', '8706041010101', '0846965677', '01293', 'ND 350-550', 'Mercedes', 'Benz', 8000000, 'Manual', 'Blue', 'Diesel', 4, '', '', '', '', '', '2018-06-10 15:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `make_id` int(11) NOT NULL,
  `make_name` varchar(255) NOT NULL,
  `registred_by` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`make_id`, `make_name`, `registred_by`, `date_time`) VALUES
(1, 'BMW', 'Ephra Ilunga', '2018-04-19 23:06:03'),
(2, 'Hyundai', 'Ephra Ilunga', '2018-04-19 23:06:52'),
(3, 'Suzuki', 'Ephra Ilunga', '2018-04-20 09:03:35'),
(4, 'Jaguar', 'Ephra Ilunga', '2018-04-20 09:24:15'),
(5, 'Ferari', 'Ephra Ilunga', '2018-04-25 23:25:07'),
(6, 'Honda', 'Ephra Ilunga', '2018-04-25 23:25:31'),
(7, 'Audi', 'Ephra Ilunga', '2018-04-25 23:25:45'),
(8, 'Mercedes', 'Ephra Ilunga', '2018-04-25 23:25:50'),
(9, 'Fords', 'Ephra Ilunga', '2018-04-29 10:33:41'),
(10, 'New Make', 'Ephra Ilunga', '2018-05-03 14:23:41'),
(11, 'Volvo', 'Ephra Ilunga', '2018-05-05 02:00:28'),
(12, 'Cytroen', 'Ephra Ilunga', '2018-05-05 02:00:40'),
(13, 'Nissan', 'Ephra Ilunga', '2018-05-05 02:00:53'),
(14, 'Toyota', 'Ephra Ilunga', '2018-05-05 02:00:58'),
(15, 'Cadillac', 'Ephra Ilunga', '2018-05-06 02:42:34'),
(16, 'Chery', 'Ephra Ilunga', '2018-05-06 02:43:53'),
(17, 'Chevrolet', 'Ephra Ilunga', '2018-05-06 02:45:20'),
(18, 'Dodge', 'Ephra Ilunga', '2018-05-06 02:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `make_id` varchar(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `registeredBy` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `make_id`, `model_name`, `registeredBy`, `date_time`) VALUES
(4, 'Suzuki', 'make3560', 'Ephra Ilunga', '2018-04-20 09:04:06'),
(5, 'BMW', 'Makblue', 'Ephra Ilunga', '2018-04-20 09:23:58'),
(8, 'Hyundai', 'hiun450', 'Ephra Ilunga', '2018-04-21 08:20:52'),
(9, 'Mercedes', 'Benz', 'Ephra Ilunga', '2018-04-25 23:26:06'),
(10, 'Fords', 'serie05', 'Ephra Ilunga', '2018-04-29 13:57:15'),
(11, 'Ferari', 'serie2018', 'Ephra Ilunga', '2018-04-30 01:59:49'),
(12, 'BMW', 'A5', 'Ephra Ilunga', '2018-04-30 05:03:15'),
(13, 'BMW', 'Calofornia', 'Ephra Ilunga', '2018-04-30 05:03:25'),
(14, 'BMW', 'Kalorado', 'Ephra Ilunga', '2018-04-30 05:03:34'),
(15, 'Honda', 'CityR2', 'Ephra Ilunga', '2018-05-03 03:26:59'),
(16, 'New Make', '1250', 'Ephra Ilunga', '2018-05-03 14:23:58'),
(17, 'BMW', 'i8', 'Ephra Ilunga', '2018-05-05 02:01:50'),
(18, 'BMW', 'A1', 'Ephra Ilunga', '2018-05-05 02:01:55'),
(19, 'BMW', 'WB', 'Ephra Ilunga', '2018-05-05 02:02:02'),
(20, 'BMW', 'A2', 'Ephra Ilunga', '2018-05-05 02:02:07'),
(21, 'BMW', 'A3', 'Ephra Ilunga', '2018-05-05 02:02:13'),
(22, 'Audi', 'X1', 'Ephra Ilunga', '2018-05-05 02:02:22'),
(23, 'Audi', 'X2', 'Ephra Ilunga', '2018-05-05 02:02:26'),
(24, 'Audi', 'X3', 'Ephra Ilunga', '2018-05-05 02:02:31'),
(25, 'Audi', 'X4', 'Ephra Ilunga', '2018-05-05 02:02:35'),
(26, 'Audi', '1 Series', 'Ephra Ilunga', '2018-05-05 02:03:50'),
(27, 'Audi', '2 Series', 'Ephra Ilunga', '2018-05-05 02:03:56'),
(28, 'Audi', '3 Series', 'Ephra Ilunga', '2018-05-05 02:04:03'),
(29, 'Audi', '4 Series', 'Ephra Ilunga', '2018-05-05 02:04:08'),
(30, 'Audi', '5 Series', 'Ephra Ilunga', '2018-05-05 02:04:14'),
(31, 'Audi', '6 Series', 'Ephra Ilunga', '2018-05-05 02:04:31'),
(32, 'Audi', '7 Series', 'Ephra Ilunga', '2018-05-05 02:04:42'),
(33, 'BMW', 'M1', 'Ephra Ilunga', '2018-05-06 02:40:34'),
(34, 'BMW', 'M2', 'Ephra Ilunga', '2018-05-06 02:40:43'),
(35, 'BMW', 'M4', 'Ephra Ilunga', '2018-05-06 02:40:53'),
(36, 'Audi', 'M5', 'Ephra Ilunga', '2018-05-06 02:41:02'),
(37, 'BMW', 'M6', 'Ephra Ilunga', '2018-05-06 02:41:11'),
(38, 'BMW', 'X1', 'Ephra Ilunga', '2018-05-06 02:41:19'),
(39, 'BMW', 'X2', 'Ephra Ilunga', '2018-05-06 02:41:26'),
(40, 'BMW', 'X4', 'Ephra Ilunga', '2018-05-06 02:41:35'),
(41, 'BMW', 'i3', 'Ephra Ilunga', '2018-05-06 02:41:48'),
(42, 'Cadillac', 'Bls', 'Ephra Ilunga', '2018-05-06 02:43:01'),
(43, 'Cadillac', 'Cts', 'Ephra Ilunga', '2018-05-06 02:43:11'),
(44, 'Cadillac', 'Fleetwood', 'Ephra Ilunga', '2018-05-06 02:43:21'),
(45, 'Cadillac', 'Srx', 'Ephra Ilunga', '2018-05-06 02:43:31'),
(46, 'Chery', 'J1', 'Ephra Ilunga', '2018-05-06 02:44:05'),
(47, 'Chery', 'J2', 'Ephra Ilunga', '2018-05-06 02:44:13'),
(48, 'Chery', 'J3', 'Ephra Ilunga', '2018-05-06 02:44:24'),
(49, 'Chery', 'J4', 'Ephra Ilunga', '2018-05-06 02:44:33'),
(50, 'Chery', 'J5', 'Ephra Ilunga', '2018-05-06 02:44:39'),
(51, 'Chery', 'J7', 'Ephra Ilunga', '2018-05-06 02:44:46'),
(52, 'Chery', 'QQ3', 'Ephra Ilunga', '2018-05-06 02:45:03'),
(53, 'Chevrolet', 'Aveo', 'Ephra Ilunga', '2018-05-06 02:45:41'),
(54, 'Chevrolet', 'Camaro', 'Ephra Ilunga', '2018-05-06 02:45:52'),
(55, 'Chevrolet', 'Captiva', 'Ephra Ilunga', '2018-05-06 02:46:03'),
(56, 'Chevrolet', 'Corsa Utility', 'Ephra Ilunga', '2018-05-06 02:46:17'),
(57, 'Chevrolet', 'Corvette', 'Ephra Ilunga', '2018-05-06 02:46:28'),
(58, 'Chevrolet', 'Lumina', 'Ephra Ilunga', '2018-05-06 02:46:39'),
(59, 'Chevrolet', 'Optra', 'Ephra Ilunga', '2018-05-06 02:46:48'),
(60, 'Chevrolet', 'Orlando', 'Ephra Ilunga', '2018-05-06 02:47:01'),
(61, 'Chevrolet', 'Spark', 'Ephra Ilunga', '2018-05-06 02:47:13'),
(62, 'Chevrolet', 'Traiblazer', 'Ephra Ilunga', '2018-05-06 02:47:27'),
(63, 'Chevrolet', 'Vivant', 'Ephra Ilunga', '2018-05-06 02:47:40'),
(64, 'Dodge', 'Caliber', 'Ephra Ilunga', '2018-05-06 02:48:52'),
(65, 'Dodge', 'Journey', 'Ephra Ilunga', '2018-05-06 02:49:03'),
(66, 'Dodge', 'Nitro', 'Ephra Ilunga', '2018-05-06 02:49:13'),
(67, 'Dodge', 'Ram', 'Ephra Ilunga', '2018-05-06 02:49:24'),
(68, 'Ferari', '308', 'Ephra Ilunga', '2018-05-06 02:49:41'),
(69, 'Ferari', '348', 'Ephra Ilunga', '2018-05-06 02:49:56'),
(70, 'Ferari', '360', 'Ephra Ilunga', '2018-05-06 02:50:05'),
(71, 'Ferari', '458', 'Ephra Ilunga', '2018-05-06 02:50:16'),
(72, 'Ferari', 'California', 'Ephra Ilunga', '2018-05-06 02:50:29'),
(73, 'Ferari', 'F12', 'Ephra Ilunga', '2018-05-06 02:50:43'),
(74, 'Ferari', 'F430', 'Ephra Ilunga', '2018-05-06 02:51:00'),
(75, 'Honda', 'BX7', 'Ephra Ilunga', '2018-05-06 07:31:26'),
(76, 'Jaguar', 'E5', 'Ephra Ilunga', '2018-05-08 05:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notifications` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `posted_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL,
  `prices` float NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `prices`, `date_time`) VALUES
(14, 25000, '2018-05-13 13:04:02'),
(15, 30000, '2018-05-13 13:01:42'),
(16, 50000, '2018-05-13 13:03:06'),
(17, 90000, '2018-05-13 13:04:16'),
(18, 45000, '2018-05-13 13:04:28'),
(19, 60000, '2018-05-13 13:04:36'),
(20, 70000, '2018-05-13 13:04:46'),
(21, 100000, '2018-05-13 13:04:56'),
(22, 40000, '2018-05-13 13:05:07'),
(24, 20000, '2018-05-13 13:05:14'),
(26, 120000, '2018-05-13 13:05:22'),
(27, 140000, '2018-05-13 13:05:30'),
(28, 160000, '2018-05-13 13:05:36'),
(29, 200000, '2018-05-13 13:05:46'),
(30, 35000, '2018-05-15 05:56:19'),
(31, 55000, '2018-05-15 05:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `user_id` int(11) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `invoice_num` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_data`
--
ALTER TABLE `car_data`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_data`
--
ALTER TABLE `car_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `make_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
