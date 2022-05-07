-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 09:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `code` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`code`, `image`, `name`, `price`, `display`) VALUES
(101, 'Ice cream.png', 'Ice Cream', 100, 'Yes'),
(102, 'Shawrma.png', 'Shawrma', 100, 'Yes'),
(103, 'noodles.png', 'Noodles ', 130, 'Yes'),
(104, 'ChickenFry.png', 'Chicken Fry', 80, 'Yes'),
(105, 'Fried rice.png', 'Fried Rice', 150, 'Yes'),
(106, 'pizza.png', 'Pizza', 450, 'Yes'),
(108, 'burger.png', 'Burger', 250, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `food` text NOT NULL,
  `restaurent` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `name`, `address`, `food`, `restaurent`, `quantity`) VALUES
(0, 'Farhad ', 'Banasree', 'Pizza', 'PizzaBurg', 1),
(1, 'Hira', 'Kawla', 'Burger', 'Chillox', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `e-mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(18) NOT NULL,
  `profile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `name`, `e-mail`, `username`, `password`, `gender`, `dob`, `profile`) VALUES
(1, 'mushfiqur ra', 'mushfiqur@gmail.com', 'ss123', '#8$08067', 'male', '12-2-2002', ''),
(2, 'aa ra', 'aa123@gmail.com', 'mm444', '$2y$12$IwlgHI/dBbVTjm8gLXdzpuZ', 'male', '1996-06-04', ''),
(5, 'nur mohammad', 'nur@gmail.com', 'nur11', '$2y$12$OTWNNzrsiyOROgzImXb87O4', 'male', '1995-11-30', ''),
(6, 'asif ikbal', 'asif@gmail.com', 'asif11', '$2y$12$jZDuHUaAdWZRlapO50jJQuF', 'male', '1999-11-30', ''),
(7, 'Mushfiqur rahman', 'mushfiqur.soikot@gmail.com', 'm11', '$2y$12$XgLu0aNhsgeo2R.Alf73E.a', 'male', '1999-11-30', ''),
(8, 'Farhad Ahmed', 'farhadahmedoop@gmail.com', 'Farhad', '$2y$12$gPHdkAAxufoD9X268VHUluR', 'male', '2022-04-26', ''),
(9, 'Farhad Ahmed', 'ahmedfarhad0003@gmail.com', 'Farhad', '$2y$12$b71GF2mAdE2a5UELvWgtZew', 'male', '2022-04-09', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
