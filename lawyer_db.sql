-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 09:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `date` int(40) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `date`, `time`, `service`) VALUES
(1, 'Muneeb', 'muneeb@gmail.com', 2023, '10 jan', '3'),
(2, 'Muneeb', 'muneeb@gmail.com', 2023, '10 jan', '3'),
(3, 'hamza', 'hamza@gmail.com', 2023, '1:04 AM', '2'),
(4, 'Abdul Hannan', 'hannan@gmail.com', 2023, '1:04 AM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(15) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `cnic` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `first_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `postal_code`, `date_of_birth`, `cnic`, `password`) VALUES
(1, 'Muneeb', 'Amir', 'muneeb@gmail.com', '0312295834', 'Sector 4-B', 'Karachi', '7282', '2005-08-11', '42401111654654', ''),
(3, 'hamza', 'asif', 'hamza@gmail.com', '03275486591', 'near kda flats', 'Karachi', '5445', '1997-08-01', '4240115497856', 'qari'),
(4, 'Abdul ', 'Hannan', 'hannan@gmail.com', '031214643111', 'North karachi', 'Karachi', '6133', '2001-03-18', '42401136548796', 'abdul');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `lawyer_id`, `name`, `email`, `address`, `message`) VALUES
(18, 31, 'Muneeb', 'muneeb@gmail.com', 'karachi', 'Brilliant');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_lawyers`
--

CREATE TABLE `criminal_lawyers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cases_handled` int(11) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `criminal_lawyers`
--

INSERT INTO `criminal_lawyers` (`id`, `full_name`, `contact_number`, `address`, `fee`, `description`, `cases_handled`, `rating`, `image`) VALUES
(6, 'Mazhar-Ali-Haider', '03125569753', 'peshawar', 6000, 'Mazhar-Ali-Haider, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action.', 40, 9.99, 'Mazhar-Ali-Haider.jpg'),
(7, 'Muhammad Nawaz Chandio', '03156599954', 'Lahore', 4000, 'Muhammad Nawaz Chandio, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action', 80, 9.99, 'Muhammad Nawaz Chandio.jpg'),
(8, 'Afrasiab Khattak', '0312654851', 'karachi', 8000, 'Afrasiab Khattak, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action', 60, 9.99, 'Afrasiab Khattak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `divorce_lawyers`
--

CREATE TABLE `divorce_lawyers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cases_handled` int(11) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divorce_lawyers`
--

