-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2019 at 04:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `subname` varchar(100) NOT NULL,
  `subcode` varchar(8) NOT NULL,
  `lecturer` varchar(100) NOT NULL,
  `uid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `subname`, `subcode`, `lecturer`, `uid`) VALUES
(1, 'OOP', 'CMPD124', 'Zailaini', 3),
(6, 'Programming2', 'CMPD214', 'Siti', 3),
(7, 'Multimedia', 'CMPD336', 'Ramli', 3),
(8, 'DATABASE', 'CMPD314', 'SALLY', 13),
(9, 'Final Year Project', 'CNGD666', 'SALLY', 3);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `uid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `type`, `venue`, `color`, `start`, `end`, `uid`) VALUES
(2, 'Long Event', ' Meeting', 'KL', '#FFD700', '2019-02-12 00:00:00', '2019-02-19 00:00:00', 3),
(3, 'Proposal submission', '', '', '#0071c5', '2019-02-18 10:00:00', '2019-02-23 00:00:00', 3),
(47, 'FYP R', 'Assignment', 'UNITENsss', '#008000', '2019-01-24 08:00:00', '2019-01-24 13:00:00', 3),
(53, 'art exhibition', 'Assignment', 'UNITEN Library Hall', '', '2019-02-03 00:00:11', '2019-02-10 00:00:11', 3),
(54, 'Sabrina bd', ' Others ', '', '#008000', '2019-02-27 00:00:00', '2019-02-28 10:00:00', 3),
(55, 'bangsean volunteer', ' Event', 'thailand', '#FF8C00', '2019-02-26 00:00:00', '2019-02-27 00:00:00', 3),
(57, 'marathon', ' Event', 'KL', '#FFD700', '2019-02-11 00:00:00', '2019-02-12 00:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`) VALUES
(2, 'Ain', 'ain@gmail', 'No worries', 'Its good', '2019-01-05 00:00:00'),
(3, 'Dexter', 'dexter@gmail', 'print failure', 'i cant print', '2019-01-05 00:00:00'),
(4, 'Timothy', 'timothy@mymail.com', 'Update profile problem', 'Please help to check', '2019-01-05 00:00:00'),
(7, 'juz', 'juzpromiz@gmail.com', 'Thanks so much', '', '2019-02-10 20:09:00'),
(8, 'juz', 'juzpromiz@gmail.com', 'Add more features', '', '2019-02-12 08:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `subject` varchar(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `notes` text NOT NULL,
  `uid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `subject`, `title`, `date`, `notes`, `uid`) VALUES
(1, 'CMPD336', 'Web Programming Chapter 1', '2019-01-11 01:29:00', '<p><span style="font-size:16px">Lecturer waaas</span> <span style="font-size:26px"><em><strong>Awesome</strong></em></span>!!!!!!!!<img alt="heart" src="http://localhost/fyp/ckeditor/plugins/smiley/images/heart.png" style="height:23px; width:23px" title="heart" /></p>\r\n', 2),
(2, 'CMPD224', 'fyp presentation', '2019-01-11 09:32:00', '<p>Please change<span style="font-size:11px"><span style="font-family:Comic Sans MS,cursive"><img alt="broken heart" src="http://localhost/fyp/ckeditor/plugins/smiley/images/broken_heart.png" style="height:23px; width:23px" title="broken heart" /></span></span></p>', 0),
(3, 'CMPD336', 'SE lab', '2019-02-08 00:22:00', '<p><span style="font-size:48px"><span style="font-family:Courier New,Courier,monospace"><span class="marker"><strong>Please print out the notes!!!!!</strong></span></span></span></p>', 0),
(5, 'CMPD224', 'SE lab', '2019-02-08 01:04:00', '<p>Assignment Submission on Monday<u><em><strong><span class="marker"> 21/02/2019&nbsp;<img alt="sad" src="http://localhost/myPlanner/assets/ckeditor/plugins/smiley/images/sad_smile.png" style="height:23px; width:23px" title="sad" /></span></strong></em></u></p>', 3),
(6, 'CMPD214', 'FYP presentation', '2019-02-15 22:03:00', '<p>next Monday!!</p>', 3),
(9, 'CMPD124', 'Lab3', '2019-02-12 07:47:00', '<p>Finish by group, 2 person.</p>\r\n\r\n<p>due next monday</p>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `uid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `mobile`, `email`, `address`, `uid`) VALUES
(1, 'Mary', '0123456789', 'mary@ymail.com', '43000 Kajang. ', 2),
(2, 'fatin', '89436480', 'fatin@hotmail.com', 'seremban', 2),
(3, 'ahmad ', '0102482808', 'ahmad@hotmail.com', 'pj', 0),
(4, 'Numan', '03-894333333', 'numan@hotmail.com', '', 0),
(5, 'a', 'a', 'a@a.com', '', 0),
(6, 'Mary', '89436480', 'juzpromiz@hotmail.com', 'Uniten', 0),
(7, 'Mariana Poppa', '0112482808', 'mariana@gmail.com', 'Pahang', 3),
(8, 'Ahmad Fadhli', '012-9238121', 'ahmad@ymail.com', 'Uniten putrajaya\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `uid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `uid`) VALUES
(42, 'presentation', 3),
(44, 'final', 3),
(46, 'presentation', 3),
(47, 'FYP submission', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ttable`
--

CREATE TABLE IF NOT EXISTS `ttable` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `subject` varchar(8) NOT NULL,
  `day` varchar(10) NOT NULL,
  `timee` varchar(10) NOT NULL,
  `uid` int(3) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ttable`
--

INSERT INTO `ttable` (`id`, `subject`, `day`, `timee`, `uid`, `type`) VALUES
(6, 'CMPD124', 'Thursday', '5PM-6PM', 3, 'Lab'),
(12, 'CMPD214', 'Wednesday', '10AM-11AM', 3, 'Lab'),
(14, 'CNGD666', 'Wednesday', '11AM-12PM', 3, 'Revision'),
(15, 'CMPD336', 'Tuesday', '4PM-5PM', 3, 'Tutorial'),
(16, 'CMPD214', 'Friday', '4PM-5PM', 3, 'Tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(3) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upassword` varchar(25) NOT NULL,
  `umobile` varchar(15) NOT NULL,
  `uimage` varchar(100) NOT NULL,
  `access` int(1) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`userid`),
  UNIQUE KEY `email` (`uemail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `userid`, `uname`, `uemail`, `upassword`, `umobile`, `uimage`, `access`) VALUES
(1, 'admin', 'admin', 'admin@admin1.com', 'admina', '0111166061101', 'upload/ny_15022019030206.jpg', 1),
(3, 'juzjuz', 'juz', 'juzpromiz@gmail.com', '00000000', '01116606110', 'upload/fr-02_15022019040205.jpg', 2),
(6, 'Grace', 'Grace Lee', 'grace@gmail.com', '11111', '', '', 2),
(8, 'Alibaba', 'Alibaba', 'alibaba@gmail.com', '11111', '', '', 2),
(11, 'liyana', 'Liyana Batrisya', 'liyana@yahoo.com', 'liyana123', '', '', 2),
(13, 'nashsaliza', 'yao', 'noorsaliza@uniten.edu.my', '12345', '', 'upload/8457d4c36510ab4_12022019080224.jpg', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
