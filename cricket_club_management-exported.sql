-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 07:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_club_management`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_club` (IN `cid` INT)  NO SQL
delete from club where club_id = cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `User`, `Password`) VALUES
(1, 'chetan', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(20) NOT NULL,
  `club_name` varchar(50) NOT NULL,
  `president` varchar(50) NOT NULL,
  `team_id` int(20) NOT NULL,
  `no_of_players` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `president`, `team_id`, `no_of_players`) VALUES
(1, 'Jarvis Academy', 'Vinod Kambali', 1, 1),
(2, 'National Cricket Academy', 'Anil Kumble', 2, 1),
(3, 'Jawahar Cricket Academy', 'Javagal Srinath ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(20) NOT NULL,
  `team1` varchar(50) NOT NULL,
  `team2` varchar(50) NOT NULL,
  `date_of_match` date NOT NULL,
  `venue` varchar(50) NOT NULL,
  `best_performer` varchar(50) NOT NULL,
  `umpire` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `team1`, `team2`, `date_of_match`, `venue`, `best_performer`, `umpire`) VALUES
(1, 'Jarvis Academy', 'President XI', '2019-10-25', 'Chinnaswamy Stadium, Bangalore', 'KL Rahul', 'Anil Chowdary');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(20) NOT NULL,
  `payment_date` date NOT NULL,
  `amount` int(50) NOT NULL,
  `player_id` int(20) NOT NULL,
  `club_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_date`, `amount`, `player_id`, `club_id`) VALUES
(1, '2016-05-31', 15000, 1, 1),
(2, '2019-10-15', 25000, 2, 2),
(3, '2018-03-12', 18950, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(10) NOT NULL,
  `club_id` int(20) NOT NULL,
  `team_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `age`, `club_id`, `team_id`) VALUES
(1, 'K', 'L', 'Rahul', '1992-04-18', 27, 1, 1),
(2, 'Manish', '', 'Pandey', '1992-09-04', 27, 2, 2),
(3, 'Krishnappa', 'K', 'Gautham', '1998-04-12', 21, 3, 3);

--
-- Triggers `player`
--
DELIMITER $$
CREATE TRIGGER `tr_club_players` AFTER INSERT ON `player` FOR EACH ROW update club
    set club.no_of_players = club.no_of_players + 1
    where club.club_id = NEW.club_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_club_players_del` BEFORE DELETE ON `player` FOR EACH ROW update club
    set club.no_of_players = club.no_of_players - 1
    where club.club_id = old.club_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `player_history`
--

CREATE TABLE `player_history` (
  `player_id` int(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `total_runs` int(20) NOT NULL,
  `total_wickets` int(20) NOT NULL,
  `catches` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_history`
--

INSERT INTO `player_history` (`player_id`, `role`, `total_runs`, `total_wickets`, `catches`) VALUES
(1, 'Wk-Batsman', 1253, 12, 84),
(2, 'Batsman', 1672, 16, 68),
(3, 'Bowler', 243, 193, 54);

-- --------------------------------------------------------

--
-- Table structure for table `plays_matches`
--

CREATE TABLE `plays_matches` (
  `match_id` int(20) NOT NULL,
  `team_id` int(20) NOT NULL,
  `result` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plays_matches`
--

INSERT INTO `plays_matches` (`match_id`, `team_id`, `result`) VALUES
(1, 1, 'Jarvis Stricker won by 4 wickets.');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(20) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_captain` varchar(50) NOT NULL,
  `head_coach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_captain`, `head_coach`) VALUES
(1, 'Jarvis Strikers', 'K L Rahul', 'Gary'),
(2, 'President XI', 'Manish Pandey', 'Venkatesh Prasad'),
(3, 'Jawahar Stream', 'Mayank M Agarwal', 'Rahul Dravid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_history`
--
ALTER TABLE `player_history`
  ADD PRIMARY KEY (`player_id`,`role`);

--
-- Indexes for table `plays_matches`
--
ALTER TABLE `plays_matches`
  ADD PRIMARY KEY (`match_id`,`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
