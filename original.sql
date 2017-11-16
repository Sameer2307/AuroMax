-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 11:55 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hartline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(215) NOT NULL DEFAULT '',
  `pass_word` varchar(100) NOT NULL DEFAULT '',
  `LOGINTYPE` varchar(30) DEFAULT NULL,
  `LOGINNAME` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `pass_word`, `LOGINTYPE`, `LOGINNAME`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `plus_login`
--

CREATE TABLE IF NOT EXISTS `plus_login` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `userid` varchar(10) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tm` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` char(3) NOT NULL DEFAULT 'ON'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plus_login`
--

INSERT INTO `plus_login` (`id`, `userid`, `ip`, `tm`, `status`) VALUES
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 12:49:39', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 12:52:11', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 12:53:56', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 12:55:33', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 13:58:24', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 18:16:03', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 18:30:44', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 18:30:58', 'OFF'),
('pja3r590t4jd8ods47r44nu1i7', 'admin', '127.0.0.1', '2011-12-26 18:31:45', 'OFF'),
('qc1pa39c3unvfaj3ktmn6rdu27', 'admin', '127.0.0.1', '2011-12-26 18:36:24', 'ON'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 13:56:59', 'OFF'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 13:58:54', 'OFF'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 14:05:23', 'OFF'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 14:05:52', 'OFF'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 14:06:44', 'OFF'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 14:07:31', 'OFF'),
('d3h8d4us8fkknmjb6je7gdabl4', 'admin', '127.0.0.1', '2011-12-27 14:48:45', 'OFF'),
('ldl6kevi53n80gafkanf84r721', 'admin', '127.0.0.1', '2011-12-29 13:04:22', 'ON'),
('64uhrb858cnp9dv44226g2osh5', 'admin', '127.0.0.1', '2011-12-30 11:05:27', 'OFF'),
('423brsb0m11fq6hkhijk12iqm0', 'admin', '127.0.0.1', '2011-12-31 14:39:33', 'ON'),
('bpthvviau6amq7ppe4kn2nfce6', 'admin', '127.0.0.1', '2012-01-24 18:26:52', 'ON'),
('869984b54a4c23032cefd70eeb6804d9', 'admin', '115.187.61.196', '2012-01-24 08:11:45', 'ON'),
('3b9ac0e919e9b641d1d76894336e02ab', 'admin', '117.194.161.87', '2012-01-24 12:19:43', 'ON'),
('7bf306713a5e55445f5b73487bbfc407', 'admin', '115.187.47.15', '2012-01-25 00:33:40', 'ON'),
('7bf306713a5e55445f5b73487bbfc407', 'admin', '115.187.47.15', '2012-01-25 02:15:08', 'ON'),
('7bf306713a5e55445f5b73487bbfc407', 'admin', '115.187.47.15', '2012-01-25 02:31:48', 'ON'),
('640f7f81ffc4b76e447fb58b6c0464ac', 'admin', '115.187.52.194', '2012-01-26 01:01:54', 'ON'),
('bb8f0f213e4c852919c9c62d3d489372', 'admin', '117.194.98.40', '2012-01-26 01:02:16', 'OFF'),
('5fc4ef4ae8bf9e46da1e9265a3480dee', 'admin', '117.194.102.30', '2012-01-26 05:49:38', 'OFF'),
('5fc4ef4ae8bf9e46da1e9265a3480dee', 'admin', '117.194.102.30', '2012-01-26 07:10:25', 'OFF'),
('d03b05727256d5160b8264b06c549ee7', 'admin', '203.171.247.107', '2012-02-06 07:46:54', 'OFF'),
('d8f71952675cc6cf1f3e807525606e82', 'admin', '117.194.101.191', '2012-03-04 08:01:03', 'OFF'),
('23d18b4c27614074188d52061b6fb5fe', 'admin', '59.93.240.97', '2012-03-15 07:51:59', 'ON'),
('pick92p9d6lsem5ugsgk565m63', 'admin', '127.0.0.1', '2012-05-27 11:19:11', 'ON'),
('nu5n884vv095nbsj4v8k011kj6', 'admin', '127.0.0.1', '2012-06-03 12:42:19', 'ON'),
('p51cjbr25opnkpoh66sapoklt1', 'admin', '127.0.0.1', '2013-04-19 10:10:02', 'ON'),
('p51cjbr25opnkpoh66sapoklt1', 'admin', '127.0.0.1', '2013-04-19 11:09:49', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcat_id` int(15) NOT NULL,
  `brand_id` int(15) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `details` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `big_image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `weight` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `subcat_id`, `brand_id`, `product_name`, `details`, `image`, `big_image`, `qty`, `discount`, `weight`, `status`) VALUES
(1, 14, 0, 'photo', '', 'pic_l1.jpg', 'pic_l4.jpg', 0, '0.00', 0, 'photo'),
(2, 14, 0, 'video', 'http://www.youtube.com/watch?v=49UCWUxLRO4', 'pic_m4.jpg', 'not_available_b.png', 0, '0.00', 0, 'video');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `id` int(11) NOT NULL,
  `purchase_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mrp` varchar(30) NOT NULL,
  `discount` varchar(30) NOT NULL,
  `total_price_row` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `purchase_id`, `product_id`, `product_name`, `size`, `quantity`, `mrp`, `discount`, `total_price_row`) VALUES
(2, '15082011-102535-2', 1, 'aabbcc', '28', 4, '123', '10', '584'),
(2, '15082011-102535-2', 4, 'fsfsfsf', '28', 2, '167', '10', '401.42'),
(2, '15082011-103240-2', 4, 'fsfsfsf', '28', 100, '167', '10', '20071'),
(9, '03092011-143943-9', 4, 'fsfsfsf', '24', 2, '240', '10', '566.4'),
(2, '03092011-144042-2', 4, 'fsfsfsf', '24', 2, '240', '10', '566.4'),
(10, '03092011-144255-10', 4, 'fsfsfsf', '26', 4, '257', '10', '1209.64'),
(11, '03092011-144410-11', 4, 'fsfsfsf', '24', 12, '240', '10', '3398.4'),
(2, 'P-665-20121101592400', 20, '', 'XL', 1, '10', '12.00', '8.8'),
(2, 'P-656-20121201212452', 20, 'Blanket-1', 'XL', 1, '10', '12.00', '8.8'),
(2, 'P-270-20121201342409', 20, 'Blanket-1', 'XL', 2, '10', '12.00', '17.6'),
(2, 'P-488-20120001292554', 20, 'Blanket-1', 'XL', 1, '10', '12.00', '8.8'),
(2, 'P-187-20120101132518', 20, 'Blanket-1', 'XL', 1, '10', '12.00', '8.8'),
(2, 'P-608-20120301402510', 20, 'Blanket-1', 'XL', 1, '10', '12.00', '8.8'),
(2, 'P-419-20120401002510', 20, 'Blanket-1', 'XL', 1, '10', '12.00', '8.8'),
(17, 'P-384-20120803490416', 51, 'Hartline blanket HBLA-04', 'XL', 1, '10', '5.00', '9.5'),
(17, 'P-384-20120803490416', 53, 'Hartline blanket HBLA-06', 'XL', 1, '20', '25.00', '15');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_summary`
--

