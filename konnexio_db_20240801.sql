-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 10:45 AM
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
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`careerid`, `userid`, `title`, `content`, `posted_date`, `isactive`, `last_updated_date`) VALUES
(1, 1, 'Systems Engineer', 'Systems Engineer | Full Time', '2024-07-12', 1, '2024-07-29 19:39:11'),
(2, 1, 'QA Engineer', 'QA Engineer | Internship ', '2024-07-12', 1, NULL),
(3, 1, 'Automation Worker', 'Please apply within the company | This is a 6 Months Contract vacancy', '2024-07-15', 1, '2024-07-29 19:27:49'),
(4, 1, 'Data Analyst', 'We are looking for a Data Analyst to join our team', '2024-07-30', 1, NULL),
(5, 1, 'Test', 'Test', '2024-07-30', 0, NULL);

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
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated_date` datetime DEFAULT NULL,
  `form` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`caseid`, `userid`, `title`, `content`, `posted_date`, `image`, `isactive`, `last_updated_date`, `form`) VALUES
(1, 1, 'Case Study 312A Minoli', 'Automotive Hinge Assembly', '2024-07-06', '2e77e907f39a702c650374cb3a110dda.jpg', 1, '2024-07-31 23:41:10', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></script>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>'),
(6, 1, 'Case Study 312A', 'Explore KONNEXIO\'s custom automation solutions, where our team of experts transforms your project vision into reality with tailored machine designs, efficient project management and seamless integration for optimal production efficiency.', '2024-07-05', 'Image3b.jpg', 1, '2024-07-31 23:29:40', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></script>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(7, 1, 'Case Study 12301/302', 'Automotive Door Checker Assembly', '2024-07-05', 'Image3b.jpg', 0, '2024-07-29 23:16:13', NULL),
(10, 1, 'Case Study 314D', 'Automotive Fuel Line Assembly & Testing', '2024-07-05', 'Image1a.jpg', 1, NULL, NULL),
(11, 1, 'Case Study 308006', 'Automotive Plug Seal Assembly & Testing', '2024-07-05', 'Image1a.jpg', 1, NULL, NULL),
(12, 1, 'Case Study 313P', 'Automotive Fuel Line Assembly', '2024-07-05', 'Image1a.jpg', 0, NULL, NULL),
(13, 1, 'Case Study 313D', 'Automotive Transmission Line Assembly', '2024-07-05', 'Image4b.jpg', 1, NULL, NULL),
(14, 1, 'Case Study 311003', 'Locomotive Brake Handle Tester', '2024-07-05', 'Image2d.jpg', 1, NULL, NULL),
(23, 1, 'Case Study Test 01', 'Case Study Test 01', '2024-07-25', 'Image2d.jpg', 1, NULL, NULL),
(24, 1, 'Test', 'Test', '2024-07-25', 'Image2d.jpg', 0, NULL, NULL),
(25, 1, 'r', 'ac', '2024-07-25', 'Image4c.jpg', 1, NULL, NULL),
(26, 1, 'wf', 'wfe', '2024-07-25', 'Image2c.jpg', 1, NULL, NULL),
(27, 1, 'sce', 'eev', '2024-07-25', 'Image3a.jpg', 0, NULL, NULL),
(28, 16, 'Test 01', 'Test 01', '2024-07-29', 'c0f5d84ba9e398c8613fb9740ac16620.jpg', 1, '2024-07-29 19:53:35', NULL),
(29, 1, 'Test 02', 'Test 02', '2024-07-29', 'Image3a.jpg', 1, NULL, NULL),
(30, 1, 'Test 02', 'Test 02', '2024-07-29', 'Image3a.jpg', 1, NULL, NULL),
(31, 1, 'Test 02', 'Test 02', '2024-07-29', 'd7f3c4e68bf795cd37cda7601b7384c7.jpg', 1, '2024-07-29 00:00:00', NULL),
(32, 1, 'Test', 'Test', '2024-07-31', 'Image1b.jpg', 1, NULL, NULL),
(33, 1, 'efe', 'fefe', '2024-08-01', 'Image3b.jpg', 1, NULL, NULL),
(34, 1, 'test1', 'test1', '2024-08-01', 'Image2b.jpg', 1, NULL, NULL),
(35, 1, 'eww', 'ewfew', '2024-08-01', 'Image3b.jpg', 1, NULL, NULL),
(36, 1, 'efef', 'wfef', '2024-08-01', 'Image2d.jpg', 1, NULL, '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></script>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `newsid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `content_type` varchar(255) DEFAULT NULL,
  `posted_date` date DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`newsid`, `userid`, `title`, `location`, `content`, `content_type`, `posted_date`, `image`, `isactive`, `last_updated_date`) VALUES
