-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` varchar(20) NOT NULL,
  `month` text NOT NULL,
  `attend` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `month`, `attend`) VALUES
('simran01', 'jan', 99),
('simran01', 'feb', 80),
('simran01', 'mar', 90),
('simran01', 'apr', 87),
('simran01', 'may', 75),
('simran01', 'june', 85),
('simran01', 'july', 89),
('simran01', 'aug', 90),
('simran01', 'sep', 91),
('simran01', 'oct', 92),
('simran01', 'nov', 95),
('simran01', 'dec', 98),
('rahul02', 'jan', 100),
('rahul02', 'feb', 90),
('rahul02', 'mar', 80),
('rahul02', 'apr', 87),
('rahul02', 'may', 95),
('rahul02', 'june', 85),
('rahul02', 'july', 89),
('rahul02', 'aug', 90),
('rahul02', 'sep', 91),
('rahul02', 'oct', 92),
('rahul02', 'nov', 96),
('rahul02', 'dec', 99);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` varchar(20) NOT NULL,
  `book` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book`) VALUES
('simran01', 'Play with Numbers!!'),
('rahul02', 'EVS for all');

-- --------------------------------------------------------

--
-- Table structure for table `due`
--

CREATE TABLE `due` (
  `id` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `due`
--

INSERT INTO `due` (`id`, `amount`) VALUES
('simran01', 10),
('rahul02', 50),
('raj03', 5),
('prem04', 42),
('nisha05', 35),
('rohan06', 12),
('puja07', 18),
('kriti08', 86),
('john09', 95),
('jenny10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`) VALUES
('simran01', 'simran'),
('rahul02', 'rahul'),
('raj03', 'raj'),
('prem04', 'prem'),
('nisha05', 'nisha'),
('rohan06', 'rohan'),
('puja07', 'puja'),
('kriti08', 'kriti'),
('john09', 'john'),
('jenny10', 'jenny');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` varchar(20) NOT NULL,
  `sub` text NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `sub`, `book`) VALUES
('rahul02', 'Maths', 'Addition and subtraction'),
('rahul02', 'Science', 'Amazing facts'),
('rahul02', 'English', 'Use of Articles'),
('rahul02', 'Social Studies', 'Geography of India'),
('rahul02', 'Computer', 'Computer Software'),
('simran01', 'Maths', 'Introduction To Numbers'),
('simran01', 'Science', 'What is Science?'),
('simran01', 'English', 'Basic Grammar'),
('simran01', 'Social Studies', 'History of India'),
('simran01', 'Computer', 'Computer Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `one`
--

CREATE TABLE `one` (
  `sub` text NOT NULL,
  `material` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `one`
--

INSERT INTO `one` (`sub`, `material`) VALUES
('Maths', 'Introduction to Numbers'),
('Science', 'What is Science?'),
('English', 'Basic Grammer'),
('Social Studies', 'History of India'),
('Computer', 'Computer Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `class` varchar(5) NOT NULL,
  `roll` int(5) NOT NULL,
  `section` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `class`, `roll`, `section`) VALUES
('simran01', 'Simran Malhotra', 'I', 1, 'A'),
('rahul02', 'Rahul Sharma', 'II', 2, 'A'),
('raj03', 'Raj Gupta', 'III', 3, 'C'),
('prem04', 'Prem Chopra', 'IV', 4, 'D'),
('nisha05', 'Nisha Singh', 'V', 5, 'E'),
('rohan06', 'Rohan Roy', 'VI', 6, 'A'),
('puja07', 'Puja Kumari', 'VII', 7, 'B'),
('simran01', 'Simran Malhotra', 'I', 1, 'A'),
('rahul02', 'Rahul Sharma', 'II', 2, 'A'),
('raj03', 'Raj Gupta', 'III', 3, 'C'),
('prem04', 'Prem Chopra', 'IV', 4, 'D'),
('nisha05', 'Nisha Singh', 'V', 5, 'E'),
('rohan06', 'Rohan Roy', 'VI', 6, 'A'),
('puja07', 'Puja Kumari', 'VII', 7, 'B'),
('kriti08', 'Kriti Agarwal', 'VIII', 8, 'C'),
('john09', 'John Watson', 'IX', 9, 'D'),
('jenny10', 'Jenny Xavier', 'X', 10, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` varchar(20) NOT NULL,
  `exam` text NOT NULL,
  `marks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `exam`, `marks`) VALUES
('rahul02', 'Class test', 10),
('rahul02', 'CAT', 39),
('rahul02', 'FAT', 86),
('simran01', 'Class test', 14),
('simran01', 'CAT', 45),
('simran01', 'FAT', 91);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` varchar(20) NOT NULL,
  `sub` text NOT NULL,
  `dates` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `sub`, `dates`, `type`) VALUES
('simran01', 'Maths', '4/5/19', 'Class test'),
('simran01', 'English', '5/5/19', 'Class test'),
('simran01', 'Social Studies', '7/5/19', 'Class test'),
('simran01', 'Computer', '8/5/19', 'Class test'),
('simran01', 'Maths', '2/9/19', 'CAT'),
('simran01', 'English', '5/9/19', 'CAT'),
('simran01', 'Social studies', '8/9/19', 'CAT'),
('simran01', 'Computer', '10/9/19', 'CAT'),
('simran01', 'Maths', '12/2/19', 'FAT'),
('simran01', 'English', '14/2/19', 'FAT'),
('simran01', 'Social studies', '19/2/19', 'FAT'),
('simran01', 'Computer', '21/2/19', 'FAT'),
('rahul02', 'Maths', '4/5/19', 'Class test'),
('rahul02', 'Social Studies', '7/5/19', 'Class test'),
('rahul02', 'Computer', '8/5/19', 'Class test'),
('rahul02', 'Maths', '2/9/19', 'CAT'),
('rahul02', 'Science', '4/9/19', 'CAT'),
('rahul02', 'English', '5/9/19', 'CAT'),
('rahul02', 'Social studies', '8/9/19', 'CAT'),
('rahul02', 'Computer', '10/9/19', 'CAT'),
('rahul02', 'Maths', '12/2/19', 'FAT'),
('rahul02', 'English', '14/2/19', 'FAT'),
('rahul02', 'Science', '16/2/19', 'FAT'),
('rahul02', 'Social studies', '19/2/19', 'FAT'),
('rahul02', 'Computer', '21/2/19', 'FAT'),
('simran01', 'Science', '6/5/19', 'Class test'),
('simran01', 'Science', '2/9/19', 'CAT'),
('simran01', 'Science', '16/2/19', 'FAT'),
('rahul02', 'English', '5/5/19', 'Class test'),
('rahul02', 'Science', '6/5/19', 'Class test');

-- --------------------------------------------------------

--
-- Table structure for table `two`
--

CREATE TABLE `two` (
  `subj` text NOT NULL,
  `materials` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `two`
--

INSERT INTO `two` (`subj`, `materials`) VALUES
('Maths', 'Addition and subtraction'),
('Science', 'Amazing facts'),
('English', 'Use of Articles'),
('Social Studies', 'Geography of India'),
('Computer', 'Computer Software');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
