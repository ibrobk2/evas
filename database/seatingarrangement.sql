-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 09:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seatingarrangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrange`
--

CREATE TABLE `arrange` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `matric_no` varchar(11) DEFAULT NULL,
  `seat_no` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrange`
--

INSERT INTO `arrange` (`id`, `name`, `matric_no`, `seat_no`, `venue`) VALUES
(1, 'ABDULRAHMAN, Amina', 'H20CS031', '25', 'Room2'),
(2, 'SANI, Umar Muhammad', 'H20CS088', '71', 'Room2'),
(3, 'ABUBAKAR, Abdurrahman', 'H20CS028', '23', 'Room2'),
(4, 'MUSTAPHA, Saudat', 'H20CS046', '37', 'Room2'),
(5, 'DAYYABU, Mustapha', 'H20CS103', '82', 'Room2'),
(6, 'IFI, Adaugo Violet', 'H20CS098', '78', 'Room2'),
(7, 'IBRAHIM, Yakubu', 'H20CS036', '29', 'Room2'),
(8, 'IBRAHIM, Ahmad Bk', 'H20CS016', '14', 'Room2'),
(9, 'AMINU, Shafiu', 'H20CS008', '7', 'Room2'),
(10, 'ONUH, John Inyanda', 'H20CS027', '22', 'Room2'),
(11, 'HUSSAINI, Najibullahi', 'H20CS072', '57', 'Room2'),
(12, 'ADAMU, Nura', 'H20CS087', '70', 'Room2'),
(13, 'ABDULLAHI, Aliyu', 'H20CS094', '74', 'Room2'),
(14, 'SHUAIBU, Abdussalam', 'H20CS061', '48', 'Room2'),
(15, 'KASIM, Abdullahi', 'H20CS064', '50', 'Room2'),
(16, 'MUAZU, Dikko Lemamu', 'H20CS026', '21', 'Room2'),
(17, 'SANI, Yusuf Kaita', 'H20CS058', '45', 'Room2'),
(18, 'AMINU, Abdulrahim', 'H20CS083', '67', 'Room2'),
(19, 'ISMA\'IL, Sumayya', 'H20CS111', '87', 'Room2'),
(20, 'ABDULLAHI, Usman', 'H20CS101', '80', 'Room2'),
(21, 'ABUBAKAR, Ibrahim', 'H20CS107', '85', 'Room2'),
(22, 'ILIYA, Haruna', 'H20CS106', '84', 'Room2'),
(23, 'SHEHU, Abubakar', 'H20CS067', '53', 'Room2'),
(24, 'USMAN, Fiddausi Bagiwa', 'H20CS041', '33', 'Room2'),
(25, 'ABDULLAHI, Shamsuddeen', 'H20CS040', '32', 'Room2'),
(26, 'ALIYU, Ahmad Ibrahim', 'H20CS059', '46', 'Room2'),
(27, 'ALIYU, Fahad', 'H20CS105', '83', 'Room2'),
(28, 'ALIYU, Hassana Hikima', 'H20CS012', '10', 'Room2'),
(29, 'MAINASARA, Jafar Saulawa', 'H20CS002', '1', 'Room2'),
(30, 'MAHMUD, Asma\'u Sada', 'H20CS075', '59', 'Room2'),
(31, 'ISAH, Fatima Saulawa', 'H20CS062', '49', 'Room2'),
(32, 'YUSUF, Saudat Abubakar', 'H20CS043', '34', 'Room2'),
(33, 'HASSAN, Habiba', 'H20CS073', '58', 'Room2'),
(34, 'SAADU, Imrana', 'H20CS102', '81', 'Room2'),
(35, 'ISIAKU, Aminu Muhammad', 'H20CS082', '66', 'Room2'),
(36, 'USMAN, Hafsat', 'H20CS110', '86', 'Room2'),
(37, 'SALISU, Zaharaddeen', 'H20CS038', '30', 'Room2'),
(38, 'SADA, Fatima Yashe', 'H20CS078', '62', 'Room2'),
(39, 'AHMAD, Hauwa\'u Mashi', 'H20CS080', '64', 'Room2'),
(40, 'ALIYU, Musa', 'H20CS096', '76', 'Room2'),
(41, 'NUHU, Rabiu Labaran', 'H20CS053', '41', 'Room2'),
(42, 'GAMBO, Amina', 'H20CS097', '77', 'Room2'),
(43, 'SABI\'U, Amina Kurfi', 'H20CS114', '89', 'Room2'),
(44, 'LAWAL, Abdurrahman', 'H20CS051', '40', 'Room2'),
(45, 'ABDULLAHI, Umar', 'H20CS069', '54', 'Room2'),
(46, 'SALISU, Najib', 'H20CS018', '16', 'Room2'),
(47, 'IBRAHIM, Hajara', 'H20CS013', '11', 'Room2'),
(48, 'IBRAHIM, Abdullahi', 'H20CS086', '69', 'Room2'),
(49, 'SANI, Asmau', 'H20CS079', '63', 'Room2'),
(50, 'HABIBU, Halimatu Ifo', 'H20CS066', '52', 'Room2'),
(51, 'ADAMU, Aliyu', 'H20CS057', '44', 'Room2'),
(52, 'ABUBAKAR, Mustapha', 'H20CS081', '65', 'Room2'),
(53, 'YAKUBU, Hayatuddeen Yandoma', 'H20CS023', '19', 'Room2'),
(54, 'MUAZU, Abubakar', 'H20CS025', '20', 'Room2'),
(55, 'AHMAD, Nura', 'H20CS076', '60', 'Room2'),
(56, 'SURAJUDDEEN, Khadija', 'H20CS095', '75', 'Room2'),
(57, 'UMAR, Ibrahim', 'H20CS033', '26', 'Room2'),
(58, 'USMAN, Abubakar Galadima', 'H20CS005', '4', 'Room2'),
(59, 'ABUBAKAR, Abdullahi', 'H20CS019', '17', 'Room2'),
(60, 'IBRAHIM, Ismai\'l', 'H20CS014', '12', 'Room2'),
(61, 'ABASHE, Ahmad Abdulkadir', 'H20CS092', '73', 'Room2'),
(62, 'IBRAHIM, Maryam Yusuf', 'H20CS039', '31', 'Room2'),
(63, 'AHMAD, Lubabatu Sa\'i', 'H20CS022', '18', 'Room2'),
(64, 'MUHAMMAD, Umar Yahaya', 'H20CS071', '56', 'Room2'),
(65, 'SANI, Musa', 'H20CS003', '2', 'Room2'),
(66, 'ISAH, Zainab Iliya', 'H20CS006', '5', 'Room2'),
(67, 'ABDULRAHMAN, Arabi', 'H20CS091', '72', 'Room2'),
(68, 'HABIBU, Ibrahim', 'H20CS004', '3', 'Room2'),
(69, 'MUSA, Umar', 'H20CS045', '36', 'Room2'),
(70, 'ABUBAKAR, Usman Isah', 'H20CS060', '47', 'Room2'),
(71, 'MUSTAPHA, Zainab Kabir', 'H20CS065', '51', 'Theather A'),
(72, 'ABDULLAHI, Hamza', 'H20CS112', '88', 'Theather A'),
(73, 'AHMED, Ahmed', 'H20CS084', '68', 'Theather A'),
(74, 'LABO, Isah Maikaita', 'H20CS077', '61', 'Theather A'),
(75, 'IBRAHIM, Yusuf Lawal', 'H20CS056', '43', 'Theather A'),
(76, 'ABDULRAZAQ, Abdulkarim', 'H20CS029', '24', 'Theather A'),
(77, 'LAWAL, Abubakar Dambo', 'H20CS015', '13', 'Theather A'),
(78, 'MUSA, Ahmad Abdullahi', 'H20CS047', '38', 'Theather A'),
(79, 'IDRIS, Aliyu Sani', 'H20CS054', '42', 'Theather A'),
(80, 'MANSUR, Ahmad', 'H20CS070', '55', 'Theather A'),
(81, 'ALIYU, Hussaina Hikima', 'H20CS009', '8', 'Theather A'),
(82, 'UMAR, Ibrahim', 'H20CS007', '6', 'Theather A'),
(83, 'RABIU, Abdulhamid Yaradua', 'H20CS100', '79', 'Theather A'),
(84, 'BASHIR, Aisha Shehu', 'H20CS044', '35', 'Theather A'),
(85, 'RUFAI, Yusuf', 'H20CS017', '15', 'Theather A'),
(86, 'UMAR, Ibrahim', 'H20CS034', '27', 'Theather A'),
(87, 'IDRIS, Jibrin', 'H20CS011', '9', 'Theather A'),
(88, '', 'H20CS115', '90', 'Theather A'),
(89, 'UMAR, Nura', 'H20CS049', '39', 'Theather A'),
(90, 'BISHIR, Abubakar', 'H20CS035', '28', 'Theather A');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(100) NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  `dayTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_halls`
--

