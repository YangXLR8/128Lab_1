-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 07:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `128lab1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_name` varchar(255) NOT NULL,
  `con_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_name`, `con_num`, `email`, `password`) VALUES
('akoyLilyPad', '467913', 'walangsasalo@gmailcom', '@dontFlyH1gh'),
('bluebaby', '1124478', 'sky@gmail.com', 'Fly@boveth3m'),
('highlow', '0134566', 'hayss@gmail.com', 'Ab@78941'),
('lilolilo', '1233123', 'haloo@gmail.com', 'H@loo2day'),
('migsss', '016565', 'pinkyy@gmail.com', '@Gakshsb6a4s556'),
('reah', '03564', 'mae@gmail.com', '123456'),
('sheeett', '0123456', 'damnhell@gmail.com', 'shutaaworkna'),
('whalien', '369874', 'pinkplanet@gmail.com', 'Dyna@m1te');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
