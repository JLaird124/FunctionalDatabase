-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 09:53 PM
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
-- Database: `sago_palm_db`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `appoint_details_view`
-- (See below for the actual view)
--
CREATE TABLE `appoint_details_view` (
`appoint_date_time` datetime
,`appoint_room` tinyint(4)
,`appoint_attended` tinyint(1)
,`appoint_ID` int(11)
,`patient_type` varchar(15)
,`patient_age` tinyint(4)
,`patient_name` varchar(30)
,`patient_sex` tinyint(1)
,`patient_ID` int(11)
,`vet_ID` int(11)
,`vet_name` varchar(6)
,`owner_address_3` varchar(20)
,`owner_address_2` varchar(20)
,`owner_address_1` varchar(20)
,`owner_name` varchar(30)
,`owner_ID` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `appoint_tbl`
--

CREATE TABLE `appoint_tbl` (
  `appoint_ID` int(11) NOT NULL,
  `appoint_date_time` datetime NOT NULL,
  `appoint_room` tinyint(4) NOT NULL,
  `appoint_attended` tinyint(1) NOT NULL COMMENT '0 = D.N.A. 1 = Attended',
  `patient_ID` int(11) NOT NULL,
  `vet_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint_tbl`
--

INSERT INTO `appoint_tbl` (`appoint_ID`, `appoint_date_time`, `appoint_room`, `appoint_attended`, `patient_ID`, `vet_ID`) VALUES
(2, '2018-03-02 09:00:00', 2, 1, 2, 2),
(3, '2018-03-02 09:00:00', 3, 1, 3, 3),
(4, '2018-03-02 09:20:00', 1, 1, 4, 1),
(5, '2018-03-02 09:20:00', 2, 1, 5, 2),
(6, '2018-03-02 09:20:00', 3, 1, 6, 3),
(7, '2018-03-02 09:40:00', 1, 1, 7, 1),
(8, '2018-03-02 09:40:00', 2, 1, 8, 2),
(9, '2018-03-02 09:40:00', 3, 1, 9, 3),
(10, '2018-03-02 10:00:00', 1, 0, 10, 1),
(11, '2018-03-02 10:00:00', 2, 1, 11, 2),
(12, '2018-03-02 10:00:00', 3, 1, 12, 3),
(13, '2018-03-02 10:20:00', 1, 1, 13, 1),
(14, '2018-03-02 10:20:00', 2, 1, 14, 2),
(15, '2018-03-02 10:20:00', 3, 1, 15, 3),
(16, '2018-03-02 10:40:00', 1, 1, 16, 1),
(17, '2018-03-02 10:40:00', 2, 1, 17, 2),
(18, '2018-03-02 10:40:00', 3, 1, 18, 3),
(19, '2018-03-02 11:00:00', 1, 1, 19, 1),
(20, '2018-03-02 11:00:00', 2, 0, 20, 2),
(21, '2018-03-02 11:00:00', 3, 1, 21, 3),
(22, '2018-03-02 11:20:00', 1, 1, 22, 1),
(23, '2018-03-02 11:20:00', 2, 1, 23, 2),
(24, '2018-03-02 11:20:00', 3, 1, 24, 3);

-- --------------------------------------------------------

--
-- Table structure for table `owner_tbl`
--

CREATE TABLE `owner_tbl` (
  `owner_ID` int(11) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `owner_address_1` varchar(20) NOT NULL,
  `owner_address_2` varchar(20) NOT NULL,
  `owner_address_3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_tbl`
--

INSERT INTO `owner_tbl` (`owner_ID`, `owner_name`, `owner_address_1`, `owner_address_2`, `owner_address_3`) VALUES
(1, 'Abdurrahman Abuali', '84 Tiger Street', ' London NW4 4LF', 'UK'),
(2, 'Muntaser Akari', '70 The Ct', ' Dannette Hey', ' Liverpool L28 6YF'),
(3, 'Fredrico Alagano', '1 Burnside Terrace', ' Auchtermuchty', ' Cupar KY14 7DE'),
(4, 'Daragh Boland', '3 Simpson Cresent', 'Helmsdale KW8 6LE', 'UK'),
(5, 'Conor Brady', 'Riverside Way', ' Camberley GU15', 'UK'),
(6, 'Chloe Cahill', '2 High St', ' Lossiemouth IV31 6P', 'UK'),
(7, 'Oliver Coleman', '9 Linlithgrow Cl', ' Papworth Everard', ' Cambridge CB23 3RX'),
(8, 'Cian Compton', 'Nelson Rd', ' Windermere LA23', 'UK'),
(9, 'Luigi Di Paolo', '106 Linkwood Cres', ' Glasgow G15 7ET', 'UK'),
(10, 'Graham Gibson', '1 Wernfach', ' Dyffryn Ardudwy LL4', 'UK'),
(11, 'Sean Healy', 'Comfort Ln', ' Richmond DL10 5LA', 'UK'),
(12, 'Karl Horsfield', 'Bachchan Road', ' Isle of Iona PA76', 'UK'),
(13, 'Isreal Ilori', '8 Shilton Cl', ' Bristol BS15', 'UK'),
(14, 'Nicolas Kazandji', '41 Carnoustie Ave', ' Gourock PA19 1HG', 'UK'),
(15, 'Martin Laird', '14 Duke Ln', 'Fraserburgh AB43 9EN', 'UK'),
(16, 'Mark Lennon', 'Railway Row', ' Sunderland SR1 3HE', 'UK'),
(17, 'Mathew Milligan', '1 Howard St', ' Radcliffe', ' Manchester M26 2GU'),
(18, 'Evan O\'Rourke', '1 Burrough St', ' Ash', ' Martock TA12 6NZ'),
(19, 'Hannah O\'Sullivan', 'Goodcheap Ln', ' Wye', ' Ashford'),
(20, 'Moad Raguragui', '4 Cliasmol', ' Isle of Harris H53 ', 'UK'),
(21, 'Liam Ronan', '11 Thornley Croft', ' Emerson Valley', ' Milton Keynes MK4 2'),
(22, 'Jack Shanahan', '118 Easdale', ' East Kilbride', ' Glasgow G74 2ED'),
(23, 'Cain Sheridan', 'High Halden Rd', ' Biddenden', ' Ashford TN27'),
(24, 'Alan Tobin', '49 A307', 'Esher KT10', 'UK');

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `patient_ID` int(11) NOT NULL,
  `patient_type` varchar(15) NOT NULL,
  `patient_age` tinyint(4) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `patient_sex` tinyint(1) NOT NULL COMMENT '0 = m, 1 = f',
  `owner_ID` int(11) NOT NULL,
  `allergic_to_penicillin` tinyint(1) NOT NULL COMMENT '1=yes 0=no',
  `Aliment` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`patient_ID`, `patient_type`, `patient_age`, `patient_name`, `patient_sex`, `owner_ID`, `allergic_to_penicillin`, `Aliment`) VALUES
(1, 'Cat', 2, 'Sussie', 0, 1, 0, NULL),
(2, 'Dog', 5, 'D For', 0, 2, 0, NULL),
(3, 'Dog', 7, 'Kareem Abdul Ja-Bark', 0, 3, 0, NULL),
(4, 'Dog', 2, 'Chew Barka', 0, 4, 0, NULL),
(5, 'Cat', 1, 'Ali Cat', 0, 5, 0, NULL),
(6, 'Cat', 8, 'Cindy Clawford', 1, 6, 0, NULL),
(7, 'Rat', 5, 'Tod', 0, 7, 0, NULL),
(8, 'Mouse', 11, 'Tanya', 1, 8, 0, NULL),
(9, 'Cat', 4, 'Cat', 1, 9, 0, NULL),
(10, 'Dog', 10, 'Prince of Barkness', 0, 10, 0, NULL),
(11, 'Dog', 8, 'Droolius Caesar', 0, 11, 0, NULL),
(12, 'Cat', 9, 'Pawdrey Hepburn', 1, 12, 1, NULL),
(13, 'Cat', 12, 'Whispurr', 0, 13, 0, NULL),
(14, 'Rat', 2, 'Dirty Rotten', 0, 14, 0, NULL),
(15, 'Dog', 8, 'Sarah Jessica Barker', 1, 15, 0, NULL),
(16, 'Cat', 4, 'Fluffy', 1, 16, 0, NULL),
(17, 'Dog', 7, 'Hairy Paw-ter', 1, 17, 0, NULL),
(18, 'Armadillo', 47, 'Tom', 0, 18, 1, NULL),
(19, 'Cat', 1, 'Chairwoman Miao', 1, 19, 0, NULL),
(20, 'Dog', 2, 'Bark Twain', 0, 20, 0, NULL),
(21, 'Dog', 7, 'Sherlock Bones', 0, 21, 0, NULL),
(22, 'Dog', 4, 'Salvador Dogi', 0, 22, 0, NULL),
(23, 'Cat', 5, 'Cat Benatar', 1, 23, 0, NULL),
(24, 'Dog', 6, 'Jimmy Chew', 0, 24, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vet_tbl`
--

CREATE TABLE `vet_tbl` (
  `vet_id` int(11) NOT NULL,
  `vet_name` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vet_tbl`
--

INSERT INTO `vet_tbl` (`vet_id`, `vet_name`) VALUES
(1, 'Rick'),
(2, 'Mordy'),
(3, 'Summer');

-- --------------------------------------------------------

--
-- Structure for view `appoint_details_view`
--
DROP TABLE IF EXISTS `appoint_details_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `appoint_details_view`  AS  select `appoint_tbl`.`appoint_date_time` AS `appoint_date_time`,`appoint_tbl`.`appoint_room` AS `appoint_room`,`appoint_tbl`.`appoint_attended` AS `appoint_attended`,`appoint_tbl`.`appoint_ID` AS `appoint_ID`,`patient_tbl`.`patient_type` AS `patient_type`,`patient_tbl`.`patient_age` AS `patient_age`,`patient_tbl`.`patient_name` AS `patient_name`,`patient_tbl`.`patient_sex` AS `patient_sex`,`patient_tbl`.`patient_ID` AS `patient_ID`,`vet_tbl`.`vet_id` AS `vet_ID`,`vet_tbl`.`vet_name` AS `vet_name`,`owner_tbl`.`owner_address_3` AS `owner_address_3`,`owner_tbl`.`owner_address_2` AS `owner_address_2`,`owner_tbl`.`owner_address_1` AS `owner_address_1`,`owner_tbl`.`owner_name` AS `owner_name`,`owner_tbl`.`owner_ID` AS `owner_ID` from (((`owner_tbl` join `patient_tbl` on(`owner_tbl`.`owner_ID` = `patient_tbl`.`owner_ID`)) join `appoint_tbl` on(`patient_tbl`.`patient_ID` = `appoint_tbl`.`patient_ID`)) join `vet_tbl` on(`appoint_tbl`.`vet_ID` = `vet_tbl`.`vet_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint_tbl`
--
ALTER TABLE `appoint_tbl`
  ADD PRIMARY KEY (`appoint_ID`),
  ADD UNIQUE KEY `appoint_ID` (`appoint_ID`),
  ADD KEY `appoint_ID_2` (`appoint_ID`),
  ADD KEY `patient_ID` (`patient_ID`,`vet_ID`),
  ADD KEY `vet_ID` (`vet_ID`);

--
-- Indexes for table `owner_tbl`
--
ALTER TABLE `owner_tbl`
  ADD PRIMARY KEY (`owner_ID`),
  ADD UNIQUE KEY `owner_ID` (`owner_ID`),
  ADD KEY `owner_ID_2` (`owner_ID`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`patient_ID`),
  ADD UNIQUE KEY `patient_ID` (`patient_ID`),
  ADD KEY `patient_ID_2` (`patient_ID`),
  ADD KEY `owner_ID` (`owner_ID`);

--
-- Indexes for table `vet_tbl`
--
ALTER TABLE `vet_tbl`
  ADD PRIMARY KEY (`vet_id`),
  ADD UNIQUE KEY `vet_id` (`vet_id`),
  ADD KEY `vet_id_2` (`vet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint_tbl`
--
ALTER TABLE `appoint_tbl`
  MODIFY `appoint_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `owner_tbl`
--
ALTER TABLE `owner_tbl`
  MODIFY `owner_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  MODIFY `patient_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vet_tbl`
--
ALTER TABLE `vet_tbl`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoint_tbl`
--
ALTER TABLE `appoint_tbl`
  ADD CONSTRAINT `appoint_tbl_ibfk_1` FOREIGN KEY (`patient_ID`) REFERENCES `patient_tbl` (`patient_ID`),
  ADD CONSTRAINT `appoint_tbl_ibfk_2` FOREIGN KEY (`vet_ID`) REFERENCES `vet_tbl` (`vet_id`);

--
-- Constraints for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD CONSTRAINT `patient_tbl_ibfk_1` FOREIGN KEY (`owner_ID`) REFERENCES `owner_tbl` (`owner_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
