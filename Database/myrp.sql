-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myrp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `checkHid` (IN `id` VARCHAR(30))  SELECT Hid FROM house WHERE Hid=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `checkUid` (IN `id` VARCHAR(30))  SELECT Uid FROM users WHERE Uid=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteHid` (IN `id` VARCHAR(30))  DELETE FROM house WHERE Hid=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteHUid` (IN `userid` VARCHAR(30))  DELETE FROM house WHERE Uid=userid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUser` (IN `userid` VARCHAR(30))  DELETE FROM users WHERE Uid=userid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `regHouse` (IN `hUid` VARCHAR(30), IN `hHid` VARCHAR(30), IN `hName` VARCHAR(30), IN `hAdd1` VARCHAR(30), IN `hAdd2` VARCHAR(30), IN `hArea` VARCHAR(30), IN `hCity` VARCHAR(30), IN `hState` VARCHAR(30), IN `hPcode` INT(6), IN `hLandmark` VARCHAR(30), IN `hBHK` VARCHAR(5), IN `hOption` VARCHAR(15), IN `hWa` VARCHAR(5), IN `hMcost` VARCHAR(5), IN `hAge` INT(5), IN `hRate` INT(10), IN `hSqft` INT(10), IN `hInfo` VARCHAR(50))  INSERT INTO house(Uid,Hid,Name,Add1,Add2,Area,City,State,Pcode,Landmark,BHK,Option,Wa,Mcost,Age,Rate,Sqft,Info) VALUES(hUid,hHid,hName,hAdd1,hAdd2,hArea,hCity,hState,hPcode,hLandmark,hBHK,hOption,hWa,hMcost,hAge,hRate,hSqft,hInfo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `search` (IN `harea` VARCHAR(30), IN `hcity` VARCHAR(30), IN `hbhk` VARCHAR(5), IN `hopt` VARCHAR(30), IN `hrate` INT(10))  IF hopt = 'Both' THEN
	SELECT * from house INNER JOIN users ON house.Uid=users.Uid 
    where Area=harea and City=hcity and BHK=hbhk and Rate<=hrate;
ELSE
	SELECT * from house INNER JOIN users ON house.Uid=users.Uid 
    where Area=harea and City=hcity and BHK=hbhk and (Option=hopt or Option='Both') and Rate<=hrate;
END IF$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `searchCityRateOpt` (IN `hcity` VARCHAR(30), IN `hrate` INT(10), IN `hopt` VARCHAR(15), IN `harea` VARCHAR(30), IN `hbhk` VARCHAR(5))  IF hopt = 'Both' THEN
	SELECT * from house INNER JOIN users ON house.Uid=users.Uid 
    where Area!=harea and City=hcity and BHK!=bhk and Rate<=hrate;
ELSE
	SELECT * from house INNER JOIN users ON house.Uid=users.Uid 
    where Area!=harea and BHK!=bhk and City=hcity and (Option=hopt or Option='Both') and Rate<=hrate;
END IF$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `signIn` (IN `id` VARCHAR(30), IN `pw` VARCHAR(30))  SELECT * FROM users WHERE Uid=id AND Upassword=pw$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `signUp` (IN `name` VARCHAR(30), IN `email` VARCHAR(30), IN `num` VARCHAR(30), IN `pass` VARCHAR(30), IN `id` VARCHAR(30))  INSERT INTO users(Uname,Uemail,Unumber,Upassword,Uid) VALUES(name,email,num,pass,id)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `Uid` varchar(30) NOT NULL,
  `Hid` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Add1` varchar(30) NOT NULL,
  `Add2` varchar(30) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Pcode` int(6) NOT NULL,
  `Landmark` varchar(30) NOT NULL,
  `BHK` varchar(5) NOT NULL,
  `Option` varchar(15) NOT NULL,
  `Wa` varchar(5) NOT NULL,
  `Mcost` varchar(5) NOT NULL,
  `Age` int(5) NOT NULL,
  `Rate` int(10) NOT NULL,
  `Sqft` int(10) NOT NULL,
  `Info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`Uid`, `Hid`, `Name`, `Add1`, `Add2`, `Area`, `City`, `State`, `Pcode`, `Landmark`, `BHK`, `Option`, `Wa`, `Mcost`, `Age`, `Rate`, `Sqft`, `Info`) VALUES
