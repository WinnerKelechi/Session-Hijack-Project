-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 12:31 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `name`, `comment`) VALUES
(22, 'Winner Kelechi', 'kllll'),
(24, 'Winner Kelechi', 'mmoooj'),
(25, 'Mary-cynthia', 'This was a tough project'),
(27, 'Winner Kelechi', 'jku'),
(29, 'Winner Kelechi', 'jqwiqw'),
(30, 'Winner Kelechi', 'qiuq'),
(32, 'winner', 'Hello World'),
(33, 'winner', '<h1> Helle</h1>'),
(34, 'winner', '<p style=\"color:red\">Chika</p>');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'iamcoolquaid@gmail.com'),
(2, 'client', '62608e08adc29a8d6dbc9754e659f125', 'qmorbiwala@gmail.com'),
(3, 'winner', '123456', 'winner@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `securecomment`
--

CREATE TABLE `securecomment` (
  `ID` int(11) NOT NULL,
  `sessionid` varchar(100) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securecomment`
--

INSERT INTO `securecomment` (`ID`, `sessionid`, `ipaddress`, `name`, `comment`) VALUES
(9, '7bjhaiaatpjvqf6sfdbiomifdp', '::1', 'wdewd', 'wedew'),
(10, 'v5f8lo57ti58sf55bie04kh75m', '::1', 'wsws', 'document.body.innerHTML=\"\"'),
(11, '30k8b87esr88ont169d209s8f2', '::1', 'Winner Kelechi', 'mmmm'),
(12, 'rpsi11q0g5g1jv7vvk95v1f811', '::1', '', ''),
(13, 'ftt1gn23d4qu7cmmq59q59upf2', '::1', 'BLESS', 'may day...'),
(14, 'tocoh2lq7lco6jnf2aaovl97m6', '::1', 'Mary-cynthia', 'This is why we do this..'),
(15, 'gt38bs7ajvti0s37dj61k06tu2', '::1', 'post', 'https://app.getpostman.com/join-team?invite_code=f9545769d1421c57f34215a5a4ab974c'),
(16, 'skvpfcl55bpq7dfciue7s5llf1', '::1', 'chika', 'hello'),
(17, '3btf15l4dl6e0am2223i146o25', '::1', 'chika', 'hello'),
(18, 'buipa66safl4u7k7ri6ai4muv4', '::1', 'chika', 'whatsup'),
(19, 'tvlnv39lptpa3t4fecaf8gt2b0', '::1', 'klsao', 'uyyu'),
(20, 'idbg5pn7fq8ahujtvptecq8d01', '::1', 'au', 'hseyh'),
(21, 'nqk8sgl3ntmt2ujv3eo3a228a2', '::1', 'TY', 'DSS'),
(22, 'boqe0k6mgu4m322ilfqg5pmdp3', '::1', 'jjjj', 'jhj'),
(23, '0dmpt7lv73ql3i1ssq2ej9sjc5', '::1', 'winner', 'Chika');

-- --------------------------------------------------------

--
-- Table structure for table `shouts`
--

CREATE TABLE `shouts` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shouts`
--

INSERT INTO `shouts` (`id`, `user`, `message`, `time`) VALUES
(38, 'rosa', 'Winner Kelechi howfa', '05:02:10'),
(39, 'chika', 'am happy', '05:20:42'),
(40, 'winner', 'My name is Winner', '07:11:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `securecomment`
--
ALTER TABLE `securecomment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shouts`
--
ALTER TABLE `shouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `securecomment`
--
ALTER TABLE `securecomment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shouts`
--
ALTER TABLE `shouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
