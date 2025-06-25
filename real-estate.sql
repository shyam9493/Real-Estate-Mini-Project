-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 01:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `property_id`, `name`, `email`, `phone`, `datetime`, `created_at`) VALUES
(1, 1, 'Shyam', 'shyam@gmail.com', '9493992099', '2025-06-25 16:36:00', '2025-06-25 11:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-06-25-072845', 'App\\Database\\Migrations\\CreateProperty', 'default', 'App', 1750836779, 1),
(2, '2025-06-25-073047', 'App\\Database\\Migrations\\Bookings', 'default', 'App', 1750836779, 1);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `area_sqft` decimal(10,2) NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `type`, `price`, `area_sqft`, `address`, `description`, `image_path`, `created_at`) VALUES
(1, 'Flat for sale 4 BHK', 'flat', 1200000.00, 200.00, 'Andhra Pradesh', 'Flat for sale 4 BHK ,easy access and good community', 'uploads/f-1.jpeg', '2025-06-25 11:00:27'),
(2, 'Flat for sale 3 BHK', 'flat', 1000000.00, 150.00, 'Mumbai', 'Flat for sale 3 BHK ,easy access and good community', 'uploads/f-2.jpeg', '2025-06-25 11:01:52'),
(3, 'Flat for sale 2 BHK', 'flat', 800000.00, 100.00, 'Pune', 'Flat for sale 2 BHK ,easy access and good community', 'uploads/f-3.jpeg', '2025-06-25 11:03:09'),
(4, 'Plot for Sale', 'plot', 1200000.00, 200.00, 'Hyderabad', 'Fast Growing plot for sale', 'uploads/p-1.jpg', '2025-06-25 11:04:16'),
(5, 'Plot for Sale 2', 'plot', 1200000.00, 200.00, 'Vizag', ' Fast Growing plot for sale', 'uploads/p-3.jpeg', '2025-06-25 11:04:57'),
(6, 'Villa for Sale 2 floors', 'villa', 12000000.00, 312.00, 'Kerala', 'Best Furnitured villa', 'uploads/download.jpeg', '2025-06-25 11:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
