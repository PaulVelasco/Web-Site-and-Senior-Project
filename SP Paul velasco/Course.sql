-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2013 at 02:55 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `SPDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `COURSE`
--

CREATE TABLE `COURSE` (
  `C_ID` varchar(10) NOT NULL,
  `C_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COURSE`
--

INSERT INTO `COURSE` (`C_ID`, `C_NAME`) VALUES
('BIO201', 'General Biology I and Lab'),
('BIO202', 'General Biology II and Lab'),
('CHE201', 'General Chemistry I and Lab'),
('CHE202', 'General Chemistry II and Lab'),
('CPS210', 'CSI'),
('CPS310', 'CSII'),
('CPS315', 'CSIII'),
('CPS330', 'Assembly Language and Computer Architecture'),
('CPS340', 'Operating Systems'),
('CPS342', 'Embedded Linux'),
('CPS352', 'Object Oriented Programming'),
('CPS353', 'Software Engeneering'),
('CPS415', 'Discreet Mathematics with Continuous Algoritms'),
('CPS425', 'Language Processing'),
('CPS440', 'Database Principals'),
('CPS450', 'Senior Project'),
('CPS470', 'Computer Communication Networks'),
('CPS492', 'AI Robotics'),
('CPS493', 'Web Programming'),
('EGC208', 'Digital Logic Lab'),
('EGC230', 'Digital Logic Design'),
('MAT251', 'Calculus I'),
('MAT252', 'Calculus II'),
('MAT320', 'Discreet Mathematics for Computing'),
('PHY201', 'General Physics I and Lab'),
('PHY202', 'General Physics II and Lab');
