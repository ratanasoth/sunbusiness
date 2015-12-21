-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2015 at 05:29 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neti`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
`careerid` int(11) NOT NULL,
  `position` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `orderno` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`careerid`, `position`, `description`, `orderno`) VALUES
(1, 'Software Design Engineer', '<p><strong>Responsibilities:</strong></p>\r\n\r\n<ul>\r\n	<li>Consult with customers about software system design and maintenance.</li>\r\n	<li>Analyze client needs and software requirements to determine feasibility of design within time and cost constraints.</li>\r\n	<li>Design or customize software for client use with the aim of optimizing operational efficiency.</li>\r\n	<li>Conduct detail design document.</li>\r\n	<li>Completes documentations and procedures for installation &amp; maintenance.</li>\r\n	<li>Resolves day-to-day production issues.</li>\r\n</ul>\r\n\r\n<p><strong>Skills and Requirements:</strong></p>\r\n\r\n<ul>\r\n	<li>At least 3 years experience in software design Engineer.</li>\r\n	<li>Bachelor Degree in Computer science, Information Technology or other related field.</li>\r\n	<li>Ability to understand and analyze project requirements and translate into specifications and programming deliverables.</li>\r\n	<li>Familiarity with up-to-date Web technology, such as HTML, CSS and scripting.</li>\r\n	<li>Basic knowledge in Object Oriented Programming and UML.</li>\r\n	<li>General knowledge in programming languages such as Visual C#.NET, ASP.NET, PHP, JAVA, PYTHON.</li>\r\n	<li>Having Team player, Fast learner, and detailed oriented skills.</li>\r\n	<li>Ability to execute and deliver to tight guidelines and schedules.</li>\r\n</ul>\r\n\r\n<p><strong>Working Hour:</strong></p>\r\n\r\n<ul>\r\n	<li>Monday to Friday ( 8:00-12:00pm | 13:30-17:30pm )</li>\r\n	<li>Saturday ( 8:00- 12:00pm )</li>\r\n</ul>\r\n', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
 ADD PRIMARY KEY (`careerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
MODIFY `careerid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
