-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 12:38 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morgan_stanley`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `languages` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `signUp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `username`, `password`, `email`, `usertype`, `languages`, `skills`, `address`, `age`, `phoneNumber`, `firstName`, `lastName`, `signUp`) VALUES
(25, 'volunteer', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@gmail.com', 'volunteer', 'Python,Java', 'Web development,Server script', '20 grange street', '20', '076464854', 'test', 'test', '1'),
(26, 'organisation', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', 'org@gmail.com', 'organisation', 'Python', 'Web development', '53 Webster Gardens', '20', '07645246746', 'Jan', 'Ran', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `projectNumber` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `projectNumber`, `message`) VALUES
(9, 'volunteer', '1', 'Hello					'),
(10, 'volunteer', '1', '				Goodbye	');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `projectTitle` varchar(1000) NOT NULL,
  `briefDes` varchar(20000) NOT NULL,
  `mainDes` longtext NOT NULL,
  `languages` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `projectNumber` varchar(100) NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `projectTitle`, `briefDes`, `mainDes`, `languages`, `skills`, `github`, `image`, `projectNumber`, `progress`) VALUES
(57, 'Developer/Analyst Programmer', 'Our client are a sizeable and fast growing retail business.\r\n\r\nAn opportunity has now arisen for a qualified and competent Analyst Programmer to join the team.\r\n\r\nReporting to the IT Director, the role is responsible for the programming, coding and maintenance of the company IT system.			  ', 'The suitable candidate will:-\r\n\r\nArrange project requirements in programming sequence by analysing requirements\r\nDevelop work flow charts and diagrams using knowledge of computer capabilities, subject matter, programming language, and logic\r\nEvaluate program operations by conducting tests; modifying program sequence and/or codes\r\nProgram the computer system by encoding project requirements in computer language\r\nDevelop and maintain coded information into computer programs			  ', 'Python,Java,HTML', 'Web development,Server script,Front-end', 'http://www.reed.co.uk/jobs/developer-analyst-programmer/29296010#/jobs/computer-programmer', 'Logo_26156.png', '1', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
