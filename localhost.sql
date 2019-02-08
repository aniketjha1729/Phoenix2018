-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `phoenix` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phoenix`;

CREATE TABLE `admins` (
  `id` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `salt`, `status`) VALUES
(1,	'anubhav',	'anubhav.ssd@gmail.com',	'0bda6a0a6caff28876c4a0892a14a3a3373f157aa8f4cff5601c7912db606652a27299139ba15cad0a54b0a90fa495dd5d3875c0b4334dd4b723b32758f641a8',	'6aa72d5d94fcd57247600ccb8b4335b31f0eadf77ca4210621c1c2d91e6ad2c637e4cfce2692d0abbdea685b6f0c9d2f2dd58a2b4b0ae84584e16a13c2fcf5ee',	NULL);

CREATE TABLE `students` (
  `id` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-03-04 15:51:20
