-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 08:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diu_research`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `userName`, `email`, `password`, `createdAt`) VALUES
(2, 'bangldesh', 'bangladesh', 'a.k.p.abdulkuddus@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-01 19:33:00'),
(4, 'bangladesh1', 'bangladesh2', 'kuddus3291@diu.edu.bd', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-01 20:05:54'),
(5, 'rahul', 'rahul', 'rahul@diu.edu.bd', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-01 20:33:54'),
(6, 'dickens', 'dickens', 'dickens@diu.edu.bd', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-14 10:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `createdAt`) VALUES
(6, 'Biotech', '2018-11-14 12:33:06'),
(7, 'Drug Development', '2018-11-14 12:33:26'),
(8, 'Health', '2018-11-14 12:33:48'),
(9, 'Psychology', '2018-11-14 12:34:07'),
(10, 'Life Sciences', '2018-11-14 12:34:23'),
(12, 'space', '2018-11-14 13:04:53'),
(13, 'Machine Learning', '2018-11-14 16:00:28'),
(14, 'Artificial Intelligence', '2018-11-14 16:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `researchObject` varchar(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `paper` text NOT NULL,
  `paperImage` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`id`, `userId`, `categoryId`, `researchObject`, `title`, `description`, `paper`, `paperImage`, `createdAt`) VALUES
(21, 13, 7, 'This is a  Research object', 'This is a Title', 'This is the description. here you can write a short description for you research object', 'upload/pdf/file_(7)5.pdf', 'upload/image/file_(7)5.pdf', '2018-11-14 12:39:00'),
(22, 13, 8, 'This is a  Research object 2', 'This  is  The second post', 'This is the second description this will discribe the second post', 'upload/pdf/M_Sc_Midterm_Exam_Routine_Fall_18.pdf', 'upload/image/M_Sc_Midterm_Exam_Routine_Fall_18.pdf', '2018-11-14 12:57:58'),
(23, 13, 12, 'Milky Way  Galaxy', 'Milky Way collided with another galaxy', 'A 10 billion-year-old collision filled our galaxy’s inner halo and thickened its disc.', 'upload/pdf/Pre-Defense_Fall_18_Schedule.pdf', 'upload/image/Pre-Defense_Fall_18_Schedule.pdf', '2018-11-14 13:07:12'),
(24, 13, 10, 'Purple Bacteria', 'Purple bacteria can turn human waste into clean hydrogen energy', 'The new method reduces carbon emissions and turns wastewater treatment plants into green generators.', 'upload/pdf/Updated_Final_Improvement_Exam_Routine_Summer_2018.pdf', 'upload/image/Updated_Final_Improvement_Exam_Routine_Summer_2018.pdf', '2018-11-14 13:19:23'),
(25, 13, 13, 'Text Categorization', 'Automated Text Categorization with Machine Learning', 'Automated Text Categorization with Machine Learning and its Application in Multilingual Text Categorization', 'upload/pdf/ROUTINE_FALL_2018_DAY_v2.pdf', 'upload/image/ROUTINE_FALL_2018_DAY_v2.pdf', '2018-11-14 16:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `versityId` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `email`, `versityId`, `password`, `createdAt`) VALUES
(7, 'some3', 'a.k.p.abdulkuddus@gmail.com', '111-12-1111', 'd41d8cd98f00b204e9800998ecf8427e', '2018-11-01 18:26:13'),
(11, 'Some 2', 'a.k.p.abdulkuddus@gmail.com', '000-00-0000', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-01 18:50:10'),
(12, 'bangladesh 3', 'bangladesh@diu.com', '111-12-1111', 'b47bc9c3971a24ddbbfd211d7b692227', '2018-11-02 11:58:19'),
(13, 'Full Name', 'name@diu.edu.bd', '121-12-1212', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-14 12:37:52'),
(16, 'Hasibul islam', 'kuddus3291@diu.edu.bd', '123-23-65', '827ccb0eea8a706c4c34a16891f84e7b', '2018-11-24 19:24:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paper`
--
ALTER TABLE `paper`
  ADD CONSTRAINT `paper_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paper_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
