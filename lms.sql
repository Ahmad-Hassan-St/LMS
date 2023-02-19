-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 11:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `CTitle` varchar(255) DEFAULT NULL,
  `Credits` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `CTitle`, `Credits`) VALUES
(2072, 'Intro To Programming', '3'),
(3073, 'Intro To Computing', '3'),
(4034, 'Data Structure', '3'),
(4073, 'OOP', '3');

-- --------------------------------------------------------

--
-- Table structure for table `course_offering`
--

CREATE TABLE `course_offering` (
  `ID` int(11) NOT NULL,
  `StudentID` varchar(50) DEFAULT NULL,
  `TeacherID` varchar(50) DEFAULT NULL,
  `CourseID` varchar(50) DEFAULT NULL,
  `Section` char(2) DEFAULT NULL,
  `Semester` char(2) DEFAULT NULL,
  `sessional` varchar(50) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `final` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_offering`
--

INSERT INTO `course_offering` (`ID`, `StudentID`, `TeacherID`, `CourseID`, `Section`, `Semester`, `sessional`, `mid`, `final`) VALUES
(2, '1', '21', '3073', 'A', '1', '20', '30', '50'),
(3, '2', '204', '3073', 'A', '1', '30', '30', '30'),
(4, '1', '23', '3073', 'A', '1', '25', '', ''),
(6, '2', '23', '4034', 'A', '4', '', '', ''),
(7, '1', '22', '4034', 'A', '4', '25', '25', ''),
(8, '2', '24', '4034', 'A', '4', '', '25', ''),
(9, '1', '204', '4073', 'A', '3', '30', '30', '30'),
(10, '2', '22', '4073', 'A', '3', '', '', ''),
(11, '1', '24', '4073', 'A', '3', '', '', ''),
(12, '2', '23', '2072', 'A', '2', '', '', ''),
(13, '1', '22', '2072', 'A', '2', '25', '', ''),
(14, '2', '24', '2072', 'A', '2', '', '', '37'),
(15, '1', '21', '2072', 'A', '2', '20', '30', '50'),
(16, '2', '25', '4073', 'A', '3', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(50) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Program` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `cnic` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `picture`, `Name`, `Program`, `email`, `password`, `mobile`, `address`, `gender`, `father`, `cnic`, `dob`, `batch`, `degree`) VALUES
(1, '', 'Ahmad Hassan', NULL, 'ahmadhassanst@gmail.com', '123', '03235025632', 'Nishatabad', NULL, NULL, '3540349335029', '2023-02-23', '2020-24', 'BSSE'),
(2, '', 'Huzaifa Javed', NULL, 'huz@gmail.com', '123', '03235025632', 'nemat colony', NULL, NULL, '3310013', '1990-12-31', '2020-24', 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `cnic` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `father` varchar(50) DEFAULT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `bps` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `picture`, `Name`, `Department`, `Title`, `cnic`, `password`, `father`, `dob`, `gender`, `bps`, `mobile`, `address`, `salary`, `email`) VALUES
(21, 'Waqar.jpg', 'Waqar Ahmed', 'DCS', 'Associate Professor', '33105', '1234', '', '', '', '18', '', '', '', 'waqar@ntu.edu.pk'),
(22, 'Sahi.jpg', 'Shehbaz Sahi', 'DCS', 'Lecturer', '33104', '1234', '', '', '', '17', '', '', '', 'shahbazsahi@ntu.edu.pk'),
(23, '', 'Nadeem Faisal', 'DCS', 'Assistant Professor', '33101', '1234', '', '5558998', '', '18', '12', 'asd', '80000', 'nadeem.faisal@ntu.edu.pk'),
(24, 'Shahid.jpg', 'Muhammad Shahid', 'DCS', 'Lecturer', '33102', '1234', '', '', 'Male', '17', '', '', '95,000', 'shahid.abdullah@ntu.edu.pk'),
(25, NULL, 'Nasir Mehmood', 'DCS', 'Lecturer', '33103', '1234', '', '17/5/200', '', '17', NULL, 'Baga', '80,000', 'nasir.case@ntu.edu.pk'),
(204, NULL, 'Humael Hussain', 'Computer Sceince', 'Lecturer', '331001308248-1', '1234', '', '17/5/2000', 'Female', '17', NULL, 'Jinaah', '75,000', 'humaelHu@gmail.com'),
(212, '', 'Ahmad Hassan', '', NULL, '3310031371771', '123', NULL, '', NULL, NULL, '03235025632', 'House', '80000', 'ahmadhassanst@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_offering`
--
ALTER TABLE `course_offering`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_offering`
--
ALTER TABLE `course_offering`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
