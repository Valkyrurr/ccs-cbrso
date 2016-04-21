-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2016 at 06:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rso`
--

-- --------------------------------------------------------

--
-- Table structure for table `rso-advisers`
--

CREATE TABLE IF NOT EXISTS `rso-advisers` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `rso-advisers`
--

INSERT INTO `rso-advisers` (`id`, `first_name`, `middle_name`, `last_name`) VALUES
(1, 'Gerardo', 'S', 'Doroja'),
(2, 'Meldie', 'A', 'Apag'),
(3, 'Joseph Anthony', 'C', 'Sabal'),
(4, 'Rhea Suzette', 'B', 'Mocorro'),
(5, 'Cristina Amor', 'T', 'Cajilla'),
(6, 'Harriet', 'B', 'Fernandez'),
(7, 'Rozaldy', 'A', 'Gutierrez'),
(8, 'Maria Ramila', 'I', 'Jimenez'),
(9, 'Jun Rangie', 'C', 'Obispo'),
(10, 'Fren Marlon', 'B', 'Peralta'),
(11, 'Shayryl Mae', 'L', 'Ramos'),
(12, 'Herabelle', 'M', 'Villanueva'),
(13, 'Elvira', 'B', 'Yaneza'),
(14, 'Patrick', 'J', 'Mack'),
(15, 'Francis Lee', 'B', 'Mondia'),
(16, 'Melanie', 'D', 'Atienza'),
(17, 'Francis Joshua', 'C', 'Arrabaca'),
(18, 'Sheila', 'E', 'Dimasuhid'),
(19, 'David Mark', 'R', 'Pestano'),
(20, 'Jordan', 'K', 'CaÃ±ete');

-- --------------------------------------------------------

--
-- Table structure for table `rso-areas`
--

CREATE TABLE IF NOT EXISTS `rso-areas` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `areas` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rso-areas`
--

INSERT INTO `rso-areas` (`id`, `areas`) VALUES
(1, 'Intelligent Information Systems'),
(2, 'Mobile Application'),
(3, 'Wireless Computing'),
(4, 'Education'),
(5, 'Entertainment Computing');

-- --------------------------------------------------------

--
-- Table structure for table `rso-research-titles`
--

CREATE TABLE IF NOT EXISTS `rso-research-titles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `research_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `theme_id` tinyint(4) DEFAULT NULL,
  `area_id` tinyint(4) DEFAULT NULL,
  `adviser_id` tinyint(4) DEFAULT NULL,
  `year_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `theme_id` (`theme_id`),
  KEY `area_id` (`area_id`),
  KEY `adviser_id` (`adviser_id`),
  KEY `year_id` (`year_id`),
  FULLTEXT KEY `research_title` (`research_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=91 ;

--
-- Dumping data for table `rso-research-titles`
--

