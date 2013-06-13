-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2013 at 02:56 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `SPDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_REC`
--

CREATE TABLE `STUDENT_REC` (
  `ID` int(6) NOT NULL AUTO_INCREMENT,
  `S_ID` varchar(12) NOT NULL,
  `C_ID` varchar(54) NOT NULL,
  `SEMESTER` varchar(12) NOT NULL,
  `GRADE` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`,`S_ID`,`C_ID`),
  KEY `S_ID` (`S_ID`),
  KEY `C_ID` (`C_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `STUDENT_REC`
--

INSERT INTO `STUDENT_REC` (`ID`, `S_ID`, `C_ID`, `SEMESTER`, `GRADE`) VALUES
(1, 'N020', 'CPS210', 'Fall 2008', 'B'),
(2, 'N020', 'CPS310', 'Spring 2009', 'B-'),
(3, 'N020', 'CPS330', 'Fall 2009', 'B'),
(4, 'N020', 'CPS315', 'Spring 2010', 'C-'),
(5, 'N020', 'CPS352', 'Fall 2009', 'B-'),
(6, 'N020', 'CPS340', 'Spring 2010', 'B+'),
(7, 'N020', 'CPS493', 'Spring 2010', 'B+'),
(8, 'N020', 'MAT251', 'Fall 2009', 'B+'),
(9, 'N020', 'MAT320', 'Fall 2009', 'A'),
(10, 'N020', 'BIO201', 'Fall 2008', 'C+'),
(11, 'N020', 'BIO202', 'Fall 2009', 'A'),
(12, 'N020', 'EGC230', 'Fall 2008', 'C'),
(13, 'N020', 'EGC208', 'Fall 2008', 'A-'),
(14, 'N021', 'CPS210', 'Fall 2009', 'C'),
(15, 'N021', 'CPS310', 'Spring 2010', 'B-'),
(16, 'N021', 'EGC230', 'Fall 2009', 'B-'),
(17, 'N021', 'EGC208', 'Fall 2009', 'A-'),
(18, 'N021', 'PHY201', 'Fall 2010', 'A'),
(19, 'N021', 'MAT251', 'Fall 2009', 'B'),
(20, 'N021', 'MAT252', 'Spring 2010', 'C'),
(21, 'N021', 'PHY202', 'Spring 2011', 'B+'),
(22, 'N022', 'CPS210', 'Fall 2010', 'B'),
(23, 'N022', 'MAT251', 'Fall 2010', 'C'),
(24, 'N022', 'MAT252', 'Spring 2011', 'B'),
(25, 'N022', 'CHE201', 'Fall 2010', 'B-'),
(26, 'N022', 'CHE202', 'Spring 2011', 'B'),
(27, 'N022', 'EGC230', 'Fall 2010', 'B'),
(28, 'N022', 'EGC208', 'Spring 2011', 'B'),
(29, 'N023', 'EGC208', 'Fall 2008', 'C+'),
(30, 'N023', 'EGC230', 'Fall 2008', 'B-'),
(31, 'N023', 'BIO201', 'Spring 2008', 'B-'),
(32, 'N023', 'MAT251', 'Spring 2008', 'A'),
(33, 'N023', 'MAT320', 'Spring 2009', 'C'),
(34, 'N023', 'CPS352', 'Fall 2011', 'B'),
(35, 'N023', 'CPS315', 'Spring 2010', 'C+'),
(36, 'N023', 'CPS330', 'Spring2010', 'B'),
(37, 'N023', 'CPS210', 'Spring 2008', 'A'),
(38, 'N023', 'CPS310', 'Fall 2009', 'B'),
(39, 'N024', 'CPS210', 'Fall 2008', 'B'),
(40, 'N024', 'CPS310', 'Fall 2009', 'C+'),
(41, 'N024', 'MAT251', 'Fall 2010', 'A'),
(42, 'N024', 'PHY201', 'Spring 2010', 'B-'),
(43, 'N024', 'PHY202', 'Fall 2010', 'C+'),
(44, 'N024', 'EGC230', 'Fall 2010', 'A'),
(45, 'N024', 'EGC208', 'Fall 2010', 'B'),
(46, 'N024', 'CPS330', 'Spring 2010', 'B'),
(47, 'N024', 'CPS340', 'Fall 2010', 'B+'),
(48, 'N024', 'CPS425', 'Fall 2009', 'B'),
(49, 'N024', 'CPS315', 'Spring 2009', 'B-'),
(50, 'N024', 'CPS352', 'Fal 2011', 'B'),
(51, 'N024', 'CPS353', 'Spring 2011', 'B+'),
(52, 'N024', 'MAT320', 'Fall 2010', 'A'),
(53, 'N024', 'CPS440', 'Spring', 'B'),
(54, 'N025', 'CPS210', 'Spring 2009', 'B'),
(55, 'N025', 'CPS310', 'Fall 2011', 'C+'),
(56, 'N025', 'CPS330', 'Spring 2011', 'A'),
(57, 'N025', 'CPS315', 'Fall 2012', 'B-'),
(58, 'N025', 'CPS352', 'Fall 2013', 'C'),
(59, 'N025', 'CPS340', 'Spring 2012', 'B'),
(60, 'N025', 'MAT320', 'Spring 2011', 'B+'),
(61, 'N025', 'CPS470', 'Spring 2012', 'A'),
(62, 'N025', 'MAT251', 'Spring 2010', 'B+'),
(63, 'N025', 'PHY201', 'Fall 2011', 'C+'),
(64, 'N025', 'EGC230', 'Spring 2012', 'B'),
(65, 'N025', 'EGC208', 'Spring 2012', 'C'),
(66, 'N026', 'CPS210', 'Fall 2008', 'A'),
(67, 'N026', 'CPS310', 'Spring 2009', 'B'),
(68, 'N026', 'CPS330', 'Fall 2010', 'A-'),
(69, 'N026', 'CPS315', 'Fall 2009', 'B'),
(70, 'N026', 'CPS352', 'Spring 2011', 'C+'),
(71, 'N026', 'MAT320', 'Fall 2009', 'B+'),
(72, 'N026', 'CPS415', 'Fall 2010', 'C+'),
(73, 'N026', 'CPS342', 'FaLL 2010', 'B+'),
(74, 'N026', 'MAT251', 'Spring 2010', 'A'),
(75, 'N026', 'BIO201', 'Fall 2008', 'A-'),
(76, 'N027', 'CPS210', 'Spring 2006', 'B'),
(77, 'N027', 'CPS310', 'Fall 2007', 'A'),
(78, 'N027', 'CPS330', 'Fall 2008', 'C'),
(79, 'N027', 'CPS340', 'Spring 2010', 'B+'),
(80, 'N027', 'CPS315', 'Spring 2008', 'A'),
(81, 'N027', 'CPS425', 'Spring 2009', 'C'),
(82, 'N027', 'CPS352', 'Fall 2008', 'A-'),
(83, 'N027', 'CPS353', 'Fall 2009', 'B'),
(84, 'N027', 'MAT320', 'Spring 2008', 'B'),
(85, 'N027', 'CPS415', 'Fall 2010', 'C+'),
(86, 'N027', 'CPS493', 'Fall 2009', 'B+'),
(87, 'N027', 'CPS450', 'Fall 2010', 'A'),
(88, 'N027', 'MAT251', 'Spring 2006', 'A'),
(89, 'N027', 'MAT252', 'Spring 2007', 'B'),
(90, 'N027', 'CHE201', 'Fall 2007', 'B-'),
(91, 'N027', 'CHE202', 'Fall 2008', 'C+'),
(92, 'N028', 'CPS310', 'Fall 2008', 'B+'),
(93, 'N028', 'CPS315', 'Fall 2009', 'A'),
(94, 'N028', 'CPS352', 'Fall 2010', 'B'),
(95, 'N028', 'CPS340', 'Fall 2009', 'B+'),
(96, 'N028', 'CPS353', 'Fall 2011', 'A-'),
(97, 'N028', 'MAT320', 'Fall 2009', 'A'),
(98, 'N028', 'BIO201', 'Fall 2008', 'C-'),
(99, 'N028', 'MAT252', 'Fall 2007', 'B'),
(100, 'N028', 'CPS210', 'Spring 2007', 'B'),
(101, 'N028', 'CPS330', 'Spring 2008', 'C'),
(102, 'N028', 'CPS425', 'Spring 2010', 'B'),
(103, 'N028', 'CPS415', 'Spring 2009', 'B'),
(104, 'N028', 'MAT251', 'Spring 2007', 'A'),
(105, 'N028', 'EGC230', 'Spring 2008', 'A-'),
(106, 'N028', 'EGC208', 'Spring 2008', 'B'),
(107, 'N028', 'CPS492', 'Fall 2009', 'B'),
(108, 'N029', 'CPS210', 'Spring 2010', 'A'),
(109, 'N029', 'CPS310', 'Fall 2010', 'B'),
(110, 'N029', 'CPS330', 'Spring 2011', 'C'),
(111, 'N029', 'CPS315', 'Fall 2012', 'B'),
(112, 'N029', 'CPS352', 'Fall 2010', 'B+'),
(113, 'N029', 'MAT320', 'Spring 2010', 'A-'),
(114, 'N029', 'CPS340', 'Fall 2011', 'A'),
(115, 'N029', 'CPS425', 'Spring 2013', 'C'),
(116, 'N029', 'CPS353', 'Fall 2011', 'C+'),
(117, 'N029', 'CPS415', 'Spring 2012', 'B'),
(118, 'N029', 'MAT251', 'Spring 2010', 'A-'),
(119, 'N1987', 'CPS210', 'Fall 2008', 'A'),
(120, 'N1987', 'CPS310', 'Fall 2009', 'A'),
(121, 'N1987', 'BIO201', 'Spring 2009', 'B'),
(122, 'N1987', 'BIO202', 'Spring 2001', 'B'),
(130, 'N1987', 'CPS415', 'Fall 2013', 'I'),
(131, 'N1987', 'CPS352', 'Fall 2013', 'I'),
(132, 'N1987', 'CPS342', 'Fall 2013', 'I'),
(133, 'N1987', 'CPS315', 'spring 2013', 'B-'),
(134, 'N1987', 'CPS340', 'Fall 2013', 'I');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `STUDENT_REC`
--
ALTER TABLE `STUDENT_REC`
  ADD CONSTRAINT `STUDENT_REC_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `STUDENT` (`S_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `STUDENT_REC_ibfk_2` FOREIGN KEY (`C_ID`) REFERENCES `COURSE` (`C_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
