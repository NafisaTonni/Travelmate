-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2019 at 05:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Email`, `Admin_Password`) VALUES
('nilltonni@gmail.com', 'tonni'),
('parthanath639@gmail.com', 'partha');

-- --------------------------------------------------------

--
-- Table structure for table `findmate`
--

CREATE TABLE `findmate` (
  `user_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `Best_Time_to_go` varchar(100) DEFAULT NULL,
  `Image` text,
  `description` text,
  `place_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `location`, `Best_Time_to_go`, `Image`, `description`, `place_name`) VALUES
(1, 'Ruma Upazila, Bandarban, Bangladesh', 'Spring (April to June) and Autumn (September to October)', 'placeimage/tour-1.jpg', '', 'Bagakain Lake'),
(2, 'Kaptai Upazila, Rangamati District of Chittagong D', 'All most all time', 'placeimage/tour-2.jpg', '', 'Kaptai Lake'),
(3, 'Bandarban', 'September to November and March to May ', 'placeimage/tour-3.jpg', '', 'Nilgiri'),
(4, ' Dharmapasha and Tahirpur upazilas of Sunamganj Di', 'January & February', 'placeimage/tour-4.jpg', '', 'Tanguar haor'),
(5, ' Maulvibazar District, Sylhet,Bangladesh.', 'April â€“ November', 'placeimage/tour-5.jpg', '', 'Sreemangal'),
(6, ' Gowainghat Upazila,Sylhet,Bangladesh', 'June to August', 'placeimage/tour-6.jpg', '', 'Bichnakandi'),
(7, ' Sunamgonj,Bangladesh', 'All most all time', 'placeimage/tour-7.jpg', '', ' Jadukata Nodi');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(50) DEFAULT NULL,
  `tour_description` varchar(50) DEFAULT NULL,
  `Start_Date` varchar(50) DEFAULT NULL,
  `End_Date` varchar(50) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `tour_description`, `Start_Date`, `End_Date`, `u_id`) VALUES
(1, 'Bagakain Lake', 'hihuhguif', '04-15-2019', '04-17-2019', NULL),
(4, 'sajek', 'DSKDJKSDSDKSD', '2019-12-05', '2019-12-09', 2),
(5, 'saint marting', 'cnkjdbdfbvjdhjf', '2018-12-23', '2018-12-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `NID` varchar(20) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Username`, `NID`, `PhoneNumber`, `Email`, `pass`, `Gender`, `Image`) VALUES
(1, 'Tonni', '1234', '01684882849', 'nilltonni@gmail.com', '1234', 'female', 'userimage/IMG_2821.JPG'),
(2, 'Partha', '1234', '01991948974', 'parthanath639@gmail.com', '1234', 'male', 'userimage/IMG_3833.JPG'),
(3, 'Anan', '1234', '01991948974', 'anan@gmail.com', '2019', 'male', 'userimage/images.png'),
(4, 'abc', '323123', '2434', 'g@gmail.com', '12345', 'male', 'userimage/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Email`);

--
-- Indexes for table `findmate`
--
ALTER TABLE `findmate`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `user_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `findmate`
--
ALTER TABLE `findmate`
  ADD CONSTRAINT `findmate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `findmate_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
