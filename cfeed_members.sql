-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 50.63.105.40
-- Generation Time: Jun 25, 2014 at 12:22 PM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `chakedadata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfeed_members`
--

CREATE TABLE `cfeed_members` (
  `id` tinyint(4) NOT NULL auto_increment,
  `website` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `cfeed_members`
--

INSERT INTO `cfeed_members` VALUES(2, 'iimgurcom', 'pass', '0000-00-00');
INSERT INTO `cfeed_members` VALUES(3, 'googlecom', 'password123', '0000-00-00');
INSERT INTO `cfeed_members` VALUES(67, 'chakedacom', 'Oh yes. I do like the Teriyaki Boyz.', '0000-00-00');
INSERT INTO `cfeed_members` VALUES(58, 'insurancecomparisonsblogspotcom', 'PASSword', '0000-00-00');
