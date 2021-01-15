-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 03:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `CompanyId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `ContactNumber` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_reg`
--

INSERT INTO `company_reg` (`CompanyId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `ContactNumber`, `Area_Work`, `Status`, `UserName`, `Password`) VALUES
(1, 'TCS Private Limited', 'Mr. Kamal Shah', 'Lucknow', 'Uttar Pradesh', 'kamal@gmail.com', 8828828828, 'Software', 'Confirm', 'kamal', 'kamal1'),
(2, 'Wipro Infotech', 'Mr. Rajeev Kumar', 'Bangalore', 'Karnataka', 'rajeev@gmail.com', 7827827827, 'Hardware', 'Confirm', 'rajeev', 'rajeev1'),
(3, 'Tech Mahindra', 'Mrs. Saumya Singh', 'Bahadurpally', 'Hyderabad', 'saumya@gmail.com', 9829829829, 'Software', 'Confirm', 'saumya', 'saumya1'),
(4, 'Infosys Limited', 'Mr. Shyam Bajpayee', 'Bangalore', 'Karnataka', 'shyam@yahoo.com', 6826826826, 'Software', 'Confirm', 'shyam', 'shyam1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `StudentId`, `Feedback`, `FeedbakDate`) VALUES
(1, 6, 'Helped a lot.', '2017-06-29'),
(2, 3, 'This site was a real help.', '2017-05-15'),
(3, 3, 'Thanks For Your Support.', '2017-06-18'),
(4, 2, 'Made everything easier.', '2017-06-22'),
(5, 4, 'Great!', '2017-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `internship_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `month` varchar(9) NOT NULL,
  `year` varchar(4) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`internship_id`, `student_id`, `company`, `month`, `year`, `details`) VALUES
(1, 1, 'TCS', 'January', '2017', 'Great Internship 1'),
(3, 1, 'TCS', 'July', '2017', 'Great Internship 3'),
(4, 1, 'XYZ', 'August', '2017', 'Great Internship 4'),
(5, 1, 'ABC', 'August', '2017', 'Great Internship 5'),
(6, 1, 'Empyrotech', 'July', '2017', 'It was a fun experience');

-- --------------------------------------------------------

--
-- Table structure for table `job_search`
--

