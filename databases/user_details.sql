-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2022 at 12:20 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `main_balance` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `trial_balance` varchar(255) NOT NULL,
  `verification` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

COMMIT;
