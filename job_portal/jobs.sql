-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 11:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `email`, `password`) VALUES
(1, 'hima123', 'abc@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `company_name` varchar(25) NOT NULL,
  `applying_for` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `passout_year` date DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `name`, `email`, `company_name`, `applying_for`, `qualification`, `passout_year`, `resume`) VALUES
(4, 'Himanshu Kumar', 'test@gmail.com', 'Google', 'Software Engineer', 'btech', '2022-07-01', 'dummy-pdf_2.pdf'),
(5, 'Rahul kumar', 'test2@gmail.com', 'Google', 'Software Engineer', 'btech', '2022-07-01', 'dummy-pdf_2(1).pdf'),
(6, 'Gaurav raj', 'test3@gmail.com', 'Infosis', 'HR', 'M.tech', '2021-09-10', 'dummy-pdf_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `cname` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `jdesc` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `ctc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `cname`, `position`, `skills`, `jdesc`, `location`, `ctc`) VALUES
(1, 'Google', 'web developer', 'HTML, CSS, Javascript and PHP', 'Fresher can apply for it.', '', '0'),
(2, 'TCS', 'Software Engineer', 'Java / Python', 'B tech passed student. final year students can also apply for it.', 'patna', '5LPA'),
(3, 'Infosis', 'Engineer', 'C or C++', 'Must had 5 year of Experience.\r\n', 'Delhi', 'ctc'),
(4, 'Amazon', 'Digital Marketing', 'SEO optimization', 'Experienced in SEO optimization and degital markating.', 'Patna', '6LPA'),
(5, 'Flipkart', 'Salesman', '12th passed', 'any one can apply.', 'Patna', '2LPA'),
(6, 'Amazon', 'Digital Marketing', 'SEO optimization', 'Experienced in SEO optimization and degital markating.', 'Patna', '5LPA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Reg_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Phone`, `Password`, `Reg_Date`) VALUES
(1, 'abc', 'abc@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-21'),
(2, 'abc', 'sdsa@gmail.com', '12345', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-21'),
(3, 'abxc', 'abc@GMAIL.COM', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-21'),
(4, 'ABC', 'SAD@KDSFKL', '1234', '65ded5353c5ee48d0b7d48c591b8f430', '2021-09-21'),
(5, 'SDA', 'DSAS@fdgd', '12345', '827ccb0eea8a706c4c34a16891f84e7b', '2021-09-21'),
(6, 'hima', 'abc@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-21'),
(7, 'hima2', 'abcd@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-26'),
(8, 'bipin', 'abc@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
