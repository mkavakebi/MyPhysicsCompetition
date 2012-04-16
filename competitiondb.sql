-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2010 at 07:36 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `competitiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `egg`
--

CREATE TABLE IF NOT EXISTS `egg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL,
  `bord` double NOT NULL,
  `davar` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `turn` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `E` double NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `egg`
--

INSERT INTO `egg` (`ID`, `groupname`, `bord`, `davar`, `school`, `turn`, `state`, `E`, `score`) VALUES
(39, 'wswwww', 0, 0, 'www', 4, '', 0, 0),
(40, 'wegesh', 0, 0, 'zahs', 6, 'wait', 0, 0),
(41, 'shbsg', 0, 0, 'shgsh', 9, '', 0, 0),
(42, 'sjhg', 0, 0, 'sfgdh', 3, '', 0, 0),
(43, 'Ø³Ù‚Ø¹Ø¨Ù„Ø§', 0, 0, 'Ù„Ø§Ø§Ù„Ø¨', 10, '', 0, 0),
(44, 'Ø§Ø¹Ù„', 0, 0, '', 11, '', 0, 0),
(45, 'Ù„Ø¨Ø§ØªÙ„', 0, 0, 'Ù„Ø§Ù„ØªØ§', 5, 'play', 0, 0),
(46, 'Ø§Ù„Ù„Ø§Ù„', 0, 0, 'Ø§ØªØ§Ù„Ø¨Ù„Ø§', 8, '', 0, 0),
(47, 'Ù†ØªØ§Ù„Ø¨', 0, 0, 'ØªØ§Ù„Ø¨', 12, '', 0, 0),
(48, 'Ø¹ØºØ§Ù„Ù', 0, 0, 'Ø®Ù‡Ø¹Ø§ØºÙ„ÙØ¨Ù‚', 7, '', 0, 0),
(49, 'Ø§ØºØºÙÙ‚Ø¨Ù„Ø§Øª', 0, 0, 'Ø§ØªÙ†ØªØ§Ù„Ø¨ÛŒØ³', 2, 'wait', 0, 0),
(50, 'ÛŒÛŒØ¨Ù„Ø§ØªØ§Ù„Ø¨', 12, 50, 'Ø¨Ù„Ø§ØªØ§Ù„Ø¨ÛŒØ³', 1, 'done', 1.5, 800);

-- --------------------------------------------------------

--
-- Table structure for table `manjenigh`
--

CREATE TABLE IF NOT EXISTS `manjenigh` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL,
  `bord` double NOT NULL,
  `davar` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `turn` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `vazn` double NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `manjenigh`
--

INSERT INTO `manjenigh` (`ID`, `groupname`, `bord`, `davar`, `school`, `turn`, `state`, `vazn`, `score`) VALUES
(27, 'aaaaaaa', 20, 25, 'aaa', 2, 'done', 1, 2000),
(28, 'sggsg', 0, 0, 'shsh', 1, 'play', 0, 0),
(29, 'adh', 0, 0, 'aaj', 8, 'wait', 0, 0),
(30, 'Ù†', 0, 0, 'Ù…Ø§', 10, 'wait', 0, 0),
(31, 'ÛŒØ¸Ø¨Ø§', 45, 25, 'ÛŒØ¨Ø§Ø¨Ø²Ø´Ø²', 7, 'done', 10, 450),
(32, 'Ø³Ø«Ø«Ø«Ø«Ø«', 12, 50, 'Ø³Ø«Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚Ù‚', 11, 'done', 2, 600),
(33, 'Ø¸ÙØ± Ø·Ø²Ø·', 0, 0, 'Ø¸Ø³Ù„Ø¨Ø³Ø´', 9, 'wait', 0, 0),
(34, 'Ø³Ø²Ø·Ø§Ø¨Ø§ØªØ¨', 0, 0, 'Ø°Ù„Ø¹Ø§', 6, 'play', 0, 0),
(35, 'Ù‚ØºØ¹Ø§ØºØªÙ„', 0, 0, 'Ù„Ø¨Ø¹Ù†Ø§ØªÙ„ØªØ§Ù„', 12, '', 0, 0),
(36, 'Ù„Ø§Ù†ØªÙ†', 0, 0, 'Ø¨Ø§Ù„', 4, 'play', 0, 0),
(37, 'Ø§Ù†ØªØ§Ù„Ø¨Ø§ØªÙ†Ù„', 0, 0, 'Ø§ØªÙ†Ø§Ù„Ø§ØªÙ†ØªÙ„Ù„Ø§Øª', 3, 'play', 0, 0),
(38, 'Ù„Ø§ØªÙ†Ø§Ù„Ø¨ØªØ§Ù„Ø°Ø§ØªÙ„Ø§', 0, 0, 'Ø¨Ù„Ø§ØªØ¹Ù„Ø¨Ù„Ø¨Ø§ØªØ§Ù„Ø¨', 5, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE IF NOT EXISTS `plane` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL,
  `bord` double NOT NULL,
  `davar` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `turn` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`ID`, `groupname`, `bord`, `davar`, `school`, `turn`, `state`, `score`) VALUES
(15, 'Ø³Ù…Ù†Ø³Ú©Ù…Ù†Ø³Ú©Ù…', 0, 0, 'Ú©Ù…ØªÙ†Ú©Ù†ØªÚ©Øª', 15, 'wait', 0),
(14, 'adsad', 0, 0, 'afsadfgadg', 2, 'wait', 0),
(13, 'homa2', 0, 0, 'shhaid55', 8, '', 0),
(12, 'shahin1', 12, 95, 'shahid2', 3, 'done', 0),
(11, 'homa1', 50, 20, 'shahid1', 9, 'done', 500),
(16, 'Ø¨ØµØ³Ø´Ù„', 0, 0, 'Ø´Ù„Ù„Ù„Ø´ÛŒØ³Ø³ÛŒ', 6, '', 0),
(17, 'Ù‡Ù…Ø§1', 0, 0, 'Ø´Ù‡ÛŒØ¯1', 11, '', 0),
(18, 'Ø³Ø´ÛŒ', 0, 0, 'Ø³Ø¨', 4, '', 0),
(23, 'Ø³Ù‚ØºÙ†Ù‡Ø¯Ø¨ØªØ§Ù„', 0, 0, 'Ù„Ø¹6ØºØ§Ù„Ø§Ø¹', 5, 'wait', 0),
(20, 'ÛŒØ³Ù„Ø´Ø§Ø³', 0, 0, 'Ø³ØµØªØ³Ù†Øª', 10, '', 0),
(21, 'ÛŒØ³Ù†ÛŒÙ†ÛŒÙ†', 0, 0, 'ÛŒÙ†Ù…ÛŒÙ†ÛŒÙ†', 13, '', 0),
(22, 'ÛŒÙ†ÛŒÛŒØª', 55, 92, 'Ø²Ø¨ØªØ²ÛŒÙ†Ø²', 12, 'done', 550),
(24, 'Ø³Ù‚ØºÙ†Ù‡Ø¯Ø¨ØªØ§Ù„', 0, 0, 'Ù„Ø¹6ØºØ§Ù„Ø§Ø¹', 7, '', 0),
(25, 'rrrrrrrrr', 0, 0, 'rrrr', 14, '', 0),
(26, 'sss', 0, 0, 's', 1, '', 0),
(27, 'ghgh', 0, 0, 'jgfdj', 0, '', 0);