(1, 1, 'Event 1 | London Ontario', 'London ontario ', 'Event 1 at London Ontario Canada', 'Events', '2024-07-08', 'Image1b.jpg', 0, '2024-08-01 03:35:40'),
(2, 1, 'Blue Innovation Symposium in Middletown, Rhode Island', 'London ontario ', 'Blue Innovation Symposium in Middletown, Rhode Island', 'Events', '2024-07-15', 'Image2c.jpg', 1, '2024-08-01 03:35:58'),
(3, 1, 'How our humble Halifax Engineering firm became an important defense player', 'London ontario ', 'How our humble Halifax Engineering firm became an important defense player', 'News', '2024-07-15', 'Image2d.jpg', 1, '2024-08-01 03:36:09'),
(4, 1, 'The International Workboat Show in New Orleans, Louisiana', 'New Orleans, Louisiana', 'The International Workboat Show in New Orleans, Louisiana', 'Events', '2024-07-15', 'Image2c.jpg', 1, '2024-08-01 03:36:25'),
(5, 1, 'Halifax engineering firm adds Atlantic Canada’s first PCB milling machine to their electronics lab', 'Halifax ', 'Halifax engineering firm adds Atlantic Canada’s first PCB milling machine to their electronics lab', 'Events', '2024-07-15', 'Image1b.jpg', 1, '2024-08-01 03:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `expires_at`) VALUES
('minoligeethma@gmail.com', 'fe4c2ce98b87723974b38e9394a5909fec220b7bfee67161997e761c7a1f9842', '2024-07-26 18:47:39'),
('minoligeethma@gmail.com', 'eb5707e702ce39cdef98e07b34a00b9beeeaeba7188dfe7e87ec988709c07841', '2024-07-26 18:47:39'),
('minoligeethma@gmail.com', 'aab2e8b1889831fe42c0f3599daf16fd62f128fa5f8752ed28386f5eaba6d735', '2024-07-26 18:49:20'),
('minoligeethma@gmail.com', 'b135b28208094edc0c7b8adade2babe20b6239a677051196b87cba3b0c30d2dd', '2024-07-26 18:50:33'),
('minoligeethma@gmail.com', '1a2d6b0dbc601fd9d5a935be704fcf794285484095ef7e5016e7502cb171d082', '2024-07-26 18:58:46'),
('minoligeethma@gmail.com', 'fc47a21d3bc275e83e92df7365b32d896cf95a70dbcd1b4d254e8dcafccd9464', '2024-07-26 23:21:21'),
('minoligeethma@gmail.com', '9c6722b49622015e980241f1b062702b1331eaf5d505749bb6036d8ecf1c1cf4', '2024-07-26 23:22:55'),
('minoligeethma@gmail.com', 'f374ed1838e4082978aa7373d888cfca9c86afc4593616b453e3809ec8166856', '2024-07-26 23:25:34'),
('minoligeethma@gmail.com', '09259d88bba79912f054ade3ed0ad517a699f6f0fb3139d56827fa11e44eac2b', '2024-07-26 23:37:06'),
('minoligeethma@gmail.com', '8ef878d16c5ee67c2e6af10d906f51e21efef5eee0f01696094894680580c23e', '2024-07-26 23:39:09'),
('minoligeethma@gmail.com', '4d076afc092895b418ce3ffbedd94ed672e86f7a9fbb04a6288cebf8e89c1bbe', '2024-07-27 00:15:01'),
('minoligeethma@gmail.com', '164fc96f9590a05cdcb6f546e6c74329863adbf21b338f7213eab348f6e78ac6', '2024-07-31 02:46:57'),
('minoligeethma@gmail.com', '5a170445c626233e66077becce66f95c35f345372368e1e6ec213aaaf2ca72fb', '2024-07-31 02:56:19'),
('minoligeethma@gmail.com', '950fc06d114cc781d17ef91dbaa6cfc60d5b0443bcb388f5f73b7b309cb4e3ee', '2024-07-31 02:56:26'),
('minoligeethma@gmail.com', '8a8cf244ab0aa03ee704404378912cc00f090edb04cce7c4a9a82927e317c615', '2024-07-31 02:56:49'),
('minoligeethma@gmail.com', 'c611270f39767ec1f407a1e7808fae98921b571cce460a2448b467ac3c4f069d', '2024-07-31 02:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE `support_ticket` (
  `ticketid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sent_date` date DEFAULT current_timestamp(),
  `isactive` bit(1) NOT NULL DEFAULT b'1',
  `last_updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_ticket`
--

INSERT INTO `support_ticket` (`ticketid`, `userid`, `title`, `description`, `sent_date`, `isactive`, `last_updated_date`) VALUES
(1, 1, 'Test', 'Test', '2024-07-26', b'1', NULL),
(2, 1, 'Test 02', 'Test 02', '2024-07-26', b'0', NULL);

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
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `userid`, `title`, `content`, `posted_date`, `image`, `isactive`, `last_updated_date`) VALUES
(1, 1, 'John Smith - CEO at Tech Innovations Ltd', 'Working with Konnexio has been a game-changer for our business. Their expertise in automation has not only improved our efficiency but also increased our production capacity. The team\'s commitment to excellence and customer satisfaction is unparalleled.', '2024-07-12', 'Image5a.jpg', 1, '2024-07-29 19:24:14'),
(2, 1, 'Jane Doe - CEO, Example Corp', 'Amazing experience. The team went above and beyond to deliver results', '2024-07-12', 'Image5b.jpg', 1, NULL),
(3, 1, 'Emily Johnson - Product Lead, Demo Inc', 'The quality of work is outstanding. We couldn’t be happier!', '2024-07-30', NULL, 1, NULL),
(4, 1, 'Jane Doe - CEO, Example Corp', 'This is the best service we’ve ever used. Highly recommend it to anyone!', '2024-07-30', NULL, 1, NULL);

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
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `first_name`, `last_name`, `roleid`, `contact_no`, `email`, `Gender`, `Address`, `isactive`, `last_updated_date`) VALUES
(1, 'Geethma', 'Manikkuwahandi', 1, 4375534698, 'minoligeethma@gmail.com', 'Male', 'London, ON', 1, NULL),
(3, 'Gaby', 'Manikkuwahandi', 1, 4375534698, 'gaby@gmail.com', 'Female', '186, King Street', 1, '2024-08-01 03:31:13'),
(4, 'Laine', 'Manikkuwahandi', 1, 4375534698, 'laine@gmail.com', 'Female', '186, King Street', 0, '2024-08-01 03:18:32'),
(5, 'Amber', 'Sharmila', 1, 771959329, 'amber@gmail.com', 'Male', '37/A, Modara Dewala Road', 1, '2024-07-31 22:07:14'),
(6, 'Amber', 'Sharmila', 1, 771959329, 'ambr@gmail.com', 'female', '37/A, Modara Dewala Road', 1, NULL),
(7, 'Minoli', 'Manikkuwahandi', 2, 4375534698, 'geethma@gmail.com', 'Male', '186, King Street', 1, '2024-07-31 22:14:45'),
(8, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'miligeethma@gmail.com', 'male', '186, King Street', 1, NULL),
(9, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'minoligeet@gmail.com', 'male', '186, King Street', 1, NULL),
(10, 'Minoli', 'Sharmila', 1, 771959329, 'minoeethma@gmail.com', 'male', '37/A, Modara Dewala Road', 1, NULL),
(11, 'Shiv', 'Silva', 1, 4375534698, 'shiv@gmail.com', 'male', '186, King Street', 1, NULL),
(12, 'Saikat', 'Datta', 1, 771959329, 'saikat@gmail.com', 'male', '37/A, Modara Dewala Road', 1, NULL),
(13, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'minolia@gmail.com', 'male', '186, King Street', 1, NULL),
(14, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'ma@gmail.com', 'male', '186, King Street', 1, NULL),
(16, 'Xingby', 'Xingby', 1, 4375534698, 'zhaixingbi@gmail.com', 'Male', '186, King Street', 1, '2024-07-29 00:00:00'),
(17, 'kasunath', 'silva', 2, 4375534698, 'kasunathlakmal.s@gmail.com', 'male', '186, King Street', 1, NULL),
(18, 'Spu', 'Manikkuwahandi', 2, 4375534698, 'sdea@gmail.com', 'other', '186, King Street', 1, NULL);

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
  `last_updated_date` datetime DEFAULT NULL,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`credential_id`, `userid`, `username`, `password`, `created_date`, `last_updated_date`, `expiry_date`) VALUES
