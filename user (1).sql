-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 10:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `aim` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `secondname`, `token`, `email`, `password`, `phone`, `status`, `dob`, `aim`, `gender`, `marital`) VALUES
(66, 'samahd', 'salam', 'd8a91804cd98931de2c92d5c96dbaac9d4292c4d', 'samanhd626@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68', 90, 0, '22', 0, '', ''),
(67, 'samahd', 'salam', 'd8a91804cd98931de2c92d5c96dbaac9d4292c4d', 'samanhd626@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68', 90, 0, '22', 0, '', ''),
(68, 'samahd', 'salam', 'd8a91804cd98931de2c92d5c96dbaac9d4292c4d', 'samanhd626@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68', 90, 0, '22', 0, '', ''),
(69, 'samahd', 'salam', 'd8a91804cd98931de2c92d5c96dbaac9d4292c4d', 'samanhd626@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68', 90, 0, '22', 0, '', ''),
(70, 'samahd', 'salam', '', '', '', 90, 0, '22', 0, '', ''),
(71, 'blue', 'face', '', '', '', 90, 0, '22', 0, '', ''),
(72, 'Mr ', 'face', 'bae6c8b72aadf59779a15cae1436d46f483d3d55', 'samahd6@gmail.com', '2882f38e575101ba615f725af5e59bf2333a9a68', 90, 0, '00', 0, 'male', 'single'),
(73, 'Mr ', 'face', '', '', '', 90, 0, '00', 0, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
