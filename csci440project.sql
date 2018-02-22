-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 03:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csci440project`
--

-- --------------------------------------------------------

--
-- Table structure for table `order history`
--

CREATE TABLE `order history` (
  `USER_ID` int(100) NOT NULL,
  `ORDER_NUMBER` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(4) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `IMAGE` text NOT NULL,
  `PRICE` decimal(6,2) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `TYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `NAME`, `IMAGE`, `PRICE`, `DESCRIPTION`, `TYPE`) VALUES
(0, 'Coke', 'https://i.gyazo.com/ff993823c11459ddd43f06b64da27143.png', '1.50', 'This is a test item for testing purposes. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Produce'),
(1, 'Bread', 'https://i.gyazo.com/5b98e47e63ea32be5da4d8e01c4b28e4.png', '4.00', 'a kind of food made of flour or meal that has been mixed with milk or water, made into a dough or batter, with or without yeast or other leavening agent, and baked.', 'Produce'),
(2, 'Shirt', 'https://i.gyazo.com/cad1a2d276ed7557711144c078804dd6.png', '5.00', 'This is a shirt', 'Clothing'),
(3, 'Jeans', 'https://i.gyazo.com/5f74b37744edc1be1168316e4054f664.png', '10.00', 'These are jeans.', 'Clothing'),
(4, 'iPhone', 'https://i.gyazo.com/3727553e54d4628bf6614de147811a9f.png', '600.00', 'This is an apple iPhone.', 'Electronic'),
(5, 'TV', 'https://i.gyazo.com/2479f3a0c9948dfb689aa68add1c3264.png', '1500.00', 'This is a tv.', 'Electronic');

-- --------------------------------------------------------

--
-- Table structure for table `user accounts`
--

CREATE TABLE `user accounts` (
  `USER_ID` int(100) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `PROFILE_IMAGE` text NOT NULL,
  `FIRST_NAME` varchar(25) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `STREET_ADDRESS` text NOT NULL,
  `STATE` varchar(50) NOT NULL,
  `ZIPCODE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user orders`
--

CREATE TABLE `user orders` (
  `ORDER_NUMBER` int(100) NOT NULL,
  `ITEMS` text NOT NULL,
  `TOTAL` decimal(6,2) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
