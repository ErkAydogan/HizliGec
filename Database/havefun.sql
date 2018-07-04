-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 07:48 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `havefun`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` int(10) UNSIGNED NOT NULL,
  `Place_Name` varchar(100) NOT NULL,
  `Picture` text NOT NULL,
  `Category` varchar(30) NOT NULL,
  `num_of_tickets_left` int(10) NOT NULL,
  `Creator_username` varchar(30) NOT NULL,
  `Ticket_price` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Name`, `Date`, `Time`, `Place_Name`, `Picture`, `Category`, `num_of_tickets_left`, `Creator_username`, `Ticket_price`) VALUES
(1, 'Istanbul Concert', '2016-12-07', 1400, 'Istanbul park', 'http://www.millenniumparkconcerts.org/wp-content/uploads/2015/07/music-concert.jpg', 'Music', 7, 'Kenan', 22),
(2, 'Arsenal vs Chelsea', '2017-03-08', 1700, 'Emirates Stadium', 'http://www.ticketgum.com/blog/wp-content/uploads/2016/08/arsenal-vs-chelsea.jpg', 'Sports', 19, 'Kenan', 25),
(3, 'Modern Theatre', '2016-09-09', 2100, 'Dar Al Opera', 'http://kingofwallpapers.com/theatre/theatre-010.jpg', 'Theatre', 3, 'Kenan', 28),
(4, 'Let\'s Code Confrence', '2017-06-28', 1200, 'Hayat Hotel', 'http://www.prisonabolition.org/wp-content/uploads/2013/10/4596544906.jpg', 'Confrence', 11, 'Absusu', 15),
(5, 'Manchester Derby', '2017-02-03', 1300, 'Old Trafford ', 'http://www.manutd.com/sitecore/shell/~/media/7C25C9744A8C48F8A22955E10ADCB0F9.ashx?w=1280&h=720&rgn=0,440,2000,1560', 'Sports', 18, 'Absusu', 45),
(6, 'The Eminem Show', '2017-03-16', 2200, 'The Big Square', 'https://blog.tickpick.com/wp-content/uploads/2015/04/eminem.jpg', 'Music', 7, 'Absusu', 110),
(7, 'El Classico ', '2017-06-22', 1800, 'Santiago Bernabeu Stadium', 'http://static.sportskeeda.com/wp-content/uploads/2015/03/real-madrid-vs-barcelona-1426960797.jpg', 'Sports', 26, 'Absusu', 60),
(8, 'New Year\'s Eve', '2017-01-01', 2400, 'The Big Square', 'https://image.jimcdn.com/app/cms/image/transf/dimension=1190x10000:format=jpg/path/sa6549607c78f5c11/image/i5f0aebcd99fc6c3f/version/1448879184/best-new-year-eve-destinations-in-europe-brussels-copyright-visitbrussels-european-best-destinations.jpg', 'Entertainment', 0, 'Absusu', 250),
(9, 'Miami Heat vs LA Lakers', '2017-01-17', 2200, 'American Airlines Arena', 'http://www.miamiherald.com/sports/nba/miami-heat/5espgw/picture69155347/ALTERNATES/FREE_640/heat(10)', 'Sports', 120, 'kenan', 340);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `Name` varchar(100) NOT NULL,
  `City` varchar(70) NOT NULL,
  `Country` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`Name`, `City`, `Country`) VALUES
('American Airlines Arena', 'Miami', 'USA'),
('Dar Al Opera', 'Damascus', 'Syria'),
('Emirates Stadium', 'London', 'United Kingdom'),
('Hayat Hotel', 'Dushanbe', 'Tajikstan'),
('Istanbul park', 'Istanbul', 'Turkey'),
('Old Trafford ', 'Manchester', 'United Kingdom'),
('Santiago Bernabeu Stadium', 'Madrid', 'Spain'),
('The Big Square', 'Miami', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_purchased`
--

CREATE TABLE `tickets_purchased` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Event_ID` int(10) UNSIGNED NOT NULL,
  `Username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets_purchased`
--

INSERT INTO `tickets_purchased` (`ID`, `Event_ID`, `Username`) VALUES
(1, 1, 'Absusu'),
(2, 1, 'Absusu'),
(18, 5, 'Absusu'),
(19, 4, 'Absusu'),
(20, 3, 'Absusu'),
(21, 6, 'Absusu'),
(22, 6, 'Kenan'),
(23, 2, 'Kenan'),
(24, 3, 'Kenan'),
(25, 6, 'Kenan'),
(27, 3, 'Kenan'),
(28, 4, 'Absusu'),
(29, 5, 'Absusu'),
(52, 4, 'root'),
(53, 4, 'root'),
(54, 3, 'root'),
(59, 4, 'root'),
(60, 3, 'root');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_number` int(10) UNSIGNED DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Name`, `Surname`, `Email`, `Phone_number`, `isAdmin`) VALUES
('Absusu', '254063a7f84bc87285b05da2d47a6411', 'Ab', 'Susu', 'Ab@susu', 588735171, 1),
('kenan', '67fe3cd004b5e5d3265d49f447005135', 'Kenan', 'Fayoumi', 'kenan@fa3.com', 192873, 1),
('root', '63a9f0ea7bb98050796b649e85481845', 'Erk', 'Aydogan', 'erk@aydogan.tr', 29989287, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `place_id` (`Place_Name`),
  ADD KEY `Creator_username` (`Creator_username`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `event_id` (`Event_ID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`Place_Name`) REFERENCES `place` (`Name`),
  ADD CONSTRAINT `event_ibfk_3` FOREIGN KEY (`creator_username`) REFERENCES `user` (`username`);

--
-- Constraints for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  ADD CONSTRAINT `event_id` FOREIGN KEY (`Event_ID`) REFERENCES `event` (`ID`),
  ADD CONSTRAINT `tickets_purchased_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;