CREATE TABLE IF NOT EXISTS `purchase_summary` (
  `id` int(11) NOT NULL,
  `purchase_id` varchar(255) NOT NULL,
  `paypal_code` varchar(50) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_mrp` varchar(30) NOT NULL,
  `total_discount` varchar(20) NOT NULL,
  `total_shipping` varchar(30) NOT NULL,
  `total_price` varchar(30) NOT NULL,
  `purchase_status` varchar(30) NOT NULL,
  `pur_date` varchar(30) NOT NULL,
  `payment_mode` varchar(30) NOT NULL,
  `chq_no` varchar(30) NOT NULL,
  `chq_date` varchar(30) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `branch_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_summary`
--

INSERT INTO `purchase_summary` (`id`, `purchase_id`, `paypal_code`, `total_qty`, `total_mrp`, `total_discount`, `total_shipping`, `total_price`, `purchase_status`, `pur_date`, `payment_mode`, `chq_no`, `chq_date`, `bank_name`, `branch_name`) VALUES
(2, '15082011-102535-2', '20P46879S1049380U', 6, '826', '126.02', '35', '904.42', 'delivered', '15-08-2011 , 10:26:07', 'paypal', '123456', '2011-08-9 15:55:37', 'PNB', 'Khanyan'),
(2, '15082011-103240-2', '', 100, '16700', '3841', '12', '18883', 'undelivered', '15-08-2011 , 10:33:00', 'cheque', '11121', '2011-08-10 16:02:41', 'PNB', 'Khanyan'),
(9, '03092011-143943-9', '', 2, '480', '110.4', '12', '554.4', 'undelivered', '03-09-2011 , 14:39:58', 'cheque', '121212', '2011-09-19 14:39:44', 'fasfasf', 'afff'),
(2, '03092011-144042-2', '', 2, '480', '110.4', '12', '554.4', 'undelivered', '03-09-2011 , 14:40:52', 'cheque', 'ffdf', '2011-09-13 14:40:42', 'afdf', 'fafaf'),
(10, '03092011-144255-10', '', 4, '1028', '236.44', '12', '1173.64', 'delivered', '03-09-2011 , 14:43:05', 'cheque', '1412424', '2011-09-19 14:42:55', '3214124', '124124124'),
(11, '03092011-144410-11', '', 12, '2880', '662.4', '12', '3266.4', 'undelivered', '03-09-2011 , 14:44:19', 'cheque', 'fasfa', '2011-09-5 14:44:11', 'uhahf', 'fafafa'),
(2, 'P-665-20121101592400', '', 1, '10', '1.2', '205', '8.8', 'undelivered', '24-01-2012 , 12:01:09', '', '', '', '', ''),
(2, 'P-656-20121201212452', '88P70935UW0857629', 1, '10', '1.2', '205', '8.8', 'undelivered', '24-01-2012 , 12:24:29', '', '', '', '', ''),
(2, 'P-270-20121201342409', '30X11409919529427', 2, '20', '2.4', '205', '17.6', 'undelivered', '24-01-2012 , 12:35:37', '', '', '', '', ''),
(2, 'P-270-20121201342409', '', 0, '0', '0', '0', '0', 'undelivered', '24-01-2012 , 12:40:05', '', '', '', '', ''),
(2, 'P-488-20120001292554', '7XS75365G17780941', 1, '10', '1.2', '205', '8.8', 'undelivered', '25-01-2012 , 00:32:04', '', '', '', '', ''),
(2, 'P-187-20120101132518', '9FF40527M9055335S', 1, '10', '1.2', '205', '8.8', 'undelivered', '25-01-2012 , 01:14:27', '', '', '', '', ''),
(2, 'P-608-20120301402510', '5MD072638U5352335', 1, '10', '1.2', '205', '8.8', 'undelivered', '25-01-2012 , 03:41:16', '', '', '', '', ''),
(2, 'P-419-20120401002510', '56U599411W199963M', 1, '10', '1.2', '205', '8.8', 'undelivered', '25-01-2012 , 04:02:30', 'Paypal', '', '', '', ''),
(17, 'P-384-20120803490416', '8LB43551GM5322707', 2, '30', '5.5', '500', '24.5', 'undelivered', '04-03-2012 , 08:51:12', 'Paypal', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_billing`
--

CREATE TABLE IF NOT EXISTS `shipping_billing` (
  `id` int(11) NOT NULL,
  `purchase_id` varchar(100) NOT NULL,
  `ship_first_name` text NOT NULL,
  `ship_last_name` text NOT NULL,
  `ship_addr_1` text NOT NULL,
  `ship_city` text NOT NULL,
  `ship_pin` text NOT NULL,
  `ship_state` text NOT NULL,
  `ship_country` text NOT NULL,
  `ship_phone` varchar(30) NOT NULL,
  `bill_first_name` text NOT NULL,
  `bill_last_name` text NOT NULL,
  `bill_addr_1` text NOT NULL,
  `bill_city` text NOT NULL,
  `bill_pin` text NOT NULL,
  `bill_state` text NOT NULL,
  `bill_country` text NOT NULL,
  `bill_phone` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_billing`
--

INSERT INTO `shipping_billing` (`id`, `purchase_id`, `ship_first_name`, `ship_last_name`, `ship_addr_1`, `ship_city`, `ship_pin`, `ship_state`, `ship_country`, `ship_phone`, `bill_first_name`, `bill_last_name`, `bill_addr_1`, `bill_city`, `bill_pin`, `bill_state`, `bill_country`, `bill_phone`) VALUES
(2, '15082011-102535-2', 'B', 'R', 'a', 'K', '7', 'W', '', '20', '', '', '', '', '', '', '', ''),
(2, '15082011-103240-2', 'B', 'R', 'a', 'K', '7', 'W', '', '2', '', '', '', '', '', '', '', ''),
(4, '02092011-133906-4', 'ASHOKE', 'DAS', '79 DHIREN DHAR', 'KOLKATA', '700012', 'A', '', '2147483647', '', '', '', '', '', '', '', ''),
(2, '03092011-135733-2', '', 'R', 'a', 'K', '7', 'W', '', '2', '', '', '', '', '', '', '', ''),
(9, '03092011-143943-9', 'a', 'a', 'a', '1', '1', '1', '', '1', '', '', '', '', '', '', '', ''),
(2, '03092011-144042-2', 'B', 'R', 'a', 'K', '7', 'W', '', '2', '', '', '', '', '', '', '', ''),
(10, '03092011-144255-10', 'a', 'a', 'a', 'a', '1', 'a', '', '1', '', '', '', '', '', '', '', ''),
(11, '03092011-144410-11', 'a', 'a', 'a', '1', '1', '1', '', '0', '', '', '', '', '', '', '', ''),
(2, 'P-665-20121101592400', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-656-20121201212452', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-270-20121201342409', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-270-20121201342409', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-488-20120001292554', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-187-20120101132518', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-608-20120301402510', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(2, 'P-419-20120401002510', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', ''),
(17, 'P-384-20120803490416', 'Ashoke', 'Das', '1234aaa', 'aaa', '12345', 'zzz', 'Afghanistan', '', 'Ashoke', 'Das', '1234aaa', 'aaa', '12345', 'zzz', 'Afghanistan', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charge`
--

CREATE TABLE IF NOT EXISTS `shipping_charge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `first_500` decimal(10,2) NOT NULL,
  `next_500` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1003 ;

--
-- Dumping data for table `shipping_charge`
--

INSERT INTO `shipping_charge` (`id`, `country`, `first_500`, `next_500`) VALUES
(1, 'Other', '250.00', '250.00'),
(4, 'USA', '345.00', '345.00'),
(2, 'India', '205.00', '200.00'),
(3, 'Bangladesh', '250.00', '250.00');

-- --------------------------------------------------------

--
-- Table structure for table `size_price`
--

CREATE TABLE IF NOT EXISTS `size_price` (
  `size_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`size_price_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `size_price`
--

INSERT INTO `size_price` (`size_price_id`, `product_id`, `size`, `price`) VALUES
(22, 16, 'XL', 256),
(5, 3, 'XL', 252),
(21, 10, 'XL', 253),
(8, 4, 'XL', 254),
(9, 17, 'XL', 255),
(10, 14, 'XL', 256),
(11, 9, 'XL', 257),
(13, 18, 'XL', 258),
(14, 7, 'XL', 259),
(16, 5, 'XL', 260),
(32, 20, 'XL', 10),
(26, 21, 'XL', 10),
(33, 22, 'XL', 10),
(34, 23, 'XL', 20),
(35, 24, 'XL', 10),
(36, 25, 'XL', 10),
(37, 26, 'XL', 10),
(38, 27, 'XL', 10),
(39, 28, 'XL', 10),
(40, 29, 'XL', 10),
(41, 30, 'XL', 10),
(42, 31, 'XL', 10),
(43, 32, 'XL', 10),
(44, 33, 'XL', 10),
(45, 34, 'XL', 10),
(46, 35, 'XL', 10),
(47, 36, 'XL', 10),
(48, 37, 'XL', 10),
(49, 38, 'XL', 50),
(50, 39, 'XL', 25),
(51, 40, 'XL', 15),
(52, 41, 'XL', 20),
(53, 42, 'XL', 15),
(54, 43, 'XL', 45),
(55, 44, 'XL', 12),
(56, 45, 'XL', 10),
(57, 46, 'XL', 40),
(58, 47, 'XL', 50),
(65, 48, 'XL', 10),
(60, 49, 'XL', 10),
(61, 50, 'XL', 10),
(62, 51, 'XL', 10),
(63, 52, 'XL', 10),
(64, 53, 'XL', 20),
(66, 54, 'XL', 0),
(71, 1, 'XL', 251),
(72, 2, 'XL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(15) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `comming_soon` enum('Y','N') NOT NULL DEFAULT 'N',
  `sub_cat_image` text NOT NULL,
  `subcat_detail` text NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`, `comming_soon`, `sub_cat_image`, `subcat_detail`) VALUES
(12, 1, 'hats', 'Y', 'pic_pic_hartlinehatsbig1a.jpg', 'Snuggle into the unique look of Hartline Studio coverlets.  Blankets are made with 100% organic wool grown at Hartline Studio.  Natural dyes and handspun materials are used to enhance the quality of all blankets.  All styles are taken from concepts such as colonial coverlet patterns and styles, as well as unique patterns from a variety of traditional cultures.  All blankets allow you to create a custom statement in your home while enjoying the warmth of wool.'),
(14, 1, 'scarves & shawls', 'N', 'pic_pic_scarfpatternA-01a.jpg', 'gggggggggggggggggggggg'),
(11, 1, 'blankets', 'Y', 'pic_pic_blanketpattern01.jpg', 'Snuggle into the unique look of Hartline Studio coverlets.  Blankets are made with 100% organic wool grown at Hartline Studio.  Natural dyes and handspun materials are used to enhance the quality of all blankets.  All styles are taken from concepts such as colonial coverlet patterns and styles, as well as unique patterns from a variety of traditional cultures.  All blankets allow you to create a custom statement in your home while enjoying the warmth of wool.');

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE IF NOT EXISTS `tt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` int(11) NOT NULL DEFAULT '0',
  `scheme` varchar(50) NOT NULL DEFAULT '',
  `duration` varchar(30) NOT NULL DEFAULT '',
  `comission` decimal(10,2) NOT NULL DEFAULT '0.00',
  `DA` int(11) NOT NULL DEFAULT '0',
  `DL` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=408 ;

--
-- Dumping data for table `tt`
--

INSERT INTO `tt` (`id`, `rank`, `scheme`, `duration`, `comission`, `DA`, `DL`) VALUES
(1, 1, 'APB', '1', '2.00', 0, 0),
(2, 1, 'APB', '1.5', '3.00', 0, 0),
(3, 1, 'APB', '2', '4.00', 0, 0),
(4, 1, 'APB', '3', '6.00', 0, 0),
(5, 1, 'APB', '4', '8.00', 0, 0),
(6, 1, 'APB', '5', '10.00', 0, 0),
(18, 2, 'APB', '1', '1.00', 0, 0),
(19, 2, 'APB', '1.5', '1.00', 0, 0),
(20, 2, 'APB', '2', '1.00', 0, 0),
(21, 2, 'APB', '3', '1.00', 0, 0),
(22, 2, 'APB', '4', '1.00', 0, 0),
(23, 2, 'APB', '5', '1.00', 0, 0),
(33, 3, 'APB', '1', '1.00', 0, 0),
(34, 3, 'APB', '1.5', '1.00', 0, 0),
(35, 3, 'APB', '2', '1.00', 0, 0),
(36, 3, 'APB', '3', '1.00', 0, 0),
(37, 3, 'APB', '4', '1.00', 0, 0),
(38, 3, 'APB', '5', '1.00', 0, 0),
(48, 4, 'APB', '1', '1.00', 0, 0),
(49, 4, 'APB', '1.5', '1.00', 0, 0),
(50, 4, 'APB', '2', '1.00', 0, 0),
(51, 4, 'APB', '3', '1.00', 0, 0),
(52, 4, 'APB', '4', '1.00', 0, 0),
(53, 4, 'APB', '5', '1.00', 0, 0),
(63, 5, 'APB', '1', '1.00', 0, 0),
(64, 5, 'APB', '1.5', '1.00', 0, 0),
(65, 5, 'APB', '2', '1.00', 0, 0),
(66, 5, 'APB', '3', '1.00', 0, 0),
(67, 5, 'APB', '4', '1.00', 0, 0),
(68, 5, 'APB', '5', '1.00', 0, 0),
(78, 6, 'APB', '1', '1.00', 0, 0),
(79, 6, 'APB', '1.5', '1.00', 0, 0),
(80, 6, 'APB', '2', '1.00', 0, 0),
(81, 6, 'APB', '3', '1.00', 0, 0),
(82, 6, 'APB', '4', '1.00', 0, 0),
(83, 6, 'APB', '5', '1.00', 0, 0),
(93, 7, 'APB', '1', '1.00', 0, 0),
(94, 7, 'APB', '1.5', '1.00', 0, 0),
(95, 7, 'APB', '2', '1.00', 0, 0),
(96, 7, 'APB', '3', '1.00', 0, 0),
(97, 7, 'APB', '4', '1.00', 0, 0),
(98, 7, 'APB', '5', '1.00', 0, 0),
(108, 8, 'APB', '1', '1.00', 0, 0),
(109, 8, 'APB', '1.5', '1.00', 0, 0),
(110, 8, 'APB', '2', '1.00', 0, 0),
(111, 8, 'APB', '3', '1.00', 0, 0),
(112, 8, 'APB', '4', '1.00', 0, 0),
(113, 8, 'APB', '5', '1.00', 0, 0),
(123, 9, 'APB', '1', '1.00', 0, 0),
(124, 9, 'APB', '1.5', '1.00', 0, 0),
(125, 9, 'APB', '2', '1.00', 0, 0),
(126, 9, 'APB', '3', '1.00', 0, 0),
(127, 9, 'APB', '4', '1.00', 0, 0),
(128, 9, 'APB', '5', '1.00', 0, 0),
(138, 10, 'APB', '1', '1.00', 0, 0),
(139, 10, 'APB', '1.5', '1.00', 0, 0),
(140, 10, 'APB', '2', '1.00', 0, 0),
(141, 10, 'APB', '3', '1.00', 0, 0),
(142, 10, 'APB', '4', '1.00', 0, 0),
(143, 10, 'APB', '5', '1.00', 0, 0),
(153, 11, 'APB', '1', '1.00', 0, 0),
(154, 11, 'APB', '1.5', '1.00', 0, 0),
(155, 11, 'APB', '2', '1.00', 0, 0),
(156, 11, 'APB', '3', '1.00', 0, 0),
(157, 11, 'APB', '4', '1.00', 0, 0),
(158, 11, 'APB', '5', '1.00', 0, 0),
(168, 12, 'APB', '1', '1.00', 0, 0),
(169, 12, 'APB', '1.5', '1.00', 0, 0),
(170, 12, 'APB', '2', '1.00', 0, 0),
(171, 12, 'APB', '3', '1.00', 0, 0),
(172, 12, 'APB', '4', '1.00', 0, 0),
(173, 12, 'APB', '5', '1.00', 0, 0),
(183, 13, 'APB', '1', '1.00', 0, 0),
(184, 13, 'APB', '1.5', '1.00', 0, 0),
(185, 13, 'APB', '2', '1.00', 0, 0),
(186, 13, 'APB', '3', '1.00', 0, 0),
(187, 13, 'APB', '4', '1.00', 0, 0),
(188, 13, 'APB', '5', '1.00', 0, 0),
(198, 14, 'APB', '1', '1.00', 0, 0),
(199, 14, 'APB', '1.5', '1.00', 0, 0),
(200, 14, 'APB', '2', '1.00', 0, 0),
(201, 14, 'APB', '3', '1.00', 0, 0),
(202, 14, 'APB', '4', '1.00', 0, 0),
(203, 14, 'APB', '5', '1.00', 0, 0),
(213, 15, 'APB', '1', '1.00', 0, 0),
(214, 15, 'APB', '1.5', '1.00', 0, 0),
(215, 15, 'APB', '2', '1.00', 0, 0),
(216, 15, 'APB', '3', '1.00', 0, 0),
(217, 15, 'APB', '4', '1.00', 0, 0),
(218, 15, 'APB', '5', '1.00', 0, 0),
(228, 16, 'APB', '1', '1.00', 0, 0),
(229, 16, 'APB', '1.5', '1.00', 0, 0),
(230, 16, 'APB', '2', '1.00', 0, 0),
(231, 16, 'APB', '3', '1.00', 0, 0),
(232, 16, 'APB', '4', '1.00', 0, 0),
(233, 16, 'APB', '5', '1.00', 0, 0),
(243, 17, 'APB', '1', '1.00', 0, 0),
(244, 17, 'APB', '1.5', '1.00', 0, 0),
(245, 17, 'APB', '2', '1.00', 0, 0),
(246, 17, 'APB', '3', '1.00', 0, 0),
(247, 17, 'APB', '4', '1.00', 0, 0),
(248, 17, 'APB', '5', '1.00', 0, 0),
(258, 18, 'APB', '1', '1.00', 0, 0),
(259, 18, 'APB', '1.5', '1.00', 0, 0),
(260, 18, 'APB', '2', '1.00', 0, 0),
(261, 18, 'APB', '3', '1.00', 0, 0),
(262, 18, 'APB', '4', '1.00', 0, 0),
(263, 18, 'APB', '5', '2.00', 0, 0),
(273, 19, 'APB', '1', '1.00', 0, 0),
(274, 19, 'APB', '1.5', '1.00', 0, 0),
(275, 19, 'APB', '2', '1.00', 0, 0),
(276, 19, 'APB', '3', '1.00', 0, 0),
(277, 19, 'APB', '4', '1.00', 0, 0),
(278, 19, 'APB', '5', '2.00', 0, 0),
(288, 20, 'APB', '1', '1.00', 0, 0),
(289, 20, 'APB', '1.5', '1.00', 0, 0),
(290, 20, 'APB', '2', '1.00', 0, 0),
(291, 20, 'APB', '3', '1.00', 0, 0),
(292, 20, 'APB', '4', '1.00', 0, 0),
(293, 20, 'APB', '5', '1.00', 0, 0),
(303, 21, 'APB', '1', '1.00', 0, 0),
(304, 21, 'APB', '1.5', '1.00', 0, 0),
(305, 21, 'APB', '2', '1.00', 0, 0),
(306, 21, 'APB', '3', '1.00', 0, 0),
(307, 21, 'APB', '4', '1.00', 0, 0),
(308, 21, 'APB', '5', '1.00', 0, 0),
(318, 22, 'APB', '1', '1.00', 0, 0),
(319, 22, 'APB', '1.5', '1.00', 0, 0),
(320, 22, 'APB', '2', '1.00', 0, 0),
(321, 22, 'APB', '3', '1.00', 0, 0),
(322, 22, 'APB', '4', '1.00', 0, 0),
(323, 22, 'APB', '5', '1.00', 0, 0),
(333, 23, 'APB', '1', '1.00', 0, 0),
(334, 23, 'APB', '1.5', '1.00', 0, 0),
(335, 23, 'APB', '2', '1.00', 0, 0),
(336, 23, 'APB', '3', '1.00', 0, 0),
(337, 23, 'APB', '4', '1.00', 0, 0),
(338, 23, 'APB', '5', '1.00', 0, 0),
(348, 24, 'APB', '1', '1.00', 0, 0),
(349, 24, 'APB', '1.5', '1.00', 0, 0),
(350, 24, 'APB', '2', '1.00', 0, 0),
(351, 24, 'APB', '3', '1.00', 0, 0),
(352, 24, 'APB', '4', '1.00', 0, 0),
(353, 24, 'APB', '5', '1.00', 0, 0),
(363, 25, 'APB', '1', '1.00', 0, 0),
(364, 25, 'APB', '1.5', '1.00', 0, 0),
(365, 25, 'APB', '2', '1.00', 0, 0),
(366, 25, 'APB', '3', '1.00', 0, 0),
(367, 25, 'APB', '4', '1.00', 0, 0),
(368, 25, 'APB', '5', '1.00', 0, 0),
(378, 26, 'APB', '1', '1.00', 0, 0),
(379, 26, 'APB', '1.5', '1.00', 0, 0),
(380, 26, 'APB', '2', '1.00', 0, 0),
(381, 26, 'APB', '3', '1.00', 0, 0),
(382, 26, 'APB', '4', '1.00', 0, 0),
(383, 26, 'APB', '5', '2.00', 0, 0),
(393, 27, 'APB', '1', '1.00', 0, 0),
(394, 27, 'APB', '1.5', '1.00', 0, 0),
(395, 27, 'APB', '2', '1.00', 0, 0),
(396, 27, 'APB', '3', '1.00', 0, 0),
(397, 27, 'APB', '4', '1.00', 0, 0),
(398, 27, 'APB', '5', '2.00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `addr_1` text NOT NULL,
  `city` text NOT NULL,
  `pin` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `user_status` varchar(30) NOT NULL,
  `DOJ` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `addr_1`, `city`, `pin`, `state`, `country`, `phone`, `user_status`, `DOJ`) VALUES
(2, 'kulu1987@gmail.com', '123456', 'Sushovan', 'Roy', 'bbb', 'Khanyan', '712147', 'West Bengal', 'India', '9734707007', 'register', '0000-00-00'),
(10, 'asd@gmail.com', '123456', 'a', 'a', 'a', 'a', '1', 'a', '', '1', 'register', '0000-00-00'),
(15, 'kulu1987@ymail.com', '123456', 'Sushovan', 'Roy', '', '', '', '', '', '', 'register', '2011-12-30'),
(16, 'brookeh9@ontargetva.com', '', 'Brooke', 'Hart', '', '', '', '', '', '', 'register', '2012-03-04'),
(17, 'to_ashoke@yahoo.com', '123456', 'Ashoke', 'Das', '', '', '', '', '', '', 'register', '2012-03-04'),
(18, 'abc@abc.com', 'xyz', '', '', '', '', '', '', '', '', 'register', '2012-03-15'),
(19, 'x@y.com', 'abc', 'X', 'Y', '', '', '', '', '', '', 'register', '2012-03-15'),
(20, 'to1@yahoo.com', '12345678', 'ashoke das', 'das', '', '', '', '', '', '', 'register', '2012-03-15'),
(21, 'ashokedas@rediffmail.com', '12345678', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-03-15'),
(22, 'arnab.banerjee@gmail.com', '12345678', 'arnab', 'banerjee', '', '', '', '', '', '', 'register', '2012-03-15'),
(23, 'das@gmail.com', '123456', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-05-27'),
(24, 'das@gmail.com', '123456', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-05-27'),
(25, 'das1@gmail.com', '123456', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-05-27'),
(26, 'das2@gmail.com', '123456', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-05-27'),
(27, 'das3@gmail.com', '123456', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-05-27'),
(28, 'das4@gmail.com', '123456', 'ASHOKE', 'DAS', '', '', '', '', '', '', 'register', '2012-05-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