INSERT INTO `rso-research-titles` (`id`, `research_title`, `theme_id`, `area_id`, `adviser_id`, `year_id`) VALUES
(1, 'Agricultural Application of Price Monitoring System', NULL, NULL, 3, 1),
(2, 'A Web Directory Service for Children with Special Needs', NULL, NULL, 4, 1),
(3, 'The Ontology Layer for the Distributed Registry of Children with Special Needs', NULL, NULL, 10, 1),
(4, 'Augmenting Student and Teacher Interaction through Mobile Devices', NULL, NULL, 3, 1),
(5, 'A Method for Generating an Interactive Map Using Open-Source GIS Tools', NULL, NULL, 3, 1),
(6, 'Software Framework for Secure Online Transaction Using Public Key Cryptography', NULL, NULL, 1, 1),
(7, 'Performance Testing of a Flash-Enhanced Netbook', NULL, NULL, 8, 1),
(8, 'Traffic Light Analysis, Design and Implementation for Unsignalized Intersections', NULL, NULL, 13, 1),
(9, 'A Data Aggregator for the Heterogeneous Distributed Databases', NULL, NULL, 15, 1),
(10, 'A Digital Map of Northern Mindanao', NULL, NULL, 7, 1),
(11, 'A Data Aggregator for a Distributed Health Research and Development Information System', NULL, NULL, 1, 1),
(12, 'Generating Alternative Routes of Minimal Distances with Road Network Graphical Method of Cagayan de Oro', NULL, NULL, 13, 1),
(13, 'Enterprise Learning System for Farmer''s Training', NULL, NULL, NULL, 1),
(14, 'The Implementation and Evaluation of a Customized User Interface for the Graduate School E-Learn System', NULL, NULL, 18, 1),
(15, 'The Implementation and Evaluation of Chat Application in E-Learning System', NULL, NULL, NULL, 1),
(16, 'The Design Development and Implementation of a Phonetic Multimedia System for Preschool Pupils', NULL, NULL, 2, 1),
(17, 'Development and Implementation of Multimedia System Used in History Class', NULL, NULL, NULL, 1),
(18, 'Design, Development and Evaluation of Computer Aided Instruction for Hearing Impaired Students', NULL, NULL, 18, 1),
(19, 'Development and Evaluation of an Interactive Multimedia Quiz Show', NULL, NULL, NULL, 1),
(20, 'Development and Evaluation of a Website with Streaming Video Recorded Lectures Implementing a Website with Streaming Video Recorded Lectures', NULL, NULL, NULL, 1),
(21, 'Web-Based Information Technology Infrastructure Inventory Tracking System', NULL, NULL, 10, 1),
(22, 'Evaluating the Effectivity and Usability of a Phonetic Multimedia System for Preschool Pupils', NULL, NULL, 2, 1),
(23, 'The Usability of Implementing Web Based Instructional Tool in Multimedia Aided Classroom among Students', NULL, NULL, NULL, 1),
(24, 'Visual Studio Advisor Tool', NULL, NULL, 5, 1),
(25, 'Use of Fedora Scripts for Academic Data Mining', NULL, NULL, 5, 1),
(26, 'A Design and Development of a Male Human Visual Learning System', NULL, NULL, 2, 2),
(27, 'An Android Native Application User Interface Design for Moodle', NULL, NULL, 2, 2),
(28, 'A Sahana Eden Monetary Donation Management Module with Online Payment Support', NULL, NULL, 1, 2),
(29, 'Sahana Eden Person Registry with Linked Data Enhancement', NULL, NULL, 1, 2),
(30, 'A Community-Based Virtual Hub of the Agricultural Sector in Mindanao', NULL, NULL, 6, 2),
(31, 'A Game-Based Technique for Point of Sale System', NULL, NULL, NULL, 2),
(32, 'Framework for Sahana Inventory Module for Relief Operation in Mobile Platform', NULL, NULL, 7, 2),
(33, 'Dimensional Analysis on Map Using Quantum GIS', NULL, NULL, 7, 2),
(34, 'Development and Evaluation of a Website with Streaming Video Recorded Lectures and Downloadable Reading Materials', NULL, NULL, NULL, 2),
(35, 'A Framework of an Interactive Quiz Show for Tablet PC', NULL, NULL, NULL, 2),
(36, 'A Mobile Online Public Access Catalog Website for Mobile Devices with Floor Map Capabilities Using Koha Integrated Library System', NULL, NULL, 8, 2),
(37, 'A High Performance Database Server System Architecture for Mobile Cross Platform Bookstore Application', NULL, NULL, 8, 2),
(38, 'Customization of OpenEMR v4.1.0 for University Clinics', NULL, NULL, 8, 2),
(39, 'A Method for Aggregating Heterogeneous Distributed Databases', NULL, NULL, 15, 2),
(40, 'Towards Localization of Ontology for Disaster Response in the Philippines', NULL, NULL, 10, 2),
(41, 'A Synchronization Framework of a Homogeneous Distributed Database', NULL, NULL, 10, 2),
(42, 'Using Agent-Based Modelling and Low-Cost Robotics Board in Water Level Monitoring', NULL, NULL, 11, 2),
(43, 'The Usability of Kathya Video Platform for Campus Online Media Library', NULL, NULL, 11, 2),
(44, 'Comparative Heuristic Usability Evaluation of Alphanumeric and Image-Based Graphical Passwords on Mobile Devices', NULL, NULL, NULL, 2),
(45, 'A Method for Embedding Agricultural Data to an Interactive Map using Open Source GIS Tools', NULL, NULL, 3, 2),
(46, 'Application of Charting and Multi Crop Inquiry in Agricultural Price Monitoring System', NULL, NULL, 3, 2),
(47, 'Development of a Web-Based Traffic Accident Management Information System', NULL, NULL, 13, 2),
(48, 'A Design of an Exclusive Route Network Model using Floyd''s Algorithm for Disaster Response Vehicles', NULL, NULL, 13, 2),
(49, 'A Road Intersection Analysis System for Signalized and Unsignalized Road Intersections', NULL, NULL, 13, 2),
(50, 'Development of an Ontology for Information Discovery for Universities', NULL, 1, 9, 3),
(51, 'Interfacing University Schedule and Student Administration System', NULL, 4, 6, 3),
(52, 'A Calendar-Based Approach for E-Marketing in Agriculture', 1, 1, 6, 3),
(53, 'A Knowledge Representation of the Scheduling Domain in Prolog', NULL, 1, 1, 3),
(54, 'A User-Friendly Interface for Xavier Ecoville Management Information System', 3, 1, 5, 3),
(55, 'Knowledge Tool for Moodle Using Bayesian Interface Network', NULL, 4, 11, 3),
(56, 'A Synchronization Architecture for Distributed Heterogeneous Databases', NULL, 1, 10, 3),
(57, 'A Web-Based Agro-Enterprise Plan', 1, 1, 3, 3),
(58, 'GIS Web-Based Information Processing System of Road Accident and Disaster Automated Relay', 3, 1, 13, 3),
(59, 'A High Throughput SMS Querying System for Agricultural Price Monitoring System', 1, 2, 15, 3),
(60, 'Agent-Based Simulation of Population Evacuation as Disaster Mitigation', 3, 1, 13, 3),
(61, 'Mobile Cross Platform Application with Mobile First Responsive Web Design Optimization', NULL, 2, 8, 3),
(62, 'A Development of a Male Human Body Interactive Learning System', 2, 4, 12, 3),
(63, 'An Android Application which Supports Uploading for Moddle', NULL, 2, 12, 3),
(64, 'Classification of Ontology-Based Expert System for Child Developmental Disorders', 2, 1, 9, 3),
(65, 'Road Network in XML Format: A Resource for Disaster Evacuation and Traffic Simulation Studies', 3, 1, 13, 3),
(66, 'Comparative Evaluation of Timetabling Software', NULL, 1, 4, 3),
(67, 'A Compact Open EMR for University Clinics using v4.2', 2, 1, 8, 3),
(68, 'Teacher Evaluation: Online Analytics of Results', NULL, 4, 4, 3),
(69, 'Crime Mapping Analytics System for Cagayan de Oro-Philippine National Police', 5, 1, 5, 3),
(70, 'An Agent-Based Modelling and Simulation of Human Behavior During Crowd Disorder', 3, 1, 11, 3),
(71, 'A Comparative Study Between Relational and Network Databases for Profiling System', NULL, 1, 5, 3),
(72, 'A Pilot Implementation of the Initime Constraint Timetabling System for a Universtiy', NULL, 1, 1, 3),
(73, 'Development of a Mobile Retrieval Application of Parishioner Information', 3, 2, 7, 3),
(74, 'Localized Ontology for the Traffic System Domain', 3, 1, 9, 4),
(75, 'Library Augmented Reality Assistant: An Evaluation of an Assistive Augmented Reality System for Library Users', NULL, 1, 9, 4),
(76, 'Handling Soft Constraints for University Scheduling in Prolog', NULL, 1, 1, 4),
(77, 'Crowdfunding Web Application for Disaster Relief and Poverty Reduction', 3, 1, 1, 4),
(78, 'Alumni Associations Comparison and Analysis Through Data Sketching and Ontologies Using Web Resources', NULL, 1, 5, 4),
(79, 'A Comparative Study Using Brand Authority and Domain Authority to Increase Page Rank in Bing Platform', NULL, 1, 5, 4),
(80, 'Crime Mapping System with Analytics through Crowd Sourcing', 5, 1, 12, 4),
(81, 'A Relative Study: Relational Database Versus Document-Oriented Database for Jeepney Operators Profiling System', 3, 1, 12, 4),
(82, 'Advertising Implementation of an E-Commerce Using Apriori Algorithm for Data Mining', NULL, 1, 4, 4),
(83, 'Ontology-Based Services to Help Solving the Heterogeneity Problem in E-Commerce Negotiations', NULL, 1, 4, 4),
(84, 'Web-Based Real-Time Traffic Information System of CDO Central Business District Area', 3, 1, 13, 4),
(85, 'Web-Based Information Response System for Emergency Response Vehicles and Medical Experts', 3, 1, 13, 4),
(86, 'High Performance Database System for Enterprise Application', NULL, 1, 8, 4),
(87, 'Cloud-Based Cross-Platform Mobile Application for Bookcenter Supplies Management System', NULL, 2, 8, 4),
(88, 'An Interface for Synchronizing Moodle University Student IS', NULL, 1, 3, 4),
(89, 'Agent-Based Model of Micro-algal Biomass', 4, 1, 11, 4),
(90, 'Community-Based Mobile Application', 3, 2, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rso-researchers`
--

CREATE TABLE IF NOT EXISTS `rso-researchers` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `thesis_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `thesis_id` (`thesis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=113 ;

--
-- Dumping data for table `rso-researchers`
--

INSERT INTO `rso-researchers` (`id`, `first_name`, `middle_name`, `last_name`, `thesis_id`) VALUES
(1, 'Shiela Mae', '', 'Fernandez', 1),
(2, 'Reonel', '', 'Labay', 1),
(3, 'Ailene Mei', '', 'Salva', 1),
(4, 'Levin', '', 'Tacandong', 1),
(5, 'John Mart', '', 'Etom', 2),
(6, 'Timothy', '', 'Galupo', 2),
(7, 'William James', '', 'Mabelin', 2),
(8, 'Prince', '', 'Pelisco', 2),
(9, 'Rene', '', 'Co Jr', 3),
(10, 'Jun Rangie', '', 'Obispo', 3),
(11, 'Daryl', 'Miral', 'Verula', 3),
(12, 'Jessie Criz', '', 'Vicerra', 3),
(13, 'Donna Belle', '', 'Borja', 4),
(14, 'David', '', 'Graves', 4),
(15, 'Jonnas Tristan', '', 'Porminal', 4),
(16, 'Josie', '', 'Resma', 4),
(17, 'Victor Mikhail', '', 'Abalde', 5),
(18, 'Joshua Karlo', '', 'Arban', 5),
(19, 'Charles Darell', '', 'Pagaling', 5),
(20, 'Joed Ryan', '', 'Pit', 5),
(21, 'Joie Ann', '', 'Maghanoy', 6),
(22, 'Mary Joy', '', 'Meca', 6),
(23, 'Maurice James', '', 'Sepe', 6),
(24, 'Michael Dave', '', 'Tan', 6),
(25, 'Carla Dexie', '', 'Amantes', 7),
(26, 'Alyssa', '', 'Cabili', 7),
(27, 'Annette Marina', '', 'Chua', 7),
(28, 'Harold Ian', '', 'Silve', 7),
(32, 'Richelieu', '', 'Abarrientos', 8),
(33, 'Carvy Jan Michell', '', 'Catalan', 8),
(34, 'Alistair', '', 'Ponce', 8),
(35, 'Ruben', '', 'Armada', 9),
(36, 'Cecilio Joel James', '', 'Espadilla', 9),
(37, 'Francis', '', 'Margos', 9),
(38, 'David', '', 'Pestano', 9),
(39, 'Harold', '', 'Gomez', 10),
(40, 'Van Rencci', '', 'Llmas', 10),
(41, 'Ivan Glenn', 'G', 'Nercuit', 10),
(42, 'Emman Bjorn', '', 'Sale', 10),
(43, 'Louie', '', 'Binondo', 11),
(44, 'Donnel Moises', '', 'Catajoy', 11),
(45, 'April Charisse', '', 'Dante', 11),
(46, 'Angel', '', 'Navarro', 11),
(47, 'Glaiza Caryll', '', 'Angot', 12),
(48, 'Jeffrey', '', 'Ong', 12),
(49, 'Vanessa', '', 'Potane', 12),
(50, 'Raymond', '', 'Tan', 12),
(51, 'Atina Janisah', '', 'Bacaraman', 13),
(52, 'Alexander Manuel', '', 'Meneses', 13),
(53, 'Atriyo Leodi', '', 'Salise', 13),
(54, 'Pepper', '', 'Villar', 13),
(55, 'Niccu', '', 'Bagonoc', 14),
(56, 'John Mark', '', 'Celeste', 14),
(57, 'Paul Angelo', '', 'Chua', 14),
(58, 'Leonard Gerald', '', 'Ozoa', 14),
(59, 'Chyll Geweldenn', '', 'Gabrang', 15),
(60, 'Lanedee Rose', '', 'Mangao', 15),
(61, 'Maria Lourdes', '', 'Suello', 15),
(62, 'Roselle', '', 'Yadao', 15),
(63, 'Edwinson', '', 'Andot', 16),
(64, 'Ian', '', 'Arcamo', 16),
(65, 'Julie', '', 'Honungan', 16),
(66, 'Michelle', '', 'Maquiling', 16),
(67, 'Mark', '', 'Dimaano', 17),
(68, 'Ritter', '', 'Mendoza', 17),
(69, 'Alex Joel', '', 'Pabelic', 17),
(70, 'John Ericson', '', 'Reyes', 17),
(71, 'Sandino Joseph', '', 'Legaspi', 18),
(72, 'Harold', '', 'Naallatan', 18),
(73, 'Leah', '', 'Resus', 18),
(74, 'Joseph', '', 'Sang-an', 18),
(75, 'Sammy', '', 'Aguil', 19),
(76, 'Roie Emmanuel', '', 'Ambulo', 19),
(77, 'Meil James', '', 'Gamat', 19),
(78, 'Phillip', '', 'Melencion', 19),
(79, 'Carla Jane', '', 'Ayso', 20),
(80, 'Rey Emmanuel', '', 'Dabatian', 20),
(81, 'Francis Karl', '', 'Lim', 20),
(82, 'Kevin', '', 'Lim', 20),
(83, 'Jordana', '', 'Madarieta', 21),
(84, 'Adrian', '', 'Torres', 21),
(85, 'Apple Jane', '', 'Estrella', 22),
(86, 'Gwyn June', '', 'Manlapig', 22),
(87, 'Emecor Christine Marie', '', 'Paasa', 22),
(88, 'Karen Kate', '', 'Seronay', 22),
(89, 'Kim Ronal', '', 'Abcede', 23),
(90, 'Samuel', '', 'Caballero', 23),
(91, 'Terence Jaedick', '', 'Rosales', 23),
(92, 'Norman', '', 'Tan', 23),
(93, 'Kevin', 'L', 'Acla', 24),
(94, 'Carlo Martin', 'T', 'CaÃ±ete', 24),
(95, 'Daniel', 'D', 'Eledia', 24),
(96, 'Carlos', 'O', 'Labador II', 24),
(97, 'Dee', 'Mercader', 'AsiÃ±ero', 25),
(98, 'Francis Nell', '', 'Javier', 25),
(99, 'Juancho Roberto', '', 'Montilla', 25),
(100, 'Mac Sherwin', '', 'Zea', 25),
(101, 'Maria Milaflor', 'M', 'Dorato', 26),
(102, 'Lovella Phi', 'G', 'Go', 26),
(103, 'Rey Paulo', 'S', 'Guango', 26),
(104, 'Paolette', 'P', 'Salcedo', 26),
(105, 'Dexter Bernard', 'M', 'Angeles', 27),
(106, 'Mary Joyce', 'E', 'Jamito', 27),
(107, 'Anna Althea', 'W', 'Vergara', 27),
(108, 'Donna Regie', 'S', 'Waminal', 27),
(109, 'Daniele Mae', 'F', 'Aranas', 28),
(110, 'Jovelle', 'T', 'Natividad', 28),
(111, 'Daniele', 'V', 'Tan', 28),
(112, 'Neil', 'Y', 'Yeban', 28);

-- --------------------------------------------------------

--
-- Table structure for table `rso-themes`
--

CREATE TABLE IF NOT EXISTS `rso-themes` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `theme` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rso-themes`
--

INSERT INTO `rso-themes` (`id`, `theme`) VALUES
(1, 'Food'),
(2, 'Health'),
(3, 'Governance'),
(4, 'Environment'),
(5, 'Peace');

-- --------------------------------------------------------

--
-- Table structure for table `rso-users`
--

CREATE TABLE IF NOT EXISTS `rso-users` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) COLLATE utf32_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf32_unicode_ci NOT NULL,
  `scope_id` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `scope_id` (`scope_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rso-users`
--

INSERT INTO `rso-users` (`id`, `fullname`, `username`, `password`, `scope_id`) VALUES
(1, 'John Doe', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rso-users-scopes`
--

CREATE TABLE IF NOT EXISTS `rso-users-scopes` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `scope` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rso-users-scopes`
--

INSERT INTO `rso-users-scopes` (`id`, `scope`) VALUES
(1, 'superuser'),
(2, 'research'),
(3, 'social outreach');

-- --------------------------------------------------------

--
-- Table structure for table `rso-years`
--

CREATE TABLE IF NOT EXISTS `rso-years` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `year` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rso-years`
--

INSERT INTO `rso-years` (`id`, `year`) VALUES
(1, '2011-2012'),
(2, '2012-2013'),
(3, '2013-2014'),
(4, '2014-2015'),
(5, '2015-2016');

-- --------------------------------------------------------

--
-- Table structure for table `__rso-semesters`
--

CREATE TABLE IF NOT EXISTS `__rso-semesters` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `semester` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `__rso-semesters`
--

INSERT INTO `__rso-semesters` (`id`, `semester`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `__rso-yop`
--

CREATE TABLE IF NOT EXISTS `__rso-yop` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `year_id` tinyint(4) NOT NULL,
  `semester_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_year` (`year_id`),
  KEY `semester` (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `__rso-yop`
--

INSERT INTO `__rso-yop` (`id`, `year_id`, `semester_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 4, 3),
(13, 5, 1),
(14, 5, 2),
(15, 5, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rso-research-titles`
--
ALTER TABLE `rso-research-titles`
  ADD CONSTRAINT `rso-research-titles_ibfk_1` FOREIGN KEY (`theme_id`) REFERENCES `rso-themes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rso-research-titles_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `rso-areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rso-research-titles_ibfk_3` FOREIGN KEY (`adviser_id`) REFERENCES `rso-advisers` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `rso-research-titles_ibfk_4` FOREIGN KEY (`year_id`) REFERENCES `rso-years` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rso-researchers`
--
ALTER TABLE `rso-researchers`
  ADD CONSTRAINT `rso-researchers_ibfk_1` FOREIGN KEY (`thesis_id`) REFERENCES `rso-research-titles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rso-users`
--
ALTER TABLE `rso-users`
  ADD CONSTRAINT `scope_id_fk` FOREIGN KEY (`scope_id`) REFERENCES `rso-users-scopes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `__rso-yop`
--
ALTER TABLE `__rso-yop`
  ADD CONSTRAINT `__rso-yop_ibfk_1` FOREIGN KEY (`year_id`) REFERENCES `rso-years` (`id`),
  ADD CONSTRAINT `__rso-yop_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `__rso-semesters` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
