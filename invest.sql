-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 04:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invest`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `secondname` varchar(1000) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `phone` int(225) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `dob` varchar(1000) NOT NULL,
  `income` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `time` text NOT NULL,
  `purpose` text NOT NULL,
  `code` text NOT NULL,
  `address` text NOT NULL,
  `marital` text NOT NULL,
  `gender` text NOT NULL,
  `checkbox` text NOT NULL,
  `risk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `secondname`, `token`, `email`, `password`, `phone`, `status`, `dob`, `income`, `amount`, `time`, `purpose`, `code`, `address`, `marital`, `gender`, `checkbox`, `risk`) VALUES
(3, 'salim', 'wer', 'ea97b75619f5cb2b9df9d184c4541aafe3b87484a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 990849393, 0, '56/789/09', 50000000, 567898765, '4 years and 2 months', 'Others', '4565432', 'no3, olanrewaju street, ilorin, kwara. Post Code is 223403', 'single', 'female', 'family works with FC, live outside Nigeria, want to use foreign currency', ''),
(4, 'Gafar', 'Shola', '8c5a92e1303205fb2e28b3656bc2e44a4d4ecec26fb0394b969258c4f33b92bbe8c601462bb5455b', 'ade@gmail.com', '6fb0394b969258c4f33b92bbe8c601462bb5455b', 35467890, 1, '12/08/2019', 34567890, 479380932, '2 years', '', '', 'kmcdl;kvf, abuja, abuja. Post Code is 2345', 'single', 'female', 'want to use foreign currency', 'Yes. I want greater reward for my money'),
(5, 'shegs', 'adex', '', '', '', 456789, 0, '09/98/0987', 765456, 98765, '5 years and 9 months', 'Others', '', 'no3, olanrewaju street, ilorin, kwara. Post Code is 223403', '', '', 'want to use foreign currency', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
