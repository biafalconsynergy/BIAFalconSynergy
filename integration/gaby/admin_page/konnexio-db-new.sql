-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 06:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konnexio`
--
DROP DATABASE IF EXISTS `konnexio`;
CREATE DATABASE IF NOT EXISTS `konnexio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `konnexio`;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `careerid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `posted_date` date DEFAULT current_timestamp(),
  `isactive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`careerid`, `userid`, `title`, `content`, `posted_date`, `isactive`) VALUES
(1, 1, 'Systems Engineer', 'Systems Engineer | Full Time', '2024-07-12', 1),
(2, 1, 'QA Engineer', 'QA Engineer | Internship ', '2024-07-12', 1),
(3, 1, 'Automation Worker', 'Please apply within the company | This is a 6 Months Contract vacancy', '2024-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `caseid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `posted_date` date DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`caseid`, `userid`, `title`, `content`, `posted_date`, `image`, `isactive`) VALUES
(1, 1, 'Case Study 312A', 'Automotive Hinge Assembly', '2024-07-06', '', 0),
(6, 1, 'Case Study 312A', 'Explore KONNEXIO\'s custom automation solutions, where our team of experts transforms your project vision into reality with tailored machine designs, efficient project management and seamless integration for optimal production efficiency.', '2024-07-05', 'Image3b.jpg', 1),
(7, 1, 'Case Study 12301/302', 'Automotive Door Checker Assembly', NULL, 'Image3b.jpg', 1),
(10, 1, 'Case Study 314D', 'Automotive Fuel Line Assembly & Testing', NULL, 'Image1a.jpg', 1),
(11, 1, 'Case Study 308006', 'Automotive Plug Seal Assembly & Testing', NULL, 'Image1a.jpg', 1),
(12, 1, 'Case Study 313P', 'Automotive Fuel Line Assembly', NULL, 'Image1a.jpg', 1),
(13, 1, 'Case Study 313D', 'Automotive Transmission Line Assembly', NULL, 'Image4b.jpg', 1),
(14, 1, 'Case Study 311003', 'Locomotive Brake Handle Tester', NULL, 'Image2d.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `newsid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `content_type` varchar(255) DEFAULT NULL,
  `posted_date` date DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`newsid`, `userid`, `title`, `content`, `content_type`, `posted_date`, `image`, `isactive`) VALUES
(1, 1, 'Event 1 | London Ontario', 'Event 1 at London Ontario Canada', 'Events', '2024-07-08', 'Image1b.jpg', 1),
(2, 1, 'Blue Innovation Symposium in Middletown, Rhode Island', 'Blue Innovation Symposium in Middletown, Rhode Island', 'Events', '2024-07-15', 'Image2c.jpg', 1),
(3, 1, 'How our humble Halifax Engineering firm became an important defense player', 'How our humble Halifax Engineering firm became an important defense player', 'News', '2024-07-15', 'Image2d.jpg', 1),
(4, 1, 'The International Workboat Show in New Orleans, Louisiana', 'The International Workboat Show in New Orleans, Louisiana', 'Events', '2024-07-15', 'Image2c.jpg', 1),
(5, 1, 'Halifax engineering firm adds Atlantic Canada’s first PCB milling machine to their electronics lab', 'Halifax engineering firm adds Atlantic Canada’s first PCB milling machine to their electronics lab', 'Events', '2024-07-15', 'Image1b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE `support_ticket` (
  `ticketid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sent_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `posted_date` date DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `userid`, `title`, `content`, `posted_date`, `image`, `isactive`) VALUES
(1, 1, 'wfewv', 'fvwevrw', '2024-07-12', 'Image5a.jpg', 1),
(2, 1, 'we', 'dvd', '2024-07-12', 'Image5b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `roleid` int(11) NOT NULL,
  `contact_no` bigint(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `first_name`, `last_name`, `roleid`, `contact_no`, `email`, `Gender`, `Address`, `isactive`) VALUES
(1, 'Geethma', 'Manikkuwahandi', 1, 4375534698, 'minoligeethma@gmail.com', 'Female', 'London, ON', 1),
(3, 'Gaby', 'Manikkuwahandi', 2, 4375534698, 'gaby@gmail.com', 'female', '186, King Street', 1),
(4, 'Laine', 'Manikkuwahandi', 2, 4375534698, 'laine@gmail.com', 'female', '186, King Street', 1),
(5, 'Amber', 'Sharmila', 1, 771959329, 'amber@gmail.com', 'female', '37/A, Modara Dewala Road', 1),
(6, 'Amber', 'Sharmila', 1, 771959329, 'ambr@gmail.com', 'female', '37/A, Modara Dewala Road', 1),
(7, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'geethma@gmail.com', 'male', '186, King Street', 1),
(8, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'miligeethma@gmail.com', 'male', '186, King Street', 1),
(9, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'minoligeet@gmail.com', 'male', '186, King Street', 1),
(10, 'Minoli', 'Sharmila', 1, 771959329, 'minoeethma@gmail.com', 'male', '37/A, Modara Dewala Road', 1),
(11, 'Shiv', 'Silva', 1, 4375534698, 'shiv@gmail.com', 'male', '186, King Street', 1),
(12, 'Saikat', 'Datta', 1, 771959329, 'saikat@gmail.com', 'male', '37/A, Modara Dewala Road', 1),
(13, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'minolia@gmail.com', 'male', '186, King Street', 1),
(14, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'ma@gmail.com', 'male', '186, King Street', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `credential_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `last_updated_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`credential_id`, `userid`, `username`, `password`, `created_date`, `last_updated_date`, `expiry_date`) VALUES
(1, 1, 'minolisharmila', '$2y$10$nZAUQo37AzOGSX74V9qZqeZ51W1tFKqblNzoRwxnQfBbiOgwVlYgK', '2024-07-10', '2024-07-10', NULL),
(2, 3, 'konnexio', '$2y$10$LIwsy0fwllb3WLkBSqOJVuFbENLdWIEWmf3TVsVSjw3QUWYtINh/m', '2024-07-10', NULL, NULL),
(3, 4, 'laine', '$2y$10$c9RcVEhvHuZxpdT9Bb57EOqZ3J9KqwtuaTP7qZ28lfmSqYhZS5XTC', '2024-07-10', '2024-07-10', NULL),
(4, 5, 'amber', '$2y$10$dy1.LYqig.VamX2OZun6ZemKVvCax5BpaoipJR80WRPuRB6fGTZwm', '2024-07-10', NULL, NULL),
(5, 6, 'amber', '$2y$10$ATyMGdzpQV5BpnDHJC2HH.4x/4u8lRcOEDVqw7Glc/pnrH0H2HqDe', '2024-07-10', NULL, NULL),
(6, 7, 'minolisharmila', '$2y$10$yan/Ct.MzMbErid6lpkLdOVKpipzROYdCIq8EIBnCdRdfgEaSKRqK', '2024-07-10', NULL, NULL),
(7, 8, 'minoli', '$2y$10$bBDvg4LBLMGZS9iLL1uOtuoR4hZ917t86VyVqu3uWQ7IKJj3lYN8y', '2024-07-10', NULL, NULL),
(8, 9, 'minolisharmila', '$2y$10$HusmvqqWiBhTRfyXliuRG.YlDy5D3qN05dNGu6e1fMtdhh8h9ShYC', '2024-07-10', NULL, NULL),
(9, 10, 'minoli', '$2y$10$dIKJZ0yLkR3FjDu2H/Qcb.wvwpRSI6HlTy2ZXSF5Yxsw36uTFHIAS', '2024-07-10', NULL, NULL),
(10, 11, 'shiv', '$2y$10$r0MWjZ8ib/h7gqFE4kXEIOPl/oC54JYHPv.aSvr7l3hFafqZ1JxBq', '2024-07-10', NULL, NULL),
(11, 12, 'saikat', '$2y$10$RATzw5prr7sRnTMR.4uJZOE3VUuApVZDDx0SMgEmvAVVt2fp53C2C', '2024-07-10', NULL, NULL),
(12, 13, 'minoli', '$2y$10$35lnXmsL6VuQJLnoOozgIOkoghWK10WvSEqNQ3bWsaZcZSKFXQxHO', '2024-07-10', NULL, NULL),
(13, 14, 'se', '$2y$10$yMB1ajCNbMbbOi9Pwd3OQuaFYO1VBzNIsMRUL4.UlZCXtV6UdsfWW', '2024-07-10', NULL, '2024-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `roleid` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`roleid`, `role_name`) VALUES
(1, 'admin'),
(2, 'marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`careerid`),
  ADD KEY `careeruserid_FK_1` (`userid`);

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`caseid`),
  ADD KEY `casestudybooks_FK_1` (`userid`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`newsid`),
  ADD KEY `news_events_FK_1` (`userid`);

--
-- Indexes for table `support_ticket`
--
ALTER TABLE `support_ticket`
  ADD PRIMARY KEY (`ticketid`),
  ADD KEY `support_fk_1` (`userid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`),
  ADD KEY `testiuserid_FK_1` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userrole_FK_1` (`roleid`);

--
-- Indexes for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`credential_id`),
  ADD KEY `userid_FK_1` (`userid`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `careerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_ticket`
--
ALTER TABLE `support_ticket`
  MODIFY `ticketid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `credential_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `careers`
--
ALTER TABLE `careers`
  ADD CONSTRAINT `careeruserid_FK_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `case_study`
--
ALTER TABLE `case_study`
  ADD CONSTRAINT `casestudybooks_FK_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `news_events`
--
ALTER TABLE `news_events`
  ADD CONSTRAINT `news_events_FK_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `support_ticket`
--
ALTER TABLE `support_ticket`
  ADD CONSTRAINT `support_fk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testiuserid_FK_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `userrole_FK_1` FOREIGN KEY (`roleid`) REFERENCES `user_role` (`roleid`);

--
-- Constraints for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD CONSTRAINT `userid_FK_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
