-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 11:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salary`
--

-- --------------------------------------------------------

--
-- Table structure for table `contarct`
--

CREATE TABLE `contarct` (
  `id` int(255) NOT NULL,
  `NAME` text NOT NULL,
  `RATE` int(50) NOT NULL,
  `PAYABLEVALUE` int(255) NOT NULL,
  `INFLATION_ALLOWANCE` int(50) NOT NULL,
  `TRAVEL_ALLOWANCE` int(50) NOT NULL,
  `CPF` int(50) NOT NULL,
  `ESIMCS` int(200) NOT NULL,
  `TOTALDUES` int(50) NOT NULL,
  `PFDOUBLES` int(50) NOT NULL,
  `RECOVERY` int(50) NOT NULL,
  `SECURITY` int(50) NOT NULL,
  `LOANRECOVERY` int(50) NOT NULL,
  `ESI` int(50) NOT NULL,
  `ESIMC` int(100) NOT NULL,
  `TOTALDEDUCTION` int(50) NOT NULL,
  `PAYABLEVALUES` int(200) NOT NULL,
  `HOLIDAYS` int(11) NOT NULL,
  `SIGNATURE` text NOT NULL,
  `MONTH` varchar(25) NOT NULL,
  `YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contarct`
--

INSERT INTO `contarct` (`id`, `NAME`, `RATE`, `PAYABLEVALUE`, `INFLATION_ALLOWANCE`, `TRAVEL_ALLOWANCE`, `CPF`, `ESIMCS`, `TOTALDUES`, `PFDOUBLES`, `RECOVERY`, `SECURITY`, `LOANRECOVERY`, `ESI`, `ESIMC`, `TOTALDEDUCTION`, `PAYABLEVALUES`, `HOLIDAYS`, `SIGNATURE`, `MONTH`, `YEAR`) VALUES
(2, 'S.Hardeep Singh Jawanda', 17000, 17000, 0, 0, 1700, 808, 19508, 3400, 0, 0, 0, 298, 808, 4506, 15002, 1, 'Hardeep Singh Jawanda', 'October', 2018),
(4, 'S.Harpreet Pal Singh', 21000, 21000, 0, 0, 2100, 998, 24098, 4200, 0, 0, 0, 368, 998, 5566, 18532, 1, 'S.Harpreet Pal Singh', 'October', 2018),
(5, 'S.Kuldeep Singh', 20014, 20014, 0, 0, 2001, 951, 22966, 4002, 0, 0, 0, 351, 951, 5304, 17662, 1, 'S.Kuldeep Singh', 'October', 2018),
(6, 'S.Kulwinder Singh', 13917, 13917, 0, 0, 1391, 661, 15969, 2783, 0, 0, 0, 244, 661, 3688, 12281, 1, 'S.Kulwinder Singh', 'October', 2018),
(7, 'S.Damanjeet Singh', 13917, 13917, 0, 0, 1391, 661, 15969, 2783, 0, 0, 0, 244, 661, 3688, 12281, 1, 'S.Damanjeet Singh', 'October', 2018),
(8, 'Mr.Aman Singh', 14622, 14622, 0, 0, 1462, 695, 16779, 2924, 0, 0, 0, 256, 695, 3875, 12904, 1, 'Mr.Aman Singh', 'October', 2018),
(9, 'S.Komaldeep Singh', 9180, 9180, 0, 0, 918, 436, 10534, 1836, 0, 0, 0, 161, 436, 2433, 8101, 1, 'S.Komaldeep Singh', 'October', 2018),
(10, 'S.Amritpal Singh', 11475, 11475, 0, 0, 1147, 545, 13167, 2295, 0, 0, 0, 201, 545, 3041, 10126, 1, 'S.Amritpal Singh', 'October', 2018),
(11, 'S.Tarsem Singh', 13917, 13917, 0, 0, 1391, 661, 15969, 2783, 0, 0, 0, 244, 661, 3688, 12281, 1, 'S.Tarsem Singh', 'October', 2018),
(12, 'S.swaranjeet Singh', 10098, 10098, 0, 0, 1009, 480, 11587, 2019, 0, 0, 0, 177, 480, 2676, 8911, 1, 'S.swaranjeet Singh', 'October', 2018),
(13, 's. qwerty singh', 1232, 1232, 0, 0, 123, 58, 1413, 246, 0, 0, 0, 21, 58, 325, 1088, 1, 'gr', 'October', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `contarct1`
--

CREATE TABLE `contarct1` (
  `id` int(255) NOT NULL,
  `NAME` text NOT NULL,
  `RATE` int(50) NOT NULL,
  `PAYABLEVALUE` int(255) NOT NULL,
  `HOME_RENT` int(200) NOT NULL,
  `INFLATION_ALLOWANCE` int(200) NOT NULL,
  `INFLATION_ALLOWANCE2` int(200) NOT NULL,
  `MEDICAL_ALLOWANCE` int(200) NOT NULL,
  `CCA` int(50) NOT NULL,
  `TOTALDUES` int(50) NOT NULL,
  `CPFMCS` int(50) NOT NULL,
  `ESIMCS` int(11) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `PFDOUBLES` int(50) NOT NULL,
  `ESI` int(50) NOT NULL,
  `ESIMC` int(100) NOT NULL,
  `LOANRECOVERY` int(50) NOT NULL,
  `RECOVERY` int(50) NOT NULL,
  `TOTALDEDUCTION` int(50) NOT NULL,
  `PAYABLEVALUES` int(200) NOT NULL,
  `HOLIDAYS` int(11) NOT NULL,
  `SIGNATURE` text NOT NULL,
  `MONTH` varchar(25) NOT NULL,
  `YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contarct1`
--

INSERT INTO `contarct1` (`id`, `NAME`, `RATE`, `PAYABLEVALUE`, `HOME_RENT`, `INFLATION_ALLOWANCE`, `INFLATION_ALLOWANCE2`, `MEDICAL_ALLOWANCE`, `CCA`, `TOTALDUES`, `CPFMCS`, `ESIMCS`, `SALARY`, `PFDOUBLES`, `ESI`, `ESIMC`, `LOANRECOVERY`, `RECOVERY`, `TOTALDEDUCTION`, `PAYABLEVALUES`, `HOLIDAYS`, `SIGNATURE`, `MONTH`, `YEAR`) VALUES
(1, 's. hello singh', 235142, 235142, 47028, 56434, 72894, 500, 180, 412178, 23514, 19599, 455291, 47028, 7233, 19599, 0, 0, 73860, 381431, 1, 'vfv', 'October', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `username`, `password`) VALUES
(1, 'kawal', 'singh');

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(25) NOT NULL,
  `mob_no` varchar(12) NOT NULL,
  `doj` date NOT NULL,
  `qualification` varchar(80) NOT NULL,
  `salary` bigint(25) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`id`, `username`, `password`, `name`, `designation`, `mob_no`, `doj`, `qualification`, `salary`, `type`) VALUES
(1, 'Hardeepsingh', 'Hardeep123', 'S. Hardeep Singh Jawanda', 'Project Officer', '98729-55518', '0000-00-00', '', 15000, 'contract'),
(2, 'Harpreetsingh', 'Harpreet123', 'S. Harpreet Pal Singh ', 'Supdt', '98159-60237', '0000-00-00', '', 21000, 'contract'),
(3, 'Kuldeepsingh', 'Kuldeep123', 'S. Kuldeep Singh', 'Asstt. Project Officer', '99145-40633', '0000-00-00', 'Matric, 3y Diploma in Mech .Engg.', 10014, 'contract'),
(4, 'GurpartapSingh', 'Gurpartap123', 'S. Gurpartap Singh', 'S.M. Comp. H/W', '94634-87303', '0000-00-00', '10+2, ADCHM, ITI', 20576, 'Regular'),
(5, 'SukhjiwanSingh', 'Sukhjiwan123', 'S. Sukhjiwan Singh', 'S.M. Comp.  H/W', '94634-14763', '0000-00-00', 'B.Sc IT, 1y Diploma in Hardware, ITI', 20576, 'Regular'),
(6, 'SurjitSingh', 'Surjit123', 'S. Surjit Singh', 'S.M. Welding', '98553-43666', '0000-00-00', 'Matric, ITI', 20576, 'Regular'),
(7, 'AvtarSingh', 'Avtar123', 'S. Avtar Singh', 'S.M. Welding', '97815-70415', '0000-00-00', 'Matric, 1y Diploma in Welding.', 1711, 'Regular'),
(8, 'KulwinderSingh', 'Kulwinder123', 'S. Kulwinder Singh', 'S.M. Electronics', '88721-30002', '0000-00-00', '10+2, 3y Diploma in Elect. Engg.', 7917, 'contract'),
(9, 'SikanderSingh', 'Sikander123', 'S. Sikander Singh', 'S.M. Electrical', '97812-60529', '0000-00-00', 'Matric, 1y Diploma in Electrical. ITI', 20045, 'Regular'),
(10, 'IshwerpreetSingh', 'Ishwerpreet123', 'S. Ishwerpreet Singh', 'S.M. Comp .App', '98760-80860', '0000-00-00', 'ITI,B.Sc IT, PGDCA', 14580, 'Regular'),
(11, 'DamanjeetSingh', 'Damanjeet123', 'S. Damanjeet Singh', 'S.M. Comp. App', '98729-47547', '0000-00-00', 'B.Sc IT', 13917, 'Regular'),
(12, 'CharanjeetKaur', 'Charanjeet123', 'Mrs. CharanjeetKaur', 'S.M. Fashion Design', '98553-82933', '0000-00-00', '10+2, ITI', 14580, 'Regular'),
(13, 'AmanSingh', 'Aman123', 'Mr. Aman Singh', 'Computer Trainer', '77107-41376', '0000-00-00', 'MCA', 14622, 'contract'),
(14, 'SherSingh', 'Sher123', 'S. Sher Singh', 'S.M. Plumbing', '99142-10604', '0000-00-00', 'Matric', 20174, 'Regular'),
(15, 'KomaldeepSingh', 'Komaldeep123', 'S. Komaldeep Singh', 'Asstt. Plumbing', '96466-25509', '0000-00-00', '10+2, ITI doing', 9180, 'contract'),
(16, 'AmritpalSingh', 'Amrit123', 'S. Amritpal Singh ', 'S.M. Carpentry', '', '0000-00-00', ' Diploma in Carpentry.', 11475, 'contract'),
(17, 'TarsemSingh', 'Tarsem123', 'S. Tarsem Singh', 'S.M. Motor Mech', '94630-35160', '0000-00-00', '10+2, 3y Diploma in Mech. Engg.', 7917, 'contract'),
(18, 'SwaranjeetSingh', 'Swaranjeet123', 'S. Swaranjeet Singh', 'S.M. Auto Electrician', '95922-32114', '0000-00-00', 'Matric,6 mon  in Auto Electrician', 4098, 'contract'),
(19, 'ManpreetSingh', 'Manpreet123', 'S. Manpreet Singh', 'S.M. RAC', '97819-13370', '0000-00-00', '10+2, 1y Diploma in RAC', 4098, 'contract'),
(20, 'BalvirSingh', 'Balvir123', 'S. Balvir Singh ', 'S.M. Electronics', '', '0000-00-00', '', 0, 'contract'),
(21, 'SeemaWalia', 'Seema123', 'Mrs. SeemaWalia', 'Asstt Fashion Designing', '98038-45480', '0000-00-00', 'Matric, Diploma in Beautician', 10603, 'Regular'),
(22, 'JagjiwanKaur', 'Jagjiwan123', 'Mrs. JagjiwanKaur', 'Clerk', '88725-35600', '0000-00-00', 'Matric, ITI', 24812, 'regular'),
(23, 'RajpalKaur', 'Rajpal123', 'Mrs. RajpalKaur', 'Clerk', '94170-54771', '0000-00-00', 'BA', 13123, 'Regular'),
(24, 'NavtejSingh', 'Navtej123', 'S. Navtej Singh', 'Clerk', '97815-00604', '0000-00-00', '10+2', 13123, 'Regular'),
(25, 'AmritpalSingh', 'Amritpal123', 'S. Amritpal Singh', 'Clerk', '98783-73807', '0000-00-00', 'B.Sc, PGDCA', 11000, 'Regular'),
(26, 'GurdeepSingh', 'Gurdeep123', 'S. Gurdeep Singh', 'Store keeper', '98556-00705', '0000-00-00', 'Matric,ITI,CTI,Apprenticeship', 12592, 'contract'),
(27, 'NirmalSingh', 'Nirmal123', 'S. Nirmal Singh', 'Driver', '75890-72157', '0000-00-00', 'Middle', 17118, 'contract'),
(28, 'GagandeepSharma', 'Gagandeep123', 'Sh. Gagandeep Sharma', 'Attendent', '87289-34080', '0000-00-00', 'Matric', 11605, 'Regular'),
(29, 'DaljitSingh', 'Daljit123', 'S. Daljit Singh', 'Attendent', '95175-76975', '0000-00-00', 'Matric', 11663, 'Regular'),
(30, 'ManpreetSingh1', 'Manpreet123', 'S. Manpreet Singh', 'Attendent', '94782-56503', '0000-00-00', 'Matric', 10603, 'contract'),
(31, 'GurwinderSingh', 'Gurwinder123', 'S. Gurwinder Singh', 'Attendent', '81469-24060', '0000-00-00', 'Middle', 8900, 'contract'),
(32, 'SushilaDevi', 'Susila123', 'Mrs. Sushila Devi', 'Attendent', '96461-54699', '0000-00-00', 'Primary', 10472, 'contract'),
(33, 'GurmailSingh', 'Gurmail123', 'S. Gurmail Singh', 'Chowkidar', '84272-02534', '0000-00-00', 'Matric', 10603, 'contract'),
(34, 'RamBahadur', 'Ram123', 'Sh. Ram  Bahadur', 'Chowkidar', '97796-76224', '0000-00-00', 'Middle', 8090, 'contract'),
(35, 'HariRam', 'Hari123', 'Sh. Hari Ram', 'Mali', '98729-52509', '0000-00-00', 'Illiterate', 10338, 'contract'),
(36, 'Vivek', 'Vivek123', 'Sh. Vivek', 'Sweeper', '89684-03422', '0000-00-00', 'Primary ', 8900, 'contract'),
(37, 'Pardeep', 'Pardeep123', 'Sh. Pardeep', 'Sweeper', '84272-19799', '0000-00-00', 'Primary', 8900, 'contract'),
(38, 'BalbuSingh', 'Balbu123', 'S.Balbu Singh', 'S.M ELECTRONIC', '', '0000-00-00', 'B.tech,M.TECH', 11475, 'contract'),
(39, '', '', '', '', '', '0000-00-00', '', 0, ''),
(40, '', '', '', '', '', '0000-00-00', '', 0, ''),
(41, '', '', '', '', '', '0000-00-00', '', 0, ''),
(42, '', '', '', '', '', '0000-00-00', '', 0, ''),
(43, '', '', '', '', '', '0000-00-00', '', 0, ''),
(44, '', '', '', '', '', '0000-00-00', '', 0, ''),
(45, '', '', '', '', '', '0000-00-00', '', 0, ''),
(46, '', '', '', '', '', '0000-00-00', '', 0, ''),
(47, '', '', '', '', '', '0000-00-00', '', 0, ''),
(48, '', '', '', '', '', '0000-00-00', '', 0, ''),
(49, '', '', '', '', '', '0000-00-00', '', 0, ''),
(50, '', '', '', '', '', '0000-00-00', '', 0, ''),
(51, '', '', '', '', '', '0000-00-00', '', 0, ''),
(52, '', '', '', '', '', '0000-00-00', '', 0, ''),
(53, '', '', '', '', '', '0000-00-00', '', 0, ''),
(54, '', '', '', '', '', '0000-00-00', '', 0, ''),
(55, '', '', '', '', '', '0000-00-00', '', 0, ''),
(56, '', '', '', '', '', '0000-00-00', '', 0, ''),
(57, 'hello', 'hello', 's. hello singh', 'fdfv', '323123', '2018-10-31', '21232', 421533241, 'regular'),
(58, 'q', 'q', 's. qwerty singh', 'fe', '435', '2018-10-02', 'vfdb', 543, 'contract');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contarct`
--
ALTER TABLE `contarct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contarct1`
--
ALTER TABLE `contarct1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contarct`
--
ALTER TABLE `contarct`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contarct1`
--
ALTER TABLE `contarct1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staffinfo`
--
ALTER TABLE `staffinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
