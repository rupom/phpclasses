-- phpMyAdmin SQL Dump
-- version 2.6.2-pl1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 05, 2006 at 02:19 AM
-- Server version: 4.1.12
-- PHP Version: 5.0.4
-- 
-- Database: `test`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `book`
-- 

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL auto_increment,
  `title` varchar(255) collate latin1_general_ci NOT NULL default '',
  `author` varchar(255) collate latin1_general_ci NOT NULL default '',
  `publisher` varchar(255) collate latin1_general_ci NOT NULL default '',
  `reader` varchar(20) collate latin1_general_ci NOT NULL default '',
  PRIMARY KEY  (`book_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `book`
-- 

INSERT INTO `book` (`book_id`, `title`, `author`, `publisher`, `reader`) VALUES (1, 'Beginning PHP 5', 'Dave W. Mercer, et al', 'Wrox', 'MA Razzaque Rupom');
INSERT INTO `book` (`book_id`, `title`, `author`, `publisher`, `reader`) VALUES (2, 'C++', 'Herbert Schildt', 'McGRAWHILL', 'Rupom');
INSERT INTO `book` (`book_id`, `title`, `author`, `publisher`, `reader`) VALUES (3, 'Professional PHP5', 'Thompson, et al', 'Wrox', 'phpResource');
INSERT INTO `book` (`book_id`, `title`, `author`, `publisher`, `reader`) VALUES (4, 'Computer Networks', 'Tanenbum', 'prentice-Hall', 'thephpres.org');
INSERT INTO `book` (`book_id`, `title`, `author`, `publisher`, `reader`) VALUES (5, 'Beginning JavaScript', 'Paul Wilton', 'Wrox', 'rupom.info');