INSERT INTO `divorce_lawyers` (`id`, `full_name`, `contact_number`, `address`, `fee`, `description`, `cases_handled`, `rating`, `image`) VALUES
(6, 'Fiona Shackleton', '02155648897', 'London, England', 5000, '\r\nMember of the House of Lords\r\nLord Temporal\r\nIncumbent\r\nAssumed office\r\n21 October 2010\r\nLife peerage\r\nPersonal details\r\nBorn	Fiona Sara Charkham\r\n26 May 1956 (age 67)\r\nLondon, England\r\nPolitical party	Conservative\r\nSpouse	Ian Shackleton\r\nChildren	2\r\nEducation	Benenden School\r\nExeter University\r\nOccupation	Solicitor', 140, 9.99, 'divorce-Fiona Shackleton.jpg'),
(7, 'Umair Ashraf', '03156698754', 'karachi', 7000, 'Umair Ashraf, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action.', 40, 9.99, 'Umair-Ashraf-683x1024.jpg'),
(8, 'Mark Vincent Kaplan', '03145569887', 'London, England', 6000, 'Mark Vincent Kaplan, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action', 45, 9.99, 'Mark Vincent Kaplan.jpeg'),
(9, 'Robert Stephan Cohen', '031244566545', 'Islamabad', 7000, 'Robert Stephan Cohen, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action', 99, 9.99, 'divorce-Robert Stephan Cohen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `feedback` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `feedback`) VALUES
(4, 'Muneeb', 'muneeb@gmail.com', 'good'),
(5, 'Muneeb', 'muneeb@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `lawyer_id` int(11) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`lawyer_id`, `lawyer_name`, `contact_number`, `image`) VALUES
(25, 'Abdul hafeez perzada', '03142687960', 'Abdul Hafeez Pirzada.jpg'),
(26, 'Aftab Gul khan', '03311545753', 'Aftab Gul Khan.jpg'),
(28, 'Afrasiab Khattak', '03219587365', 'Afrasiab Khattak.jpg'),
(29, 'Muneeb Amir', '03122295834', 'muneeb.jpg'),
(30, 'Hamza Qureshi', '03145566978', 'Hamza Qureshi.jpg'),
(31, 'Muhammad Nawaz Chandio', '03221555484', 'Muhammad Nawaz Chandio.jpg'),
(32, 'Ahmed-Raza-Kazim', '03124569789', 'Ahmed-Raza-Kazim.jpeg'),
(33, 'Tazmeen', '03134658797', 'Tazmeen.jpg'),
(34, 'Sorrell Trope', '0315446987', 'Sorrell Trope.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `legalcases`
--

CREATE TABLE `legalcases` (
  `case_id` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `case_description` text DEFAULT NULL,
  `case_status` enum('Open','Closed','In Progress') DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `documents` text DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  `court_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popularlawyers`
--

CREATE TABLE `popularlawyers` (
  `lawyer_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` text DEFAULT NULL,
  `fee` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `cases_handled` int(11) NOT NULL,
  `rating` decimal(3,2) NOT NULL,
  `categories` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_lawyers`
--

CREATE TABLE `tax_lawyers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cases_handled` int(11) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax_lawyers`
--

INSERT INTO `tax_lawyers` (`id`, `full_name`, `contact_number`, `address`, `fee`, `description`, `cases_handled`, `rating`, `image`) VALUES
(1, 'Abdul hafeez perzada', '0312456789', 'karachiii', 20000, '  Abdul Hafeez Pirzada was born in \r\n                            24 February 1935 – 1 September 2015 was a \r\n                            Pakistani lawyer, legal theorist, and \r\n                            politician, who served variously as Minister\r\n                            for Information, Minister for Law, Minister \r\n                            for Finance, and Minister for Education under\r\n                            President and later Prime Minister Zulfikar\r\n                            Ali Bhutto from 1971 to 1977. As Law Minister,\r\n                            he is credited as a principal draftsman of \r\n                            the Constitution.', 68, 9.99, 'Abdul Hafeez Pirzada.jpg'),
(2, 'Sorrell Trope', '03154466876', 'Islamabad', 9000, 'Sorrell Trope, one trained and licensed to prepare, manage, and either prosecute or defend a court action as an agent for another and who also gives advice on legal matters that may or may not require court action', 60, 9.99, 'Sorrell Trope.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lawyer_id` (`lawyer_id`);

--
-- Indexes for table `criminal_lawyers`
--
ALTER TABLE `criminal_lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divorce_lawyers`
--
ALTER TABLE `divorce_lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `legalcases`
--
ALTER TABLE `legalcases`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `popularlawyers`
--
ALTER TABLE `popularlawyers`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `tax_lawyers`
--
ALTER TABLE `tax_lawyers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `criminal_lawyers`
--
ALTER TABLE `criminal_lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divorce_lawyers`
--
ALTER TABLE `divorce_lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `legalcases`
--
ALTER TABLE `legalcases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popularlawyers`
--
ALTER TABLE `popularlawyers`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_lawyers`
--
ALTER TABLE `tax_lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyers` (`lawyer_id`),
  ADD CONSTRAINT `fk_lawyer_id` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyers` (`lawyer_id`);

--
-- Constraints for table `legalcases`
--
ALTER TABLE `legalcases`
  ADD CONSTRAINT `legalcases_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyers` (`lawyer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
