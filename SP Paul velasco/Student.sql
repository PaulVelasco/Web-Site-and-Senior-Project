-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2013 at 02:53 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `SPDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE `STUDENT` (
  `S_ID` varchar(10) NOT NULL,
  `S_NAME` varchar(22) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`S_ID`, `S_NAME`) VALUES
('N020', 'John Doe'),
('N021', 'Mike Vela'),
('N022', 'Rob Zacks'),
('N023', 'Ryan Fey'),
('n02345', 'oscar velasco'),
('N024', 'Joe Laverde'),
('N025', 'Bill Olm'),
('N026', 'Max Smith'),
('N027', 'Freddy Velez'),
('N028', 'Jessica Yepez'),
('N029', 'Jane Grey'),
('N090', 'Loco Matos'),
('N1987', 'Gerson Lobos');