CREATE TABLE `exam_halls` (
  `hall_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `seating_capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_halls`
--

INSERT INTO `exam_halls` (`hall_id`, `name`, `seating_capacity`) VALUES
(1, 'Room2', 70),
(2, 'Theather A', 50);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `INVIGILATOR_NAME` char(25) DEFAULT NULL,
  `ROOM_NO` char(5) DEFAULT NULL,
  `TIMING` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomhall2`
--

CREATE TABLE `roomhall2` (
  `Rows` int(11) DEFAULT NULL,
  `col1` bigint(20) DEFAULT NULL,
  `col2` bigint(20) DEFAULT NULL,
  `col3` bigint(20) DEFAULT NULL,
  `col4` bigint(20) DEFAULT NULL,
  `col5` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomhall2`
--

INSERT INTO `roomhall2` (`Rows`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES
(1, 1, NULL, 2, NULL, 3),
(2, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seating_arrangements`
--

CREATE TABLE `seating_arrangements` (
  `arrangement_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `hall_id` int(11) DEFAULT NULL,
  `seat_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ROLL_NO` int(11) DEFAULT NULL,
  `ROOM_NO` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ROLL_NO`, `ROOM_NO`) VALUES
(1, 'hall2'),
(2, 'hall2'),
(3, 'hall2'),
(4, 'hall2'),
(5, 'hall2'),
(6, 'hall2'),
(7, 'hall2'),
(8, 'hall2'),
(9, 'hall2'),
(10, 'hall2'),
(11, 'hall2'),
(12, 'hall2'),
(13, 'hall2'),
(14, 'hall2'),
(15, 'hall2'),
(16, 'hall2'),
(17, 'hall2'),
(18, 'hall2'),
(19, 'hall2'),
(20, 'hall2'),
(21, 'hall2'),
(22, 'hall2'),
(23, 'hall2'),
(24, 'hall2'),
(25, 'hall2'),
(26, 'hall2'),
(27, 'hall2'),
(28, 'hall2'),
(29, 'hall2'),
(30, 'hall2'),
(31, 'hall2'),
(32, 'hall2'),
(33, 'hall2'),
(34, 'hall2'),
(35, 'hall2'),
(36, 'hall2'),
(37, 'hall2'),
(38, 'hall2'),
(39, 'hall2'),
(40, 'hall2'),
(41, 'hall2'),
(42, 'hall2'),
(43, 'hall2'),
(44, 'hall2'),
(45, 'hall2'),
(46, 'hall2'),
(47, 'hall2'),
(48, 'hall2'),
(49, 'hall2'),
(50, 'hall2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `matric_no` varchar(25) NOT NULL,
  `venue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `matric_no`, `venue`) VALUES
(1, 'MAINASARA, Jafar Saulawa', 'H20CS002', ''),
(2, 'SANI, Musa', 'H20CS003', ''),
(3, 'HABIBU, Ibrahim', 'H20CS004', ''),
(4, 'USMAN, Abubakar Galadima', 'H20CS005', ''),
(5, 'ISAH, Zainab Iliya', 'H20CS006', ''),
(6, 'UMAR, Ibrahim', 'H20CS007', ''),
(7, 'AMINU, Shafiu', 'H20CS008', ''),
(8, 'ALIYU, Hussaina Hikima', 'H20CS009', ''),
(9, 'IDRIS, Jibrin', 'H20CS011', ''),
(10, 'ALIYU, Hassana Hikima', 'H20CS012', ''),
(11, 'IBRAHIM, Hajara', 'H20CS013', ''),
(12, 'IBRAHIM, Ismai\'l', 'H20CS014', ''),
(13, 'LAWAL, Abubakar Dambo', 'H20CS015', ''),
(14, 'IBRAHIM, Ahmad Bk', 'H20CS016', ''),
(15, 'RUFAI, Yusuf', 'H20CS017', ''),
(16, 'SALISU, Najib', 'H20CS018', ''),
(17, 'ABUBAKAR, Abdullahi', 'H20CS019', ''),
(18, 'AHMAD, Lubabatu Sa\'i', 'H20CS022', ''),
(19, 'YAKUBU, Hayatuddeen Yandoma', 'H20CS023', ''),
(20, 'MUAZU, Abubakar', 'H20CS025', ''),
(21, 'MUAZU, Dikko Lemamu', 'H20CS026', ''),
(22, 'ONUH, John Inyanda', 'H20CS027', ''),
(23, 'ABUBAKAR, Abdurrahman', 'H20CS028', ''),
(24, 'ABDULRAZAQ, Abdulkarim', 'H20CS029', ''),
(25, 'ABDULRAHMAN, Amina', 'H20CS031', ''),
(26, 'UMAR, Ibrahim', 'H20CS033', ''),
(27, 'UMAR, Ibrahim', 'H20CS034', ''),
(28, 'BISHIR, Abubakar', 'H20CS035', ''),
(29, 'IBRAHIM, Yakubu', 'H20CS036', ''),
(30, 'SALISU, Zaharaddeen', 'H20CS038', ''),
(31, 'IBRAHIM, Maryam Yusuf', 'H20CS039', ''),
(32, 'ABDULLAHI, Shamsuddeen', 'H20CS040', ''),
(33, 'USMAN, Fiddausi Bagiwa', 'H20CS041', ''),
(34, 'YUSUF, Saudat Abubakar', 'H20CS043', ''),
(35, 'BASHIR, Aisha Shehu', 'H20CS044', ''),
(36, 'MUSA, Umar', 'H20CS045', ''),
(37, 'MUSTAPHA, Saudat', 'H20CS046', ''),
(38, 'MUSA, Ahmad Abdullahi', 'H20CS047', ''),
(39, 'UMAR, Nura', 'H20CS049', ''),
(40, 'LAWAL, Abdurrahman', 'H20CS051', ''),
(41, 'NUHU, Rabiu Labaran', 'H20CS053', ''),
(42, 'IDRIS, Aliyu Sani', 'H20CS054', ''),
(43, 'IBRAHIM, Yusuf Lawal', 'H20CS056', ''),
(44, 'ADAMU, Aliyu', 'H20CS057', ''),
(45, 'SANI, Yusuf Kaita', 'H20CS058', ''),
(46, 'ALIYU, Ahmad Ibrahim', 'H20CS059', ''),
(47, 'ABUBAKAR, Usman Isah', 'H20CS060', ''),
(48, 'SHUAIBU, Abdussalam', 'H20CS061', ''),
(49, 'ISAH, Fatima Saulawa', 'H20CS062', ''),
(50, 'KASIM, Abdullahi', 'H20CS064', ''),
(51, 'MUSTAPHA, Zainab Kabir', 'H20CS065', ''),
(52, 'HABIBU, Halimatu Ifo', 'H20CS066', ''),
(53, 'SHEHU, Abubakar', 'H20CS067', ''),
(54, 'ABDULLAHI, Umar', 'H20CS069', ''),
(55, 'MANSUR, Ahmad', 'H20CS070', ''),
(56, 'MUHAMMAD, Umar Yahaya', 'H20CS071', ''),
(57, 'HUSSAINI, Najibullahi', 'H20CS072', ''),
(58, 'HASSAN, Habiba', 'H20CS073', ''),
(59, 'MAHMUD, Asma\'u Sada', 'H20CS075', ''),
(60, 'AHMAD, Nura', 'H20CS076', ''),
(61, 'LABO, Isah Maikaita', 'H20CS077', ''),
(62, 'SADA, Fatima Yashe', 'H20CS078', ''),
(63, 'SANI, Asmau', 'H20CS079', ''),
(64, 'AHMAD, Hauwa\'u Mashi', 'H20CS080', ''),
(65, 'ABUBAKAR, Mustapha', 'H20CS081', ''),
(66, 'ISIAKU, Aminu Muhammad', 'H20CS082', ''),
(67, 'AMINU, Abdulrahim', 'H20CS083', ''),
(68, 'AHMED, Ahmed', 'H20CS084', ''),
(69, 'IBRAHIM, Abdullahi', 'H20CS086', ''),
(70, 'ADAMU, Nura', 'H20CS087', ''),
(71, 'SANI, Umar Muhammad', 'H20CS088', ''),
(72, 'ABDULRAHMAN, Arabi', 'H20CS091', ''),
(73, 'ABASHE, Ahmad Abdulkadir', 'H20CS092', ''),
(74, 'ABDULLAHI, Aliyu', 'H20CS094', ''),
(75, 'SURAJUDDEEN, Khadija', 'H20CS095', ''),
(76, 'ALIYU, Musa', 'H20CS096', ''),
(77, 'GAMBO, Amina', 'H20CS097', ''),
(78, 'IFI, Adaugo Violet', 'H20CS098', ''),
(79, 'RABIU, Abdulhamid Yaradua', 'H20CS100', ''),
(80, 'ABDULLAHI, Usman', 'H20CS101', ''),
(81, 'SAADU, Imrana', 'H20CS102', ''),
(82, 'DAYYABU, Mustapha', 'H20CS103', ''),
(83, 'ALIYU, Fahad', 'H20CS105', ''),
(84, 'ILIYA, Haruna', 'H20CS106', ''),
(85, 'ABUBAKAR, Ibrahim', 'H20CS107', ''),
(86, 'USMAN, Hafsat', 'H20CS110', ''),
(87, 'ISMA\'IL, Sumayya', 'H20CS111', ''),
(88, 'ABDULLAHI, Hamza', 'H20CS112', ''),
(89, 'SABI\'U, Amina Kurfi', 'H20CS114', ''),
(90, '', 'H20CS115', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` char(25) DEFAULT NULL,
  `password` char(25) DEFAULT NULL,
  `email` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(0, 'admin', '123456', 'admin@hukpoly.edu.ng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrange`
--
ALTER TABLE `arrange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_halls`
--
ALTER TABLE `exam_halls`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `seating_arrangements`
--
ALTER TABLE `seating_arrangements`
  ADD PRIMARY KEY (`arrangement_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `hall_id` (`hall_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrange`
--
ALTER TABLE `arrange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam_halls`
--
ALTER TABLE `exam_halls`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seating_arrangements`
--
ALTER TABLE `seating_arrangements`
  MODIFY `arrangement_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
