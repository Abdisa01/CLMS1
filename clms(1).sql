-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2017 at 10:33 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`comp_id`, `comp_name`, `comp_type`, `comp_model`, `comp_serial`, `lab_name`, `lab_number`, `AMU_code`, `status`) VALUES
(1, 'fsdgsdfg', 'dxgfsdg', 'dsgfd', 'dsadffa', 'dsgfgdfsg', '001', 'gsdfgfds', 'dfsggf'),
(2, 'fsdgsdfg', 'dxgfsdg', 'dsgfd', 'fdsgdsg', 'dsgfgdfsg', '001', 'gsdfgfds', 'dfsggf');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_manager`
--

CREATE TABLE IF NOT EXISTS `evaluation_manager` (
  `ev_idm` int(20) NOT NULL auto_increment,
  `ta name` varchar(30) NOT NULL,
  `lab_name` varchar(30) NOT NULL,
  `lab_number` varchar(30) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `q1` int(20) NOT NULL,
  `q2` int(20) NOT NULL,
  `q3` int(20) NOT NULL,
  `q4` int(20) NOT NULL,
  `q5` int(20) NOT NULL,
  `q6` int(20) NOT NULL,
  `q7` int(20) NOT NULL,
  `q8` int(20) NOT NULL,
  `q9` int(20) NOT NULL,
  `q10` int(20) NOT NULL,
  `q11` int(20) NOT NULL,
  `q12` int(20) NOT NULL,
  `q13` int(20) NOT NULL,
  `q14` int(20) NOT NULL,
  `15` int(20) NOT NULL,
  PRIMARY KEY  (`ev_idm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `evaluation_manager`
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

INSERT INTO `feedback` (`name`, `email`, `content`) VALUES
('abdisa', 'abdisakediro01@gmail.com', 'asdasfefcxzc');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_type`, `item_model`, `item_serial`, `lab_name`, `lab_number`, `AMU_code`, `status`) VALUES
(1, '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`lab_id`, `lab_name`, `lab_number`, `lab_type`, `lab_location`, `target_user`, `lab_status`, `accomendation`) VALUES
(1, 'gdfg', '', 'gfdg', '4565', '543654', 'fsfsz', 'fsdfdsdsf');

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

INSERT INTO `mail` (`date`, `send_from`, `send_to`, `subject`, `content`, `file`, `status_from`, `status_to`) VALUES
('2017-04-17', '', 'abdisakediro01@gmail.com', 'naf', 'Unknown column ''date'' in ''order clause''', '', 'Sent', 'New'),
('2017-04-18', '', 'abdisakediro01@gmail.com', 'nnnn', 'i love you', '', 'Sent', 'New'),
('2017-04-22', '', 'abdisakediro01@gmail.com', 'dfsfdf', 'gtsgsdfg', 'fig.PNG', 'Sent', 'New'),
('2017-04-22', 'abdisakediro01@gmail.com', 'abdisakediro01@gmail.com', 'dsfd', 'dsfvdcvsdfvvddfdv', 'bb.PNG', 'Sent', 'New'),
('2017-05-08', '', 'abdisakediro01@gmail.com', 'hhhh', 'sdzgsdfvgdzsgdfsbvxczvcxzviol', '18010373_1279036805526499_7651063275977087989_n.jpg', 'Sent', 'New'),
('2017-05-08', 'ananaf198@gmail.com', 'abdisakediro01@gmail.com', 'fchgfhxdf', 'hdfghxdbgfxdbcxvb', '18010373_1279036805526499_7651063275977087989_n.jpg', 'Sent', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `post_id` int(20) NOT NULL auto_increment,
  `title` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `postBy` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `st` varchar(30) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  PRIMARY KEY  (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`post_id`, `title`, `post`, `postBy`, `username`, `status`, `date`, `st`, `deadline`) VALUES
(1, 'Abdisa ', 'Class type architecture provid', '', '', 'All', '2017-04-17 01:29:19:pm', 'expired', '17-04-27'),
(2, 'ffff', 'dasfsfsdfsdfafsdfasdfsdafsdfsd', 'abdi', 'abdi', 'Technical assistant', '2017-05-09 01:07:25:am', 'posted', '17-05-19');

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
  `campany` varchar(50) NOT NULL,
  `purpuse` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  PRIMARY KEY  (`s_number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_number`, `department`, `batch`, `course`, `user_number`, `software`, `campany`, `purpuse`, `duration`) VALUES
(1, 'vgfh', 'vcb', '', '123', 'fdgdf', 'fdgf', 'dxgf', 'dgdf'),
(2, 'jghj', 'jfghf', 'ghjgf', '41543', 'dfgfds', 'dfgd', 'sdfgdf', 'dfsgfdgd');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `slide_1`, `slide_2`, `slide_3`, `slide_4`, `username`, `status`) VALUES
(6, '18300817_629979567212240_18448', '17992197_1169679399807238_9106', '12548945_1554427944880339_7575', '14639862_975761092551169_66158', 'abdi', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL auto_increment,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `p_picture` varchar(300) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `gender`, `usertype`, `organization`, `username`, `password`, `email`, `phone`, `p_picture`) VALUES
(1, 'abdisa', 'kediro', 'Male', 'Admin', 'amu', 'abdi', '123', 'abdisakediro01@gmail.com', '0936512445', '18300817_629979567212240_1844855646206111353_n.jpg'),
(2, 'abay', 'hhhh', 'Male', 'Technical Assistant', 'AMU', 'abay', '123', 'abdisakediro01@gmail.com', '0936512445', 'bb.PNG'),
(3, 'animaw', 'kerie', 'Male', 'Labmanger', 'AMU', 'anex', '123', 'ananaf198@gmail.com', '0936512445', '12.JPG'),
(4, 'fff', 'aaaa', 'Female', 'Instructor', 'ass', 'aaa', '123', 'abdisakediro01@gmail.com', '012345', '17458407_1988158081512966_2365465320703844563_n.jpg'),
(5, 'cala', 'nnn', 'Female', 'external user', 'bbb', 'ss', 'aa', 'ananaf198@gmail.com', '01122', '13.JPG'),
(6, 'dava', 'mok', 'Male', 'student', 'xxxx', 'dd', '123', 'ananaf198@gmail.com', '093651245', '17203070_1972527936409314_1851795691695019954_n.jpg'),
(7, 'abdisa', 'mmmmmmmmm', 'Male', 'Admin', 'dfdsfdsfdfs', 'Adm16228', 'Mjk5NDM=', 'abdisakediro01@gmail.com', '0936512445', 'jjj.PNG');
