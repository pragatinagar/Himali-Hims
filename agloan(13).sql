-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 02:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `actual_expances`
--

CREATE TABLE IF NOT EXISTS `actual_expances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `project_code` varchar(30) NOT NULL,
  `visitdate` varchar(30) NOT NULL,
  `reportdate` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `detail` varchar(25) NOT NULL,
  `unit` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `actual_expances`
--

INSERT INTO `actual_expances` (`id`, `sn`, `userId`, `project_code`, `visitdate`, `reportdate`, `source`, `detail`, `unit`, `quantity`, `cost`, `total_cost`) VALUES
(1, 0, 0, '03-001', '2019/5/8', '2015/5/8', '', 'Storage', 'square_feet', 43543, 435, 435),
(2, 0, 1, '03-013', '2019/5/8', '', '', '', '', 0, 0, 0),
(3, 0, 1, '03-007', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Insurance', 'liter', 435, 645, 456);

-- --------------------------------------------------------

--
-- Table structure for table `actual_investment`
--

CREATE TABLE IF NOT EXISTS `actual_investment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitdate` varchar(25) NOT NULL,
  `reportdate` varchar(25) NOT NULL,
  `source` varchar(25) NOT NULL,
  `sn` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `project_code` varchar(25) NOT NULL,
  `r_quantity` int(11) NOT NULL,
  `r_price` int(11) NOT NULL,
  `r_gc` int(30) NOT NULL,
  `r_pc` int(30) NOT NULL,
  `claim_quantity` int(11) NOT NULL,
  `claim_price` int(11) NOT NULL,
  `claim_gc` int(30) NOT NULL,
  `claim_pc` int(30) NOT NULL,
  `grant_quantity` int(11) NOT NULL,
  `grant_price` int(11) NOT NULL,
  `grant_gc` int(30) NOT NULL,
  `grant_pc` int(30) NOT NULL,
  `Reimbursement_quantity` varchar(30) NOT NULL,
  `balance_quantity` int(11) NOT NULL,
  `balance_price` int(11) NOT NULL,
  `balance_gc` int(35) NOT NULL,
  `balance_pc` int(35) NOT NULL,
  `status` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `actual_investment`
--

INSERT INTO `actual_investment` (`id`, `visitdate`, `reportdate`, `source`, `sn`, `userId`, `project_code`, `r_quantity`, `r_price`, `r_gc`, `r_pc`, `claim_quantity`, `claim_price`, `claim_gc`, `claim_pc`, `grant_quantity`, `grant_price`, `grant_gc`, `grant_pc`, `Reimbursement_quantity`, `balance_quantity`, `balance_price`, `balance_gc`, `balance_pc`, `status`) VALUES
(36, '0', '0', '0', 3, 0, '02-054', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(37, '0', '0', '0', 3, 0, '02-054', 324, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(38, '0', '0', '0', 2, 0, '02-054', 2, 4324, 432, 234, 654, 456, 546, 546, 56, 56, 56, 56, '', 456, 56, 546, 546, 'Fully'),
(39, '0', '0', '0', 3, 0, '02-054', 0, 0, 0, 0, 34, 345, 435, 435, 435, 435, 435, 435, '', 45, 544, 3434, 54535434, 'Initial'),
(40, '0', '0', '0', 3, 1, '02-054', 45, 544, 3434, 54535434, 0, 0, 0, 0, 0, 0, 0, 0, '', 45, 435, 345, 345, 'Initial'),
(41, '0', '0', '0', 3, 1, '02-054', 45, 435, 345, 345, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(42, '0', '0', '0', 3, 1, '02-054', 67, 67, 67, 65, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(43, '0', '0', '0', 3, 1, '02-054', 67, 67, 67, 65, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(44, '0', '0', '0', 3, 1, '02-054', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(45, '2019', '2016', '0', 3, 1, '02-054', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(46, '2019/5/8', '2016/5/8', 'Interview with Owner', 3, 1, '02-054', 543, 345, 345, 543, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial'),
(47, '', '', '', 3, 1, '02-054', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 'Initial');

-- --------------------------------------------------------

--
-- Table structure for table `actual_regular`
--

CREATE TABLE IF NOT EXISTS `actual_regular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `visit_date` varchar(20) NOT NULL,
  `report_month` varchar(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `employee` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `family` varchar(20) NOT NULL,
  `local` varchar(20) NOT NULL,
  `worked_month` int(11) NOT NULL,
  `incash` int(11) NOT NULL,
  `total_salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `actual_regular`
--

INSERT INTO `actual_regular` (`id`, `sn`, `userId`, `project_code`, `visit_date`, `report_month`, `source`, `employee`, `sex`, `caste`, `family`, `local`, `worked_month`, `incash`, `total_salary`) VALUES
(25, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(26, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(27, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(28, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(29, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(30, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(31, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(32, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(33, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(34, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(35, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(36, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(37, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(38, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(39, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', 'no', 'no', 1, 5, 350),
(40, 1, 1, '02-054', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 2, 320),
(41, 5, 1, '03-007', '2019/5/8', '2015/5/8', 'Agribuiness Diary', 'ManagerialStaff', 'female', 'Other', 'no', 'no', 1, 22, 33),
(42, 5, 1, '03-007', '2019/5/8', '2015/5/8', 'Agribuiness Diary', 'labor', 'male', 'Janajati', 'yes', 'yes', 1, 55, 22),
(43, 5, 1, '03-007', '2019/5/8', '2015/5/8', 'Agribuiness Diary', 'ManagerialStaff', 'female', 'Other', 'no', 'no', 1, 22, 33),
(44, 5, 1, '03-007', '2019/5/8', '2015/5/8', 'Agribuiness Diary', 'labor', 'male', 'Janajati', 'yes', 'yes', 1, 55, 22),
(45, 1, 1, '03-013', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Technician', 'male', 'Dalit', '', 'no', 1, 444, 444),
(46, 1, 1, '03-013', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Engineer', 'female', 'Janajati', '', 'no', 1, 333, 333),
(47, 1, 1, '03-013', '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'labor', 'male', 'Bahun', '', 'yes', 1, 222, 222),
(48, 1, 1, '03-022', '', '', '', 'Technician', 'female', 'Dalit', 'no', 'no', 1, 435, 435),
(49, 1, 1, '03-022', '', '', '', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 222, 546),
(50, 1, 1, '03-022', '', '', '', 'Technician', 'female', 'Dalit', 'no', 'no', 1, 435, 435),
(51, 1, 1, '03-022', '', '', '', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 222, 546),
(52, 1, 1, '03-022', '', '', '', 'Technician', 'female', 'Dalit', 'no', 'no', 1, 435, 435),
(53, 1, 1, '03-022', '', '', '', 'labor', 'male', 'Bahun', 'yes', 'yes', 1, 222, 546),
(54, 1, 1, '03-016', '2019/5/8', '2016/5/8', 'Interview with Owner', 'Technician', 'female', 'Other', '', 'yes', 1, 333, 333),
(55, 1, 1, '03-016', '2019/5/8', '2016/5/8', 'Interview with Owner', 'Engineer', 'male', 'Dalit', '', 'no', 1, 222, 222);

-- --------------------------------------------------------

--
-- Table structure for table `actual_revenue`
--

CREATE TABLE IF NOT EXISTS `actual_revenue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `project_code` varchar(30) NOT NULL,
  `sn` int(11) NOT NULL,
  `visitdate` varchar(35) NOT NULL,
  `reportdate` varchar(35) NOT NULL,
  `source` varchar(35) NOT NULL,
  `detail` tinytext NOT NULL,
  `types` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `local_quantity` int(11) NOT NULL,
  `local_price` int(11) NOT NULL,
  `local_revenue` int(11) NOT NULL,
  `traders_quantity` int(11) NOT NULL,
  `traders_price` int(11) NOT NULL,
  `traders_revenue` int(11) NOT NULL,
  `beyond_quantity` int(11) NOT NULL,
  `beyond_price` int(11) NOT NULL,
  `beyond_revenue` int(11) NOT NULL,
  `others_quantity` int(11) NOT NULL,
  `others_price` int(11) NOT NULL,
  `others_revenue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `actual_revenue`
--

INSERT INTO `actual_revenue` (`id`, `userId`, `project_code`, `sn`, `visitdate`, `reportdate`, `source`, `detail`, `types`, `unit`, `quantity`, `local_quantity`, `local_price`, `local_revenue`, `traders_quantity`, `traders_price`, `traders_revenue`, `beyond_quantity`, `beyond_price`, `beyond_revenue`, `others_quantity`, `others_price`, `others_revenue`) VALUES
(1, 0, '03-013', 0, 'test date', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, '03-012', 54, '', 'test date2', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 1, '03-008', 22222, '99999', '', 'source', 'Test By programmer', '', 'square_feet', 345, 345, 534, 345, 534, 435, 345, 345, 345, 534, 534, 534, 345),
(4, 1, '03-008', 22222, '99999', '', '', '', 'types', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, '03-007', 4, '2019/5/8', '2016/5/8', 'Interview with Owner', 'fdsf', '', 'feet', 561, 56, 4654, 5645, 45, 465, 456, 4564, 56456, 4564, 564, 564, 56456),
(6, 1, '03-008', 222222, '999999', '', '', 'dfsg', '', 'liter', 435, 3425, 345, 43, 352, 3245, 345, 3425, 3245, 3245, 345, 3425, 3245),
(7, 1, '03-008', 222222, '99999', '', '', 'Test By programmer', '', 'square_feet', 324, 324, 324, 234, 234, 324, 324, 234, 234, 324, 234, 324, 342),
(8, 3, '03-008', 234, '', '', '', '324', '', 'liter', 324, 34, 34, 432, 234, 234, 324, 324, 324, 234, 234, 234, 234),
(9, 3, '03-008', 345, '', '', '', 'dsf', '', 'feet', 324, 324, 324, 324, 324, 324, 234, 324, 324, 324, 324, 324, 324),
(10, 3, '03-008', 234, '', '', '', 'gfdgdf', '', 'square_feet', 456, 456, 54, 456, 45, 45, 456, 45, 456, 456, 546, 456, 456),
(11, 0, '03-001', 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 3, '03-008', 5, '', '', '', '324', '', 'other', 324, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 3, '03-008', 0, '', '', 'Agribuiness and Interview with Subp', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 1, '03-001', 0, '2019/5/8', '2016/5/8', 'Agribuiness Diary', 'Test By programmer', '', 'year', 435, 435, 435, 45, 4, 534, 3, 43, 34, 345, 345, 345, 34),
(15, 1, '03-035', 0, '2019/5/8', '2015/5/8', 'Agribuiness Diary', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `actual_seasonal`
--

CREATE TABLE IF NOT EXISTS `actual_seasonal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `visit_date` varchar(20) NOT NULL,
  `report_month` varchar(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `employee` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `family` varchar(20) NOT NULL,
  `local` varchar(20) NOT NULL,
  `worked_month` int(11) NOT NULL,
  `incash` int(11) NOT NULL,
  `total_salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `actual_seasonal`
--

INSERT INTO `actual_seasonal` (`id`, `sn`, `project_code`, `visit_date`, `report_month`, `source`, `employee`, `sex`, `caste`, `family`, `local`, `worked_month`, `incash`, `total_salary`) VALUES
(1, 0, '03-027', '', '', '', '', '', '', '', '', 0, 0, 0),
(2, 0, '02-054', '2019/5/8', '2016/5/8', 'Interview with Owner', 'labor', 'male', 'Bahun', '', 'no', 2, 435, 435),
(3, 0, '03-001', '2019/5/8', '2015/5/8', 'Agribuiness and Interview with Subproject Owner', 'Accountant', 'male', 'Bahun', '', 'no', 1, 333, 3331),
(4, 0, '03-001', '2019/5/8', '2015/5/8', 'Agribuiness and Interview with Subproject Owner', 'Technician', 'female', 'Janajati', '', 'yes', 1, 222, 2221),
(5, 0, '03-008', '2019/5/8', '2016/5/8', 'Agribuiness and Interview with Subproject Owner', 'ManagerialStaff', 'female', 'Janajati', 'no', 'no', 1, 56, 111),
(6, 0, '03-008', '2019/5/8', '2016/5/8', 'Agribuiness and Interview with Subproject Owner', 'Engineer', 'female', 'Bahun', 'yes', 'yes', 1, 56, 45),
(7, 0, '03-012', '', '', '', '', '', '', '', '', 0, 0, 2),
(8, 0, '03-012', '', '', '', '', '', '', '', '', 0, 0, 1),
(9, 0, '03-012', '', '', '', '', '', '', '', '', 0, 0, 2),
(10, 0, '03-012', '', '', '', '', '', '', '', '', 0, 0, 1),
(11, 0, '03-012', '', '', '', '', '', '', '', '', 0, 0, 2),
(12, 0, '03-012', '', '', '', '', '', '', '', '', 0, 0, 1),
(13, 0, '03-012', '2019/5/8', '2015/5/8', 'Interview with Owner', 'Accountant', 'female', 'Other', '', 'no', 1, 5, 5),
(14, 0, '03-012', '2019/5/8', '2015/5/8', 'Interview with Owner', 'Engineer', 'male', 'Janajati', '', 'yes', 1, 4, 4),
(15, 0, '03-013', '2019/5/8', '2016/5/8', 'Interview with Owner', 'ManagerialStaff', 'female', 'Janajati', '', 'yes', 1, 333, 333),
(16, 0, '03-013', '2019/5/8', '2016/5/8', 'Interview with Owner', 'labor', 'female', 'Other', '', 'no', 1, 222, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `detail` varchar(25) NOT NULL COMMENT 'Prefix with first underscore are main items ',
  `unit` varchar(20) NOT NULL,
  `nameOfOther` varchar(45) NOT NULL,
  `y1` int(11) NOT NULL COMMENT 'y1 to y5 are cost per unit',
  `y2` int(11) NOT NULL,
  `y3` int(11) NOT NULL,
  `y4` int(11) NOT NULL,
  `y5` int(11) NOT NULL,
  `y6` int(11) NOT NULL COMMENT 'y6 to y10 quantity',
  `y7` int(11) NOT NULL,
  `y8` int(11) NOT NULL,
  `y9` int(11) NOT NULL,
  `y10` int(11) NOT NULL,
  `total1` int(20) NOT NULL COMMENT 'total1=y1*y6 and so on',
  `total2` int(20) NOT NULL,
  `total3` int(20) NOT NULL,
  `total4` int(20) NOT NULL,
  `total5` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `detail` (`detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE IF NOT EXISTS `investment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `sn_byUser` varchar(20) NOT NULL,
  `project_code` varchar(25) NOT NULL,
  `detail` varchar(45) NOT NULL,
  `sector` varchar(25) NOT NULL,
  `environmental` varchar(25) NOT NULL,
  `types` varchar(25) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quality` varchar(20) NOT NULL,
  `per_unit` varchar(20) NOT NULL,
  `grant_contribution` varchar(20) NOT NULL,
  `Proponent_contribution` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`unit`,`quality`,`per_unit`,`grant_contribution`,`Proponent_contribution`,`sn_byUser`,`project_code`,`detail`,`sector`,`types`,`environmental`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `userId`, `sn_byUser`, `project_code`, `detail`, `sector`, `environmental`, `types`, `unit`, `quality`, `per_unit`, `grant_contribution`, `Proponent_contribution`) VALUES
(6, 1, '3', '02-054', 'testmytest 02', 'Other', '', '', 'square_feet', '3', '4534', '342', '3423'),
(7, 1, '2', '02-054', 'testmytest', 'Machinery', '', '', 'feet', '2', '4324', '432', '234');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE IF NOT EXISTS `labor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `sn_byUser` int(11) NOT NULL,
  `detail` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `y1` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `y3` int(11) NOT NULL,
  `y4` int(11) NOT NULL,
  `y5` int(11) NOT NULL,
  `y6` int(11) NOT NULL,
  `y7` int(11) NOT NULL,
  `y8` int(11) NOT NULL,
  `y9` int(11) NOT NULL,
  `y10` int(11) NOT NULL,
  `total1` int(11) NOT NULL,
  `total2` int(11) NOT NULL,
  `total3` int(11) NOT NULL,
  `total4` int(11) NOT NULL,
  `total5` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `local` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `more_regular`
--

CREATE TABLE IF NOT EXISTS `more_regular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_code` varchar(25) NOT NULL,
  `regular_id` varchar(50) NOT NULL,
  `product_detail` varchar(50) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `more_regular`
--

INSERT INTO `more_regular` (`id`, `project_code`, `regular_id`, `product_detail`, `unit`, `quantity`, `price`) VALUES
(73, '02-054', '25', 'test2', '', 50, 50),
(74, '02-054', '25', 'test2', '', 50, 50),
(75, '02-054', '25', 'test2', '', 50, 50),
(76, '02-054', '26', 'test2', '', 50, 50),
(77, '02-054', '26', 'test2', '', 50, 50),
(78, '02-054', '26', 'test2', '', 50, 50),
(79, '02-054', '27', 'test2', '', 50, 50),
(80, '02-054', '27', 'test2', '', 50, 50),
(81, '02-054', '27', 'test2', '', 50, 50),
(82, '02-054', '28', 'test2', '', 50, 50),
(83, '02-054', '28', 'test2', '', 50, 50),
(84, '02-054', '28', 'test2', '', 50, 50),
(85, '03-022', '48', '435', 'liter', 345, 345),
(86, '03-022', '48', '345', 'hour', 34, 43),
(87, '03-022', '48', '345', 'year', 345, 345),
(88, '03-022', '50', '435', 'liter', 345, 345),
(89, '03-022', '50', '345', 'hour', 34, 43),
(90, '03-022', '50', '345', 'year', 345, 345),
(91, '03-022', '51', '546', 'kg', 45, 54),
(92, '03-022', '51', '54', 'number', 456, 546),
(93, '03-022', '51', '546', 'day', 45, 54),
(94, '03-022', '52', '435', 'liter', 345, 345),
(95, '03-022', '52', '345', 'hour', 34, 43),
(96, '03-022', '52', '345', 'year', 345, 345),
(97, '03-022', '53', '546', 'kg', 45, 54),
(98, '03-022', '53', '54', 'number', 456, 546),
(99, '03-022', '53', '546', 'day', 45, 54),
(100, '03-016', '54', '333', 'number', 333, 333),
(101, '03-016', '54', '333', 'number', 333, 333),
(102, '03-016', '54', '333', 'number', 333, 333),
(103, '03-016', '55', '222', 'kg', 222, 222),
(104, '03-016', '55', '222', 'kg', 222, 222),
(105, '03-016', '55', '222', 'kg', 222, 222),
(106, '03-001', '3', '', '', 0, 0),
(107, '03-001', '3', '333', '', 333, 333),
(108, '03-001', '3', '333', '', 333, 333),
(109, '03-001', '4', '222', '', 222, 222),
(110, '03-001', '4', '222', '', 222, 222),
(111, '03-001', '4', '222', '', 222, 222);

-- --------------------------------------------------------

--
-- Table structure for table `more_seasonal`
--

CREATE TABLE IF NOT EXISTS `more_seasonal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_code` varchar(11) NOT NULL,
  `regular_id` varchar(11) NOT NULL,
  `product_detail` varchar(50) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `more_seasonal`
--

INSERT INTO `more_seasonal` (`id`, `project_code`, `regular_id`, `product_detail`, `unit`, `quantity`, `price`) VALUES
(1, '3', '1', '', '', 0, 0),
(2, '3', '1', '', '', 0, 0),
(3, '3', '1', '', '', 0, 0),
(4, '2', '2', '435', 'kg', 345, 345),
(5, '2', '2', '345', 'liter', 345, 345),
(6, '2', '2', '234', 'day', 345, 345),
(7, '03-008', '5', '', '', 0, 0),
(8, '03-008', '5', '456', 'kg', 546, 546),
(9, '03-008', '5', '45', 'kg', 546, 546),
(10, '03-008', '6', '65', 'liter', 456, 546),
(11, '03-008', '6', '456', 'liter', 546, 4),
(12, '03-008', '6', '54', 'liter', 456, 54),
(13, '03-013', '15', '333', 'liter', 333, 333),
(14, '03-013', '15', '333', 'liter', 333, 333),
(15, '03-013', '15', '333', 'liter', 333, 333),
(16, '03-013', '16', '1', 'kg', 1, 1),
(17, '03-013', '16', '1', 'kg', 1, 1),
(18, '03-013', '16', '1', 'kg', 1, 1),
(19, '03-014', '16', '345', 'number', 123, 123),
(20, '03-014', '16', '435', 'number', 123, 123),
(21, '03-014', '16', '345', 'number', 123, 123),
(22, '03-007', '16', '', '', 0, 0),
(23, '03-007', '16', '', '', 0, 0),
(24, '03-007', '16', '', '', 0, 0),
(25, '03-035', '16', '', '', 0, 0),
(26, '03-035', '16', '', '', 0, 0),
(27, '03-035', '16', '', '', 0, 0),
(28, '03-034', '16', '', '', 0, 0),
(29, '03-034', '16', '', '', 0, 0),
(30, '03-034', '16', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projectdetail`
--

CREATE TABLE IF NOT EXISTS `projectdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_code` varchar(20) NOT NULL,
  `name_add_proponent` tinytext NOT NULL,
  `responsible_person` tinytext NOT NULL,
  `district` tinytext NOT NULL,
  `objectives` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `enterprises` varchar(15) NOT NULL,
  `scale` varchar(15) NOT NULL,
  `caste_owner` varchar(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `agreement_date_ad` varchar(15) NOT NULL,
  `agreement_date_bs` varchar(15) NOT NULL,
  `completion_date_ad` varchar(15) NOT NULL,
  `completion_date_bs` varchar(15) NOT NULL,
  `total_investment_rs` int(11) NOT NULL,
  `total_investment_usd` int(11) NOT NULL,
  `grand_rs` float NOT NULL,
  `grand_usd` float NOT NULL,
  `proponent_rs` float NOT NULL,
  `proponent_usd` float NOT NULL,
  `bramin` int(11) NOT NULL DEFAULT '0',
  `janajati` int(11) NOT NULL DEFAULT '0',
  `dalit` int(11) NOT NULL DEFAULT '0',
  `other` int(11) NOT NULL DEFAULT '0',
  `hidden_male` int(11) NOT NULL,
  `hidden_female` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_code` (`project_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=407 ;

--
-- Dumping data for table `projectdetail`
--

INSERT INTO `projectdetail` (`id`, `project_code`, `name_add_proponent`, `responsible_person`, `district`, `objectives`, `area`, `enterprises`, `scale`, `caste_owner`, `sex`, `agreement_date_ad`, `agreement_date_bs`, `completion_date_ad`, `completion_date_bs`, `total_investment_rs`, `total_investment_usd`, `grand_rs`, `grand_usd`, `proponent_rs`, `proponent_usd`, `bramin`, `janajati`, `dalit`, `other`, `hidden_male`, `hidden_female`) VALUES
(53, '02-054', 'L.T Agriculture Farm, Dudhkunda Municipality Ward No.01**', 'Mr. Lakpa Tenji Lama,9841532332**', 'Sankhuwasabha', 'Kiwi Production', '', 'Entrepreneur', 'Large', 'Dalit', 'Male', '14-Jun-15', '2072.02.31', '13-May-16', '', 1, 994, 248, 80, 14, 12, 1, 2, 4, 5, 3, 6),
(61, '03-001', 'Samadumling Agriculture and Livestock Farm,\r\nBhedpu V.D.C. \r\nWard No.  08', 'Mr. Ashok Ghising,\r\n9851129808', 'Dolpa', 'Goat Husbandry', '', '', '', 'Others', '', '26-Jun-13', '2070.03.12', '13-May-16', '', 5, 3, 1, 76, 58, 100, 0, 0, 0, 0, 54353, 0),
(62, '03-012', 'Tamakoshi Professional Agriculture Farm Pvt. Ltd.,\r\nGhangSukathokar V.D.C. Ward No.  01', 'Mr. Shiva Psd Bhandari,\r\n9851111290', 'Dolpa', 'Pomegranete Cultivat', 'Fruits', 'Group', 'Large', 'Others', '', '30-Jun-13', '2070.03.16', '13-May-16', '', 3, 1, 1, 50, 36, 81, 0, 0, 0, 0, 0, 0),
(63, '03-013', 'Gaurishankar Himalayan dairy Farm,\r\nMali V.D.C.\r\nWard No.  03', 'Mr. Sanu Sherpa,\r\n9741085113', 'Dolpa', 'Yak Cheese Productio', '', 'Group', 'Medium', 'Others', '', '30-Jun-13', '2070.03.16', '13-May-16', '', 2, 2, 559, 80, 32, 99, 0, 0, 0, 0, 0, 0),
(64, '03-021', 'Kalinchwok Nepali Paper Industry,\r\nBhimeswor Municipality \r\nWard No.  13', 'Mr. Kamal Shrestha,\r\n9844175716', '', 'Nepali Hand Made Pap', '', '', '', 'Male', '', '05-Dec-13', '2070.08.20', '13-May-16', '', 1, 815, 203, 80, 11, 100, 0, 0, 0, 0, 0, 0),
(65, '03-007', 'Sherpa Multipurpose Agriculture Farm,\nBhimeswor Municipality \nWard No.  10', 'Mr. Sonam Sherpa,\n9818229605', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '09-Dec-13', '2070.08.24', '13-May-16', '', 3, 2, 639, 80, 37, 83, 0, 0, 0, 0, 0, 0),
(66, '03-016', 'Ramche Small Peasant Agiculture Co-operative Society Ltd. (Ramche Sana Kishan Krishi Sahakari Sanstha Ltd.),\nJafph V.D.C. \nWard No.  08', 'Mr. Parsuram Karki,\n9741026832', 'Dolakha', 'Vegetable Production', 'Vegetables & Spices', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '23-Dec-13', '2070.09.08', '13-May-16', '', 3, 1, 1, 50, 42, 0, 0, 0, 0, 0, 0, 0),
(67, '03-017', 'Ama Kiwi Fruits Nursery Industry,\nBhimeswor Municipality \nWard No.  01 ', 'Mr. Shyam Bahadur Khadka,\n9744022016', 'Dolakha', 'Kiwi Sapling Product', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '26-Dec-13', '2070.09.11', '13-May-16', '', 1, 1, 747, 59, 21, 90, 0, 0, 0, 0, 0, 0),
(68, '03-014', 'Jiri Rainbow Trout Fish Industry,\r\nJiri V.D.C. \r\nWard No.  08', 'Mr. Keshab Kumar Karki,\r\n9851000677', 'Dolakha', 'Rainbow Trout ', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '10-Jan-14', '2070.09.26', '13-May-16', '', 4, 3, 808, 80, 47, 97, 0, 0, 0, 0, 0, 0),
(69, '03-035', 'Namaste Masalabali and Cardamom Production Industry,\nSuri V.D.C. \nWard No.  05', 'Mr. Jishnu Bahadur Khadka,\n9744046301', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '26-Jan-14', '2070.10.12', '13-May-16', '', 2, 1, 1, 50, 24, 53, 0, 0, 0, 0, 0, 0),
(70, '03-022', 'Prakrati Multi Agriculture and Research Pvt. Ltd.(Prakriti Bahukrishi Taha  Anusandhan Pra.Li),\nSuspaChhemawati V.D.C. Ward No.  02', 'Mr. Sitaram Siwakoti,\n9841428722;\n9744033899', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '17-Feb-14', '2070.11.05', '13-May-16', '', 3, 2, 612, 80, 35, 100, 0, 0, 0, 0, 0, 0),
(71, '03-028', 'Pakhatol Misrit Sitake Chyau Tatha Tarkari Utpadan Farm,\nBhimeswor Municipality Ward No. 01', 'Mr. Badri Kumar Shrestha,\n9844059956', 'Dolakha', 'Mushroom Production ', 'Vegetables & Spices', 'Entrepreneur Ow', 'Newar', 'Male', 'Medium Agr', '04-Mar-14', '2070.11.19', '13-May-16', '', 2, 2, 552, 80, 32, 99, 0, 0, 0, 0, 0, 0),
(72, '03-054', 'Innovative Pig Farming Farm,\nBhusapheda V.D.C. \nWard No.  02', 'Mr. Indra Tamang,\n9744045386', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '04-Mar-14', '2070.11.19', '13-May-16', '', 1, 1, 274, 80, 15, 94, 0, 0, 0, 0, 0, 0),
(73, '03-038', 'Chanarkha Horticulture Farm,\nSuspaChhemawati V.D.C. Ward No.  03', 'Ms. Tulasha Siwakoti,\n9849496802', 'Dolakha', 'Orange Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '16-Mar-14', '2070.12.02', '13-May-16', '', 2, 1, 1, 50, 25, 24, 0, 0, 0, 0, 0, 0),
(74, '03-049', 'A.B. Nepali Paper Industry,\nMali V.D.C. Ward No.  09', 'Mr. Dabal Bahadur Shrestha,\n9844213251', 'Dolakha', 'Nepali Hand Made Pap', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Newar', 'Male', 'Medium Agr', '25-Mar-14', '2070.12.11', '13-May-16', '', 3, 3, 797, 80, 46, 78, 0, 0, 0, 0, 0, 0),
(75, '03-031', 'Basnyat Poultry Farm,\nBhimeswor Municipality \nWard No.  12', 'Mr. Ram Bahadur Basnyat,\n9741109763', 'Dolakha', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '26-Mar-14', '2070.12.12', '13-May-16', '', 2, 1, 450, 80, 26, 100, 0, 0, 0, 0, 0, 0),
(76, '03-036', 'Shringeshwor Multi Agriculture And Research Center Pvt. Ltd.,\nSunkhani V.D.C\nWard No. 02', 'Mr. Subash Bikram Siwakoti,\n9844301896', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '06-Apr-14', '2070.12.23', '13-May-16', '', 2, 1, 1, 50, 28, 57, 0, 0, 0, 0, 0, 0),
(77, '03-047', 'Laligurans Cattle Farm,\nBhimeswor Municipality Ward No. 10', 'Mr. Chhatra Bahadur Shrestha,\n9844060206', 'Dolakha', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Newar', 'Male', 'Small Agri', '11-Apr-14', '2070.12.28', '13-May-16', '', 1, 1, 339, 80, 19, 65, 0, 0, 0, 0, 0, 0),
(78, '03-034', 'Maitribhav Livestock Rearing and Agriculture Development Research Centre Pvt. Ltd.,\nDandakharka V.D.C.\nWard No.  07', 'Mr. Samvu K.C.,\n9741190747', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '20-May-14', '2071.02.06', '13-May-16', '', 2, 1, 1, 50, 31, 66, 0, 0, 0, 0, 0, 0),
(79, '03-069', 'Singa Devi Cattle Farm,\nBoch V.D.C.\nWard No.  03', 'Mr. Makar Bahadur Thapa,\n9844288606', 'Dolakha', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '21-May-14', '2071.02.07', '13-May-16', '', 1, 813, 203, 80, 11, 93.32, 0, 0, 0, 0, 0, 0),
(80, '03-033', 'Gayatri Agriculture Production, marketting and processing Pvt. Ltd.,\nJugu V.D.C.\nWard No. 04', 'Mr. Rudra Prasad Neupane,\n9841640488', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '23-May-14', '2071.02.09', '13-May-16', '', 2, 1, 1, 50, 28, 100, 0, 0, 0, 0, 0, 0),
(81, '03-050', 'Deepjyoti Pig Farm,\nJiri V.D.C. \nWard No. 08', 'Mr. Sher Bahadur Shrestha,\n9808362607', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Newar', 'Male', 'Medium Agr', '27-May-14', '2071.02.13', '13-May-16', '', 2, 2, 550, 80, 32, 100, 0, 0, 0, 0, 0, 0),
(82, '03-070', 'Urang Yak Production Commercial Farm,\nLapilang V.D.C. \nWard No.  06', 'Mr. Sharki Thami,\n9844308654;\n9844308656', 'Dolakha', 'Yak Production ', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '28-May-14', '2071.02.14', '13-May-16', '', 1, 1, 323, 80, 18, 97, 0, 0, 0, 0, 0, 0),
(83, '03-073', 'Dolakhali Multipurpose Agriculture and Livestock Farming Partnership Farm,\nSuspachhemawati V.D.C. \nWard No. 09', 'Ms. Sabina Shrestha Manandhar,\n9843471822;\n9851013443', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Newar', 'Female', 'Medium Agr', '01-Jun-14', '2071.02.18', '13-May-16', '', 2, 2, 599, 80, 34, 45.71, 0, 0, 0, 0, 0, 0),
(84, '03-062', 'Nawajyoti Cardamom Production Farm,\nKabhre V.D.C. \nWard No. 06', 'Mr. Nabaraj Dahal,\n9813561997', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '03-Jul-14', '2071.03.19', '13-May-16', '', 1, 736, 736, 50, 17, 99, 0, 0, 0, 0, 0, 0),
(85, '03-030', 'Bhimendra Livestock Farming  and Agriculture Development Centre Pvt. Ltd.,\nMailung V.D.C. \nWard No. 06', 'Mr. Sudarshan Pokharel,\n9741053607', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '14-Jul-14', '2071.03.30', '13-May-16', '', 2, 1, 1, 50, 27, 51, 0, 0, 0, 0, 0, 0),
(86, '03-072', 'Pahadi Nepali Bastu Udhyog Pra.Li.,\nShyama V.D.C.\nWard No.  07\n', 'Mr. Pemba Sherpa,\n9746063477', 'Dolakha', 'Nepali Hand Made Pap', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '14-Jul-14', '2071.03.30', '13-May-16', '', 2, 1, 456, 80, 26, 44, 0, 0, 0, 0, 0, 0),
(87, '03-066', 'Chordung Dudh Utapdak Chauri Palan Samuha,\nJiri  V.D.C\nWard No.  08', 'Mr. Ngiwa Sherpa,\n9741234619', 'Dolakha', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '15-Jul-14', '2071.03.31', '13-May-16', '', 4, 3, 825, 80, 48, 87, 0, 0, 0, 0, 0, 0),
(88, '03-071', 'Gaurishankar Khare Veda Farm,\nGaurishankar  V.D.C\nWard No.  07', 'Mr. Arjun Kumar Shrestha,\n9741180570', 'Dolakha', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Newar', 'Male', 'Small Agri', '15-Jul-14', '2071.03.31', '13-May-16', '', 907, 726, 181, 80, 10, 98, 0, 0, 0, 0, 0, 0),
(89, '03-008', 'Low Organic Krishi Tatha Pashupangchi Palan Farm,\nDandakharka  V.D.C\nWard No.  04\n', 'Mr. Dan Bahadur Tamang,\n9744039340;\n9741048073', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '30-Jul-14', '2071.04.14', '13-May-16', '', 2, 2, 532, 80, 30, 55.89, 0, 0, 0, 0, 0, 0),
(90, '03-077', 'Gauri Laxmi Multipurpose Agriculture Farm,\nBhimeswor Municipality \nWard No.  10\n', 'Mr. Jagat Narayan Shrestha,\n9849356294;\n9818111135', 'Dolakha', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Newar', 'Male', 'Medium Agr', '20-Aug-14', '2071.05.04', '13-May-16', '', 3, 2, 656, 80, 38, 0, 0, 0, 0, 0, 0, 0),
(91, '03-087', 'Himalaya Argeli Lokta Processing and Nepali Paper Industry,\nBoch V.D.C.\nWard No.  03\n', 'Mr. Hasta Bahadur Bhujel,\n9844307598', 'Dolakha', 'Nepali Hand Made Pap', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '22-Aug-14', '2071.05.06', '13-May-16', '', 1, 1, 271, 80, 15, 56, 0, 0, 0, 0, 0, 0),
(92, '03-061', 'Pathak Goat Farm,\nPawati V.D.C.\nWard No.  06\n', 'Mr. Durga Prasad Pathak,\n9849831012', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '09-Sep-14', '2071.05.24', '13-May-16', '', 1, 719, 719, 50, 16, 86, 0, 0, 0, 0, 0, 0),
(93, '03-079', 'Kismat Private Agriculture Farm,\nBhimeswor Municipality\nWard No.  10\n', 'Mr. Shanta Kumar Jirel,\n9844067499', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '10-Sep-14', '2071.05.25', '13-May-16', '', 2, 2, 524, 80, 30, 100, 0, 0, 0, 0, 0, 0),
(94, '03-027', 'Hills Livestock and Agriculture Deveplopment Centre Pvt. Ltd.,\nJaphe V.D.C.\nWard No.  03', 'Mr. Shuvaraj Pokharel,\n9851089532', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Large Agri', '16-Sep-14', '2071.05.31', '13-May-16', '', 4, 2, 2, 50, 54, 0, 0, 0, 0, 0, 0, 0),
(95, '03-090', 'Pemba Futi Jadibutti Supplier''s,\nChankhu V.D.C.\nWard No.  06', 'Mr. Dawa Gelbu Lama,\n9744007390;\n9849399774', 'Dolakha', 'Chilli Cultivation', 'Vegetables & Spices', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '04-Nov-14', '2071.07.18', '13-May-16', '', 578, 462, 115, 80, 6, 86, 0, 0, 0, 0, 0, 0),
(96, '03-102', 'Thapa Namuna Agri Farm,\nBhimeswor Municipality Ward No. 10', 'Mr. Shamvu Thapa,\n9744000720', 'Dolakha', 'Tomato Cultivation', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '10-Nov-14', '2071.07.24', '13-May-16', '', 998, 798, 199, 80, 11, 0, 0, 0, 0, 0, 0, 0),
(97, '03-098', 'Dothali Cardamom Production and Processing Farm,\nShushpachemawati V.D.C.\nWard No.  05', 'Ms. Chameli Thami,\n9804822348', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '11-Nov-14', '2071.07.25', '13-May-16', '', 1, 744, 744, 50, 17, 65.04, 0, 0, 0, 0, 0, 0),
(98, '03-113', 'Sreejansal Cardamom Production and Processing Farm,\nShuspaChhemawati V.D.C.\nWard No.  04', 'Ms. Kala Thapaliya,\n9744047683', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '11-Nov-14', '2071.07.25', '13-May-16', '', 1, 757, 757, 50, 17, 53.91, 0, 0, 0, 0, 0, 0),
(99, '03-091', 'Kalinchwok Poultry and Goat Farm,\nLakuridada V.D.C.\nWard No.  07', 'Mr. Sitalal Shrestha,\n9844065947', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '11-Nov-14', '2071.07.25', '13-May-16', '', 2, 1, 447, 80, 26, 64, 0, 0, 0, 0, 0, 0),
(100, '03-100', 'Sreejansal Potato Cultivation Agriculture Farm,\nBhusapheda V.D.C.\nWard No.  02', 'Mr. Prem Dhwoj Tamang,\n9741182518', 'Dolakha', 'Potato Cultivation', 'Vegetables & Spices', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '12-Nov-14', '2071.07.26', '13-May-16', '', 1, 1, 269, 80, 15, 24, 0, 0, 0, 0, 0, 0),
(101, '03-099', 'Shivashakti Agriculture Reasearch Farm Pvt. Ltd.,\nNamdu V.D.C.\nWard No.  03', 'Mr. Tikaram Ghimere,\n9844145556', 'Dolakha', 'Buffallo Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '13-Nov-14', '2071.07.27', '13-May-16', '', 1, 1, 370, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(102, '03-085', 'Jaldevi Aromatic Oil Industry,\nJhyaku V.D.C.\nWard No.  09', 'Mr. Chirinamgel Sherpa,\n9744021847', 'Dolakha', 'Aromatic Oil', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '17-Nov-14', '2071.08.01', '13-May-16', '', 1, 1, 285, 80, 16, 96.73, 0, 0, 0, 0, 0, 0),
(103, '03-101', 'Mathhillo Sikri Livestock Rearing and Agri Farm,\nJiri V.D.C.\nWard No.  02', 'Mr. Alok Bahadur Jirel,\n9741157796', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '19-Nov-14', '2071.08.03', '13-May-16', '', 2, 1, 447, 80, 26, 93, 0, 0, 0, 0, 0, 0),
(104, '03-055', 'Youth Agriculture and Livestock Centre Pvt. Ltd.,\nMalu V.D.C.\nWard No.  06', 'Mr. Navaraj Pokharel,\n9843471822', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '01-Jan-15', '2071.09.17', '13-May-16', '', 1, 606, 606, 50, 14, 81, 0, 0, 0, 0, 0, 0),
(105, '03-075', 'Shaktishwor Small Peasant Agriculture Co-operative Society  Ltd.,\nSuri V.D.C.\nWard No.  05', 'Mr. Chakra Bahdur Khadka,\n9851210274', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '08-Jan-15', '2071.09.24', '13-May-16', '', 1, 681, 681, 50, 15, 0, 0, 0, 0, 0, 0, 0),
(106, '03-074', 'Agricultural and Livestock Good''s Product Processing and Marketting Pvt. Ltd.,\nJiri V.D.C.\nWard No.  08', 'Mr. Shanta Bahdur K. C.,\n9754201400', 'Dolakha', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '26-Jan-15', '2071.10.12', '13-May-16', '', 4, 3, 857, 80, 49, 37, 0, 0, 0, 0, 0, 0),
(107, '03-180', 'Jaleshwor Goat Husbandry Farm,\nMelung V.D.C.\nWard No.  09', 'Mr. Udhav Kumar Thakuri,\n9849680574', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '26-Jan-15', '2071.10.12', '13-May-16', '', 1, 890, 890, 50, 20, 69, 0, 0, 0, 0, 0, 0),
(108, '03-096', 'Durga Herbs Production Farm,\nShyama V.D.C.\nWard No.  01', 'Mr. Chandra Bahadur Khadka,\n9744065569;\n049-690704', 'Dolakha', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '16-Mar-15', '2071.12.02', '13-May-16', '', 893, 714, 178, 80, 10, 79.62, 0, 0, 0, 0, 0, 0),
(109, '03-082', 'Youngs Farmer''s Pvt. Ltd.,\nJiri Municipality Ward No. 04', 'Mr. Nabeen Jirel,\n9845107777', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '22-Mar-15', '2071.12.08', '13-May-16', '', 2, 1, 411, 80, 23, 0, 0, 0, 0, 0, 0, 0),
(110, '03-084', 'Cherdung Dhasingre Aromatic Oil Industry.,\nJhyaku V.D.C. Ward No. 01', 'Mr. Aangtendi Sherpa,\n9844406951;\n9744051593', 'Dolakha', 'Aromatic Oil', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '22-Mar-15', '2071.12.08', '13-May-16', '', 1, 1, 282, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(111, '03-088', 'S.I.B. Agriculture Production and Promotion Farm,\nLapilang V.D.C. Ward No. 07', 'Mr. Been Kumar Thami,\n9744000982', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '22-Mar-15', '2071.12.08', '13-May-16', '', 1, 592, 592, 50, 13, 0, 0, 0, 0, 0, 0, 0),
(112, '03-078', 'Gaurishankar Rural Agro Biotech Promotion, Training and Research Centre Pvt. Ltd.,\nLaduk V.D.C. Ward No. 07', 'Mr. Lal Kumar K.C.,\n9851188877', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '23-Mar-15', '2071.12.09', '13-May-16', '', 2, 1, 416, 80, 24, 25.79, 0, 0, 0, 0, 0, 0),
(113, '03-044', 'Tamakoshi Nepali Paper Industry,\nKhopachagu V.D.C. Ward No. 07', 'Mr. Sundar Dhwoj Khadka,\n9851096407', 'Dolakha', 'Nepali Hand Made Pap', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '26-Mar-15', '2071.12.12', '13-May-16', '', 1, 1, 363, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(114, '03-076', 'Syarimchwok Agriculture Farm,\nSyama V.D.C. Ward No. 01', 'Mr. Aang Lakpa Sherpa,\n9741115372;\n9744014963', 'Dolakha', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '29-Mar-15', '2071.12.15', '13-May-16', '', 2, 1, 465, 80, 27, 100, 0, 0, 0, 0, 0, 0),
(115, '03-083', 'Shaktishwor Machino Processing Industry,\nBhimeswor Municipality  Ward No. 10', 'Mr. Dhal Bahadur Bhujel,\n9851210274', 'Dolakha', 'MAP''s Processing/\nMe', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '29-Mar-15', '2071.12.15', '13-May-16', '', 1, 1, 282, 80, 16, 70, 0, 0, 0, 0, 0, 0),
(116, '03-093', 'Sailung Chandrawati Multipurpose Agriculture Promotion and Research Pvt. Ltd.,\nFasku V.D.C.  Ward No. 04', 'Mr. Bhuwan Singh Thapa,\n9851136010', 'Dolakha', 'Mushroom Production ', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '29-Mar-15', '2071.12.15', '13-May-16', '', 3, 1, 1, 50, 35, 0, 0, 0, 0, 0, 0, 0),
(117, '03-153', 'Ghangare Kiwi Cultivation Farm,\nBhimeswor Municipality  Ward No. 10', 'Mr. Jhalak Bahadur Thapa,\n9849365155', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '15-Apr-15', '2072.01.02', '13-May-16', '', 662, 529, 132, 80, 7, 47, 0, 0, 0, 0, 0, 0),
(118, '03-104', 'Gorpang Setidevi Cardamom Industry,\nJhyaku  V.D.C.  Ward No. 02', 'Mr. Bulendra Bahadur Karki,\n9844000221', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '16-Apr-15', '2072.01.03', '13-May-16', '', 2, 1, 1, 50, 28, 0, 0, 0, 0, 0, 0, 0),
(119, '03-159', 'Dharedhunga Jhingane Agriculture Farm,\nLakuridanda V.D.C.  Ward No. 09', 'Ms. Ambika Ghising (Pakhrin),\n9844196554', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '20-Apr-15', '2072.01.07', '13-May-16', '', 1, 1, 304, 80, 17, 0, 0, 0, 0, 0, 0, 0),
(120, '03-150', 'Kalanga Namuna Kiwi and Agriculture Farm,\nJiri Municipality  Ward No. 07', 'Mr. Kiran Bahadur Khadka,\n984440651;\n9803152611', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '23-Apr-15', '2072.01.10', '13-May-16', '', 1, 1, 268, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(121, '03-140', 'Mangalam Kiwi Nursery Industry,\nBulung V.D.C. Ward No. 03', 'Mr. Laba Khadka,\n9844068171', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '23-Apr-15', '2072.01.10', '13-May-16', '', 947, 757, 189, 80, 11, 0, 0, 0, 0, 0, 0, 0),
(122, '03-164', 'Sarbakhas Agriculture Farm Pvt. Ltd.,\nMali V.D.C.  Ward No. 02', 'Mr. Pasang Tenzi Sherpa,\n9843231260;\n9741317304', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '23-Apr-15', '2072.01.10', '13-May-16', '', 2, 1, 421, 80, 24, 0, 0, 0, 0, 0, 0, 0),
(123, '03-117', 'Kalyankari Pig Farm,\nSundrawati V.D.C. Ward No. 06', 'Ms. Kamala Khati (Kami),\n9741172961', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Female', 'Small Agri', '05-May-15', '2072.01.22', '13-May-16', '', 1, 1, 310, 80, 18, 79.07, 0, 0, 0, 0, 0, 0),
(124, '03-129', 'Keshari Fresh Vegetable Agriculture Farm,\nBhimeswor Municipality Ward No. 10', 'Ms. Keshar Kumari Budhathokhi,\n9744022004', 'Dolakha', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '11-May-15', '2072.01.28', '13-May-16', '', 911, 729, 182, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(125, '03-139', 'Gauraswaara Agriculture Farm,\nBhimeswor Municipality Ward No. 10', 'Mr. Shyam Krishna Thapa,\n9844185167', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '31-May-15', '2072.02.17', '13-May-16', '', 2, 1, 440, 80, 25, 0, 0, 0, 0, 0, 0, 0),
(126, '03-112', 'Mahadev Suri Goat Farm,\nJiri Municipality Ward No. 10', 'Mr. Talak Bahadur Tamang,\n9744028969', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '29-Jun-15', '2072.03.14', '13-May-16', '', 1, 904, 226, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(127, '03-146', 'Sunakhari Goat Farm,\nSundrawati V.D.C. Ward No. 08', 'Ms. Dil Maya Thami,\n9806824962', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Female', 'Small Agri', '29-Jun-15', '2072.03.14', '13-May-16', '', 1, 835, 208, 80, 12, 41.29, 0, 0, 0, 0, 0, 0),
(128, '03-130', 'Baisakheshwor Mahadev Cow Farm,\nJiri Municipality Ward No. 08', 'Mr. Kumar Basnet,\n9744305305', 'Dolakha', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '30-Jun-15', '2072.03.15', '13-May-16', '', 1, 1, 305, 80, 17, 0, 0, 0, 0, 0, 0, 0),
(129, '03-152', 'Ohm Buddha Goat Farm,\nJhyaku V.D.C. Ward No. 01', 'Mr. Aangchiring Sherpa,\n9744406661', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '02-Jul-15', '2072.03.17', '13-May-16', '', 1, 933, 233, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(130, '03-138', 'Gaurishankar Khasi Bakhra Production and Agriculture Research Centre Pvt. Ltd.,\nLaduk V.D.C. Ward No. 03', 'Mr. Bijaya Khadka,\n9851093247', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '08-Jul-15', '2072.03.23', '13-May-16', '', 1, 1, 269, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(131, '03-160', 'Sailung Pig Farm,\nFasku V.D.C. Ward No. 09', 'Ms. Lalmaya Tamang,\n9844060931', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '10-Jul-15', '2072.03.25', '13-May-16', '', 1, 923, 236, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(132, '03-171', 'Seti Devi Goat Husbandry Farm,\nNamdu V.D.C. Ward No. 07', 'Mr. Hariram Ghimere,\n9844000490', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '12-Jul-15', '2072.03.27', '13-May-16', '', 1, 647, 647, 50, 15, 0, 0, 0, 0, 0, 0, 0),
(133, '03-119', 'Shyama Agriculture (Goat) Co-operative Society Ltd.,\nShyama V.D.C. Ward No. 06', 'Mr. Wanchhe Sherpa,\n9841372973', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '09-Aug-15', '2072.04.24', '13-May-16', '', 2, 1, 434, 80, 25, 0, 0, 0, 0, 0, 0, 0),
(134, '03-141', 'Sothali Multipurpose Agriculture Farm,\nKhare V.D.C. Ward No. 01', 'Mr. Bimal Dhwoj Karki,\n9741265430;\n049691077', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '25-Aug-15', '2072.05.08', '13-May-16', '', 1, 1, 271, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(135, '03-179', 'Homache Yak/Chauri Husbandry Farmers Group,\nShyama V.D.C. Ward No. 04', 'Mr. Dorje Sherpa,\n9844309946;\n9807638777', 'Dolakha', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '30-Sep-15', '2072.06.13', '13-May-16', '', 2, 2, 596, 80, 34, 0, 0, 0, 0, 0, 0, 0),
(136, '03-108', 'Buddha Goat Farm,\nMelung V.D.C. Ward No. 02', 'Mr. Purna Bahadur Magar,\n9808872187', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '06-Oct-15', '2072.06.19', '13-May-16', '', 1, 653, 653, 50, 15, 0, 0, 0, 0, 0, 0, 0),
(137, '03-169', 'Nepal Organic Herbs Production and Processing Farm,\nShyama V.D.C. Ward No. 06', 'Mr. Jagat Narayan Khatri,\n9843168273', 'Dolakha', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '09-Oct-15', '2072.06.22', '13-May-16', '', 888, 710, 177, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(138, '03-182', 'Budhatokhi Goat and Agriculture Farm,\nBhimeshwor Municipality Ward No. 10', 'Ms. Kabita Budhatokhi,\n9807861104', 'Dolakha', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '11-Oct-15', '2072.06.24', '13-May-16', '', 1, 1, 255, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(139, '03-197', 'Aasirbad Kiwi Fruit Farm,\nBooch V.D.C. Ward No. 05', 'Mr. Bidur Basnet,\n9844407010', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '11-Oct-15', '2072.06.24', '13-May-16', '', 877, 702, 175, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(140, '03-170', 'Buddha Community Forest Leasehold Users Group,\nMali V.D.C. Ward No. 02', 'Mr. Mingwa Sherpa,\n9741069066', 'Dolakha', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '15-Oct-15', '2072.06.28', '13-May-16', '', 1, 947, 236, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(141, '03-125', 'K. C. Multiple Trade,\nMali V.D.C. Ward No. 06', 'Mr. Bhakta K.C.,\n9854045837', 'Dolakha', 'Piggery', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '16-Oct-15', '2072.06.29', '13-May-16', '', 1, 1, 290, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(142, '03-176', 'Pragatishil Cardamom Agriculture Farm,\nChhetrapa V.D.C. Ward No. 04', 'Mr. Ramesh Kumar Adhikari,\n9854045038', 'Dolakha', 'Cardamom Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '02-Nov-15', '2072.07.16', '13-May-16', '', 1, 707, 707, 50, 16, 0, 0, 0, 0, 0, 0, 0),
(143, '03-128', 'Pragatishil Agriculture Farm,\nSunkhani V.D.C. Ward No. 08', 'Mr. Shiva Prasad Sivakoti,\n9741068594', 'Dolakha', 'Kiwi Production', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '18-Nov-15', '2072.08.02', '13-May-16', '', 1, 1, 259, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(144, '03-147', 'Himali Yak Husbandry Farm,\nLakuridanda V.D.C. Ward No. 08', 'Mr. Chechu Sherpa,\n9818154029', 'Dolakha', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '19-Nov-15', '2072.08.03', '13-May-16', '', 1, 833, 208, 80, 12, 0, 0, 0, 0, 0, 0, 0),
(145, '04-002', 'Nagung Women Agriculture Co-operative Society Ltd.,\nDhunche V.D.C. \nWard No. 09', 'Ms. Chhiring Sangmo Tamang,\n9843050227', 'Rasuwa', 'Rainbow Trout ', 'Miscallaneous', 'Co-operative Ow', 'Mixed', 'Female', 'Large Agri', '10-May-13', '2070.01.27', '13-May-16', '', 4, 3, 932, 79, 51, 95, 0, 0, 0, 0, 0, 0),
(146, '04-006', 'Bhelmendo Agriculture Co-operative Society Ltd.,\nGatlang V.D.C. \nWard No. 05', 'Ms. Sangita Tamang,\n9818357507', 'Rasuwa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '14-May-13', '2070.01.31', '13-May-16', '', 2, 1, 412, 80, 23, 98, 0, 0, 0, 0, 0, 0),
(147, '04-013', 'Menchyu Dupchyo Agriculture Co-operative Society Ltd.,\nDhunche V.D.C. \nWard No. 04', 'Mr. Dawa Tamang,\n9741186111', 'Rasuwa', 'Dairy Establishment', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '14-May-13', '2070.01.31', '13-May-16', '', 1, 1, 257, 80, 14, 94, 0, 0, 0, 0, 0, 0),
(148, '04-011', 'Krishi Rainbow Trout Fish Farming Industry,\nSyafru V.D.C. \nWard No. 05', 'Ms. Yangjen Tamang,\n9841889294', 'Rasuwa', 'Rainbow Trout ', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Female', 'Medium Agr', '30-Jun-13', '2070.03.16', '13-May-16', '', 3, 2, 665, 80, 38, 99, 0, 0, 0, 0, 0, 0),
(149, '04-010', 'Lokil Agriculture (Krishi) Farm,\nBhrole V.D.C. \nWard No. 01', 'Mr. Sadhuram Poudel,\n9818238441\n9841889237', 'Rasuwa', 'Cattle Farming and V', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '22-Sep-13', '2070.06.06', '13-May-16', '', 2, 2, 536, 80, 31, 100, 0, 0, 0, 0, 0, 0),
(150, '04-020', 'Buddhi Yak Farming Industry,\nGatlang V.D.C. \nWard No.  09', 'Mr. Buddhi Lama,\n 9741236674', 'Rasuwa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '26-Jan-14', '2070.10.12', '13-May-16', '', 514, 411, 102, 80, 5, 94, 0, 0, 0, 0, 0, 0),
(151, '04-024', 'Gosainkunda Yak Farm,\nSyafru V.D.C. \nWard No.  06', 'Mr. Furpa Dindup Tamang,\n9841903382', 'Rasuwa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '26-Mar-14', '2070.12.12', '13-May-16', '', 634, 507, 126, 80, 7, 98, 0, 0, 0, 0, 0, 0),
(152, '04-003', 'Phulum Agriculture Co-operative Society Ltd.,\nDhunche V.D.C. \nWard No.  05', 'Mr. Sonam Nurpu Ghale,\n9849488810', 'Rasuwa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '27-Mar-14', '2070.12.13', '13-May-16', '', 2, 1, 441, 80, 25, 93, 0, 0, 0, 0, 0, 0),
(153, '04-001', 'New Himalayan Rainbow Trout Hatchery Production and Feed Industry,\nDhunche V.D.C.\nWard No. 03', 'Mr. Lawang Galbo Ghale,\n9741209855', 'Rasuwa', 'Rainbow Trout', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '28-Mar-14', '2070.12.14', '13-May-16', '', 1, 1, 411, 76, 20, 98, 0, 0, 0, 0, 0, 0),
(154, '04-021', 'Sambaling Gomba  MAP''s Industry,\nDhunche V.D.C. \nWard No. 02', 'Mr. Beshal Ghale,\n9741237014', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '01-Apr-14', '2070.12.18', '13-May-16', '', 543, 434, 108, 80, 6, 77, 0, 0, 0, 0, 0, 0),
(155, '04-029', 'Mingmar Chiraito Industry,\nGoljung  V.D.C\nWard No. 08', 'Mr. Mingmar Chewang Tamang,\n9741186714;\n9843507911', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '18-Apr-14', '2071.01.05', '13-May-16', '', 642, 514, 128, 80, 7, 100, 0, 0, 0, 0, 0, 0),
(156, '04-027', 'Langtang Agro Farm,\nDhunche V.D.C.\nWard No. 05', 'Mr. Shiva Prasad Poudel,\n9851039020', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '23-Apr-14', '2071.01.10', '13-May-16', '', 2, 1, 430, 80, 25, 89, 0, 0, 0, 0, 0, 0),
(157, '04-017', 'Jhonjhe Sheep and Goat Rearing Industry,\nGoljung V.D.C.\nWard No. 08', 'Mr. Milan Tamang,\n9741020754', 'Rasuwa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '26-Aug-14', '2071.05.10', '13-May-16', '', 1, 900, 225, 80, 13, 98, 0, 0, 0, 0, 0, 0),
(158, '04-028', 'Himalayan Rainbow Trout Production Pvt. Ltd.,\nDhunche V.D.C.\nWard No. 04', 'Mr. Hari Psd. Rimal,\n9841548395', 'Rasuwa', 'Rainbow Trout', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '27-Aug-14', '2071.05.11', '13-May-16', '', 3, 2, 633, 80, 36, 88, 0, 0, 0, 0, 0, 0),
(159, '04-007', 'Himali Rainbow Trout Fish Production and  Marketting Centre,\nDhunche V.D.C.\nWard No. 03', 'Mr. Lanam Ghale,\n9741086460', 'Rasuwa', 'Rainbow Trout', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '27-Aug-14', '2071.05.11', '13-May-16', '', 4, 3, 986, 77, 49, 89.09, 0, 0, 0, 0, 0, 0),
(160, '04-043', 'Nangbo Kuna Herbs Industry,\nDhunche V.D.C.\nWard No. 03', 'Mr. Bishwa Kumar Ghale,\n9741086460', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '27-Aug-14', '2071.05.11', '13-May-16', '', 668, 534, 133, 80, 7, 99, 0, 0, 0, 0, 0, 0),
(161, '04-031', 'Fafa Chyangrishi Agriculture Co-operative Society Ltd., \nGoljung V.D.C.\nWard No. 05', 'Mr. Dawa Ghale,\n9741189187', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '01-Sep-14', '2071.05.16', '13-May-16', '', 598, 478, 119, 80, 6, 20.63, 0, 0, 0, 0, 0, 0),
(162, '04-009', 'Ronga Goat Husbandry Industry, Goljung V.D.C.\nWard No. 07', 'Mr. Tashi Dorje Tamang,\n9741224408', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '03-Sep-14', '2071.05.18', '13-May-16', '', 725, 580, 145, 80, 8, 95.83, 0, 0, 0, 0, 0, 0),
(163, '04-040', 'Tangchet Herbs Production Centre, Syafru V.D.C.\nWard No. 05', 'Mr. Temba Sonam Tamang,\n9841889186;\n9843507968', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '04-Sep-14', '2071.05.19', '13-May-16', '', 808, 647, 161, 80, 9, 99.71, 0, 0, 0, 0, 0, 0),
(164, '04-041', 'Bharkhu Herbs Production Centre, Syafru V.D.C.\nWard No. 05', 'Ms. Pasang Gyalmo Tamang,\n9841903567;\n9803742076', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '04-Sep-14', '2071.05.19', '13-May-16', '', 633, 507, 126, 80, 7, 94, 0, 0, 0, 0, 0, 0),
(165, '04-030', 'Kaili Chiraito Industry,\nGoljung V.D.C.\nWard No. 05', 'Ms. Kaili Tamang,\n9741238575', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '14-Sep-14', '2071.05.29', '13-May-16', '', 1, 837, 209, 80, 12, 43, 0, 0, 0, 0, 0, 0),
(166, '04-018', 'Galang Choding Small Agriculture Co-operative Society Ltd.,\nGatlang V.D.C.\nWard No. 06', 'Mr. Chewang Dorje Tamang,\n9741025306', 'Rasuwa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '16-Sep-14', '2071.05.31', '13-May-16', '', 3, 2, 604, 80, 35, 100, 0, 0, 0, 0, 0, 0),
(167, '04-012', 'Kerabari Agriculture Co-operative Society Ltd.,\nChilime V.D.C.\nWard No. 09', 'Mr. Mingmar Dorje Tamang,\n9849434443', 'Rasuwa', 'Yak and Jhoppa Produ', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '17-Sep-14', '2071.06.01', '13-May-16', '', 1, 1, 264, 80, 15, 100, 0, 0, 0, 0, 0, 0),
(168, '04-004', 'Nadanggar Agriculture Co-operative Society Ltd.,\nYarsa V.D.C.\nWard No. 05', 'Mr. Nima Tamang,\n9818795219', 'Rasuwa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '23-Sep-14', '2071.06.07', '13-May-16', '', 2, 1, 452, 80, 26, 98, 0, 0, 0, 0, 0, 0),
(169, '04-045', 'Dharapani Vegetable Production Centre,\nDhaibung V.D.C.\nWard No. 02', 'Mr. Ramesh Adhikari,\n9818238421;\n9851168480', 'Rasuwa', 'Tomato Cultivation', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-14', '2071.07.18', '13-May-16', '', 504, 252, 252, 50, 5, 100, 0, 0, 0, 0, 0, 0),
(170, '04-014', 'MechiKali Agriculture Co-operative Society Ltd.,\nHaku V.D.C.\nWard No. 07', 'Mr. Pasangde Tamang,\n9851156314', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '04-Nov-14', '2071.07.18', '13-May-16', '', 835, 668, 167, 80, 9, 100, 0, 0, 0, 0, 0, 0),
(171, '04-032', 'Ronga Devi Supplier''s,\nGoljung V.D.C.\nWard No. 02', 'Mr. Karshang Tamang,\n9741020471;\n9849629632', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '14-Nov-14', '2071.07.28', '13-May-16', '', 505, 404, 101, 80, 5, 98.58, 0, 0, 0, 0, 0, 0),
(172, '04-046', 'Parbati Goat Husbandry Farm,\nDandagaun V.D.C.\nWard No. 09', 'Ms. Parbati Tamang\n9860056166', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '01-Dec-14', '2071.08.15', '13-May-16', '', 1, 1, 299, 80, 17, 54, 0, 0, 0, 0, 0, 0),
(173, '04-026', 'Khurpu Bhanjyang Livestock Rearing Co-operative Society Ltd.,\nGatlang V.D.C.\nWard No. 04', 'Mr. Karshang Dawa Tamang,\n9801243434', 'Rasuwa', 'Sheep Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '03-Dec-14', '2071.08.17', '13-May-16', '', 1, 1, 329, 80, 19, 100, 0, 0, 0, 0, 0, 0),
(174, '04-047', 'Gunji Herb''s Industry,\nRamche V.D.C.\nWard No. 08', 'Ms. Bru Lamu Tamangni,\n9741186258', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '12-Jan-15', '2071.09.28', '13-May-16', '', 980, 784, 196, 80, 11, 97.44, 0, 0, 0, 0, 0, 0),
(175, '04-044', 'Lyaralche Goat Farm,\nSyafru V.D.C.\nWard No. 05', 'Mr. Bhujyung Tamang,\n9741045054', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '18-Jan-15', '2071.10.04', '13-May-16', '', 1, 874, 218, 80, 12, 100, 0, 0, 0, 0, 0, 0),
(176, '04-042', 'Sundar Swara Agriculture Co-operative Society Ltd.,\nDhaibung V.D.C.\nWard No. 08', 'Mr. Chitra Bahadur Bishwakarma,\n9808451454', 'Rasuwa', 'Piggery', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '10-Feb-15', '2071.10.27', '13-May-16', '', 1, 500, 500, 50, 11, 0, 0, 0, 0, 0, 0, 0),
(177, '04-050', 'Namuna Goat Husbandry Industry,\nLaharepouwa V.D.C.\nWard No. 04', 'Ms. Shanta Kumari Bishwakarma,\n9849735608', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Female', 'Small Agri', '26-Feb-15', '2071.11.14', '13-May-16', '', 800, 400, 400, 50, 9, 86.6, 0, 0, 0, 0, 0, 0),
(178, '04-049', 'Gurung Herb''s Farm,\nDandagaun V.D.C.\nWard No. 07', 'Mr. Tirtha Bahadur Gurung,\n9741086456', 'Rasuwa', 'Chiraito Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '01-Mar-15', '2071.11.17', '13-May-16', '', 905, 724, 181, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(179, '04-052', 'Sharki Goat Husbandry Centre,\nDhunche V.D.C.\nWard No. 05', 'Ms. Sharki Tamangni,\n9741086692:\n9843647793', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '22-Jun-15', '2072.03.07', '13-May-16', '', 740, 592, 148, 80, 8, 0, 0, 0, 0, 0, 0, 0),
(180, '04-057', 'Sersang Goat Husbandry Farm,\nSyafru V.D.C.\nWard No. 05', 'Mr. Sersang Ghale,\n9841083747', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '22-Jun-15', '2072.03.07', '13-May-16', '', 1, 896, 224, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(181, '04-071', 'Jibjibe Goat Husbandry Farm,\nDhaibung V.D.C.\nWard No. 09', 'Ms. Yashoda Neupane,\n9843688659:\n9843341027', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '22-Jun-15', '2072.03.07', '13-May-16', '', 1, 570, 570, 50, 13, 0, 0, 0, 0, 0, 0, 0),
(182, '04-055', 'Sano Bharkhu Goat Farm,\nSyafru V.D.C.\nWard No. 04', 'Mr. Chyangba Dorje Titung Tamang,\n9841084721', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '23-Jun-15', '2072.03.08', '13-May-16', '', 1, 886, 221, 80, 12, 52.98, 0, 0, 0, 0, 0, 0),
(183, '04-059', 'Kippa Chhomu Goat Husbandry Centre,\nSyafru V.D.C.\nWard No. 06', 'Ms. Kippa Chhomu Tamang,\n9841084290', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '23-Jun-15', '2072.03.08', '13-May-16', '', 1, 888, 222, 80, 12, 0, 0, 0, 0, 0, 0, 0),
(184, '04-060', 'Palmo Goat Husbandry Centre,\nSyafru V.D.C.\nWard No. 06', 'Ms. Palmo Tamang,\n9841893386', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '23-Jun-15', '2072.03.08', '13-May-16', '', 909, 727, 181, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(185, '04-061', 'Thuloo Bharkhu Goat Husbandry Centre,\nSyafru V.D.C.\nWard No. 05', 'Mr. Pemma Chhiring Tamang,\n9843110514', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '23-Jun-15', '2072.03.08', '13-May-16', '', 922, 738, 184, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(186, '04-056', 'Veemali Goat Farm,\nDhunche V.D.C.\nWard No. 04', 'Mr. Buu Chhiring Tamang,\n9741237692', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '24-Jun-15', '2072.03.09', '13-May-16', '', 1, 906, 226, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(187, '04-073', 'Tamang Goat Husbandry Farm,\nThulagaun V.D.C.\nWard No. 01', 'Mr. Akkal Bahadur Tamang,\n9841977137', 'Rasuwa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '09-Oct-15', '2072.06.22', '13-May-16', '', 1, 1, 262, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(188, '04-069', 'The Green House,\nSyafru V.D.C.\nWard No. 04', 'Ms. Maya Lama,\n9841538440', 'Rasuwa', 'Rainbow Trout', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Female', 'Large Agri', '27-Nov-15', '2072.08.11', '13-May-16', '', 4, 3, 905, 79, 53, 0, 0, 0, 0, 0, 0, 0),
(189, '05-001', 'Siddhartha Sheep and Goat Farm,\nChame V.D.C. \nWard No. 03', 'Mr. Narendra Ghale,\n9841339887', 'Manang', ' Sheep & Goat Husban', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '22-May-13', '2070.02.08', '13-May-16', '', 2, 2, 567, 80, 33, 100, 0, 0, 0, 0, 0, 0),
(190, '05-008', 'Agro Manang Pvt. Ltd.,\nPisang V.D.C. \nWard No. 01', 'Mr. Yubraj Gurung,\n9851056419;\n9802056419', 'Manang', 'Apple  Cultivation', 'Fruits', 'Entrepreneur Ow', 'Janajati', 'Male', 'Large Agri', '24-Jun-14', '2071.03.10', '13-May-16', '', 42, 22, 19, 53, 491, 94, 0, 0, 0, 0, 0, 0),
(191, '05-007', 'Manang Rainbow Trout Fish Farm,\nDharapani V.D.C.\nWard No. 04', 'Mr. Lokendra Bahadur Ghale,\n9856049531', 'Manang', 'Rainbow Trout', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Large Agri', '08-Jul-14', '2071.03.24', '13-May-16', '', 5, 4, 1, 72, 68, 84.43, 0, 0, 0, 0, 0, 0),
(192, '05-009', 'Yak Kharka Sheep Husbandry Centre,\nManang V.D.C.\nWard No. 06', 'Mr. Jumetenjing Gurung,\n9841780588', 'Manang', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '08-Jul-14', '2071.03.24', '13-May-16', '', 1, 1, 329, 80, 19, 89, 0, 0, 0, 0, 0, 0),
(193, '05-012', 'Manang Yak Cheese Industry,\nTankimanang V.D.C. \nWard No. 09', 'Mr. Raju Gurung,\n9841433640', 'Manang', 'Yak Cheese Productio', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '08-Jul-14', '2071.03.24', '13-May-16', '', 2, 1, 494, 80, 28, 76.35, 0, 0, 0, 0, 0, 0),
(194, '05-013', 'Marsyangdi Yak Devlopment Industry,\nTankimanang V.D.C. \nWard No.  09', 'Mr. Khunga Gurung,\n9846229891', 'Manang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '08-Jul-14', '2071.03.24', '13-May-16', '', 2, 2, 512, 80, 29, 100, 0, 0, 0, 0, 0, 0),
(195, '05-010', 'Annapurna Yak Farming Centre,\nTankimanang V.D.C. \nWard No. 09', 'Mr. Raju B.K.,\n9847788708', 'Manang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Male', 'Medium Agr', '09-Jul-14', '2071.03.25', '13-May-16', '', 2, 2, 553, 80, 32, 98, 0, 0, 0, 0, 0, 0),
(196, '05-011', 'Gangapurna Yak Devlopment Industry,\nTankimanang V.D.C. \nWard No.  09', 'Mr. Changu Gurung,\n9846229887', 'Manang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '09-Jul-14', '2071.03.25', '13-May-16', '', 2, 1, 494, 80, 28, 100, 0, 0, 0, 0, 0, 0),
(197, '05-006', 'Peace Garden Organic Krishi Tatha Falful Utpadan Udhyog,\nManang V.D.C\nWard No.  06', 'Mr. Bhujung Gurung,\n9846229915;\n994660007', 'Manang', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '14-Jul-14', '2071.03.30', '13-May-16', '', 2, 1, 456, 80, 26, 40, 0, 0, 0, 0, 0, 0),
(198, '05-017', 'Ngawal Sheep Goat Industry,\nNyawal V.D.C\nWard No.  01', 'Mr. Ghurmi Gurung,\n9846191819', 'Manang', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '07-Jan-15', '2071.09.23', '13-May-16', '', 1, 1, 276, 80, 16, 99.43, 0, 0, 0, 0, 0, 0),
(199, '05-024', 'Tangke Chyangra Husbandry Centre,\nBharka V.D.C\nWard No.  01', 'Mr. Chhetan Ghale,\n9846229897', 'Manang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '07-Jan-15', '2071.09.23', '13-May-16', '', 1, 1, 282, 80, 16, 96, 0, 0, 0, 0, 0, 0),
(200, '05-023', 'Tangche Chyangra Husbandry Industry,\nManang V.D.C\nWard No.  07', 'Mr. Tapke Gurung,\n9849260404', 'Manang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '08-Jan-15', '2071.09.24', '13-May-16', '', 1, 1, 324, 80, 18, 0, 0, 0, 0, 0, 0, 0),
(201, '05-021', 'Tilicho Yak Husbandry Industry,\nKhangsar V.D.C\nWard No.  09', 'Mr. Kamsharki Gurung,\n9846229838', 'Manang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '09-Jan-15', '2071.09.25', '13-May-16', '', 2, 1, 459, 80, 26, 99.52, 0, 0, 0, 0, 0, 0),
(202, '05-025', 'Yak Kharka Yak Husbandry Industry,\nTankimanang V.D.C\nWard No.  04', 'Mr. Wangyal Gurung,\n9841461082', 'Manang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '09-Jan-15', '2071.09.25', '13-May-16', '', 2, 1, 452, 80, 26, 99.87, 0, 0, 0, 0, 0, 0),
(203, '05-026', 'Pisang Peak Sheep and Goat Industry,\nPisang V.D.C\nWard No.  08', 'Mr. Yangdung Gurung,\n9846229780', 'Manang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '09-Jan-15', '2071.09.25', '13-May-16', '', 2, 1, 431, 80, 25, 76.68, 0, 0, 0, 0, 0, 0),
(204, '05-016', 'Thanchwok Yak Production Pvt. Ltd,\nChame V.D.C\nWard No.  04', 'Mr. Maita Gurung,\n9846316404', 'Manang', 'Yak Production ', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '11-Jan-15', '2071.09.26', '13-May-16', '', 2, 1, 438, 80, 25, 97.72, 0, 0, 0, 0, 0, 0),
(205, '05-015', 'Manang Organic Vegetable Production Industry,\nBharka V.D.C\nWard No.  01', 'Mr. Karma Serap Wanchu Gurung,\n9846121539;\n9813813889', 'Manang', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '14-Jan-15', '2071.09.30', '13-May-16', '', 2, 1, 586, 72, 24, 0, 0, 0, 0, 0, 0, 0),
(206, '05-027', 'Annapurna Yak Development Industry,\nPisang V.D.C. \nWard No. 08', 'Mr. Lalu Gurung,\n9849610023', 'Manang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '14-Jan-15', '2071.09.30', '13-May-16', '', 2, 1, 459, 80, 26, 98.99, 0, 0, 0, 0, 0, 0),
(207, '05-046', 'Sabeen Goat Farm,\nChame V.D.C. \nWard No. 07', 'Mr. Sabeen Kumar Shrestha,\n9846192716', 'Manang', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Newar', 'Male', 'Small Agri', '16-Jun-15', '2072.03.01', '13-May-16', '', 851, 681, 170, 80, 9, 98.77, 0, 0, 0, 0, 0, 0),
(208, '05-022', 'Hotel Yak Agro Tourism Promotion Centre,\nManang V.D.C. \nWard No. 06', 'Mr. Tenzing Gurung,\n9841461082', 'Manang', 'Agro Tourism', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '09-Oct-15', '2072.06.22', '13-May-16', '', 2, 2, 529, 80, 30, 0, 0, 0, 0, 0, 0, 0),
(209, '06-001', 'Mustang Dairy Industry,\nMarpha V.D.C. \nWard No. 08', 'Mr. Shiva Prasad Thakali,\n069-440012', 'Mustang', 'Dairy Establishment', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '24-May-13', '2070.02.10', '13-May-16', '', 2, 2, 581, 80, 33, 100, 0, 0, 0, 0, 0, 0),
(210, '06-003', 'Ghasa Rainbow Trout Industry,\nLete V.D.C. \nWard No. 02', 'Mr. Nabeen Bhattachan,\n9847682028', 'Mustang', 'Rainbow Trout', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Large Agri', '24-May-13', '2070.02.10', '13-May-16', '', 7, 5, 2, 63, 92, 83, 0, 0, 0, 0, 0, 0),
(211, '06-005', 'Syangfola Community Agriculture Co-operative Society Ltd.,\nMarpha V.D.C. \nWard No. 06', 'Mr. Aas Bahadur Thakali, \n069-440046', 'Mustang', 'Cattle Farming', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '24-May-13', '2070.02.10', '13-May-16', '', 3, 2, 717, 80, 41, 100, 0, 0, 0, 0, 0, 0),
(212, '06-008', 'Sherpa Apple Nursery,\nTukuche V.D.C. \nWard No. 02', 'Mr. Suka Prasad Sherpa,\n9847729714', 'Mustang', 'Apple Nursery ', 'Fruits', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '24-May-13', '2070.02.10', '13-May-16', '', 900, 720, 180, 80, 10, 79, 0, 0, 0, 0, 0, 0),
(213, '06-002', 'Muktinath Multipurpose Co-operative Society Ltd.,\nMuktinath VDC \nWard No. 04', 'Mr. Angye Gurung,\n9851133096', 'Mustang', 'Seabuck Thorn Squash', 'MAP''s & NTFP', 'Co-operative Ow', 'Mixed', 'Mixed', 'Large Agri', '28-May-13', '2070.02.14', '13-May-16', '', 7, 5, 2, 67, 91, 103, 0, 0, 0, 0, 0, 0),
(214, '06-013', 'Low Ghekar Agriculture Development Group,  \nCharang V.D.C. Ward No. 02', 'Mr. Nuwonchu Gurung, \n9851006410', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '21-Sep-14', '2071.06.05', '13-May-16', '', 3, 2, 610, 80, 35, 98, 0, 0, 0, 0, 0, 0);
INSERT INTO `projectdetail` (`id`, `project_code`, `name_add_proponent`, `responsible_person`, `district`, `objectives`, `area`, `enterprises`, `scale`, `caste_owner`, `sex`, `agreement_date_ad`, `agreement_date_bs`, `completion_date_ad`, `completion_date_bs`, `total_investment_rs`, `total_investment_usd`, `grand_rs`, `grand_usd`, `proponent_rs`, `proponent_usd`, `bramin`, `janajati`, `dalit`, `other`, `hidden_male`, `hidden_female`) VALUES
(215, '06-014', 'Paira Thapla Sheep-Goat Husbandry Business,\nKunjo V.D.C. Ward No. 09', 'Mr. Tul Prasad Gauchan, \n9847670637', 'Mustang', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '21-Sep-14', '2071.06.05', '13-May-16', '', 1, 868, 217, 80, 12, 100, 0, 0, 0, 0, 0, 0),
(216, '06-015', 'The Buki Sheep Husbandry Business,\nLete V.D.C. Ward No. 04', 'Mr. Binod Prasad Tulachan, \n9849204691', 'Mustang', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '21-Sep-14', '2071.06.05', '13-May-16', '', 1, 1, 290, 80, 16, 97, 0, 0, 0, 0, 0, 0),
(217, '06-016', 'Chonhuup Local Sheep Goat Husbandry Industry,\nChhonhup V.D.C. Ward No. 04', 'Mr. Tassi Nurbu Gurung, \n9846707916', 'Mustang', 'Sheep & Goat Husband', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '21-Sep-14', '2071.06.05', '13-May-16', '', 2, 2, 588, 80, 34, 100, 0, 0, 0, 0, 0, 0),
(218, '06-018', 'Kagbeni Organic Vegetable and Goat Husbandry Industry,\nKagbeni V.D.C. Ward No. 07', 'Mr. Kunga Tassi Gurung, \n9847638047;\n9847711186', 'Mustang', 'Goat Husbandry & Veg', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '21-Sep-14', '2071.06.05', '13-May-16', '', 2, 1, 428, 80, 24, 100, 0, 0, 0, 0, 0, 0),
(219, '06-019', 'Titi Barahi Sheep Husbandry Business,\nKunjo V.D.C. Ward No. 01', 'Mr. Tejendra Gauchan, \n9857650115', 'Mustang', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '21-Sep-14', '2071.06.05', '13-May-16', '', 1, 859, 214, 80, 12, 93, 0, 0, 0, 0, 0, 0),
(220, '06-021', 'Lomangthang Potato Cultivation Commercial Group,\nLomanthang V.D.C. Ward No. 07', 'Mr. Ghyacho Bista, \n9746707915', 'Mustang', 'Potato Cultivation', 'Vegetables & Spices', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '21-Sep-14', '2071.06.05', '13-May-16', '', 1, 1, 253, 80, 14, 89, 0, 0, 0, 0, 0, 0),
(221, '06-023', 'Dhauligiri Guru Shangmo Cheese Industry,\nKobang V.D.C. Ward No. 02', 'Mr. Nara Prasad Hirachan, \n9846481639', 'Mustang', 'Cheese and Milk Prod', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Large Agri', '02-Nov-15', '2071.10.28', '13-May-16', '', 5, 4, 1, 76, 65, 18, 0, 0, 0, 0, 0, 0),
(222, '06-033', 'Terathang Yak Husbandry Group,\nChhonhup V.D.C. Ward No. 04', 'Mr. Karma Sunduk Gurung, \n9746707916', 'Mustang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '13-Feb-15', '2071.11.01', '13-May-16', '', 2, 1, 455, 80, 26, 99, 0, 0, 0, 0, 0, 0),
(223, '06-032', 'Mustang Yak and Chauri Husbandry Farm,\nJomsom V.D.C. Ward No. 05', 'Mr. Dhachyung Gurung, \n9856020715;\n9847633783', 'Mustang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '16-Mar-15', '2071.12.02', '13-May-16', '', 2, 1, 400, 80, 23, 100, 0, 0, 0, 0, 0, 0),
(224, '06-031', 'Muli Buken Yak Husbandry Group,\nKobang V.D.C. Ward No. 04', 'Mr. Khagendra Tulachan, \n9746700740', 'Mustang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '17-Mar-15', '2071.12.03', '13-May-16', '', 2, 2, 501, 80, 29, 100, 0, 0, 0, 0, 0, 0),
(225, '06-029', 'Lomangthang Farmer''s Group,\nLomanthang V.D.C. Ward No. 08', 'Mr. Aange Bista, \n9746080285', 'Mustang', 'Vegetable Production', 'Vegetables & Spices', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '24-Mar-15', '2071.12.10', '13-May-16', '', 1, 1, 308, 80, 17, 100, 0, 0, 0, 0, 0, 0),
(226, '06-035', 'Kimling Farmer''s Group,\nChhonhup V.D.C. Ward No. 05', 'Mr. Nusangbo Gurung, \n9746707926;\n9746045606', 'Mustang', 'Vegetable Production', 'Vegetables & Spices', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '24-Mar-15', '2071.12.10', '13-May-16', '', 1, 1, 308, 80, 17, 100, 0, 0, 0, 0, 0, 0),
(227, '06-030', 'Jomsom Dalit Goat Husbandry Farm,\nJomsom V.D.C. Ward No. 05', 'Mr. Binod Nepali, \n9847680376;\n9847737290', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Male', 'Small Agri', '29-Mar-15', '2071.12.15', '13-May-16', '', 689, 551, 137, 80, 8, 98, 0, 0, 0, 0, 0, 0),
(228, '06-036', 'Lohoo Agriculture Development Group,\nLomanthang V.D.C. Ward No. 01', 'Mr. Tamdi Aangye Bista, \n9746716677', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '30-Mar-15', '2071.12.16', '13-May-16', '', 1, 811, 202, 80, 11, 95.9, 0, 0, 0, 0, 0, 0),
(229, '06-037', 'Himali Agriculture Development Group,\nLomanthang V.D.C. Ward No. 08', 'Mr. Dukke  Bista, \n9746707019', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '30-Mar-15', '2071.12.16', '13-May-16', '', 1, 811, 202, 80, 11, 95.91, 0, 0, 0, 0, 0, 0),
(230, '06-027', 'Himali Yak Husbandry Group,\nMarpha V.D.C. Ward No. 06', 'Mr. Mohanlal Thakali, \n9857650047', 'Mustang', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '08-Apr-15', '2071.12.25', '13-May-16', '', 2, 1, 430, 80, 25, 97.05, 0, 0, 0, 0, 0, 0),
(231, '06-025', 'Marpha Fruits and Vegetables Processing Industry,\nMarpha V.D.C. Ward No. 01', 'Ms. Sukun Rasaili (B.K), \n9847637812', 'Mustang', 'Fruits and Vegetable', 'Fruits', 'Entrepreneur Ow', 'Dalits', 'Female', 'Medium Agr', '12-Apr-15', '2071.12.29', '13-May-16', '', 2, 1, 490, 80, 28, 52.21, 0, 0, 0, 0, 0, 0),
(232, '06-022', 'Lekali Chyangra Husbandry Farm,\nKagbeni V.D.C. Ward No. 07', 'Mr. Ngima Chiring Ghale, \n9867691319', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '05-May-15', '2072.01.22', '13-May-16', '', 1, 885, 221, 80, 12, 97.29, 0, 0, 0, 0, 0, 0),
(233, '06-020', 'Tiri Chyangra Husbandry Industry,\nKagbeni V.D.C. Ward No. 09', 'Ms. Chhungle Gurung, \n9847670429;\n9847680583', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '18-May-15', '2072.02.04', '13-May-16', '', 1, 1, 282, 80, 16, 100, 0, 0, 0, 0, 0, 0),
(234, '06-026', 'Muktinath Farmer''s Group,\nLete V.D.C. Ward No. 06', 'Ms. Purna Kumari Gauchan, \n9846708279', 'Mustang', 'Vegetable Production', 'Vegetables & Spices', 'Group Owned', 'Janajati', 'Mixed', 'Medium Agr', '16-Jun-15', '2072.03.01', '13-May-16', '', 2, 2, 582, 80, 33, 24.04, 0, 0, 0, 0, 0, 0),
(235, '06-034', 'Kali Baraha Sheep and Goat Husbandry Group,\nLete V.D.C. Ward No. 01, 02, 03', 'Ms. Purna Kumari Gauchan, \n9846708279', 'Mustang', 'Sheep Husbandry', 'Livestock & Poultry', 'Group Owned', 'Janajati', 'Mixed', 'Small Agri', '28-Jun-15', '2072.03.13', '13-May-16', '', 1, 904, 226, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(236, '06-046', 'Chumighyacha Chyangra Husbandry Business,\nJomsom V.D.C. Ward No. 05', 'Ms. Tashi Syangmo Gurungsheni, \n9851100754', 'Mustang', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Medium Agr', '22-Nov-15', '2072.08.06', '13-May-16', '', 1, 1, 347, 80, 20, 0, 0, 0, 0, 0, 0, 0),
(237, '07-001', 'Danphe Fruits Nursery,\nRimi V.D.C. \nWard No. 02', 'Mr. Siddhaman Bohara,\n9638707872', 'Dolpa', 'Fruits Nursery', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '12-Dec-13', '2070.08.27', '13-May-16', '', 870, 696, 174, 80, 10, 100, 0, 0, 0, 0, 0, 0),
(238, '07-008', 'Himalayan Bakery Industry,\nDunai V.D.C. \nWard No. 01', 'Mr. Ravindra Sahi,\n9858029226', 'Dolpa', 'Bakery Production', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '12-Dec-13', '2070.08.27', '13-May-16', '', 910, 728, 182, 80, 10, 99, 0, 0, 0, 0, 0, 0),
(239, '07-009', 'Himali Herbal Tea Industry,\nDunai V.D.C. \nWard No. 01', 'Mr. Bhakta Bahadur Thapa,\n9806318603', 'Dolpa', 'Herbal Tea Productio', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '12-Dec-13', '2070.08.27', '13-May-16', '', 1, 823, 205, 80, 11, 86, 0, 0, 0, 0, 0, 0),
(240, '07-011', 'Thinlya Commercial Yak Rearing Farm,\nSaldang V.D.C. \nWard No. 05', 'Mr. Thinlya Lundup Lama,\n9841460619', 'Dolpa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '12-Dec-13', '2070.08.27', '13-May-16', '', 4, 3, 810, 80, 47, 93, 0, 0, 0, 0, 0, 0),
(241, '07-012', 'Karma Commercial Vaaglung Sheep Rearing  Farm,\nSaldang V.D.C. \nWard No. 05', 'Mr. Thinlya Lundup Lama,\n9841460619', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '12-Dec-13', '2070.08.27', '13-May-16', '', 3, 2, 643, 80, 37, 99, 0, 0, 0, 0, 0, 0),
(242, '07-016', 'Phoksundo Hatchery Industry And Brood Farm,\nTripusundari V.D.C.\nWard No. 01', 'Mr. Nabaraj B.C.,\n9848054597', 'Dolpa', 'Hatchery and Chicken', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '06-Apr-14', '2070.12.23', '13-May-16', '', 3, 2, 678, 80, 39, 41, 0, 0, 0, 0, 0, 0),
(243, '07-014', 'Tripura Sundari Chino Tatha Phapar Processing Industry,\nSuhun V.D.C.\nWard No. 03', 'Mr. Ramesh K.C.,\n9748303899', 'Dolpa', 'Local Food Processin', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '27-Jun-14', '2071.03.13', '13-May-16', '', 2, 2, 539, 80, 31, 92, 0, 0, 0, 0, 0, 0),
(244, '07-015', 'Saraswoti Fruits and Livestock Industry,\nSuhun V.D.C.\nWard No. 03', 'Mr. Bhakta Bahadur K.C.,\n9741171013', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 1, 1, 309, 80, 18, 96, 0, 0, 0, 0, 0, 0),
(245, '07-017', 'Santa Vegatable Production and Marketting Industry,\nDunai V.D.C.\nWard No. 01', 'Mr. Prem Bahadur Sahi,\n9748901345', 'Dolpa', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 1, 947, 236, 80, 13, 92.09, 0, 0, 0, 0, 0, 0),
(246, '07-019', 'Mahadev Agriculture Co-operative Society Ltd.,\nSuhun V.D.C.\nWard No. 09', 'Mr. Ram Bahadur Budha,\n9848316595', 'Dolpa', 'Apple Slice, Potato ', 'Fruits', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 1, 1, 293, 80, 17, 69, 0, 0, 0, 0, 0, 0),
(247, '07-047', 'Kanjiroba Apple Processing Industry,\nSuhun V.D.C.\nWard No. 04', 'Mr. Prakash Dharala,\n9758900565;\n9638101768', 'Dolpa', 'Apple Processing', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '27-Jun-14', '2071.03.13', '13-May-16', '', 2, 1, 409, 80, 23, 96, 0, 0, 0, 0, 0, 0),
(248, '07-039', 'Pemba Commercial Goat (Chyangra)  Farm,\nBhijer V.D.C.\nWard No. 04', 'Mr. Pemba Gurung,\n9741880574', 'Dolpa', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '29-Jun-14', '2071.03.15', '13-May-16', '', 2, 2, 534, 80, 31, 91, 0, 0, 0, 0, 0, 0),
(249, '07-045', 'Utkarsha Goat Husbandry  Farm,\nSuhun V.D.C.\nWard No. 06', 'Ms. Urmila B.K.,\n9741055510', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Female', 'Medium Agr', '13-Sep-14', '2071.06.27', '13-May-16', '', 1, 1, 382, 80, 22, 100, 0, 0, 0, 0, 0, 0),
(250, '07-064', 'Durga Agriculture,  Livestock and Herbs Industry,\nSuhun V.D.C.\nWard No. 08', 'Mr. Shreedal Buda,\n9848340253', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '22-Jan-15', '2071.10.08', '13-May-16', '', 2, 2, 551, 80, 32, 99.87, 0, 0, 0, 0, 0, 0),
(251, '07-055', 'Sukar Vegetable, Fruits and Herbs Industry,\nDunai V.D.C.\nWard No. 03', 'Mr. Nanda Singh Buda,\n9748902401', 'Dolpa', 'Apple and Vegetable ', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '04-Feb-15', '2071.10.21', '13-May-16', '', 1, 1, 364, 80, 21, 99.92, 0, 0, 0, 0, 0, 0),
(252, '07-030', 'Phulbari Livestock Rearing Industry,\nLahai V.D.C.\nWard No. 08', 'Mr. Surya Bahadur Buda,\n9847183838', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '12-Feb-15', '2071.10.29', '13-May-16', '', 1, 1, 319, 80, 18, 100, 0, 0, 0, 0, 0, 0),
(253, '07-056', 'Mahadev Walnut Processing Industry,\nSuhun V.D.C.\nWard No. 04', 'Mr. Nande Dharala,\n9758900565;\n9748046113', 'Dolpa', 'Walnut Processing', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '11-Mar-15', '2071.11.27', '13-May-16', '', 1, 951, 237, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(254, '07-058', 'Phokshundo Pashmina, Khulu, Wool Collection and Marketting Centre,\nSuhun V.D.C.\nWard No. 04', 'Mr. Padam Dharala,\n9638702177', 'Dolpa', 'Wool Production and ', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '11-Mar-15', '2071.11.27', '13-May-16', '', 862, 690, 172, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(255, '07-051', 'Lawan Organic Apple Farm,\nLawan V.D.C.\nWard No. 02', 'Ms. Bisara Rokaya,\n9843558688', 'Dolpa', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Janajati', 'Female', 'Medium Agr', '16-Mar-15', '2071.12.02', '13-May-16', '', 4, 3, 841, 80, 48, 0, 0, 0, 0, 0, 0, 0),
(256, '07-066', 'Saru Sristi Goat Husbandry Industry,\nRaha V.D.C.\nWard No. 09', 'Ms. Panakumari Karki,\n9848340040', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '25-Mar-15', '2071.12.11', '13-May-16', '', 1, 1, 337, 80, 19, 49.75, 0, 0, 0, 0, 0, 0),
(257, '07-048', 'Geeta Herbs and Fruits Sapling Production Nursery,\nMajhfal V.D.C.\nWard No. 04', 'Mr. Shivananda Bohara,\n9638965028', 'Dolpa', 'MAP''s Nursery', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Apr-15', '2071.12.22', '13-May-16', '', 633, 506, 126, 80, 7, 100, 0, 0, 0, 0, 0, 0),
(258, '07-067', 'Fruits Processing Juice Industry,\nSuhun V.D.C.\nWard No. 09', 'Mr. Ohm Bahadur Budha,\n9848303928;\n9868312598', 'Dolpa', 'Apple Processing', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Large Agri', '13-Apr-15', '2071.12.30', '13-May-16', '', 5, 4, 1, 76, 66, 62.59, 0, 0, 0, 0, 0, 0),
(259, '07-037', 'Shyam Seed Production Centre,\nMajhfal V.D.C.\nWard No. 04', 'Mr. Hira bahadur Bohara,\n9638701907', 'Dolpa', 'Vegetable Seed Produ', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '20-Apr-15', '2072.01.07', '13-May-16', '', 811, 648, 162, 80, 9, 99.77, 0, 0, 0, 0, 0, 0),
(260, '07-106', 'Daisy''s Agro Farm,\nDunai V.D.C.\nWard No. 04', 'Ms. Rajan Shahi,\n9851117814', 'Dolpa', 'Agro Tourism', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Large Agri', '10-Jun-15', '2072.02.28', '13-May-16', '', 4, 3, 952, 80, 55, 0, 0, 0, 0, 0, 0, 0),
(261, '07-068', 'Barma Saffron Production Business Centre,\nSuhun V.D.C.\nWard No. 07', 'Mr. Dharmalal Budha,\n9846564207', 'Dolpa', 'Saffron Cultivation ', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '13-Aug-15', '2072.04.28', '13-May-16', '', 1, 940, 235, 80, 13, 64.21, 0, 0, 0, 0, 0, 0),
(262, '07-062', 'Manma Dev Saffron Cultivation Industry,\nJhufal V.D.C.\nWard No. 05', 'Mr. Panna Bahadur Budha,\n9748915676', 'Dolpa', 'Saffron Cultivation ', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '14-Aug-15', '2072.04.29', '13-May-16', '', 1, 986, 246, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(263, '07-069', 'Himalayan Chyangra Husbandry Industry,\nPhoksundo V.D.C.\nWard No. 07', 'Mr. Neema Gyalchen Baiji,\n9843153373', 'Dolpa', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '22-Sep-15', '2072.06.05', '13-May-16', '', 1, 1, 252, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(264, '07-070', 'Phoksundo Yak Farm  Industry,\nPhoksundo V.D.C.\nWard No. 08', 'Mr. Nurbu Lama,\n9848303643', 'Dolpa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '22-Sep-15', '2072.06.05', '13-May-16', '', 2, 1, 496, 80, 28, 0, 0, 0, 0, 0, 0, 0),
(265, '07-077', 'Barsha Sheep Husbandry Farm,\nSuhun V.D.C.\nWard No. 03', 'Mr. Man Bahadur K.C.,\n9748900928', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Oct-15', '2072.06.18', '13-May-16', '', 1, 1, 298, 80, 17, 0, 0, 0, 0, 0, 0, 0),
(266, '07-078', 'Fulabri Sheep Husbandry Industry,\nSuhun V.D.C.\nWard No. 09', 'Mr. Rajenrda Budha,\n9868327585', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Oct-15', '2072.06.18', '13-May-16', '', 1, 1, 283, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(267, '07-081', 'Durga Fresh Vegetable Production Centre,\nDunai V.D.C.\nWard No. 05', 'Ms. Sun Kumari Shahi,\n9748901040;\n9849893130', 'Dolpa', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '05-Nov-15', '2072.07.19', '13-May-16', '', 894, 715, 178, 80, 10, 0, 0, 0, 0, 0, 0, 0),
(268, '07-088', 'Sadhan Livestock Rearing Farm,\nKaigaun V.D.C.\nWard No. 01', 'Mr. Nara Dev Rokaya,\n9848048404', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Nov-15', '2072.07.19', '13-May-16', '', 1, 876, 219, 80, 12, 0, 0, 0, 0, 0, 0, 0),
(269, '07-091', 'Tamasa Goat Husbandry Farm,\nMajhpal V.D.C.\nWard No. 04', 'Mr. Ohm Bahadur Bohara,\n9638707668', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Nov-15', '2072.07.19', '13-May-16', '', 1, 850, 212, 80, 12, 0, 0, 0, 0, 0, 0, 0),
(270, '07-093', 'Dandakharka Sheep Husbandry Farm,\nSuhun V.D.C.\nWard No. 09', 'Mr. Kali Bahadur Budha,\n9848387379', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Nov-15', '2072.07.19', '13-May-16', '', 1, 1, 253, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(271, '07-146', 'Laxmi Commercial Sheep Farm,\nDunai V.D.C.\nWard No. 02', 'Mr. Brihsa Bahadur Rokaya,\n9848337745', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Nov-15', '2072.07.19', '13-May-16', '', 1, 1, 275, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(272, '07-157', 'Indra Goat Husbandry Farm,\nSharmi V.D.C.\nWard No. 07', 'Ms. Indra Kumari Pun,\n9848324665', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '05-Nov-15', '2072.07.19', '13-May-16', '', 1, 917, 229, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(273, '07-072', 'Devendraa Herbs and Vegetable Seed Production Industry,\nJhupal V.D.C.\nWard No. 01', 'Ms. Devendraa Kumari Shahi,\n9848315660', 'Dolpa', 'Vegetable Seed Produ', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 280, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(274, '07-084', 'Bahu Aayami Goat Husbandry Farm,\nJhupal V.D.C.\nWard No. 08', 'Ms. Karna Devi Dangi,\n9848323576', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 291, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(275, '07-092', 'Mukuteshwor Livestock Rearing Business,\nRaha V.D.C.\nWard No. 04', 'Mr. Lok Bahadur Shahi,', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 251, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(276, '07-094', 'Khaliban Sheep Husbandry Farm,\nPahada V.D.C.\nWard No. 09', 'Ms. Sarita Gurung,\n9749064203', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 326, 80, 19, 0, 0, 0, 0, 0, 0, 0),
(277, '07-097', 'Punikha Yak/Chauri Husbandry Industry,\nPhoksundo V.D.C.\nWard No. 06', 'Mr. Yungdung Chhewang Lama,\n9638702081', 'Dolpa', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '06-Nov-15', '2072.07.20', '13-May-16', '', 2, 2, 573, 80, 33, 0, 0, 0, 0, 0, 0, 0),
(278, '07-102', 'Shiva Vegetable Industry,\nJhupal V.D.C.\nWard No. 01', 'Ms. Shiva Kumari Shahi,\n9746030087', 'Dolpa', 'Vegetable Production', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 603, 482, 120, 80, 7, 0, 0, 0, 0, 0, 0, 0),
(279, '07-103', 'Rishiraj Fruits  Industry,\nDunai V.D.C.\nWard No. 02', 'Mr. Dhanaram Budhathoki,\n9848304810', 'Dolpa', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 845, 676, 169, 80, 9, 0, 0, 0, 0, 0, 0, 0),
(280, '07-114', 'Cow and Jhoppa Production Industry,\nDunai V.D.C.\nWard No. 07', 'Mr. Purna Gurung,\n9848337286', 'Dolpa', 'Jhoppa Production', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 347, 80, 20, 0, 0, 0, 0, 0, 0, 0),
(281, '07-138', 'Dolpo Malika Agriculture Research Centre Pvt. Ltd.,\nDunai V.D.C.\nWard No. 04', 'Mr. Lanka Bahadur Shahi,\n9851113567', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 382, 80, 22, 0, 0, 0, 0, 0, 0, 0),
(282, '07-143', 'Tribeni Goat Husbandry Farm,\nKalika V.D.C.\nWard No. 09', 'Ms. Numa Kumari Bohara,\n9867126160', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 980, 245, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(283, '07-144', 'Shreeram Fruits Production Centre,\nRaha V.D.C.\nWard No. 04', 'Mr. Shreeram Karki,\n087300726', 'Dolpa', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 670, 536, 134, 80, 7, 0, 0, 0, 0, 0, 0, 0),
(284, '07-152', 'Kangchhen Derbo Sheep Husbandry Farm,\nSaldang V.D.C.\nWard No. 03', 'Mr. Neema Simgdul Gurung,\n9638734188', 'Dolpa', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 290, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(285, '07-154', 'DeuraliGoat Husbandry Industry,\nCharka V.D.C.\nWard No. 01', 'Mr. Chhewang Galzen Gurung,\n9638826988', 'Dolpa', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 326, 80, 18, 0, 0, 0, 0, 0, 0, 0),
(286, '07-155', 'Dajubhai Goat Husbandry Farm,\nLaha V.D.C.\nWard No. 08', 'Mr. Hari Bahadur Roka,\n9848315764', 'Dolpa', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '06-Nov-15', '2072.07.20', '13-May-16', '', 1, 1, 280, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(287, '08-006', 'Didibahini Cow Farm,\nMahat V.D.C. \nWard No. 02', 'Ms. Jaya Laxmi Bista,\n9848300515', 'Jumla', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '30-Jun-13', '2070.03.16', '13-May-16', '', 4, 3, 835, 80, 48, 85, 0, 0, 0, 0, 0, 0),
(288, '08-002', 'Tribeni Cow Farm,\nTalium V.D.C. \nWard No. 02', 'Mr. Amar Bahadur Rawat,\n9748902278', 'Jumla', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-Jul-13', '2070.03.21', '13-May-16', '', 3, 2, 745, 80, 43, 99, 0, 0, 0, 0, 0, 0),
(289, '08-003', 'New Mahadev Sheep Rearing Industry,\nDhapa V.D.C. \nWard No. 05 ', 'Mr. Sarijun Budha,\n9848319386', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '07-Jul-13', '2070.03.23', '13-May-16', '', 3, 2, 632, 80, 36, 89, 0, 0, 0, 0, 0, 0),
(290, '08-048', 'GSM Safroon Cultivation and Production Industry,\nChandannath V.D.C. Ward No. 08', 'Mr. Sarad Malla,\n9851025509', 'Jumla', 'Saffron Cultivation ', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Large Agri', '30-Aug-13', '2070.05.14', '13-May-16', '', 6, 4, 1, 72, 71, 74, 0, 0, 0, 0, 0, 0),
(291, '08-010', 'Himali Herbal Industry,\nChandannath V.D.C.\nWard No. 05', 'Mr. Ramkrishna Budthapa,\n9848302046', 'Jumla', 'MAP''s Production', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '02-Oct-13', '2070.06.16', '13-May-16', '', 1, 1, 383, 80, 22, 63, 0, 0, 0, 0, 0, 0),
(292, '08-008', 'Ghanse Odar Forest Leasehold Users Group,\nMalikathata V.D.C. Ward No. 07', 'Mr. Brish Rawat,\n9848908626', 'Jumla', 'MAP''s Nursery', 'MAP''s & NTFP', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '07-Oct-13', '2070.06.21', '13-May-16', '', 1, 1, 316, 80, 18, 77, 0, 0, 0, 0, 0, 0),
(293, '08-013', 'Cheremalika Goat Farm,\nChandannath V.D.C.\nWard No. 05', 'Mr. Lok Bahadur Rokaya,\n9848319012', 'Jumla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '08-Oct-13', '2070.06.22', '13-May-16', '', 1, 1, 382, 80, 22, 76, 0, 0, 0, 0, 0, 0),
(294, '08-012', 'Himali Multipurpose Co-operative Society  Ltd,\nMalikathata V.D.C. \nWard No.  09', 'Mr. Harka Bahadur Thapa,\n9748902669;\n9848905162', 'Jumla', 'Fruits Production an', 'Fruits', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 3, 2, 641, 80, 37, 61, 0, 0, 0, 0, 0, 0),
(295, '08-016', 'Pancheshwor Multipurpose Co-operative Society Ltd.,\n Lamra V.D.C. \nWard No.  05', 'Mr. Min Bahadur Dangi,\n9848382040', 'Jumla', 'Apple, Potato and Be', 'Fruits', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '05-May-14', '2071.01.22', '13-May-16', '', 1, 1, 311, 80, 18, 0, 0, 0, 0, 0, 0, 0),
(296, '08-019', 'Chaudhabis Multipurpose Co-operative Society Ltd.,\nDillichaur V.D.C. \nWard No.  01', 'Mr. Debilal Budha,\n9748912892', 'Jumla', 'Vegetable Seed Produ', 'Vegetables & Spices', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 1, 495, 80, 28, 51, 0, 0, 0, 0, 0, 0),
(297, '08-027', 'Radha Vegetable and seeds Production Industry,\nChandannath V.D.C.\nWard No. 01', 'Ms. Raj Neupane,\n9848362409', 'Jumla', 'Vegetable and Vegeta', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 2, 531, 80, 30, 83.28, 0, 0, 0, 0, 0, 0),
(298, '08-043', 'Talfhi Lekali Sheep Rearing Industry,\nPatrasi V.D.C.\nWard No. 01', 'Mr. Dhan Bahadur Bohara,\n9748078153', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 3, 2, 632, 80, 36, 38, 0, 0, 0, 0, 0, 0),
(299, '08-044', 'Pragatishil Sheep Rearing and Radipakhi Production Industry,\nBadki V.D.C. \nWard No.  03', 'Mr. Janga Bahadur Rokaya,\n9748921578', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 3, 2, 612, 80, 35, 95.26, 0, 0, 0, 0, 0, 0),
(300, '08-049', 'Jaljala Sheep Rearing Industry,\nTamti V.D.C.\nWard No. 07', 'Mr. Man Bahadur Sahi,\n9748905171;\n9638714151', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 2, 502, 80, 29, 40, 0, 0, 0, 0, 0, 0),
(301, '08-050', 'Dargari Sheep Rearing Industry,\nPatrasi V.D.C.\nWard No. 01 &02', 'Mr. Dasharath Bohara,\n9748078265', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 2, 502, 80, 29, 40, 0, 0, 0, 0, 0, 0),
(302, '08-051', 'Bhurichula Malika Sheep Rearing and Radipakhi Production Industry,\nTamti V.D.C.\nWard No.  01', 'Mr. Pahalman Kuwar,\n9748016737', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 2, 502, 80, 29, 40, 0, 0, 0, 0, 0, 0),
(303, '08-052', 'Thuladob Sheep Rearing Industry,\nPatrasi V.D.C.\nWard No. 01', 'Mr. Nandalal Sharki,\n9748911515', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Dalits', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 2, 502, 80, 29, 40, 0, 0, 0, 0, 0, 0),
(304, '08-053', 'Dhorpatan Bhawani Masta Sheep Rearing Industry,\nNarakot V.D.C.\nWard No. 08', 'Mr. Nandaram Budha,\n9848312279', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 2, 1, 492, 80, 28, 99.94, 0, 0, 0, 0, 0, 0),
(305, '08-058', 'Kamala Nepali Hand Paper Industry,\nChandannath V.D.C.\nWard No. 06', 'Ms. Kamala Devi Devkota,\n9858320679;\n9848302114', 'Jumla', 'Nepali Hand Made Pap', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '05-May-14', '2071.01.22', '13-May-16', '', 4, 3, 842, 80, 48, 93.57, 0, 0, 0, 0, 0, 0),
(306, '08-059', 'Himalayan Saffron Cultivation,  Processing and Packaging Industry,\nChandannath V.D.C.\nWard No. 02', 'Ms. Bandana Malla,\n9866918593;\n9803146350', 'Jumla', 'Saffron Cultivation ', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Large Agri', '12-Aug-14', '2071.04.27', '13-May-16', '', 8, 5, 2, 67, 93, 42, 0, 0, 0, 0, 0, 0),
(307, '08-045', 'Chancharihalna Herbs Processing Industry,\nPatarasi V.D.C.\nWard No. 01', 'Mr. Purna Singh Bohara,\n9758900701;\n9848333894', 'Jumla', 'MAP''s Processing', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Large Agri', '29-Aug-14', '2071.05.13', '13-May-16', '', 5, 3, 2, 65, 67, 1, 0, 0, 0, 0, 0, 0),
(308, '08-047', 'Mitra Sheep Husbandry and Radipakhi Industry,\nChandannath Municipality Ward No. 05', 'Mr. Janga Bahadur Khatri,\n9848319022;\n087-690039', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-Jan-15', '2071.09.21', '13-May-16', '', 2, 1, 464, 80, 27, 44, 0, 0, 0, 0, 0, 0),
(309, '08-054', 'Mohan Sheep Husbandry Industry,\nTatopani V.D.C. Ward No. 04', 'Mr. Bhairab Budha,\n9748551369', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-Jan-15', '2071.09.21', '13-May-16', '', 2, 1, 483, 80, 28, 41, 0, 0, 0, 0, 0, 0),
(310, '08-056', 'Malikabota Fruits and Herbs Industry,\nMalikabota V.D.C.\nWard No. 02', 'Ms. Muga Rawat,\n9758050280;\n9748017454', 'Jumla', 'MAP''s Production', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 864, 216, 80, 12, 0, 0, 0, 0, 0, 0, 0),
(311, '08-065', 'Maharjan Shahi Herbs Nursery and Cultivation Farm,\nKudari V.D.C.\nWard No. 09', 'Mr. Muun Bahdur Shahi,\n9758900003', 'Jumla', 'MAP''s Production', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '05-Jun-15', '2072.02.22', '13-May-16', '', 586, 468, 117, 80, 6, 0, 0, 0, 0, 0, 0, 0),
(312, '08-062', 'Sahanshil Sheep Husbandry Industry,\nPatmara V.D.C.\nWard No. 01 & 02', 'Mr. Ram Bahadur Thapa,\n9748904973', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '07-Jun-15', '2072.02.24', '13-May-16', '', 3, 2, 656, 80, 38, 0, 0, 0, 0, 0, 0, 0),
(313, '08-068', 'Ohm Shanti Fruits Cultivation and Fruits Processing Industry,\nDhapa V.D.C.\nWard No. 08', 'Mr. Nanda Raj Khatri,\n9843285074', 'Jumla', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '07-Jun-15', '2072.02.24', '13-May-16', '', 946, 757, 189, 80, 11, 0, 0, 0, 0, 0, 0, 0),
(314, '08-069', 'Naulakharka Apple Farm Industry,\nKalikakhetu V.D.C.\nWard No. 03', 'Mr. Muun Bahadur Budha,\n9748922930', 'Jumla', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '07-Jun-15', '2072.02.24', '13-May-16', '', 440, 352, 88, 80, 5, 0, 0, 0, 0, 0, 0, 0),
(315, '08-070', 'Pragatishil Farmer''s Women Group,\nKalikakhetu V.D.C.\nWard No. 05', 'Ms. Bishnukala Bamma,\n9848335138', 'Jumla', 'Apple Cultivation', 'Fruits', 'Group Owned', 'Mixed', 'Female', 'Medium Agr', '07-Jun-15', '2072.02.24', '13-May-16', '', 1, 1, 374, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(316, '08-073', 'Birat Goat Huasbandry Industry,\nBirat V.D.C.\nWard No. 04', 'Mr. Bhakta Bahadur Baduwal,\n9749017825', 'Jumla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '07-Jun-15', '2072.02.24', '13-May-16', '', 966, 773, 193, 80, 11, 0, 0, 0, 0, 0, 0, 0),
(317, '08-075', 'Bhalkhola Apple Producer Farmer ''s Group,\nHaku V.D.C.\nWard No. 04', 'Mr. Gokarna Neupane,\n9848269686', 'Jumla', 'Organic Apple cultiv', 'Fruits', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '07-Jun-15', '2072.02.24', '13-May-16', '', 855, 684, 171, 80, 9, 0, 0, 0, 0, 0, 0, 0),
(318, '08-079', 'Priyanka Fresh Vegetable Industry,\nChandannath Municipality Ward No. 12', 'Ms. Nirmala Shah (Rawal),\n9848335931', 'Jumla', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '07-Jun-15', '2072.02.24', '13-May-16', '', 549, 439, 109, 80, 6, 0, 0, 0, 0, 0, 0, 0),
(319, '08-080', 'Lekali Women Sheep Husbandry Group,\nPatmara V.D.C. Ward No. 07', 'Ms. Maggi Mahatara,\n9848905925', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Female', 'Medium Agr', '07-Jun-15', '2072.02.24', '13-May-16', '', 1, 1, 368, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(320, '08-083', 'Chhisamul Organic Apple and Bean Production Industry,\nChandannath Municipality Ward No. 01', 'Mr. Dinesh Sunwar(Kami),\n9868308175', 'Jumla', 'Apple and Bean Culti', 'Fruits', 'Entrepreneur Ow', 'Dalits', 'Male', 'Small Agri', '07-Jun-15', '2072.02.24', '13-May-16', '', 301, 240, 60, 80, 3, 0, 0, 0, 0, 0, 0, 0),
(321, '08-077', 'Simbari Apple Farm Industry,\nMahabePattarkhola V.D.C. Ward No. 06', 'Mr. Bal Bahadur Shahi,\n9848902401', 'Jumla', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '08-Jun-15', '2072.02.25', '13-May-16', '', 1, 954, 238, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(322, '08-078', 'K.D.R. Apple Industry,\nChandannath Municipality Ward No. 04', 'Mr. Ratan Bahadur Budhthapa,\n087520411', 'Jumla', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '08-Jun-15', '2072.02.25', '13-May-16', '', 620, 496, 124, 80, 7, 0, 0, 0, 0, 0, 0, 0),
(323, '08-076', 'Daju Bhai Sheep Husbandry and Wool Processing Industry,\nBadki V.D.C. Ward No. 02', 'Mr. Jayadhan Shahi,\n9748895270', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '09-Jun-15', '2072.02.26', '13-May-16', '', 1, 1, 279, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(324, '08-084', 'Oodi Sheep Husbandry Industry,\nBadki V.D.C. Ward No. 07', 'Mr. Bhaai Bahadur Rokaya,\n9848904478', 'Jumla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '09-Jun-15', '2072.02.26', '13-May-16', '', 1, 1, 261, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(325, '08-064', 'Ramdeep Nagar Apple Farm  Industry,\nKalikakhetu V.D.C. Ward No. 05', 'Mr. Deepak Jung Shahi,\n9748362190', 'Jumla', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '30-Jun-15', '2072.03.15', '13-May-16', '', 1, 1, 271, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(326, '08-081', 'LachhalKriti Organic Apple, Bean Production and Marketting Industry,\nTatopani V.D.C. Ward No. 08', 'Mr. Dili Bahadur Rawal,\n9848396096', 'Jumla', 'Apple Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '29-Jul-15', '2072.04.13', '13-May-16', '', 2, 1, 410, 80, 23, 0, 0, 0, 0, 0, 0, 0),
(327, '08-082', 'Malikabota Apple Orchad Industry,\nMalikabota V.D.C. Ward No. 02', 'Mr. Narbir Rawat,\n9858050280;\n9758900350', 'Jumla', 'Apple & Bean Cultiva', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '06-Oct-15', '2072.06.19', '13-May-16', '', 1, 914, 228, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(328, '09-001', 'Rara Hosiery Udhyog,\nShreenagar V.D.C. \nWard No. 05', 'Mr. Dhanmaya Singh Budha,\n9848136876', 'Mugu', 'Wool Production and ', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '21-Oct-13', '2070.07.04', '13-May-16', '', 1, 939, 234, 80, 13, 69, 0, 0, 0, 0, 0, 0),
(329, '09-006', 'Srijana Aashamukhi Women Multipurpose Co-operative Society Ltd.,\nKarkibada V.D.C. Ward No. 05 ', 'Ms. Dhanchari Sunwar,\n9748907488', 'Mugu', 'Vegetable Production', 'Vegetables & Spices', 'Co-operative Ow', 'Mixed', 'Female', 'Medium Agr', '21-Oct-13', '2070.07.04', '13-May-16', '', 2, 2, 538, 80, 31, 0, 0, 0, 0, 0, 0, 0),
(330, '09-012', 'Sabina vegetables and Fruits Production Industry,\nKarkibada V.D.C. Ward No. 02', 'Ms. Mayadevi Bham,\n9748905444', 'Mugu', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '21-Oct-13', '2070.07.04', '13-May-16', '', 1, 979, 244, 80, 14, 100, 0, 0, 0, 0, 0, 0),
(331, '09-014', 'Ananta Herbs Production, Colelction and Processing Co-operative Society Ltd. (Ananta Jadibutti Utpadan, Sankalan Tatha Prasodan Sahakari Sanstha Ltd.),\nBhiyee V.D.C. \nWard No. 09', 'Mr. Prithvi Bahadur Bhumi,\n9848315482', 'Mugu', 'MAP''s Nursery ', 'MAP''s & NTFP', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '23-May-14', '2071.02.09', '13-May-16', '', 2, 1, 447, 80, 26, 46, 0, 0, 0, 0, 0, 0),
(332, '09-026', 'Sreeya Krishi Bikash Bastu Ayojana Udhyog,\nShreenagar V.D.C. \nWard No. 04', 'Mr. Tej Bahadur Malla,\n9758900467;\n9848305808', 'Mugu', 'Slaughter Slap', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-Aug-14', '2071.04.20', '13-May-16', '', 2, 1, 412, 80, 23, 67, 0, 0, 0, 0, 0, 0),
(333, '09-027', 'Prince Goat Husbandry Farm,\nGumtha V.D.C. \nWard No. 01', 'Ms. Bijaya Sahi,\n9758901134', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '10-Dec-14', '2071.08.24', '13-May-16', '', 3, 3, 798, 80, 46, 100, 0, 0, 0, 0, 0, 0),
(334, '09-028', 'Seri Sera Sheep Husbandry Farm,\nSeri V.D.C. \nWard No. 09', 'Ms. Jaya Laxmi Malla,\n9848316522;\n9748900689', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '23-Jan-15', '2071.10.09', '13-May-16', '', 2, 2, 538, 80, 31, 96.49, 0, 0, 0, 0, 0, 0),
(335, '09-031', 'Mahadev Fruits and Vegetable Production Farm,\nKarkibada V.D.C. \nWard No. 04', 'Mr. Mahendra Bahadur Bham,\n9748911915', 'Mugu', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '23-Jan-15', '2071.10.09', '13-May-16', '', 906, 724, 181, 80, 10, 97, 0, 0, 0, 0, 0, 0),
(336, '09-040', 'Bhuwarekhola Cattle Farming and Milk Product Farm,\nKarkibada V.D.C. \nWard No. 01', 'Mr. Bhaira Bahadur Bham,\n9748905446', 'Mugu', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '27-Jan-15', '2071.10.13', '13-May-16', '', 1, 1, 330, 80, 19, 64.58, 0, 0, 0, 0, 0, 0),
(337, '09-011', 'Nirmala Bee Keeping and Honey Processing Industry,\nPina V.D.C. \nWard No. 03', 'Mr. Lal Bahadur Rawal,\n9868323044', 'Mugu', 'Bee Keeping', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 904, 226, 80, 13, 50, 0, 0, 0, 0, 0, 0),
(338, '09-024', 'Vegetable Producer Famer''s Women Group,\nShreenagar V.D.C. \nWard No. 09', 'Ms. Rupa Rokaya,\n9806317784;\n9748911876', 'Mugu', 'Vegetable Production', 'Vegetables & Spices', 'Group Owned', 'Mixed', 'Female', 'Small Agri', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 820, 205, 80, 11, 88.15, 0, 0, 0, 0, 0, 0),
(339, '09-025', 'Onion Cultivation Women Farmer''s Group,\nRuga V.D.C. \nWard No. 01', 'Ms. Nani Rokaya,\n9748904674', 'Mugu', 'Vegetable Production', 'Vegetables & Spices', 'Group Owned', 'Mixed', 'Female', 'Small Agri', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 872, 218, 80, 12, 56.72, 0, 0, 0, 0, 0, 0),
(340, '09-034', 'Mik Bakery Industry,\nShreenagar V.D.C. \nWard No. 05', 'Mr. Min Bahadur Rawal,\n9849146887;\n087-460223', 'Mugu', 'Bakery Production', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 1, 364, 80, 21, 32, 0, 0, 0, 0, 0, 0),
(341, '09-035', 'Bashanta Meat Centre,\nShreenagar V.D.C. \nWard No. 05', 'Mr. Lal Bahadur Malla,\n9868215912;\n9748911975', 'Mugu', 'Slaughter Slap', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 1, 390, 80, 22, 66.93, 0, 0, 0, 0, 0, 0),
(342, '09-036', 'Malika Goat Husbandry Group,\nRuga V.D.C. \nWard No. 03', 'Mr. Kebal Bohara,\n9848321987;\n9748322085', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '01-Feb-15', '2071.10.18', '13-May-16', '', 2, 1, 433, 80, 25, 0, 0, 0, 0, 0, 0, 0),
(343, '09-038', 'Rigdha Sheep Husbandry Farmer''s Group,\nMangri V.D.C. \nWard No. 02', 'Ms. Harishova Buda,\n9848308319;\n9748917736', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Female', 'Small Agri', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 1, 326, 80, 18, 0, 0, 0, 0, 0, 0, 0),
(344, '09-041', 'Chutha Ayaarjan Pashupalan Farmer''s Group,\nBhiyee V.D.C. \nWard No. 07', 'Mr. Singha Bahadur Dhami,\n9843389283;\n9748322085', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Medium Agr', '01-Feb-15', '2071.10.18', '13-May-16', '', 1, 1, 366, 80, 21, 60.74, 0, 0, 0, 0, 0, 0),
(345, '09-029', 'Gurudev Jagaran Goat Husbandry Group,\nRuga V.D.C. \nWard No. 05', 'Mr. Jaylal Khadka,\n9816573662', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '02-Feb-15', '2071.10.19', '13-May-16', '', 1, 1, 323, 80, 18, 0, 0, 0, 0, 0, 0, 0),
(346, '09-030', 'Malika Tal Livestock Farming Farmer''s Group,\nRowa V.D.C. \nWard No. 02', 'Ms. Maya Devi Karki,\n9848388558;\n9748900605', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', 'Group Owned', 'Mixed', 'Mixed', 'Small Agri', '02-Feb-15', '2071.10.19', '13-May-16', '', 1, 1, 251, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(347, '09-032', 'Rara Livestock Farming and Milk Production Farm,\nShreenagar V.D.C. \nWard No. 05', 'Mr. Nrupendra Bahadur Malla,\n9758900900', 'Mugu', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '02-Feb-15', '2071.10.19', '13-May-16', '', 1, 1, 330, 80, 19, 0, 0, 0, 0, 0, 0, 0),
(348, '09-037', 'Chandanath Fresh House,\nShreenagar V.D.C. \nWard No. 05', 'Ms. Laxmi Rawat,\n9748901489;\n087460151', 'Mugu', 'Slaughter Slap', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '02-Feb-15', '2071.10.19', '13-May-16', '', 1, 995, 248, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(349, '09-042', 'Saraswati Sheep Farm,\nRara V.D.C. \nWard No. 07', 'Mr. Dhirja Bahadur Rokaya,\n9806322171;\n9741393908', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '02-Jan-15', '2071.10.18', '13-May-16', '', 1, 1, 284, 80, 16, 51, 0, 0, 0, 0, 0, 0),
(350, '09-045', 'Phulbari Women Agriculture Co-operative Society Ltd.,\nRuga V.D.C. \nWard No. 04', 'Ms. Munka Lawad,\n9813984206', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Female', 'Small Agri', '09-Apr-15', '2071.12.26', '13-May-16', '', 1, 1, 283, 80, 16, 0, 0, 0, 0, 0, 0, 0),
(351, '09-043', 'Mahadev Agriculture Women  Group,\nRowa V.D.C. \nWard No. 03', 'Ms. Teuka Baduwal,\n9818414187', 'Mugu', 'Potato and Bean Cult', 'Vegetables & Spices', 'Group Owned', 'Mixed', 'Female', 'Small Agri', '13-Apr-15', '2071.12.30', '13-May-16', '', 632, 506, 126, 80, 7, 44, 0, 0, 0, 0, 0, 0),
(352, '09-046', 'Kishan Ayaarjan Samuha,\nKhaumale V.D.C. \nWard No. 02', 'Ms. Shantu Ghodasaini,\n9848368975', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '13-Apr-15', '2071.12.30', '13-May-16', '', 1, 1, 366, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(353, '09-033', 'Mahadev Fruits and Processing Industry,\nKarkibada V.D.C. \nWard No. 04', 'Ms. Baachu Rokaya,\n9748900700;\n9849933509', 'Mugu', 'Fruits Processing', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Medium Agr', '16-Apr-15', '2072.01.03', '13-May-16', '', 3, 2, 689, 80, 40, 0, 0, 0, 0, 0, 0, 0),
(354, '09-049', 'Reedmokshya Sheep Husbandry Farm,\nKarkibada V.D.C. \nWard No. 01', 'Mr. Dhalak Bham,\n9848918540', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '16-Apr-15', '2072.01.03', '13-May-16', '', 1, 1, 389, 80, 22, 66.26, 0, 0, 0, 0, 0, 0),
(355, '09-048', 'Dandathim Goat Husbandry Farm,\nSukhadhik V.D.C. \nWard No. 07', 'Mr. Janak Bahadur Singh,\n9848365547', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '07-May-15', '2072.01.24', '13-May-16', '', 2, 1, 473, 80, 27, 0, 0, 0, 0, 0, 0, 0),
(356, '09-050', 'Ballai Bagar Cattle Farming  Farm,\nPina V.D.C. \nWard No. 05', 'Mr. Sal Bahadur Rawal,\n9748911922', 'Mugu', 'Cattle Farming', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '16-Sep-15', '2072.05.30', '13-May-16', '', 1, 968, 242, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(357, '09-039', 'Nechin Yak Husbandry Farm,\nPulu V.D.C. \nWard No. 03', 'Mr. Kanjyok Chewang Tamang,\n9638740292;\n9849308973', 'Mugu', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '06-Oct-15', '2072.06.19', '13-May-16', '', 2, 1, 451, 80, 26, 0, 0, 0, 0, 0, 0, 0),
(358, '09-054', 'Karnali Commercial Sheep Husbandry Farm,\nShukadhika V.D.C. \nWard No. 07', 'Mr. Bhim Bahadur Shahi,\n9849919446;\n9758900445', 'Mugu', 'Sheep Husbandry', 'Livestock & Poultry', '', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '25-Nov-15', '2072.08.09', '14-May-16', '', 1, 1, 376, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(359, '09-088', 'Mastadev Goat Husbandry Farm,\nShukadhika V.D.C. \nWard No. 07', 'Mr. Hasta Bahadur Shahi,\n9748911825', 'Mugu', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '25-Nov-15', '2072.08.09', '15-May-16', '', 1, 1, 383, 80, 22, 0, 0, 0, 0, 0, 0, 0),
(360, '10-001', 'Ramdev Fruits Processing Centre,\nThenhe -7]x]_ V.D.C. Ward No. 02', 'Mr. Gora Singh Bohara,\n9748900489', 'Humla', 'Seabuck Thorn Squash', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '19-May-13', '2070.02.05', '13-May-16', '', 811, 649, 162, 80, 9, 64, 0, 0, 0, 0, 0, 0),
(361, '10-010', 'Agro Enterprises Centre, Humla,\nSimikot V.D.C. \nWard No. 09', 'Mr. Junga Bahadur Sahi,\n9848309670', 'Humla', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '19-May-13', '2070.02.05', '13-May-16', '', 815, 652, 163, 80, 9, 93, 0, 0, 0, 0, 0, 0),
(362, '10-007 ', 'Puti Chomu Lek Dhika Commercial Yak Farm,\nHepka V.D.C. \nWard No. 01 ', 'Ms. Puti Chomu Lama,\n9848316478', 'Humla', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Medium Agr', '26-Sep-13', '2070.06.09', '13-May-16', '', 1, 1, 352, 80, 20, 87, 0, 0, 0, 0, 0, 0),
(363, '10-008', 'Norke Herbs Production Farm,\nKhagalgaun V.D.C Ward No. 02', 'Mr. Pasang Lama,\n9848108785', 'Humla', 'MAP''s Production', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '26-Sep-13', '2070.06.09', '13-May-16', '', 1, 827, 206, 80, 12, 100, 0, 0, 0, 0, 0, 0),
(364, '10-002 ', 'Chankheli Fruits Nursery,\nDarma V.D.C. \nWard No. 07', 'Mr. Sarijan Bahadur Budha,\n9748903739', 'Humla', 'Fruits Nursery', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '07-Oct-13', '2070.06.21', '13-May-16', '', 897, 717, 179, 80, 10, 33, 0, 0, 0, 0, 0, 0),
(365, '10-012', 'Sahi Goat Rearing Business,\nSaya V.D.C.\nWard No. 09', 'Mr. Punda Bahadur Sahi,\n9848336712', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '23-Apr-14', '2071.01.10', '13-May-16', '', 413, 330, 82, 80, 4, 100, 0, 0, 0, 0, 0, 0),
(366, '10-036', 'Sonam Dorje Herbs Production Centre,\nHepka V.D.C.\nWard No. 02', 'Mr. Uttam Lama,\n9848339933', 'Humla', 'MAP''s Nursery', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '27-Apr-14', '2071.01.14', '13-May-16', '', 414, 331, 82, 80, 4, 0, 0, 0, 0, 0, 0, 0),
(367, '10-037', 'Namuna Agriculture Co-operative Society Ltd.,\nMaila V.D.C.\nWard No. 06', 'Mr. Pradeep Jaisi,\n9848268556', 'Humla', 'Sheep Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '06-Jun-14', '2071.02.23', '13-May-16', '', 2, 1, 478, 80, 27, 100, 0, 0, 0, 0, 0, 0),
(368, '10-038', 'Saipal Agriculture Co-operative Society Ltd.,\nMadana V.D.C.\nWard No. 08', 'Mr. Bal Bahadur Budha,\n9848316093;\n9848339975', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Mixed', 'Mixed', 'Medium Agr', '06-Jun-14', '2071.02.23', '13-May-16', '', 2, 2, 563, 80, 32, 100, 0, 0, 0, 0, 0, 0),
(369, '10-009', 'Simikot Apple Production and Processing Centre,\nSimikot V.D.C.\nWard No. 05', 'Mr. Aadan Singh Rawat,\n9848309303;\n087-680196', 'Humla', 'Apple Cultivation & ', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 851, 681, 170, 80, 9, 100, 0, 0, 0, 0, 0, 0);
INSERT INTO `projectdetail` (`id`, `project_code`, `name_add_proponent`, `responsible_person`, `district`, `objectives`, `area`, `enterprises`, `scale`, `caste_owner`, `sex`, `agreement_date_ad`, `agreement_date_bs`, `completion_date_ad`, `completion_date_bs`, `total_investment_rs`, `total_investment_usd`, `grand_rs`, `grand_usd`, `proponent_rs`, `proponent_usd`, `bramin`, `janajati`, `dalit`, `other`, `hidden_male`, `hidden_female`) VALUES
(370, '10-022', 'Mahadev Horse Husbandry Farm,\nBargaun V.D.C.\nWard No. 07', 'Mr. Champha Singh Lama,\n9748010460', 'Humla', 'Mule Production', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 805, 644, 161, 80, 9, 0, 0, 0, 0, 0, 0, 0),
(371, '10-042', 'Ongmu Commercial Yak Farming Farm,\nKhagalgaun V.D.C.\nWard No. 03', 'Mr. Bishnu Bahadur Lama Tamang,\n9841615580', 'Humla', 'Dairy Establishment', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 680, 544, 136, 80, 7, 0, 0, 0, 0, 0, 0, 0),
(372, '10-043', 'Fruits Sapling Sipti Farm,\nShreenagar V.D.C.\nWard No. 05', 'Mr. Devisaran Fadera,\n9848309944', 'Humla', 'Fruits Nursery', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 787, 630, 157, 80, 9, 0, 0, 0, 0, 0, 0, 0),
(373, '10-044', 'Kailash Bee Keeping Business,\nJair V.D.C.\nWard No. 04', 'Ms. Lakshya Karki,\n9848388313;\n9841714781', 'Humla', 'Bee Keeping', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 419, 335, 83, 80, 4, 0, 0, 0, 0, 0, 0, 0),
(374, '10-045', 'Hapallo Thehe Vegetable Production Centre,\nThehe V.D.C.\nWard No. 06', 'Mr. Jaya Bahadur Bohara,\n9860072650', 'Humla', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 924, 739, 184, 80, 10, 82, 0, 0, 0, 0, 0, 0),
(375, '10-046', 'Bijaya Pushpa Apple Farm,\nBargaun V.D.C.\nWard No. 09', 'Ms. Pushpa Thapa Bhandari,\n9848904065', 'Humla', 'Apple  Cultivation', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '27-Jun-14', '2071.03.13', '13-May-16', '', 1, 1, 338, 80, 19, 46, 0, 0, 0, 0, 0, 0),
(376, '10-032', 'Humla Food Industry,\nSimikot V.D.C.\nWard No. 03', 'Mr. Deepak Bahadur Budha,\n9851142699', 'Humla', 'Bakery Production', 'Miscallaneous', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '05-Aug-14', '2071.04.20', '13-May-16', '', 2, 2, 545, 80, 31, 29.97, 0, 0, 0, 0, 0, 0),
(377, '10-021', 'Maila Sheep Husbandry Improvement Business,\nMaila V.D.C.\nWard No. 01', 'Mr. Dharmaraj Joshi,\n9851001669', 'Humla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '17-Sep-14', '2071.06.01', '13-May-16', '', 1, 830, 207, 80, 12, 100, 0, 0, 0, 0, 0, 0),
(378, '10-048', 'Himali Agriculture Farm,\nSimikot V.D.C.\nWard No. 03', 'Mr. Nara Bahadur Rokaya,\n9851001669', 'Humla', 'Slaughter Slap', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Medium Agr', '22-Oct-14', '2071.07.05', '13-May-16', '', 2, 1, 486, 80, 28, 21, 0, 0, 0, 0, 0, 0),
(379, '10-074', 'Simana Vegetable Production and Marketting Centre,\nDandafaya V.D.C.\nWard No. 02', 'Mr. Bhakta Bahadur Sahi,\n9848309130', 'Humla', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '31-Dec-14', '2071.09.16', '13-May-16', '', 1, 931, 232, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(380, '10-061', 'Himali Jyoti Green Vegetable Farm,\nSimikot V.D.C.\nWard No. 03', 'Ms. Jyoti Rokaya,\n9848336625', 'Humla', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '23-Jan-15', '2071.10.09', '13-May-16', '', 909, 727, 181, 80, 10, 100, 0, 0, 0, 0, 0, 0),
(381, '10-052', 'Unnatshil Sheep and Goat Husbandry Farm,\nGothi V.D.C.\nWard No. 08', 'Mr. Karna Jung Shahi,\n9848325822;\n9748901288', 'Humla', 'Sheep Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '09-Feb-15', '2071.10.26', '13-May-16', '', 1, 1, 293, 80, 17, 0, 0, 0, 0, 0, 0, 0),
(382, '10-060', 'Dawa Tashi Himalayan Chyangra Husbandry Farm,\nHepka V.D.C.\nWard No. 02', 'Mr. Takdir Lama,\n9848364181', 'Humla', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '11-Feb-15', '2071.10.28', '13-May-16', '', 1, 1, 324, 80, 18, 99, 0, 0, 0, 0, 0, 0),
(383, '10-063', 'Himali Yak and Agro Research Centre Pvt. Ltd.,\nBargaun V.D.C.\nWard No. 05', 'Mr. Chiring Damgdul Lama,\n9848364300', 'Humla', 'Yak Production ', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '11-Feb-15', '2071.10.28', '13-May-16', '', 2, 2, 524, 80, 30, 0, 0, 0, 0, 0, 0, 0),
(384, '10-070', 'Chyangla Yak Husbandry Farm,\nThehe V.D.C.\nWard No. 09', 'Ms. Yanki Lama,\n9848029442', 'Humla', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Medium Agr', '09-Mar-15', '2071.11.25', '13-May-16', '', 2, 2, 514, 80, 29, 100, 0, 0, 0, 0, 0, 0),
(385, '10-071', 'Bibekshil Goat Husbandry Business,\nThehe V.D.C.\nWard No. 03', 'Mr. Brisha Bahdaur Bohara,\n9848369218', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '19-Apr-15', '2072.01.06', '13-May-16', '', 1, 930, 232, 80, 13, 100, 0, 0, 0, 0, 0, 0),
(386, '10-050', 'Missan Goat Husbandry Farm,\nKalika V.D.C.\nWard No. 04', 'Ms. Naurata Chaatyal,\n9748901650', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Female', 'Small Agri', '23-Jun-15', '2072.03.08', '13-May-16', '', 1, 890, 222, 80, 12, 0, 0, 0, 0, 0, 0, 0),
(387, '10-051', 'Halji Rinjiling Agriculture Co-operative Society Ltd.,\nLimi V.D.C.\nWard No. 01', 'Mr. Paljoor Tamang,\n9868311748', 'Humla', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Mixed', 'Mixed', 'Medium Agr', '29-Jul-15', '2072.04.13', '13-May-16', '', 2, 1, 462, 80, 26, 0, 0, 0, 0, 0, 0, 0),
(388, '10-054', 'Tatopani Organic Agriculture Co-operative Society Ltd.,\nSarkideu V.D.C.\nWard No. 05', 'Mr. Man Bahadur Fadera,\n9848396096', 'Humla', 'Walnut & Vegetable P', 'Fruits', 'Co-operative Ow', 'Mixed', 'Mixed', 'Small Agri', '15-Sep-15', '2072.05.29', '13-May-16', '', 584, 467, 116, 80, 6, 0, 0, 0, 0, 0, 0, 0),
(389, '10-069', 'Shanti Goat Husbandry Business,\nThehe V.D.C.\nWard No. 05', 'Mr. Shova Bhandari,\n9748904012', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Co-operative Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '14-Oct-15', '2072.06.27', '13-May-16', '', 1, 943, 235, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(390, '10-020', 'Pemajing Met and Sonam Commercial Bee Keeping Farm,\nHepka V.D.C.\nWard No. 02', 'Mr. Pemajing Met Tamang,\n9748904012', 'Humla', 'Bee Keeping', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 402, 322, 80, 80, 4, 0, 0, 0, 0, 0, 0, 0),
(391, '10-049', 'Dandafaya Masta Vegetable Production and processing Industry,\nDandafaya V.D.C.\nWard No. 03', 'Mr. Hari Bahadur Shahi,\n087675101', 'Humla', 'Vegetable Production', 'Vegetables & Spices', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 588, 470, 117, 80, 6, 0, 0, 0, 0, 0, 0, 0),
(392, '10-056', 'Himali Agriculture Farm and Chyangra Husbandry Business,\nHepka V.D.C.\nWard No. 01', 'Mr. Lakpa Dorje Lama (Tamang),\n9848336680', 'Humla', 'Chyangra Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 821, 657, 164, 80, 9, 0, 0, 0, 0, 0, 0, 0),
(393, '10-058', 'Jhagire Goat Husbandry Farm,\nGothi V.D.C.\nWard No. 04', 'Mr. Guna Bahadur Shahi,\n9848316432', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 961, 240, 80, 13, 0, 0, 0, 0, 0, 0, 0),
(394, '10-064', 'Panchamukhi Jhoma Rearing Business,\nSimikot V.D.C.\nWard No. 03', 'Mr. Chiring Hisse Lama,\n9748904093', 'Humla', 'Yak/Chauri Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Janajati', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 634, 507, 126, 80, 7, 0, 0, 0, 0, 0, 0, 0),
(395, '10-068', 'Sritham Goat Husbandry Partnership Farm,\nChhipra V.D.C.\nWard No. 06', 'Mr. Jagadish Rokaya,\n9849631026', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 1, 263, 80, 15, 0, 0, 0, 0, 0, 0, 0),
(396, '10-072', 'Masta Fruits Cultivation,\nRodikot V.D.C.\nWard No. 09', 'Mr. Jayarishi Hamal,\n9848388381', 'Humla', 'Fruits Nursery', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 377, 301, 75, 80, 4, 0, 0, 0, 0, 0, 0, 0),
(397, '10-078', 'Thali Attish Cultivation Business,\nRaya V.D.C.\nWard No. 09', 'Ms. Sauri Rawal,\n9848317103', 'Humla', 'Attish Cultivation', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 581, 465, 116, 80, 6, 0, 0, 0, 0, 0, 0, 0),
(398, '10-041', 'Mul Goat Husbandry Business,\nJaair V.D.C.\nWard No. 06', 'Mr. Aajabir Rokaya,\n9848309153', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 987, 246, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(399, '10-055', 'Sonisa Apple Slice, and Juice Industry,\nThehe V.D.C.\nWard No. 06', 'Ms. Panchakala Bhandari,\n9849077456', 'Humla', 'Apple Processing', 'Fruits', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Female', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 1, 340, 80, 19, 0, 0, 0, 0, 0, 0, 0),
(400, '10-066', 'BR Goat Husbandry Farm Pvt. Ltd.,\nChhipra V.D.C.\nWard No. 01', 'Mr. Babarjung Hamal,\n9748910413', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 1, 256, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(401, '10-073', 'Mahadev Goat Husbandry Farm,\nMimi V.D.C.\nWard No. 06', 'Mr. Salikram Aidi,\n9848341234', 'Humla', 'Goat Husbandry', 'Livestock & Poultry', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Small Agri', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 1, 250, 80, 14, 0, 0, 0, 0, 0, 0, 0),
(402, '10-082', 'Simikot Bio Briquette Farm,\nSimikot V.D.C.\nWard No. 02', 'Mr. Rickjung Lama,\n9841878859', 'Humla', 'Bio-Briquette Produc', 'Miscallaneous', 'Entrepreneur Ow', 'Janajati', 'Male', 'Medium Agr', '04-Nov-15', '2072.07.18', '13-May-16', '', 1, 1, 368, 80, 21, 0, 0, 0, 0, 0, 0, 0),
(403, 'MW-002', 'Satya Herbal Products Pvt. Ltd.,\nGanapur V.D.C.\nWard No. 08', 'Mr. Rabindranath Sukla,\n9858020390;\n081-526367', 'Mid-Western', 'Jatamassi Processing', 'MAP''s & NTFP', 'Entrepreneur Ow', 'Brahmin/Chhetri', 'Male', 'Large Agri', '02-Jun-14', '2071.02.19', '13-May-16', '', 35, 17, 17, 50, 413, 12.02, 0, 0, 0, 0, 0, 0),
(406, '01-5452', '', '', 'Sankhuwasabha', '', '', 'Entrepreneur', '', '', 'male', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `regular`
--

CREATE TABLE IF NOT EXISTS `regular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `sn_byUser` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `local` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE IF NOT EXISTS `revenue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL COMMENT 'Identify the user',
  `sn_byUser` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `detail` varchar(45) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `q1` int(11) NOT NULL COMMENT 'q1 to q5 are cost',
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `p1` int(11) NOT NULL COMMENT 'p1 to p5 are quantity',
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `r1` int(11) NOT NULL COMMENT 'r1 to r5 are revenue',
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seasonal`
--

CREATE TABLE IF NOT EXISTS `seasonal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sn_byUser` int(11) NOT NULL,
  `project_code` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `local` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'helper',
  `verify` varchar(20) NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `full_name`, `username`, `password`, `email`, `address`, `phone`, `age`, `role`, `verify`) VALUES
(1, '', 'admin', 'aaa', '', '', 0, 0, 'helper', 'NULL'),
(2, '', 'user01', 'user01', '', '', 0, 0, 'helper', 'NULL'),
(3, '', 'user02', 'user02', '', '', 0, 0, 'helper', 'NULL'),
(4, '', 'account', 'account', '', '', 0, 0, 'helper', 'NULL'),
(5, '', 'envt', 'envt', '', '', 0, 0, 'helper', 'NULL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
