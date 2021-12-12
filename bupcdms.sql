-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 07:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bupcdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_no` varchar(3) NOT NULL DEFAULT '',
  `norooms` varchar(4) DEFAULT NULL,
  `faculty` varchar(30) DEFAULT NULL,
  `batch` varchar(20) NOT NULL,
  `sexcategory` varchar(8) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `client_type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `event` varchar(50) NOT NULL,
  `reservation_date` varchar(50) NOT NULL,
  `check_in` varchar(11) NOT NULL,
  `check_out` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`user_id`, `name`, `client_type`, `email`, `mobile_no`, `event`, `reservation_date`, `check_in`, `check_out`) VALUES
(31, 'Hazel Balingasa', ' Student', 'hazelbalingasa17@gmail.com', '09568757267', 'IT WEEK', 'October 20, 2021', '7am', '5pm');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `fullname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`fullname`, `email`, `comment`, `user_id`) VALUES
('Hazel Balingasa', 'hazelbalingasa17@gmail.com', 'Good day sir, I am already paid for the month of January. Thanks', 26);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user_id` int(11) NOT NULL,
  `stud_id` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `receipt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_id`, `stud_id`, `fullname`, `room_no`, `month`, `day`, `year`, `receipt`) VALUES
(18, '2018-PC-100368', 'Hazel Balingasa', 'Room 1', 'October', '21', '2021', 'RECEIPT.png');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `no` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `stud_id` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`no`, `fname`, `mname`, `lname`, `stud_id`, `sex`, `batch`, `faculty`, `department`) VALUES
(1, 'Zel', 'G.', 'Bal', '2018-PC-100369', 'female', '4th year', 'CESD', 'information technology'),
(2, 'Joy', 'N.', 'Vibar', '2018-PC-100400', 'female', '4thyear', 'CESD', 'information technology');

-- --------------------------------------------------------

--
-- Table structure for table `reservpayment`
--

CREATE TABLE `reservpayment` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `client_type` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `receipt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservpayment`
--

INSERT INTO `reservpayment` (`user_id`, `fullname`, `email`, `client_type`, `month`, `day`, `year`, `receipt`) VALUES
(14, 'Hazel Balingasa', 'hazelbalingasa17@gmail.com', ' Student', 'October', '21', '2021', 'RECEIPT.png');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `block_no` varchar(3) DEFAULT NULL,
  `room_no` varchar(3) NOT NULL DEFAULT '',
  `nobed` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_name` varchar(11) NOT NULL,
  `no_of_bed` int(50) NOT NULL,
  `capacity` int(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_name`, `no_of_bed`, `capacity`, `availability`, `user_id`) VALUES
('Room 1', 10, 10, '9 vacant', 1),
('Room 2', 10, 10, '9 vacant', 2),
('Room 3', 10, 10, '9 vacant', 3),
('Room 4', 10, 10, '9 vacant', 4),
('Room 5', 10, 10, '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `stud_id` varchar(15) NOT NULL DEFAULT '',
  `phone_no` varchar(12) NOT NULL,
  `sex` varchar(8) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `batch` varchar(10) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `course` varchar(50) NOT NULL,
  `block` varchar(3) DEFAULT NULL,
  `room_no` varchar(50) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ConfirmPassword` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`user_id`, `fname`, `mname`, `lname`, `stud_id`, `phone_no`, `sex`, `address`, `batch`, `faculty`, `course`, `block`, `room_no`, `Username`, `Password`, `ConfirmPassword`, `Status`) VALUES
(16, 'Joy', 'Gualberto', 'Balingasa', '2018-PC-100368', '09568757267', 'female', 'Mauraro,Guinobatan, Albay', '4th year', 'Computer Studies Department', 'Bachelor of Science in Information Technology', 'B', 'Room 1', 'Hazel', 'hazel098', 'hazel098', 1),
(25, 'Mery Joy', 'Nantes', 'Vibar', '2018-PC-100200', '09568757700', 'female', 'Camalig', '4th year', 'Computer Studies Department', 'Bachelor of Science in Information Technology', 'B', 'Room 2', 'Joy', 'joy123', 'joy123', 1),
(27, 'Hazel', 'Bali', 'Cruz', '2018-PC-100500', '09568757500', 'female', 'Guinobatan', '4th year', 'Computer Studies Department', 'Bachelor of Science in Information Technology', 'B', 'Room 4', 'Hazel', '890', '890', 1),
(28, 'Hazel', 'Gee', 'Bal', '2018-PC-100668', '09568757268', 'female', 'Mauraro,Guinobatan, Albay', '4th year', 'Computer Studies Department', 'Bachelor of Science in Information Technology', 'B', 'Room 3', 'hzl', 'hzl890', 'hzl890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `payment_receipt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FNAME` varchar(30) DEFAULT NULL,
  `mNAME` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `user_id` varchar(15) NOT NULL DEFAULT '',
  `sex` varchar(8) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FNAME`, `mNAME`, `lname`, `user_id`, `sex`, `phone_no`, `username`, `password`, `confirmpassword`, `status`) VALUES
('Hazel', 'Gee', 'Bal', '1', 'male', '09568757500', 'Hazel', 'admin123', 'admin123', 1),
('John Thomas', 'P.', 'Satimbre', '2', 'male', '0922553395', 'admin', 'admin12345', 'admin12345', 1),
('Hazel ', 'Gualberto', 'Balingasa', '3', 'female', '09568757500', 'hazel', 'admin456', 'admin456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `reservpayment`
--
ALTER TABLE `reservpayment`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_no`),
  ADD KEY `block_no` (`block_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservpayment`
--
ALTER TABLE `reservpayment`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `block`
--
ALTER TABLE `block`
  ADD CONSTRAINT `block_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`block_no`) REFERENCES `block` (`block_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