(1, 1, 'minolisharmila', '$2y$10$biCk/so9AgEqAaXfm92idOPX5cHP1el/mLVg5uUYrASN3sC6jqdSq', '2024-07-10', '2024-07-10 00:00:00', NULL),
(2, 3, 'konnexio', '$2y$10$LIwsy0fwllb3WLkBSqOJVuFbENLdWIEWmf3TVsVSjw3QUWYtINh/m', '2024-07-10', NULL, NULL),
(3, 4, 'laine', '$2y$10$c9RcVEhvHuZxpdT9Bb57EOqZ3J9KqwtuaTP7qZ28lfmSqYhZS5XTC', '2024-07-10', '2024-07-10 00:00:00', NULL),
(4, 5, 'amber', '$2y$10$dy1.LYqig.VamX2OZun6ZemKVvCax5BpaoipJR80WRPuRB6fGTZwm', '2024-07-10', NULL, NULL),
(5, 6, 'amber', '$2y$10$ATyMGdzpQV5BpnDHJC2HH.4x/4u8lRcOEDVqw7Glc/pnrH0H2HqDe', '2024-07-10', NULL, NULL),
(6, 7, 'minolisharmila', '$2y$10$yan/Ct.MzMbErid6lpkLdOVKpipzROYdCIq8EIBnCdRdfgEaSKRqK', '2024-07-10', NULL, NULL),
(7, 8, 'minoli', '$2y$10$bBDvg4LBLMGZS9iLL1uOtuoR4hZ917t86VyVqu3uWQ7IKJj3lYN8y', '2024-07-10', NULL, NULL),
(8, 9, 'minolisharmila', '$2y$10$HusmvqqWiBhTRfyXliuRG.YlDy5D3qN05dNGu6e1fMtdhh8h9ShYC', '2024-07-10', NULL, NULL),
(9, 10, 'minoli', '$2y$10$dIKJZ0yLkR3FjDu2H/Qcb.wvwpRSI6HlTy2ZXSF5Yxsw36uTFHIAS', '2024-07-10', NULL, NULL),
(10, 11, 'shiv', '$2y$10$r0MWjZ8ib/h7gqFE4kXEIOPl/oC54JYHPv.aSvr7l3hFafqZ1JxBq', '2024-07-10', NULL, NULL),
(11, 12, 'saikat', '$2y$10$RATzw5prr7sRnTMR.4uJZOE3VUuApVZDDx0SMgEmvAVVt2fp53C2C', '2024-07-10', NULL, NULL),
(12, 13, 'minoli', '$2y$10$35lnXmsL6VuQJLnoOozgIOkoghWK10WvSEqNQ3bWsaZcZSKFXQxHO', '2024-07-10', NULL, NULL),
(13, 14, 'se', '$2y$10$yMB1ajCNbMbbOi9Pwd3OQuaFYO1VBzNIsMRUL4.UlZCXtV6UdsfWW', '2024-07-10', NULL, '2024-07-13'),
(15, 16, 'xingby', '$2y$10$5DzLhNv1HkiYUvZeA84LYuTKubKSDMrCuKvK8mSBzVEID3LJL2AZq', '2024-07-29', NULL, '2024-08-01'),
(16, 17, 'kasunath', '$2y$10$wcfLiV3sXTR9k2qT/6rOVegfN0F3cM6iIfITJ/UMM1cnnSaLYBE0K', '2024-07-31', NULL, '2024-08-03'),
(17, 18, 'swe', '$2y$10$EoDHzHDjdl22S6fl.IYVTuj401eaYVqTivGLoYMF3NIptJHQHqkvm', '2024-08-01', NULL, '2024-08-04');

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
  MODIFY `careerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `support_ticket`
--
ALTER TABLE `support_ticket`
  MODIFY `ticketid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `credential_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
