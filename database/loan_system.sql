-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 03:12 AM
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
-- Database: `loan_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientbeneficiary`
--

CREATE TABLE `clientbeneficiary` (
  `ID` int(11) NOT NULL,
  `CLIENTID` int(11) NOT NULL,
  `BENEFICIARY` varchar(255) NOT NULL,
  `RELATIONSHIP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clientface`
--

CREATE TABLE `clientface` (
  `ID` int(11) NOT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `FACE_DESCRIPTOR` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`FACE_DESCRIPTOR`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientface`
--

INSERT INTO `clientface` (`ID`, `CLIENT_ID`, `FACE_DESCRIPTOR`) VALUES
(8, 30, '{\"0\":-0.10634779185056686,\"1\":0.0831684023141861,\"2\":-0.002843304770067334,\"3\":-0.04764309898018837,\"4\":-0.053571444004774094,\"5\":-0.05753757059574127,\"6\":-0.06148210167884827,\"7\":-0.15259476006031036,\"8\":0.242950901389122,\"9\":-0.151856929063797,\"10\":0.21987874805927277,\"11\":0.03268083930015564,\"12\":-0.13284480571746826,\"13\":-0.1829463690519333,\"14\":-0.0049278875812888145,\"15\":0.16569778323173523,\"16\":-0.2081362009048462,\"17\":-0.20624525845050812,\"18\":-0.08429284393787384,\"19\":-0.04710312560200691,\"20\":0.015254490077495575,\"21\":-0.09817654639482498,\"22\":0.0693003460764885,\"23\":0.06551378220319748,\"24\":-0.1518121212720871,\"25\":-0.40618887543678284,\"26\":-0.0502723753452301,\"27\":-0.0858049988746643,\"28\":0.06203911080956459,\"29\":-0.04966261610388756,\"30\":-0.08926792442798615,\"31\":0.0036728300619870424,\"32\":-0.26278847455978394,\"33\":-0.04697602242231369,\"34\":-0.04401332512497902,\"35\":0.12002217024564743,\"36\":0.0033802108373492956,\"37\":-0.059652507305145264,\"38\":0.17699351906776428,\"39\":-0.02202044054865837,\"40\":-0.25256457924842834,\"41\":-0.06879036873579025,\"42\":-0.012071851640939713,\"43\":0.22152583301067352,\"44\":0.20706278085708618,\"45\":0.0388883575797081,\"46\":0.05776488035917282,\"47\":-0.07820233702659607,\"48\":0.15901757776737213,\"49\":-0.18782523274421692,\"50\":0.09199794381856918,\"51\":0.0962759256362915,\"52\":0.0917782187461853,\"53\":-0.0056153093464672565,\"54\":0.009337683208286762,\"55\":-0.16599684953689575,\"56\":-0.00846906378865242,\"57\":0.13276776671409607,\"58\":-0.15109576284885406,\"59\":-0.012674901634454727,\"60\":0.03451419249176979,\"61\":-0.06485526263713837,\"62\":-0.0731036365032196,\"63\":-0.03762021288275719,\"64\":0.3209500014781952,\"65\":0.17957566678524017,\"66\":-0.1052694171667099,\"67\":-0.14380638301372528,\"68\":0.1989542692899704,\"69\":-0.1267727017402649,\"70\":0.003210779745131731,\"71\":0.01132989302277565,\"72\":-0.10799317061901093,\"73\":-0.18638743460178375,\"74\":-0.3497891128063202,\"75\":0.02468963898718357,\"76\":0.42511963844299316,\"77\":0.10811867564916611,\"78\":-0.1435713768005371,\"79\":0.0208999402821064,\"80\":-0.11735470592975616,\"81\":0.018786225467920303,\"82\":0.08717241138219833,\"83\":0.10281778126955032,\"84\":-0.12866556644439697,\"85\":0.09705742448568344,\"86\":-0.14377173781394958,\"87\":0.03981757164001465,\"88\":0.22964702546596527,\"89\":0.010533858090639114,\"90\":-0.05637803673744202,\"91\":0.1809309720993042,\"92\":-0.031748007982969284,\"93\":0.0543498620390892,\"94\":-0.00956736970692873,\"95\":0.0082072289660573,\"96\":-0.10564914345741272,\"97\":0.07622542977333069,\"98\":-0.14651569724082947,\"99\":-0.013438403606414795,\"100\":0.10239694267511368,\"101\":0.01562839187681675,\"102\":0.024731703102588654,\"103\":0.12147414684295654,\"104\":-0.15854667127132416,\"105\":0.07207005470991135,\"106\":0.010695502161979675,\"107\":0.03185930848121643,\"108\":0.0547059066593647,\"109\":0.01986379735171795,\"110\":-0.11974846571683884,\"111\":-0.16104018688201904,\"112\":0.0756915956735611,\"113\":-0.21151091158390045,\"114\":0.1850440949201584,\"115\":0.178469717502594,\"116\":0.1261344850063324,\"117\":0.19463251531124115,\"118\":0.11655747145414352,\"119\":0.04989992827177048,\"120\":0.02472090907394886,\"121\":-0.03011516109108925,\"122\":-0.20145808160305023,\"123\":0.040860481560230255,\"124\":0.09474837779998779,\"125\":-0.04454711079597473,\"126\":0.12220574915409088,\"127\":0.06557071954011917}');

-- --------------------------------------------------------

--
-- Table structure for table `clientimage`
--

CREATE TABLE `clientimage` (
  `ID` int(11) NOT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `TYPE` enum('VALIDID','USERPIC') NOT NULL,
  `FILEP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientimage`
--

INSERT INTO `clientimage` (`ID`, `CLIENT_ID`, `TYPE`, `FILEP`) VALUES
(9, 5, 'VALIDID', 'WZi4AV1lsH.png'),
(10, 5, 'USERPIC', 'nuMOfJh78K.png'),
(11, 6, 'VALIDID', 'DhlWjGzYMA.png'),
(12, 6, 'USERPIC', 'C42VloDmAB.png'),
(13, 7, 'VALIDID', '8DPXLuRgSh.png'),
(14, 7, 'USERPIC', 'SFYutBNExw.png'),
(15, 8, 'VALIDID', '7SNuvIkOwH.jpeg'),
(16, 8, 'USERPIC', 'NtYX4qSx1V.png'),
(17, 9, 'VALIDID', 'LbU9kGsinp.jpeg'),
(18, 9, 'USERPIC', 'ImjJ8z0OXg.png'),
(19, 10, 'VALIDID', 'LogsK7F9BV.jpg'),
(20, 10, 'USERPIC', '175BcGYrXz.png'),
(21, 11, 'VALIDID', '0suP7yezqU.jpg'),
(22, 11, 'USERPIC', 'YrKzNtXgDn.png'),
(23, 12, 'VALIDID', 'V4DpMcwrmv.jpeg'),
(24, 12, 'USERPIC', 'HFkvL32IY5.png'),
(25, 13, 'VALIDID', 'LRfCYvy38j.jpg'),
(26, 13, 'USERPIC', 'yTCh7b1aZX.png'),
(27, 14, 'VALIDID', 'zef0lAiYSq.jpg'),
(28, 14, 'USERPIC', 'qRlOTv4PGf.png'),
(29, 15, 'VALIDID', 'h0OvoqUQw1.jpeg'),
(30, 15, 'USERPIC', 'YMhtOs4bxW.png'),
(31, 16, 'VALIDID', 'bLFAdRWCno.jpg'),
(32, 16, 'USERPIC', 'loKLBJqmZd.png'),
(33, 17, 'VALIDID', '2pwzg5Rido.jpg'),
(34, 17, 'USERPIC', 'lMmJk6fFyO.png'),
(35, 18, 'VALIDID', 'XxEbQVA1Df.jpeg'),
(36, 18, 'USERPIC', '1cFtgUDBCy.png'),
(37, 19, 'VALIDID', 'Lr98myNTwv.jpeg'),
(38, 19, 'USERPIC', 'Bd2pgXGjme.png'),
(39, 20, 'VALIDID', '2BnQhT4d7o.jpg'),
(40, 20, 'USERPIC', '9XrWFUEsMP.png'),
(41, 21, 'VALIDID', '6HXmg9xsFl.jpeg'),
(42, 21, 'USERPIC', 'dsGZLWyHJf.png'),
(43, 22, 'VALIDID', 'HBTmR49Xhl.jpg'),
(44, 22, 'USERPIC', 'ozM0PcV1tT.png'),
(45, 23, 'VALIDID', '6743584e27ba4.jpg'),
(46, 23, 'USERPIC', '6743584e27ba7.png'),
(47, 24, 'VALIDID', '674358c4af90c.jpg'),
(48, 24, 'USERPIC', '674358c4af90e.png'),
(49, 25, 'VALIDID', '6743591ee3c3e.jpeg'),
(50, 25, 'USERPIC', '6743591ee3c40.png'),
(51, 26, 'VALIDID', '6743597f1c2b2.jpg'),
(52, 26, 'USERPIC', '6743597f1c2b4.png'),
(53, 27, 'VALIDID', '67435c6a86390.jpg'),
(54, 27, 'USERPIC', '67435c6a86392.png'),
(55, 28, 'VALIDID', '6743640948093.jpg'),
(56, 28, 'USERPIC', '6743640948096.png'),
(57, 29, 'VALIDID', '674369735eb4c.jpg'),
(58, 29, 'USERPIC', '674369735eb4f.png'),
(59, 30, 'VALIDID', '674369fd6371e.jpg'),
(60, 30, 'USERPIC', '674369fd63721.png');

-- --------------------------------------------------------

--
-- Table structure for table `clientinformation`
--

CREATE TABLE `clientinformation` (
  `ID` int(11) NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `MIDDLENAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `BIRTHDATE` varchar(255) NOT NULL,
  `CIVILSTATUS` varchar(255) NOT NULL,
  `CONTACTNO` int(255) NOT NULL,
  `POSITION` varchar(255) NOT NULL,
  `SALARY` varchar(255) NOT NULL,
  `ADDRESS` text NOT NULL,
  `YEARS` varchar(255) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `REGISTRATIONSTATUS` enum('PENDING','APPROVED','DENIED','BANNED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientinformation`
--

INSERT INTO `clientinformation` (`ID`, `FIRSTNAME`, `MIDDLENAME`, `LASTNAME`, `GENDER`, `BIRTHDATE`, `CIVILSTATUS`, `CONTACTNO`, `POSITION`, `SALARY`, `ADDRESS`, `YEARS`, `DEPARTMENT`, `EMAIL`, `PASSWORD`, `REGISTRATIONSTATUS`) VALUES
(30, 'Henry James', 'Marcellana', 'Ribano', 'Male', '2024-11-25', 'Single', 2147483647, 'adsfggdf', '12345678', 'Laguile Ibaba, Taal, Batangas', '1', 'safhkdhgf', 'henryjamesribano27@gmail.com', '$2y$10$j/QInnmnoDwV7cBdolqgM.gB.cAmT/cmF30KPKpFtY1c5xit6GW7C', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `clientloan`
--

CREATE TABLE `clientloan` (
  `ID` int(11) NOT NULL,
  `CLIENTID` int(11) NOT NULL,
  `LOANID` int(11) NOT NULL,
  `LOANAMOUNT` varchar(255) NOT NULL,
  `TERM` varchar(11) NOT NULL,
  `INTEREST` varchar(11) NOT NULL,
  `CBU` varchar(11) NOT NULL,
  `FILLING` varchar(11) NOT NULL,
  `INSURANCE` varchar(11) NOT NULL,
  `NETPRO` varchar(11) NOT NULL,
  `LOANDATE` varchar(255) NOT NULL,
  `STATUS` enum('PENDING','APPROVED','DECLINED','ONGOING','DONE') NOT NULL,
  `UPDATEBY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loanterms`
--

CREATE TABLE `loanterms` (
  `ID` int(11) NOT NULL,
  `LOANID` int(11) NOT NULL,
  `MINAM` varchar(255) NOT NULL,
  `MAXAM` varchar(255) NOT NULL,
  `TERMS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanterms`
--

INSERT INTO `loanterms` (`ID`, `LOANID`, `MINAM`, `MAXAM`, `TERMS`) VALUES
(1, 1, '5000', '29999', '12'),
(2, 1, '30000', '59999', '24'),
(3, 1, '60000', '99999', '36'),
(4, 1, '100000 ', '149999', '24'),
(5, 1, '15000', '299999', '36'),
(6, 2, '10000', '10000', '12'),
(7, 3, '10000', '10000', '12'),
(8, 3, '5000', '19999', '12'),
(9, 3, '20000', '25000', '24'),
(10, 4, '150000', '150000', '36'),
(11, 7, '2000', '2000', '6'),
(12, 8, '2000', '2000', '6'),
(13, 9, '2000', '2000', '6'),
(14, 10, '2000', '2000', '6'),
(15, 11, '2000', '2000', '6');

-- --------------------------------------------------------

--
-- Table structure for table `loantype`
--

CREATE TABLE `loantype` (
  `ID` int(11) NOT NULL,
  `TPID` enum('Regular Loan','Special Loan') NOT NULL,
  `LOANTYPE` varchar(255) NOT NULL,
  `MINAM` varchar(255) NOT NULL,
  `MAXAM` varchar(255) NOT NULL,
  `FITT` enum('FIXED','NOT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loantype`
--

INSERT INTO `loantype` (`ID`, `TPID`, `LOANTYPE`, `MINAM`, `MAXAM`, `FITT`) VALUES
(1, 'Regular Loan', 'Salary Loan', '5000', '500000', 'NOT'),
(2, 'Regular Loan', 'Emergency Loan', '10000', '10000', 'FIXED'),
(3, 'Regular Loan', 'Appliance Loan', '1000', '25000', 'NOT'),
(4, 'Regular Loan', 'Motorcycle Loan ', '50000', '150000', 'NOT'),
(7, 'Special Loan', 'MID Year Bonus', '2000', '2000', 'FIXED'),
(8, 'Special Loan', 'Year End Bonus ', '2000', '2000', 'FIXED'),
(9, 'Special Loan', 'Cash Gift', '5000', '5000', 'FIXED'),
(10, 'Special Loan', 'Clothing', '5000', '5000', 'FIXED'),
(11, 'Special Loan', 'Extra Bonus ', '20000', '20000 ', 'FIXED');

-- --------------------------------------------------------

--
-- Table structure for table `paymentloan`
--

CREATE TABLE `paymentloan` (
  `ID` int(11) NOT NULL,
  `LOANID` int(11) NOT NULL,
  `DATEPAYMENT` varchar(255) NOT NULL,
  `AMOUNT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `LASTNAME` varchar(191) NOT NULL,
  `FIRSTNAME` varchar(191) NOT NULL,
  `MIDDLENAME` varchar(191) DEFAULT NULL,
  `EMAILADDRESS` varchar(191) NOT NULL,
  `PASSWORD` varchar(191) NOT NULL,
  `IMG` text DEFAULT NULL,
  `ROLES` enum('ADMIN','EMPLOYEE') NOT NULL,
  `CONTACTNUMBER` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `LASTNAME`, `FIRSTNAME`, `MIDDLENAME`, `EMAILADDRESS`, `PASSWORD`, `IMG`, `ROLES`, `CONTACTNUMBER`) VALUES
(4, 'Cortiguerra', 'Kent', 'Certiza', 'kentcortiguerra.troubleshouter@gmail.com', '$2y$10$s3dPvUvwaFTMXUTG/DwkE.mtaEvLGlKTwohjsEI3nZhsEJV76LdX2', NULL, 'ADMIN', '54654756');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientbeneficiary`
--
ALTER TABLE `clientbeneficiary`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENTID` (`CLIENTID`);

--
-- Indexes for table `clientface`
--
ALTER TABLE `clientface`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Indexes for table `clientimage`
--
ALTER TABLE `clientimage`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`);

--
-- Indexes for table `clientinformation`
--
ALTER TABLE `clientinformation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clientloan`
--
ALTER TABLE `clientloan`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CLIENTID` (`CLIENTID`),
  ADD UNIQUE KEY `LOANID` (`LOANID`),
  ADD KEY `UPDATEBY` (`UPDATEBY`);

--
-- Indexes for table `loanterms`
--
ALTER TABLE `loanterms`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LOANID` (`LOANID`);

--
-- Indexes for table `loantype`
--
ALTER TABLE `loantype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paymentloan`
--
ALTER TABLE `paymentloan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LOANID` (`LOANID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientbeneficiary`
--
ALTER TABLE `clientbeneficiary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clientface`
--
ALTER TABLE `clientface`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clientimage`
--
ALTER TABLE `clientimage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `clientinformation`
--
ALTER TABLE `clientinformation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `clientloan`
--
ALTER TABLE `clientloan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loanterms`
--
ALTER TABLE `loanterms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loantype`
--
ALTER TABLE `loantype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `paymentloan`
--
ALTER TABLE `paymentloan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientbeneficiary`
--
ALTER TABLE `clientbeneficiary`
  ADD CONSTRAINT `clientbeneficiary_ibfk_1` FOREIGN KEY (`CLIENTID`) REFERENCES `clientinformation` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `clientface`
--
ALTER TABLE `clientface`
  ADD CONSTRAINT `clientface_ibfk_1` FOREIGN KEY (`CLIENT_ID`) REFERENCES `clientinformation` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `clientloan`
--
ALTER TABLE `clientloan`
  ADD CONSTRAINT `clientloan_ibfk_1` FOREIGN KEY (`CLIENTID`) REFERENCES `clientinformation` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientloan_ibfk_2` FOREIGN KEY (`LOANID`) REFERENCES `loantype` (`ID`) ON DELETE NO ACTION;

--
-- Constraints for table `loanterms`
--
ALTER TABLE `loanterms`
  ADD CONSTRAINT `loanterms_ibfk_1` FOREIGN KEY (`LOANID`) REFERENCES `loantype` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
