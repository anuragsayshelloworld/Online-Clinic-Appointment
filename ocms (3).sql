-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2019 at 01:36 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bats`
--

CREATE TABLE `bats` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bats`
--

INSERT INTO `bats` (`id`, `doctorname`, `date`) VALUES
(1, 'Dr. Krishna Niroula', '2019-12-26'),
(2, 'Dr. Hari Bastola', '2019-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `bimo`
--

CREATE TABLE `bimo` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `binitaa`
--

CREATE TABLE `binitaa` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binitaa`
--

INSERT INTO `binitaa` (`id`, `doctorname`, `date`) VALUES
(1, 'Dr. Chu Fang', '2019-12-31'),
(2, 'Dr. Chu Fang', '2019-12-28'),
(3, 'Dr. Chu Fang', '2019-12-28'),
(4, 'Dr. Anurag Acharya', '2019-12-25'),
(5, 'Dr. Anish Paudyal', '2019-12-31'),
(6, 'Dr. Chu Fang', '2019-12-31'),
(7, 'Dr. Tony Tony Chopper', '2019-12-31'),
(8, 'Gol D. Roger', '2019-12-31'),
(9, 'Dr. Krishna Niroula', '2019-12-28'),
(10, 'Dr. Hari Bastola', '2019-12-26'),
(11, 'Dr. Krishna Niroula', '2019-12-28'),
(12, 'Dr. someone', '2019-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentname` varchar(255) NOT NULL,
  `dcode` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentname`, `dcode`, `image`) VALUES
(1, 'Orthopedics', 120, 'image/ortho.jpg'),
(2, 'Neurology', 121, 'image/neuro.jpg'),
(3, 'Gynocology', 122, 'image/gyno.jpg'),
(4, 'Dermatology', 123, 'image/derma.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Dermatology`
--

CREATE TABLE `Dermatology` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timetable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Dr. Hari Bastola`
--

CREATE TABLE `Dr. Hari Bastola` (
  `id` int(11) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Dr. Hari Bastola`
--

INSERT INTO `Dr. Hari Bastola` (`id`, `patientname`, `date`, `token`) VALUES
(1, 'binitaa', '2019-12-26', 9238),
(2, 'bats', '2019-12-28', 9349);

-- --------------------------------------------------------

--
-- Table structure for table `Dr. Krishna Niroula`
--

CREATE TABLE `Dr. Krishna Niroula` (
  `id` int(11) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Dr. Krishna Niroula`
--

INSERT INTO `Dr. Krishna Niroula` (`id`, `patientname`, `date`, `token`) VALUES
(1, 'binitaa', '2019-12-28', 9342),
(2, 'bats', '2019-12-26', 9288),
(3, 'binitaa', '2019-12-28', 9806);

-- --------------------------------------------------------

--
-- Table structure for table `Dr. someone`
--

CREATE TABLE `Dr. someone` (
  `id` int(11) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Dr. someone`
--

INSERT INTO `Dr. someone` (`id`, `patientname`, `date`, `token`) VALUES
(1, 'binitaa', '2019-12-26', 9799);

-- --------------------------------------------------------

--
-- Table structure for table `Gol D. Roger`
--

CREATE TABLE `Gol D. Roger` (
  `id` int(11) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Gol D. Roger`
--

INSERT INTO `Gol D. Roger` (`id`, `patientname`, `date`, `token`) VALUES
(1, 'binitaa', '2019-12-31', 9079);

-- --------------------------------------------------------

--
-- Table structure for table `Gynocology`
--

CREATE TABLE `Gynocology` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timetable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lindong`
--

CREATE TABLE `lindong` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mnum` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `recog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`id`, `fullname`, `email`, `mnum`, `username`, `password`, `recog`) VALUES
(1, 'admin admin', 'admin@gmail.com', '9812368214', 'admin', 'admin', 1),
(2, 'Binita Thapa', 'nanithapa44@gmail.com', '9860241078', 'binitaa', '123456', 0),
(3, 'Lin Dong', 'lindong@gmail.com', '9876543212', 'lindong', 'rasengan', 0),
(4, 'bimochan shrestha', 'bimo@gmail.com', '9843213232', 'bimo', 'rasengan', 0),
(5, 'batsala uprety', 'bats@gmail.com', '9876556543', 'bats', 'sathyam', 0),
(6, 'Dr. Krishna Niroula', 'krishna@gmail.com', '9876767856', 'krishna', '123456', 2),
(14, 'Dr. Hari Bastola', 'hari@gmail.com', '9878787878', 'hari', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Neurology`
--

CREATE TABLE `Neurology` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timetable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Neurology`
--

INSERT INTO `Neurology` (`id`, `doctorname`, `qualification`, `image`, `timetable`) VALUES
(4, 'Dr. Hari Bastola', 'MD', 'image/sarunkhe.jpg', '10:00 - 02: 00'),
(5, 'Dr. someone', '+12', 'image/tony.png', '6:13');

-- --------------------------------------------------------

--
-- Table structure for table `Orthopedics`
--

CREATE TABLE `Orthopedics` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timetable` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orthopedics`
--

INSERT INTO `Orthopedics` (`id`, `doctorname`, `qualification`, `image`, `timetable`) VALUES
(5, 'Gol D. Roger', 'MBBS', 'image/Screen Shot 2019-12-23 at 3.12.11 PM.png', '10:00 - 03: 00'),
(6, 'Dr. Krishna Niroula', 'MBBS', 'image/hello.jpg', '10:00 - 03: 00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bats`
--
ALTER TABLE `bats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bimo`
--
ALTER TABLE `bimo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binitaa`
--
ALTER TABLE `binitaa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Dermatology`
--
ALTER TABLE `Dermatology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Dr. Hari Bastola`
--
ALTER TABLE `Dr. Hari Bastola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Dr. Krishna Niroula`
--
ALTER TABLE `Dr. Krishna Niroula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Dr. someone`
--
ALTER TABLE `Dr. someone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Gol D. Roger`
--
ALTER TABLE `Gol D. Roger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Gynocology`
--
ALTER TABLE `Gynocology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lindong`
--
ALTER TABLE `lindong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Neurology`
--
ALTER TABLE `Neurology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orthopedics`
--
ALTER TABLE `Orthopedics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bats`
--
ALTER TABLE `bats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bimo`
--
ALTER TABLE `bimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binitaa`
--
ALTER TABLE `binitaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Dermatology`
--
ALTER TABLE `Dermatology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Dr. Hari Bastola`
--
ALTER TABLE `Dr. Hari Bastola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Dr. Krishna Niroula`
--
ALTER TABLE `Dr. Krishna Niroula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Dr. someone`
--
ALTER TABLE `Dr. someone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Gol D. Roger`
--
ALTER TABLE `Gol D. Roger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Gynocology`
--
ALTER TABLE `Gynocology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lindong`
--
ALTER TABLE `lindong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Neurology`
--
ALTER TABLE `Neurology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Orthopedics`
--
ALTER TABLE `Orthopedics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
