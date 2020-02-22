-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 11:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appititemanager1`
--

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `SN` int(11) NOT NULL,
  `ItemProvided` varchar(50) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `SN` smallint(6) NOT NULL,
  `FoodName` varchar(30) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Path` varchar(100) NOT NULL,
  `ForSpecial` tinyint(1) DEFAULT NULL,
  `Foodtype` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`SN`, `FoodName`, `Price`, `Description`, `Path`, `ForSpecial`, `Foodtype`) VALUES
(40, 'Aalu Dum', '180', 'Nepali Style potato with pickle', 'Images/Aalu Dum.jpg', 1, 'Appetizer'),
(41, 'Chicken Curry', '200', 'Chicken curry with nepali spices and herbs', 'Images/Chicken Curry.jpg', 0, 'Appetizer'),
(42, 'MOMO', '120', 'Nepali Special Dumplings stuffed with meat and veges', 'Images/MOMO.jpg', 1, 'Appetizer'),
(43, 'Barfi', '120', 'Naam nai kaafi xa', 'Images/Barfi.jpg', 0, 'Desert'),
(45, 'Carrot and lentil soup', '120', 'Hot sour soup', 'Images/Carrot and lentil soup.jpg', 0, 'Soup'),
(46, 'Chicken Noodle', '120', 'spicy noodles with soup', 'Images/Chicken Noodle.jpg', 0, 'Soup'),
(47, 'Creama di fungi', '160', 'hot soup', 'Images/Creama di fungi.jpg', 0, 'Soup'),
(48, 'French onion soup', '100', 'Onion soup', 'Images/French onion soup.jpg', 1, 'Soup'),
(49, 'Hot sour soup', '110', 'Sour soup', 'Images/Hot sour soup.jpg', 0, 'Soup'),
(50, 'Mutton bone soup', '140', 'Mutton soup', 'Images/Mutton bone soup.jpg', 0, 'Soup'),
(51, 'Tomato basil soup', '130', 'Tomato soup', 'Images/Tomato basil soup.jpg', 0, 'Soup'),
(52, 'German potato salad', '100', 'Potato salad', 'Images/German potato salad.jpg', NULL, 'Salad'),
(53, 'Honey lime fruit salad', '140', 'Fruit salad', 'Images/Honey lime fruit salad.jpg', NULL, 'Salad'),
(54, 'Mushroom salad', '130', 'Mushroom salad', 'Images/Mushroom salad.jpg', NULL, 'Salad'),
(55, 'Organic garden salad', '100', 'Organic salad', 'Images/Organic garden salad.jpg', NULL, 'Salad'),
(56, 'Quinoa salad', '125', 'Quinoa salad', 'Images/Quinoa salad.jpg', NULL, 'Salad'),
(57, 'Strawberry chocolate salad', '165', 'Chocolate salad', 'Images/Strawberry chocolate salad.jpg', NULL, 'Salad'),
(58, 'Brownies', '75', 'Chocolate Dough with cream toppings', 'Images/Brownies.jpg', NULL, 'Desert'),
(59, 'Chocolate Dessert', '200', 'Chocolate whipp cream with chcocolate chips', 'Images/Chocolate Dessert.jpg', NULL, 'Desert'),
(60, 'Rasbari', '80', 'Traditional Nepali ', 'Images/Rasbari.jpg', NULL, 'Desert'),
(62, 'Mushroom Salad', '120', 'food', 'Images/Mushroom Salad.jpg', NULL, 'Salad');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `SN` int(11) NOT NULL,
  `FoodItem` varchar(40) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MembershipID` bigint(20) NOT NULL,
  `MemberName` varchar(30) DEFAULT NULL,
  `PhoneNum` varchar(14) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Date` varchar(11) DEFAULT NULL,
  `identification` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`SN`, `OrderName`, `price`) VALUES
(1, 'German potato salad', '100.00'),
(2, 'Honey lime fruit salad', '140.00'),
(3, 'German potato salad', '100.00'),
(4, 'Carrot and lentil soup', '120.00'),
(5, 'Aalu Dum', '180.00');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`SN`, `OrderName`, `price`) VALUES
(1, 'Aalu Dum', '180.00'),
(2, 'Honey lime fruit salad', '140.00'),
(3, 'Creama di fungi', '160.00');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`SN`, `OrderName`, `price`) VALUES
(1, 'Mushroom salad', '130.00');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`SN`, `OrderName`, `price`) VALUES
(1, 'Organic garden salad', '100.00'),
(2, 'Carrot and lentil soup', '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`SN`, `OrderName`, `price`) VALUES
(1, 'Aalu Dum', '180.00'),
(2, 'Barfi', '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`SN`, `OrderName`, `price`) VALUES
(1, 'Strawberry chocolate salad', '165.00'),
(2, 'Quinoa salad', '125.00');

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE `table7` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`SN`, `OrderName`, `price`) VALUES
(1, 'Barfi', '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `SN` int(11) NOT NULL,
  `OrderName` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `earning`
--
ALTER TABLE `earning`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MembershipID`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table6`
--
ALTER TABLE `table6`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table7`
--
ALTER TABLE `table7`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `table8`
--
ALTER TABLE `table8`
  ADD PRIMARY KEY (`SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `earning`
--
ALTER TABLE `earning`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `SN` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MembershipID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table4`
--
ALTER TABLE `table4`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table5`
--
ALTER TABLE `table5`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table6`
--
ALTER TABLE `table6`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table7`
--
ALTER TABLE `table7`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table8`
--
ALTER TABLE `table8`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
