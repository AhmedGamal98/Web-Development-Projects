-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 11:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'مدير'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Email`, `Password`, `Type`) VALUES
(1, 'admin@gmail.com', 'Admin222', 'مدير');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `national` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `appointment_date`, `appointment_time`, `name`, `national`, `state`) VALUES
(2, '2021-04-09', '17:54:00', 'وليد', 1234567890, 1),
(3, '2021-04-09', '19:47:00', 'وليد', 1234567890, 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkups`
--

CREATE TABLE `checkups` (
  `checkup_id` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `rays` text NOT NULL,
  `analysis` text NOT NULL,
  `rays_result` text,
  `analysis_result` text,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkups`
--

INSERT INTO `checkups` (`checkup_id`, `Type`, `patient_id`, `doctor_id`, `artist_id`, `rays`, `analysis`, `rays_result`, `analysis_result`, `state`) VALUES
(1, 'أشعه', 1, 1234567891, 1098765231, 'غده أوليه', '', 'حجمها كبير جدا جدا جدا', NULL, 1),
(2, 'تحاليل', 1, 1234567891, 1098765231, '', 'TSH', NULL, 'عالي جدا', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'طبيب'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `Username`, `password`, `Phone`, `Address`, `Email`, `specialization`, `Type`) VALUES
(1234567891, 'علي', '23b298ee5f1014780c7c2719edc2cc9d8241a708', 534982713, 'الرياض', 'ali@gmail.com', 'طبيب', 'طبيب');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `Name`, `Phone`, `Email`, `Address`, `Type`, `Password`) VALUES
(1098765231, 'حامد', 534983216, 'hamed@gmail.com', 'الرياض', 'فني المعمل', 'ae5389b4cf31845132622b4859811cebe316bc43'),
(1209632771, 'محمود', 587349813, 'mahmoud@gmail.com', 'الرياض', 'موظف وزارة الصحة', '8c25a95b61a30a040f116201752ad64fa10969f7'),
(1234567891, 'علي', 534982713, 'ali@gmail.com', 'الرياض', 'طبيب', '23b298ee5f1014780c7c2719edc2cc9d8241a708'),
(1908762347, 'جوده', 538712986, 'goda@gmail.com', 'الرياض', 'موظف استقبال', '1f90466e69b953d484cba77ff9b7de33e2b389df');

-- --------------------------------------------------------

--
-- Table structure for table `health_ministry`
--

CREATE TABLE `health_ministry` (
  `ministry_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_ministry`
--

INSERT INTO `health_ministry` (`ministry_id`, `Username`, `Password`, `Phone`, `Email`, `Address`, `Type`) VALUES
(1209632771, 'محمود', '8c25a95b61a30a040f116201752ad64fa10969f7', 587349813, 'mahmoud@gmail.com', 'الرياض', 'موظف وزارة الصحة'),
(1209763421, 'يبلبلب', '7e3f28b74d7a865961125dc8ee81281adf4515d6', 534871254, 'aa@gmail.com', 'الرياض', 'موظف وزارة الصحة'),
(1209765342, 'ثقثقثق', '225f9e81565dff9b2be4a6293ab3fbd756e9b5d1', 523876512, 'aa@gmail.com', 'الرياض', 'موظف وزارة الصحة'),
(1290433221, 'يسببلقثقثفقث', '105c34090af195c48d0664b6e8248a3a981e22e4', 534876512, 'aa@gmail.com', 'الرياض', 'موظف وزارة الصحة');

-- --------------------------------------------------------

--
-- Table structure for table `lab_artist`
--

CREATE TABLE `lab_artist` (
  `artist_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab_artist`
--

INSERT INTO `lab_artist` (`artist_id`, `Username`, `Password`, `Phone`, `Email`, `Address`, `Type`) VALUES
(1098765231, 'حامد', 'ae5389b4cf31845132622b4859811cebe316bc43', 534983216, 'hamed@gmail.com', 'الرياض', 'فني المعمل'),
(1987652310, 'يوسف', 'ae5389b4cf31845132622b4859811cebe316bc43', 534986512, 'youssef@gmail.com', 'الرياض', 'فني المعمل'),
(1998633244, 'قثصقثصق', '7e3f28b74d7a865961125dc8ee81281adf4515d6', 547897623, 'aa@gmail.com', 'الرياض', 'فني المعمل');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `record_id` int(11) NOT NULL,
  `national_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL DEFAULT 'مريض'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`record_id`, `national_id`, `Name`, `Phone`, `Address`, `Email`, `Password`, `Type`) VALUES
(1, 1234567890, 'وليد', 587612382, 'الرياض   ', 'mohamed@gmail.com', '667387b1c8d6430fd325baec70c3652a37e17e7d', 'مريض');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(255) DEFAULT NULL,
  `diagnosis` varchar(255) DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_name`, `diagnosis`, `patient_id`, `doctor_id`) VALUES
(1, 'كاربيمازول', 'غده دركيه', 1, 1234567891),
(2, 'مضاد حيوي', 'كحه مزمنه', 1, 1234567891),
(3, 'مضاد حيوي', 'برد', 1, 1234567891);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionist_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionist_id`, `Username`, `Password`, `Phone`, `Email`, `Address`, `Type`) VALUES
(1908762347, 'جوده', '1f90466e69b953d484cba77ff9b7de33e2b389df', 538712986, 'goda@gmail.com', 'الرياض', 'موظف استقبال');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `checkups`
--
ALTER TABLE `checkups`
  ADD PRIMARY KEY (`checkup_id`),
  ADD KEY `record_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `health_ministry`
--
ALTER TABLE `health_ministry`
  ADD PRIMARY KEY (`ministry_id`);

--
-- Indexes for table `lab_artist`
--
ALTER TABLE `lab_artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkups`
--
ALTER TABLE `checkups`
  MODIFY `checkup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkups`
--
ALTER TABLE `checkups`
  ADD CONSTRAINT `checkups_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkups_ibfk_3` FOREIGN KEY (`patient_id`) REFERENCES `medical_record` (`record_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkups_ibfk_4` FOREIGN KEY (`artist_id`) REFERENCES `lab_artist` (`artist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicines`
--
ALTER TABLE `medicines`
  ADD CONSTRAINT `medicines_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicines_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `medical_record` (`record_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
