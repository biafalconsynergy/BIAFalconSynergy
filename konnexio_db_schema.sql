-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 08:18 PM
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
(2, 1, 'QA Engineer', '*Develops and maintains scalable data pipelines and builds out new integrations to support continuing increases in data volume and complexity.\r\n*Collaborates with analytics and business teams to improve data models that feed business intelligence tools, increasing data accessibility and fostering data-driven decision making across the organization.\r\n*Implements processes and systems to monitor data quality, ensuring production data is always accurate and available for key stakeholders and business processes that depend on it.\r\n*Writes unit/integration tests, contributes to engineering wiki, and documents work.\r\n*Performs data analysis required to troubleshoot data related issues and assist in the resolution of data issues.\r\n*Works closely with a team of frontend and backend engineers, product managers, and analysts.\r\n*Defines company data assets (data models), documentation, transformation jobs to populate data models.\r\n*Designs data integrations and data quality framework.\r\n*Designs and evaluates open source and vendor tools for data lineage.\r\n*Works closely with all business units and engineering teams to develop strategy for long term data platform architecture.', '2024-07-12', 1, '2024-08-02 14:41:50'),
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
(1, 1, 'Automotive Hinge Assembly', 'Explore KONNEXIO\'s custom automation solutions for assembling automotive hinges, where tailored machine designs and seamless integration bring your project vision to life, ensuring optimal production efficiency.', '2024-08-12', 'cs_Image1.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></script>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>'),
(2, 1, 'Automotive Door Checker Assembly', 'Experience KONNEXIO\'s expertise in custom automation, crafting and integrating tailored solutions for automotive door checker assembly to ensure precise and efficient operation.', '2024-08-12', 'cs_Image2.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(3, 1, 'Automotive Fuel Line Assembly & Testing', 'Trust KONNEXIO to deliver custom automation for automotive fuel line assembly and testing, combining expert machine design with efficient project management for superior quality and safety.', '2024-08-12', 'cs_Image3.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(4, 1, 'Automotive Plug Seal Assembly & Testing', 'KONNEXIO offers custom automation solutions for plug seal assembly and testing, transforming your vision into reality with seamless integration and optimized production.', '2024-08-12', 'cs_Image4.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(5, 1, 'Automotive Fuel Line Assembly', 'Leverage KONNEXIO\'s custom automation to enhance your automotive fuel line assembly process, ensuring top-tier efficiency and quality through tailored machine designs.', '2024-08-12', 'cs_Image5.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(6, 1, 'Automotive Transmission Line Assembly', 'KONNEXIO provides bespoke automation solutions for transmission line assembly, ensuring seamless integration and maximum efficiency in your automotive production line.', '2024-08-12', 'cs_Image6.jpg', 0, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(7, 1, 'Locomotive Brake Handle Tester', 'Rely on KONNEXIO\'s custom automation expertise for testing locomotive brake handles, with machine designs tailored to your specifications and integrated for peak performance.', '2024-08-12', 'cs_Image7.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n'),
(8, 1, 'Hybrid Automotive Sensor Tester', 'KONNEXIO transforms your vision with custom automation for hybrid automotive sensor testing, ensuring precise, efficient operation with seamless integration.', '2024-08-12', 'cs_Image8.jpg', 1, '2024-08-12 21:03:47', '<script charset=\"utf-8\" type=\"text/javascript\" src=\"//js.hsforms.net/forms/embed/v2.js\"></cript>\r\n<script>\r\n  hbspt.forms.create({\r\n    region: \"na1\",\r\n    portalId: \"46894280\",\r\n    formId: \"a1580df7-b785-454f-9de7-02aba0300988\"\r\n  });\r\n</script>\r\n');

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
  `event_date` date DEFAULT NULL,
  `posted_date` date DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `last_updated_date` datetime DEFAULT NULL,
  `URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`newsid`, `userid`, `title`, `location`, `content`, `content_type`, `event_date`, `posted_date`, `image`, `isactive`, `last_updated_date`, `URL`) VALUES
(2, 1, 'Manufacturing Matters 2024', 'RBC Place London 300 York St, London, ON N6B 1P8', 'The London Economic Development Corporation in partnership with London Region Manufacturing Council are pleased to present Manufacturing Matters.', 'News', '2024-10-03', '2024-08-03', 'Manufacturing_Matters.png', 1, '2024-08-12 16:16:25', 'https://www.ledc.com/event/manufacturing-matters-2024'),
(3, 1, 'Ontario’s Manufacturing Workforce Is Regaining Lost Ground As Broader Economy Cools', 'NULL', 'A new report by Canadian Manufacturers & Exporters (CME) says Ontario’s manufacturing workforce is expected to accelerate, driven by investments in Southwestern Ontario, as evidenced by recent announcements from firms, including Honda, BWXT, Stellantis and Volkswagen.', 'News', '0000-00-00', '2024-05-09', 'Manufacturing_Matters.png', 1, '2024-05-09 00:00:00', 'https://cme-mec.ca/blog/ontarios-manufacturing-workforce-is-regaining-lost-ground/'),
(6, 1, 'ss', 'ss', 'ss', 'News', '0000-00-00', '2024-08-12', '2024-08-07', 1, NULL, 'ss'),
(7, 1, 'ssa', 'London ontario ', 'ssa', 'News', '0000-00-00', '2024-08-12', '2024-08-13', 1, NULL, 'ssa'),
(8, 1, 'aa', 'aa', 'aa', 'News', '0000-00-00', '2024-08-12', '2024-08-07', 1, NULL, 'aa'),
(9, 1, 'ww', 'ww', 'ww', 'News', '0000-00-00', '2024-08-12', 'image.png', 1, NULL, 'ww'),
(10, 1, 'rr', 'rr', 'rr', 'News', '0000-00-00', '2024-08-12', 'Image1a.jpg', 1, NULL, 'rr'),
(11, 1, 'yy', 'London ontario ', 'yy', 'News', '2024-08-01', '2024-08-12', 'image.png', 1, NULL, 'yy');

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
('minoligeethma@gmail.com', 'c611270f39767ec1f407a1e7808fae98921b571cce460a2448b467ac3c4f069d', '2024-07-31 02:58:22'),
('minoligeethma@gmail.com', 'ccd531506db8ad0809790a86a7786132366239ed9bae50326e5f2fe5ebd87cd0', '2024-08-03 01:11:59'),
('minoligeethma@gmail.com', '529a67c9ec1331893f54ea585d87b32d7b9263969ff319f9e55eae3ed94d92d5', '2024-08-03 01:18:08'),
('minoligeethma@gmail.com', '27a48b6d0782d979970aaa5e311c0ecb5ceb54d591dac263360270fdfc13d5e8', '2024-08-03 01:20:26'),
('minoligeethma@gmail.com', '3555a99bf32f6e3f1d03aba316071bdcf6db1c418e2c6913ed6959710e2e9822', '2024-08-03 01:24:04'),
('minoligeethma@gmail.com', 'ed1f058d71ea338052d62069abed22514c2afef68866f3c6e9689607d5e89234', '2024-08-03 01:54:46'),
('minoligeethma@gmail.com', '0ba55578de2f19587b7a5924d19bb5bea9a5c003bde157fca43edf06b11d6c87', '2024-08-03 02:13:34'),
('minoligeethma@gmail.com', '4a1568825f4c31e30b821689b34219d31e74bb03e48b00ca95d946930c71c87c', '2024-08-03 02:17:10'),
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
('minoligeethma@gmail.com', 'c611270f39767ec1f407a1e7808fae98921b571cce460a2448b467ac3c4f069d', '2024-07-31 02:58:22'),
('minoligeethma@gmail.com', 'ccd531506db8ad0809790a86a7786132366239ed9bae50326e5f2fe5ebd87cd0', '2024-08-03 01:11:59'),
('minoligeethma@gmail.com', '529a67c9ec1331893f54ea585d87b32d7b9263969ff319f9e55eae3ed94d92d5', '2024-08-03 01:18:08'),
('minoligeethma@gmail.com', '27a48b6d0782d979970aaa5e311c0ecb5ceb54d591dac263360270fdfc13d5e8', '2024-08-03 01:20:26'),
('minoligeethma@gmail.com', '3555a99bf32f6e3f1d03aba316071bdcf6db1c418e2c6913ed6959710e2e9822', '2024-08-03 01:24:04'),
('minoligeethma@gmail.com', 'ed1f058d71ea338052d62069abed22514c2afef68866f3c6e9689607d5e89234', '2024-08-03 01:54:46'),
('minoligeethma@gmail.com', '0ba55578de2f19587b7a5924d19bb5bea9a5c003bde157fca43edf06b11d6c87', '2024-08-03 02:13:34'),
('minoligeethma@gmail.com', '4a1568825f4c31e30b821689b34219d31e74bb03e48b00ca95d946930c71c87c', '2024-08-03 02:17:10'),
('minoligeethma@gmail.com', '571b58da53749a32f7194532a652c2f196cf977af79bc3ddf9cf9c0b25d61993', '2024-08-13 00:19:21'),
('minoligeethma@gmail.com', '39539b5011f9ff9969c83db7b207a32d87ef937fee2ff80a302232424db1fde1', '2024-08-13 00:36:04'),
('minoligeethma@gmail.com', 'c356f2986c32e98cc13ca27810e4dd904195823fa642d6e5f3338f7f59962cb9', '2024-08-13 00:43:17'),
('minoligeethma@gmail.com', '11fc4f352c6085405f56354b4ac0b5b6faedd15d2bfea597c2b97964bae5002d', '2024-08-13 00:43:20'),
('minoligeethma@gmail.com', '23580dde90b99e26b22fce5a3fe970a3bc9dd63c08bdf903ea40c1a2cd17e205', '2024-08-13 00:43:30'),
('minoligeethma@gmail.com', 'f07670dadc37e15054f6d31de9297de4af9937389a837ab59dce652fe9632c3b', '2024-08-13 00:44:05'),
('minoligeethma@gmail.com', 'c1f454bade4bb7bf6eba88f95f38b541598ac14abe9139c5720f6cad8aeeab21', '2024-08-13 00:44:16'),
('minoligeethma@gmail.com', 'f1b1f03f74800268f8bf6869dfec9a7b8e065b9f88d4cb3129bac4cbe7fcddae', '2024-08-13 00:45:49'),
('minoligeethma@gmail.com', 'eaaec07afafe283b5d62644151c8cd54620ad86e8ef46a271704260319a63588', '2024-08-13 00:48:07');

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
(2, 1, 'Test 02', 'Test 02', '2024-07-26', b'0', '2024-08-02 16:48:14');

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
(2, 1, 'Emily Harris - Operations Manager at AutoTech Corp', 'Konnexio\'s custom automation solutions have transformed our production line. Their innovative approach and attention to detail allowed us to streamline our processes and significantly reduce our time-to-market. The team was incredibly professional.', '2024-07-12', 'Image5a.jpg', 1, '2024-07-29 19:24:14'),
(3, 1, 'John Smith - CEO at Tech Innovations Ltd', 'Working with Konnexio has been a game-changer for our business. Their expertise in automation has not only improved our efficiency but also increased our production capacity. The team\'s commitment to excellence and customer satisfaction is unparalleled.', '2024-07-12', 'Image5b.jpg', 1, '2024-07-29 19:27:22'),
(4, 1, 'Sarah Johnson - Production Manager at Industrial Solutions Inc', 'Konnexio\'s automation solutions have revolutionized our manufacturing process. Their tailored approach and cutting-edge technology have significantly boosted our productivity and reduced operational costs. The team\'s dedication was evident throughout the project.', '2024-07-12', 'Image5b.jpg', 1, '2024-07-29 19:29:44');

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
(1, 'Geethma', 'Manikkuwahandi', 1, 4375534698, 'minoligeethma@gmail.com', 'Male', 'London, ON', 1, '2024-08-02 16:44:48'),
(3, 'Gaby', 'Manikkuwahandi', 2, 4375534698, 'gaby@gmail.com', 'Female', '186, King Street', 1, '2024-08-05 19:10:25'),
(4, 'Laine', 'Manikkuwahandi', 2, 4375534698, 'laine@gmail.com', 'Female', '186, King Street', 1, '2024-08-02 13:44:55'),
(5, 'Amber', 'Sharmila', 2, 771959329, 'amber@gmail.com', 'Male', '37/A, Modara Dewala Road', 0, '2024-08-02 16:45:23'),
(6, 'Amber', 'Sharmila', 1, 771959329, 'ambr@gmail.com', 'female', '37/A, Modara Dewala Road', 1, NULL),
(7, 'Minoli', 'Manikkuwahandi', 2, 4375534698, 'geethma@gmail.com', 'Male', '186, King Street', 1, '2024-07-31 22:14:45'),
(8, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'miligeethma@gmail.com', 'male', '186, King Street', 1, NULL),
(9, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'minoligeet@gmail.com', 'male', '186, King Street', 1, NULL),
(10, 'Minoli', 'Sharmila', 1, 771959329, 'minoeethma@gmail.com', 'male', '37/A, Modara Dewala Road', 1, '2024-08-02 13:46:33'),
(11, 'Shiv', 'Silva', 1, 4375534698, 'shiv@gmail.com', 'male', '186, King Street', 1, '2024-08-02 13:46:37'),
(12, 'Saikat', 'Datta', 1, 771959329, 'saikat@gmail.com', 'male', '37/A, Modara Dewala Road', 1, '2024-08-02 16:45:31'),
(13, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'minolia@gmail.com', 'male', '186, King Street', 1, '2024-08-02 13:46:24'),
(14, 'Minoli', 'Manikkuwahandi', 1, 4375534698, 'ma@gmail.com', 'male', '186, King Street', 0, '2024-08-02 16:44:53'),
(16, 'Xingby', 'Xingby', 1, 4375534698, 'zhaixingbi@gmail.com', 'Male', '186, King Street', 1, '2024-07-29 00:00:00'),
(17, 'kasunath', 'silva', 1, 4375534698, 'kasunathlakmal.s@gmail.com', 'Male', '186, King Street', 1, '2024-08-02 16:55:01'),
(18, 'Spu', 'Manikkuwahandi', 2, 4375534698, 'sdea@gmail.com', 'other', '186, King Street', 1, NULL),
(19, 'Dilini', 'Sharmila', 2, 4375534698, 'dilinisharmila@gmail.com', 'male', '186, King Street', 0, '2024-08-02 16:47:44'),
(20, 'Hansi', 'Manikkuwahandi', 1, 4375534698, 'hansi@gmail.com', 'male', '186, King Street', 1, NULL),
(21, 'sd', 'Sharmila', 1, 771959329, 'se@gmail.com', 'male', '37/A, Modara Dewala Road', 0, '2024-08-02 17:50:45');

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
(1, 1, 'minolisharmila', '$2y$10$9uK9puQ3QmstSVctWdtcNuzNzJats4xkzOhLIe6gTCVtpockvRiwu', '2024-07-10', '2024-07-10 00:00:00', NULL),
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
(16, 17, 'kasunath', '$2y$10$XH8THkO.w98uZ3k/oGobX.BEvNx2sP/IRhcGwsc/qmVdRcUnKyVZu', '2024-07-31', NULL, '2024-08-03'),
(17, 18, 'swe', '$2y$10$EoDHzHDjdl22S6fl.IYVTuj401eaYVqTivGLoYMF3NIptJHQHqkvm', '2024-08-01', NULL, '2024-08-04'),
(18, 19, 'dilini', '$2y$10$FX0wmWctX3.R3pvvxIh31eVMqipCSO0w7ugv9Cc69HPeD0lLVcpS.', '2024-08-02', NULL, '2024-08-05'),
(19, 20, 'hansi', '$2y$10$gBjliJZCDfwuG1rnZy4AwOApAi9Q0t8OGNVGUqBosq5EA2YFiewsi', '2024-08-02', NULL, '2024-08-05'),
(20, 21, 'qas', '$2y$10$/80D9IjePynjyc9sWGAkm.hvTqLRK/w5GHuHhOnB0pFzgRGzVa8Ra', '2024-08-02', NULL, '2024-08-05');

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
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `credential_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
