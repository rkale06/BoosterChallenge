-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2017 at 04:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FundDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Fundraiser`
--

CREATE TABLE `Fundraiser` (
  `id` int(100) NOT NULL,
  `fundraiser_name` varchar(200) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL,
  `reviewer_name` varchar(200) NOT NULL,
  `reviewer_email` varchar(200) NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Fundraiser`
--

INSERT INTO `Fundraiser` (`id`, `fundraiser_name`, `rating`, `review`, `reviewer_name`, `reviewer_email`, `review_date`) VALUES
(1, 'Google', 5, 'It was a great event. ', 'Charlie', 'charlie@gmail.com', '2017-05-01'),
(2, 'Microsoft', 3, 'Could be more organized.', 'James', 'james@gmail.com', '2017-05-11'),
(3, 'SAP', 4, 'Great Event ', 'Rk', 'rk@gmail.com', '2017-05-13'),
(4, 'Home', 5, 'Home sweet home ', 'tk', 'tk@gmail.com', '2017-05-19'),
(6, 'Foundation', 5, 'Yes', 'Ck', 'ck@gmail.com', '2017-05-06'),
(7, 'An Foundation', 3, 'Average', 'Rohit', 'rohit@yahoo.com', '2017-05-20'),
(9, 'Lake', 5, 'Awesome!', 'Great', 'great@gmail.com', '2017-05-19'),
(10, 'nanas', 5, 'food!', 'Awesome', 'nanas@gmail.com', '2017-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Fundraiser`
--
ALTER TABLE `Fundraiser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Fundraiser`
--
ALTER TABLE `Fundraiser`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