('105', '123', 'Preethi', '304, 11/21, Mani Mahal', 'Mathew Road', 'Ashok Nagar', 'Chennai', 'Tamil Nadu', 610044, 'SBI', '3bhk', 'Both', 'Yes', '530', 3, 6500, 1020, 'Traditional House'),
('102', '204', 'Chris', '141 A, Opp Khelgaon', '?Shahpur Jat', 'Conough plaza', 'Delhi', 'Delhi', 110049, 'Shazam Library', '3bhk', 'Sale', 'Yes', '560', 4, 2460000, 4000, 'Posh Bungalow'),
('101', '210', 'Srikanth', '?G-3, Bhaveshwer Complex', '?Near Rly Station ', 'Vidhyavihar(w)', 'Mumbai', 'Maharashtra', 400086, 'Karen bogh', '2bhk', 'Rent', 'Yes', '340', 2, 5500, 700, 'Elegant house'),
('101', '324', 'Srikanth', '252/d, Wawada Building', 'Opera House', 'Jacob Circle', 'Mumbai', 'Maharashtra', 400011, 'Lala Mall', '2bhk', 'Both', 'Yes', '320', 4, 8200, 2700, 'Modern House'),
('103', '433', 'Ronald', '43 Pragati Industrial Estate', ',N.m Joshi Marg', 'Jacob Circle', 'Mumbai', 'Maharashtra', 400011, 'Near Police station', '2bhk', 'Rent', 'No', '120', 5, 3200, 900, 'Homely house'),
('104', '543', 'Shilpa', '412, 4th Floor', 'Laxmi Plaza, Link Rd', '?Andheri', 'Kolkota', 'West Bengal', 700007, 'Laxmi Indl Est', '1bhk', 'Rent', 'No', '260', 3, 4500, 800, 'Decent house'),
('Uid', 'Hid', 'Name', 'Add1', 'Add2', 'Area', 'City', 'State', 0, 'Landmark', 'BHK', 'Option', 'Wa', 'Mcost', 0, 0, 0, 'Info'),
('101', 'rphome', 'raghul', '5a', 'david nagar', 'alandur', 'chennai', 'tamil nadu', 600088, 'theatre ', '2bhk', 'Both', 'No', '100', 5, 10000, 800, 'good home');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uname` varchar(30) NOT NULL,
  `Uemail` varchar(30) NOT NULL,
  `Unumber` varchar(30) NOT NULL,
  `Upassword` varchar(30) NOT NULL,
  `Uid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uname`, `Uemail`, `Unumber`, `Upassword`, `Uid`) VALUES
('Srikanth', 'srikanth23@gmail.com', '9002331234', '123', '101'),
('Chris', 'chrischristoph@gmail.com', '9876541290', '432', '102'),
('Ronald', 'ron98@gmail.com', '7658908686', '1234', '103'),
('Shilpa', 'sheshilpa@gmail.com', '9876542343', '12345', '104'),
('Preethi', 'preetay@gmail.com', '8243234432', '321', '105'),
('Leela ', 'leelabansali78@gmail.com', '8325134534', '4321', '106'),
('Jagan', 'jjaganpak@gmail.com', '9876545775', '54321', '108'),
('Rp', 'raghul@gmail.com', '9323525552', 'rp', 'Rp'),
('Uname', 'Uemail', 'Unumber', 'Upassword', 'Uid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`Hid`),
  ADD KEY `FOREIGN` (`Uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Uid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
