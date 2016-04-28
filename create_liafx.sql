-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2016 at 09:43 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `liafx`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;



DROP TABLE IF EXISTS `favs`;
CREATE TABLE IF NOT EXISTS `favs` (
  `user_id` int(5) NOT NULL,
  `favorite_genre` varchar(25) NOT NULL,
  `favorite_language` varchar(35) NOT NULL,
  `all_time_favorite` varchar(35) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;



DROP TABLE IF EXISTS `recently_watched`;
CREATE TABLE IF NOT EXISTS `recently_watched` (
  `user_id` int(5) NOT NULL,
  `movie` varchar(25) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


DROP TABLE IF EXISTS `bookmarked`;
CREATE TABLE IF NOT EXISTS `bookmarked` (
  `user_id` int(5) NOT NULL,
  `bookmarked1` varchar(25),
  `bookmarked2` varchar(25),
  `bookmarked3` varchar(25),
  `bookmarked4` varchar(25),
  FOREIGN KEY (user_id) REFERENCES users(user_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `website_quality` varchar(100),
  `helpfulness` varchar(100),
  `would_recommend` varchar(100),
  
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 







