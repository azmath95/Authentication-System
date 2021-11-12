-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2021 at 04:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` int(9) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `name`, `mobile`, `gender`, `address`, `email`, `password`, `confirm_password`) VALUES
(1, 'Azmath', '01832253784', 'Male', 'Shymoli', 'azmathullah95@gmail.com', '1234', '1234'),
(2, 'Rakib', '01832253784', 'Male', 'Mirpur', 'rakib@amic.org.bd', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
