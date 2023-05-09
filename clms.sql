-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 11:33 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `clms`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `comp_id` int(20) NOT NULL auto_increment,
  `comp_name` varchar(30) NOT NULL,
  `comp_type` varchar(30) NOT NULL,
  `comp_model` varchar(30) NOT NULL,
  `comp_serial` varchar(30) NOT NULL,
  `lab_name` varchar(30) NOT NULL,
  `lab_number` varchar(30) NOT NULL,
  `AMU_code` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`comp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `computer`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `content` varchar(4000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(20) NOT NULL auto_increment,
  `item_name` varchar(30) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `item_model` varchar(30) NOT NULL,
  `item_serial` varchar(30) NOT NULL,
  `lab_name` varchar(30) NOT NULL,
  `lab_number` varchar(30) NOT NULL,
  `AMU_code` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `item`
--


-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `lab_id` int(20) NOT NULL auto_increment,
  `lab_name` varchar(30) NOT NULL,
  `lab_number` varchar(30) NOT NULL,
  `lab_type` varchar(30) NOT NULL,
  `lab_location` varchar(30) NOT NULL,
  `target_user` varchar(30) NOT NULL,
  `lab_status` varchar(30) NOT NULL,
  `accomendation` varchar(30) NOT NULL,
  PRIMARY KEY  (`lab_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `laboratory`
--


-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `date` date NOT NULL,
  `send_from` varchar(30) NOT NULL,
  `send_to` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status_from` varchar(30) NOT NULL,
  `status_to` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `p_id` int(20) NOT NULL auto_increment,
  `title` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `post_by` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `s_number` int(20) NOT NULL auto_increment,
  `department` varchar(30) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `user_number` varchar(30) NOT NULL,
  `software` varchar(30) NOT NULL,
  `purpuse` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  PRIMARY KEY  (`s_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `service`
--


-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(20) NOT NULL auto_increment,
  `slide_1` varchar(30) NOT NULL,
  `slide_2` varchar(30) NOT NULL,
  `slide_3` varchar(30) NOT NULL,
  `slide_4` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `slide`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `p_picture` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

