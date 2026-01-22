-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2026 at 08:00 PM
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
-- Database: `leos_tum_tum`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_email`, `total`, `status`) VALUES
(10, 'manik@gmail.com', 1200, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `description`, `image`) VALUES
(1, 'Cat Food Premium', 'Cat Food', 1200, 'Healthy premium cat food', 'cat1.jpg'),
(2, 'Cat Food Basic', 'Cat Food', 800, 'Daily nutrition', 'cat2.jpg'),
(3, 'Cat Toy Mouse', 'Cat Toys', 400, 'Soft toy', 'cat3.jpg'),
(4, 'Cat Toy Ball', 'Cat Toys', 300, 'Plastic ball', 'cat4.jpg'),
(5, 'Dog Food Premium', 'Dog Food', 1500, 'Protein rich', 'dog1.jpg'),
(6, 'Dog Food Basic', 'Dog Food', 1000, 'Healthy diet', 'dog2.jpg'),
(7, 'Dog Toy Bone', 'Dog Toys', 500, 'Rubber bone', 'dog3.jpg'),
(8, 'Dog Toy Rope', 'Dog Toys', 600, 'Strong rope', 'dog4.jpg'),
(9, 'Fish Food Gold', 'Fish Food', 300, 'For goldfish', 'fish1.jpg'),
(10, 'Fish Food Basic', 'Fish Food', 200, 'General fish', 'fish2.jpg'),
(11, 'Cat Food Deluxe', 'Cat Food', 15, 'High quality cat food', 'catfood2.jpg'),
(12, 'Dog Toy Fun', 'Dog Toys', 8, 'Fun toy for dogs', 'dogtoy2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mehedi Hasan', 'mehedi@gmail.com', '1234'),
(2, 'Manik', 'manik@gmail.com', '1234'),
(3, 'Manik', 'manik@gmail.com', 'manik ar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