CREATE TABLE `job_search` (
  `SearchId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_search`
--

INSERT INTO `job_search` (`SearchId`, `StudentId`, `JobId`, `Status`, `Description`) VALUES
(1, 1, 1, 'Call Letter Send', 'Invited on 07-Oct-2017.'),
(2, 3, 2, 'Call Letter Send', 'Invited on 10-Oct-2017.'),
(3, 2, 3, 'Call Letter Send', 'Invited on 15-Oct-2017.'),
(4, 3, 4, 'Call Letter Send', 'Invited on 30-Sep-2017.'),
(5, 6, 1, 'Call Letter Send', 'Invited on 07-Oct-2017.'),
(6, 5, 1, 'Call Letter Send', 'Invited on 07-Oct-2017.'),
(7, 1, 2, 'Call Letter Send', 'Invited on 10-Oct-2017.'),
(8, 4, 1, 'Call Letter Send', 'Invited on 07-Oct-2017.'),
(9, 2, 1, 'Call Letter Send', 'Invited on 07-Oct-2017.'),
(10, 3, 1, 'Call Letter Send', 'Invited on 07-Oct-2017.'),
(11, 3, 6, 'Call Letter Send', 'Invited on 04-Oct-2017.'),
(12, 6, 2, 'Call Letter Send', 'Invited on 10-Oct-2017.'),
(13, 3, 3, 'Call Letter Send', 'Invited on 15-Oct-2017.'),
(14, 2, 4, 'Call Letter Send', 'Invited on 30-Sep-2017.'),
(15, 2, 2, 'Call Letter Send', 'Invited on 10-Oct-2017.'),
(16, 3, 5, 'Call Letter Send', 'Invited on 28-Oct-2017.');

-- --------------------------------------------------------

--
-- Table structure for table `manage_job`
--

CREATE TABLE `manage_job` (
  `JobId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_job`
--

INSERT INTO `manage_job` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`) VALUES
(1, 'Infosys Limited', 'Software Trainee', 10, 'B.Tech'),
(2, 'Wipro Infotech', 'Software Engineer', 25, 'B.Tech'),
(3, 'TCS Private Limited', 'Software Engineer', 20, 'B.Tech'),
(4, 'Wipro Infotech', 'Executive Engineer', 15, 'B.Tech'),
(5, 'Infosys Limited', 'Software Engineer', 5, 'B.Tech'),
(6, 'Tech Mahindra', 'Executive Engineer', 5, 'B.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `manage_news`
--

CREATE TABLE `manage_news` (
  `NewsId` int(11) NOT NULL,
  `News` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `newsdate` varchar(2) NOT NULL,
  `newsmonth` varchar(4) NOT NULL,
  `newsyear` varchar(4) NOT NULL,
  `publishdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_news`
--

INSERT INTO `manage_news` (`NewsId`, `News`, `description`, `newsdate`, `newsmonth`, `newsyear`, `publishdate`) VALUES
(1, 'Register and Get placed', '', '04', 'Aug', '2017', '2017-08-15'),
(3, 'Upload your updated resume', '', '20', 'June', '2017', '2017-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `manage_walkin`
--

CREATE TABLE `manage_walkin` (
  `WalkInId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_walkin`
--

INSERT INTO `manage_walkin` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `InterviewDate`, `InterviewTime`) VALUES
(2, 'Wipro Infotech', 'Software Engineer', 25, 'B.Tech', '2017-10-25', '10:00:00'),
(3, 'TCS Private Limited', 'Software Engineer', 20, 'B.Tech', '2017-09-20', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(12) NOT NULL,
  `month` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `proj_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `title` varchar(60) NOT NULL,
  `short_desc` varchar(150) NOT NULL,
  `description` varchar(800) NOT NULL,
  `path` varchar(200) NOT NULL DEFAULT 'projects/p4.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`proj_id`, `student_id`, `title`, `short_desc`, `description`, `path`) VALUES
(1, 1, 'Project 1', 'Short Description 1', 'Detailed Description of Project 1: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.', 'projects/p4.jpg'),
(2, 1, 'Project 2', 'Short Description 2', 'Detailed Description of Project 2: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.', 'projects/p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_education`
--

CREATE TABLE `student_education` (
  `EduId` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `Qualified_examinations` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` int(9) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_education`
--

INSERT INTO `student_education` (`EduId`, `StudentId`, `Qualified_examinations`, `University`, `PassingYear`, `Percentage`) VALUES
(1, 1, '10th', 'Unknown', 0, 0),
(2, 1, '12th', 'CBSE', 2012, 88),
(3, 2, '10th', 'ISC', 2011, 93.1),
(4, 2, '12th', 'ISC', 2013, 87),
(5, 3, '10th', 'CBSE', 2009, 95),
(6, 3, '12th', 'ISC', 2011, 92),
(7, 3, 'Diploma', 'ABC University', 2013, 81.3),
(8, 4, '10th', 'CBSE', 2010, 82),
(9, 4, '12th', 'CBSE', 2012, 75.2),
(10, 5, '10th', 'CBSE', 2011, 80),
(11, 5, '12th', 'CBSE', 2013, 79.35),
(12, 6, '10th', 'ISC', 2009, 89),
(13, 6, '12th', 'ISC', 2011, 85.3),
(14, 6, 'Diploma', 'XYZ University', 2012, 77.89),
(15, 24, '10th', 'Unknown', 0, 0),
(16, 24, 'Diploma', 'Unknown', 0, 0),
(17, 28, '10th', 'Unknown', 0, 0),
(18, 28, 'Diploma', 'Unknown', 0, 0),
(19, 0, '10th', 'Unknown', 0, 0),
(20, 0, '12th', 'Unknown', 0, 0),
(21, 31, '10th', 'CBSE', 2010, 89),
(22, 31, '12th', 'ICSE', 2012, 89),
(23, 32, '10th', 'Unknown', 0, 0),
(24, 32, '12th', 'Unknown', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `ContactNumber` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` varchar(11) NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Father` varchar(40) NOT NULL,
  `Mother` varchar(40) NOT NULL,
  `Interests` varchar(500) NOT NULL,
  `About` varchar(500) NOT NULL,
  `Statement` varchar(500) NOT NULL,
  `facebook_id` varchar(100) NOT NULL DEFAULT '#',
  `twitter` varchar(100) NOT NULL DEFAULT '#',
  `linkedin` varchar(100) NOT NULL DEFAULT '#',
  `reg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`StudentId`, `StudentName`, `Address`, `City`, `Email`, `ContactNumber`, `Qualification`, `Branch`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Father`, `Mother`, `Interests`, `About`, `Statement`, `facebook_id`, `twitter`, `linkedin`, `reg`) VALUES
(32, 'Anil', 'VILL  PAKHANPUR', '', 'anilv20071996@gmail.com', 8573864649, '', '', '', '1998-07-20', '', '', 'Anilanilv20071996@gm', 'Anil@123', '', '', '', '', '', '#', '#', '#', '1011010007');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_id`, `student_id`, `subject`, `about`) VALUES
(1, 1, 'PHP', 'Learnt PHP'),
(2, 1, 'JS', 'Learnt JS'),
(4, 1, 'CSS', 'Learnt CSS'),
(5, 1, 'JS', 'Learnt ASP'),
(6, 1, 'AJAX', 'Learnt AJAX'),
(7, 24, 'Php', 'I like PHP coding');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`UserId`, `UserName`, `Password`) VALUES
(1, 'admin', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`CompanyId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`internship_id`);

--
-- Indexes for table `job_search`
--
ALTER TABLE `job_search`
  ADD PRIMARY KEY (`SearchId`);

--
-- Indexes for table `manage_job`
--
ALTER TABLE `manage_job`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `manage_news`
--
ALTER TABLE `manage_news`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `manage_walkin`
--
ALTER TABLE `manage_walkin`
  ADD PRIMARY KEY (`WalkInId`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `student_education`
--
ALTER TABLE `student_education`
  ADD PRIMARY KEY (`EduId`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`StudentId`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `ContactNumber` (`ContactNumber`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `UserName_2` (`UserName`),
  ADD UNIQUE KEY `UserName_3` (`UserName`),
  ADD UNIQUE KEY `UserName_4` (`UserName`),
  ADD KEY `StudentId` (`StudentId`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_reg`
--
ALTER TABLE `company_reg`
  MODIFY `CompanyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `internship_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_search`
--
ALTER TABLE `job_search`
  MODIFY `SearchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `manage_job`
--
ALTER TABLE `manage_job`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manage_news`
--
ALTER TABLE `manage_news`
  MODIFY `NewsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_walkin`
--
ALTER TABLE `manage_walkin`
  MODIFY `WalkInId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `proj_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_education`
--
ALTER TABLE `student_education`
  MODIFY `EduId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
