-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 09:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Email`, `Phone`, `password`) VALUES
(4, '123', '123', 'test@gamil.com', '123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'dd', 'dd', 'test@gamil.com', '9999090', '388ad1c312a488ee9e12998fe097f2258fa8d5ee'),
(6, 'ww', 'ww', 'test@gamil.com', '33', '1c4f0c6eb8bf8bbf11cc2ae1cdcc5c5d1f3a3c16'),
(7, 'ss', 'ss', 'test@gamil.com', '22', 'c1c93f88d273660be5358cd4ee2df2c2f3f0e8e7'),
(8, 'gg', 'gg', 'test@gamil.com', '33', 'f3226f91f77a87d909b8920adc91f9a301a7316b');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_name` varchar(30) NOT NULL,
  `food_price` decimal(10,2) NOT NULL,
  `food_img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_name`, `food_price`, `food_img`) VALUES
('Brownie', 6.50, 'assets/images/item8.jpg'),
('cake', 2.30, 'assets/images/item6.jpeg'),
('Cheesecake', 13.80, 'assets/images/item7.jpg'),
('Creme Brulee', 9.39, 'assets/images/item10.jpg'),
('Lentil Soup', 13.99, 'assets/images/item9.jpg'),
('Lobster', 7.99, 'assets/images/item3.jpeg'),
('Mussels', 4.99, 'assets/images/item2.jpeg'),
('Paella', 7.99, 'assets/images/item5.jpeg'),
('Salmon', 10.99, 'assets/images/item1.jpeg'),
('Shrimp', 9.39, 'assets/images/item4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `item_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `OrderDate`, `TotalAmount`, `item_name`) VALUES
(143, 4, '2023-12-08', 12.00, 'Mussels'),
(144, 4, '2023-12-08', 12.00, 'Lobster'),
(145, 4, '2023-12-08', 12.00, 'Lobster'),
(146, 4, '2023-12-08', 12.00, 'Lobster'),
(147, 4, '2023-12-08', 12.00, 'Mussels'),
(148, 4, '2023-12-08', 12.00, 'Salmon'),
(149, 4, '2023-12-08', 12.00, 'Shrimp'),
(150, 4, '2023-12-08', 12.00, 'Shrimp'),
(151, 4, '2023-12-08', 12.00, 'Shrimp'),
(152, 4, '2023-12-08', 12.00, 'Shrimp'),
(153, 4, '2023-12-08', 12.00, 'Mussels'),
(154, 4, '2023-12-08', 12.00, 'Salmon'),
(155, 4, '2023-12-08', 12.00, 'Lobster'),
(156, 4, '2023-12-08', 12.00, 'Paella'),
(157, 4, '2023-12-08', 12.00, 'Shrimp'),
(158, 4, '2023-12-08', 12.00, 'Lobster'),
(159, 4, '2023-12-08', 12.00, 'Lobster'),
(160, 4, '2023-12-08', 12.00, 'Lobster'),
(161, 4, '2023-12-08', 12.00, 'Lobster'),
(162, 4, '2023-12-08', 12.00, 'Lobster'),
(163, 4, '2023-12-08', 12.00, 'Lobster'),
(164, 4, '2023-12-08', 12.00, 'Lobster'),
(165, 4, '2023-12-08', 12.00, 'Lobster'),
(166, 4, '2023-12-08', 12.00, 'Lobster'),
(167, 4, '2023-12-08', 12.00, 'Lobster'),
(168, 4, '2023-12-08', 12.00, 'Lobster'),
(169, 4, '2023-12-08', 12.00, 'Lobster'),
(170, 4, '2023-12-08', 12.00, 'Lobster'),
(171, 4, '2023-12-08', 12.00, 'Lobster'),
(172, 5, '2023-12-08', 12.00, 'Lobster'),
(173, 5, '2023-12-08', 12.00, 'Salmon'),
(174, 5, '2023-12-08', 12.00, 'Mussels'),
(175, 7, '2023-12-08', 12.00, 'Shrimp'),
(176, 4, '2023-12-08', 12.00, 'Brownie'),
(177, 4, '2023-12-08', 12.00, 'cake'),
(178, 4, '2023-12-08', 12.00, 'Cheesecake'),
(179, 8, '2023-12-08', 12.00, 'Cheesecake'),
(180, 8, '2023-12-08', 12.00, 'Creme Brulee'),
(181, 8, '2023-12-08', 12.00, 'cake'),
(182, 8, '2023-12-08', 12.00, 'Shrimp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD UNIQUE KEY `food_name` (`food_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
