-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 09:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'chandan', 'chandan123'),
(2, 'poonam', 'poonam111');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Service` varchar(30) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Dat` date NOT NULL,
  `mno` bigint(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pay` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `Service`, `Address`, `Dat`, `mno`, `email`, `pay`) VALUES
(4, 'chandan', 'plumber', 'lalghati', '2019-05-21', 8757781963, 'singhchandan699@gmail.com', 'cash on delivery'),
(6, 'pooja', 'beauty', 'bhopal', '2019-02-25', 9835551209, 'singhchandan699@gmail.com', 'PAYTM'),
(7, 'shiker dhawan', 'carpanter', 'bhopal', '2019-04-15', 9835551209, 'shikerdhawan@gmail.com', 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `Email`, `City`, `Message`) VALUES
(1, 'chandan', 'singhchandan699@gmail.com', 'bhopal', 'i can\'t sign in'),
(11, 'chandan', 'rose@gmail.com', 'bhopal', 'what type of website is this');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `ID` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `mno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhar` bigint(12) NOT NULL,
  `ser` varchar(20) NOT NULL,
  `charge` int(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `tim` time(6) NOT NULL,
  `dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`ID`, `name`, `gender`, `Address`, `mno`, `email`, `adhar`, `ser`, `charge`, `photo`, `tim`, `dat`) VALUES
(5, 'poonam', 'Female', 'lalghati', 1234567890, 'poonam@gmail.com', 1266232, 'work', 2000, 'signup.jpg', '12:00:00.000000', '2019-04-05'),
(6, 'jon', 'Male', 'india', 8754785184, 'singhchandan699@gmail.com', 122225411212, 'plumber', 2000, 'team.jpg', '12:00:00.000000', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `User_Name` varchar(25) NOT NULL,
  `Numbe` bigint(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `User_Name`, `Numbe`, `Email`, `Password`) VALUES
(3, 'abhishek', 6201398553, 'abhishekkumar06187@gmail.com', '6201398553'),
(4, 'chandan kumar', 8757781963, 'singhchandan699@gmail.com', '123456'),
(5, 'aman', 7470313719, 'shinu.sistec@gmail.com', '123456'),
(9, 'ashutosh rajan', 9300071666, 'ashutoshranjan4495@hotmail.com', '123456'),
(10, 'rose', 9525290077, 'rose@gmail.com', '54321'),
(11, 'kiran', 8757781963, 'kiran@gmail.com', 'kiran'),
(12, 'pooja', 8757781963, 'pooja@gmail.com', 'pooja'),
(15, 'manage', 8757781963, 'manage@gmail.com', 'manage'),
(16, 'Tarun malvi', 9981601192, 'tarunmalvi80@gmail.com', '123456'),
(17, 'rohit sharma', 8757781963, 'rohitsharma@gmail.com', '123456'),
(18, 'chandan Singh', 8757781963, 'singhchandan699@gmail.com', '123456'),
(19, 'chandan Singh', 8757781963, 'singhchandan699@gmail.com', '123456'),
(20, 'sachin tendulkar', 8757781963, 'sachin@gmail.com', '123456'),
(21, 'dakshi', 8757781963, 'dakshi@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
