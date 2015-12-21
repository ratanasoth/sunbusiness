-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2015 at 05:27 PM
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
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
`slideshowid` int(11) NOT NULL,
  `slideshowname` varchar(255) DEFAULT NULL,
  `description` longtext,
  `partimg` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `orderno` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`slideshowid`, `slideshowname`, `description`, `partimg`, `img`, `orderno`) VALUES
(1, 'Testing one Again and again', '<p>Net I Solutions was established in 2003,</p>\r\n\r\n<p>its founding was based on the understanding that most management issues in industries could be resolved through the effective use of information technology.</p>\r\n', 'assets/images/slideshow/', '12177840_429039580635146_704034424_n.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
 ADD PRIMARY KEY (`slideshowid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
MODIFY `slideshowid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
