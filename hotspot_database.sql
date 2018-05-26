-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 05:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotspot_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `address` varchar(200) NOT NULL,
  `longitude` decimal(7,4) NOT NULL,
  `latitude` decimal(7,4) NOT NULL,
  `name` varchar(60) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`address`, `longitude`, `latitude`, `name`, `suburb`, `picture`) VALUES
('Delaware St', '153.0446', '-27.3789', '7th Brigade Park, Chermside', 'Chermside, 4032', '7thBrigadeParkChermside.jpg'),
('450 Ipswich Road', '153.0333', '-27.5094', 'Annerley Library Wifi', 'Annerley, 4103', 'AnnerleyLibraryWifi.jpg'),
('87 Amarina Avenue', '152.9871', '-27.4439', 'Ashgrove Library Wifi', 'Ashgrove, 4060', 'AshgroveLibraryWifi.jpg'),
('284 St. Vincents Road', '153.0783', '-27.3740', 'Banyo Library Wifi', 'Banyo, 4014', 'BanyoLibraryWifi.jpg'),
('Birkin Rd & Sugarwood St', '152.8937', '-27.5635', 'Booker Place Park', 'Bellbowrie, 4070', 'BookerPlacePark.jpg'),
('Corner Bracken and Barrett Street', '153.0379', '-27.3180', 'Bracken Ridge Library Wifi', 'Bracken Ridge, 4017', 'BrackenRidgeLibraryWifi.jpg'),
('Mt Coot-tha Rd', '152.9760', '-27.4772', 'Brisbane Botanic Gardens', 'Toowong, 4066', 'BrisbaneBotanicGardens.jpg'),
('Brisbane Square, 266 George Street', '153.0225', '-27.4709', 'Brisbane Square Library Wifi', 'Brisbane City, 4000', 'BrisbaneSquareLibraryWifi.jpg'),
('Corner Riding Road & Oxford Street', '153.0628', '-27.4520', 'Bulimba Library Wifi', 'Bulimba, 4171', 'BulimbaLibraryWifi.jpg'),
('Formby & Ormskirk Sts', '153.0367', '-27.6215', 'Calamvale District Park', 'Calamvale', 'CalamvaleDistrictPark.jpg'),
('Corner Mayfield Road & Nyrang Street', '153.0912', '-27.4917', 'Carina Library Wifi', 'Carina, 4152', 'CarinaLibraryWifi.jpg'),
('The Home and Leisure Centre, Corner Carindale Street  & Banchory Court, Westfield Carindale Shopping Centre', '153.1004', '-27.5048', 'Carindale Library Wifi', 'Carindale, 4152', 'CarindaleLibraryWifi.jpg'),
('Cadogan and Bedivere Sts', '153.1111', '-27.4970', 'Carindale Recreation Reserve', 'Carindale, 4152', 'CarindaleRecreationReserve.jpg'),
('375 Hamilton  Road', '153.0349', '-27.3856', 'Chermside Library Wifi', 'Chermside, 4032', 'ChermsideLibraryWifi.jpg'),
('Alice Street', '153.0301', '-27.4756', 'City Botanic Gardens Wifi', 'Brisbane City, 4000', 'CityBotanicGardensWifi.jpg'),
('107 Orange Grove Road', '153.0403', '-27.5651', 'Coopers Plains Library Wifi', 'Coopers Plains, 4108', 'CoopersPlainsLibraryWifi.jpg'),
('641 Oxley Road', '152.9809', '-27.5388', 'Corinda Library Wifi', 'Corinda, 4075', 'CorindaLibraryWifi.jpg'),
('Granadilla St', '153.0760', '-27.5775', 'D.M. Henderson Park', 'MacGregor', 'D.M.HendersonPark.jpg'),
('Brighton Rd', '153.0682', '-27.3195', 'Einbunpin Lagoon', 'Sandgate, 4017', 'EinbunpinLagoon.jpg'),
('561 South Pine Road', '152.9904', '-27.4053', 'Everton Park Library Wifi', 'Everton Park, 4053', 'EvertonParkLibraryWifi.jpg'),
('Fairfield Gardens Shopping Centre, 180 Fairfield Road', '153.0260', '-27.5091', 'Fairfield Library Wifi', 'Fairfield, 4103', 'FairfieldLibraryWifi.jpg'),
('Forest Lake Bld', '152.9663', '-27.6202', 'Forest Lake Parklands', 'Forest Lake', 'ForestLakeParklands.jpg'),
('Garden City Shopping Centre, Corner Logan and Kessels Road', '153.0809', '-27.5624', 'Garden City Library Wifi', 'Upper Mount Gravatt, 4122', 'GardenCityLibraryWifi.jpg'),
('Logan Rd', '153.0692', '-27.5255', 'Glindemann Park', 'Holland Park, 4121', 'GlindemannPark.jpg'),
('79 Evelyn Street', '153.0175', '-27.4253', 'Grange Library Wifi', 'Grange, 4051', 'GrangeLibraryWifi.jpg'),
('Baroona Rd', '152.9998', '-27.4670', 'Gregory Park', 'Paddington, 4064', 'GregoryPark.jpg'),
('Sir Fred Schonell Dve', '153.0019', '-27.4930', 'Guyatt Park', 'St Lucia', 'GuyattPark.jpg'),
('Corner Racecourt Road and Rossiter Parade', '153.0642', '-27.4379', 'Hamilton Library Wifi', 'Hamilton, 4007', 'HamiltonLibraryWifi.jpg'),
('Roghan Rd', '153.0350', '-27.3397', 'Hidden World Park', 'Fitzgibbon', 'HiddenWorldPark.jpg'),
('81 Seville Road', '153.0723', '-27.5229', 'Holland Park Library Wifi', 'Holland Park, 4121', 'HollandParkLibraryWifi.jpg'),
('Inala Shopping centre, Corsair Ave', '152.9735', '-27.5983', 'Inala Library Wifi', 'Inala, 4077', 'InalaLibraryWifi.jpg'),
('Indrooroopilly Shopping centre, Level 4, 322 Moggill Road', '152.9736', '-27.4976', 'Indooroopilly Library Wifi', 'Indooroopilly, 4068', 'IndooroopillyLibraryWifi.jpg'),
('Kalinga St', '153.0522', '-27.4067', 'Kalinga Park', 'Clayfield', 'KalingaPark.jpg'),
('Kenmore Village Shopping Centre, Brookfield Road', '152.9386', '-27.5059', 'Kenmore Library Wifi', 'Kenmore, 4069', 'KenmoreLibraryWifi.jpg'),
('Turbot St and Wickham Tce', '153.0241', '-27.4659', 'King Edward Park (Jacob\'s Ladder)', 'Brisbane City, 4000', 'KingEdwardPark(Jacob\'sLadder).'),
('Ann & Adelaide Sts', '153.0242', '-27.4684', 'King George Square', 'Brisbane City, 4000', 'KingGeorgeSquare.jpg'),
('37 Helipolis Parada', '152.9783', '-27.4170', 'Mitchelton Library Wifi', 'Mitchelton, 4053', 'MitcheltonLibraryWifi.jpg'),
('Administration Building, Brisbane Botanic Gardens (Mt Coot-tha), Mt Coot-tha Road', '152.9760', '-27.4753', 'Mt Coot-tha Botanic Gardens Library Wifi', 'Toowong, 4066', 'MtCoot-thaBotanicGardensLibrar'),
('8 Creek Road', '153.0803', '-27.5386', 'Mt Gravatt Library Wifi', 'Mt Gravatt, 4122', 'MtGravattLibraryWifi.jpg'),
('Mt Ommaney Shopping Centre, 171 Dandenong Road', '152.9378', '-27.5482', 'Mt Ommaney Library Wifi', 'Mt Ommaney, 4074', 'MtOmmaneyLibraryWifi.jpg'),
('135 Sydney Street', '153.0496', '-27.4674', 'New Farm Library Wifi', 'New Farm, 4005', 'NewFarmLibraryWifi.jpg'),
('Brunswick Street', '153.0522', '-27.4705', 'New Farm Park Wifi', 'New Farm, 4005', 'NewFarmParkWifi.jpg'),
('1 Bage Street', '153.0584', '-27.4013', 'Nundah Library Wifi', 'Nundah, 4012', 'NundahLibraryWifi.jpg'),
('Cnr of Alexandra & Lancaster Rds', '153.0577', '-27.4293', 'Oriel Park', 'Ascot, 4007', 'OrielPark.jpg'),
('Hill End Tce', '153.0033', '-27.4900', 'Orleigh Park', 'West End, 4101', 'OrleighPark.jpg'),
('Queen & Adelaide Sts', '153.0274', '-27.4674', 'Post Office Square', 'Brisbane City, 4000', 'PostOfficeSquare.jpg'),
('Counihan Rd', '152.9591', '-27.5415', 'Rocks Riverside Park', 'Seventeen Mile Rocks, 4073', 'RocksRiversidePark.jpg'),
('Seymour Street', '153.0705', '-27.3206', 'Sandgate Library Wifi', 'Sandgate, 4017', 'SandgateLibraryWifi.jpg'),
('280 Logan Road', '153.0437', '-27.4980', 'Stones Corner Library Wifi', 'Stones Corner, 4120', 'StonesCornerLibraryWifi.jpg'),
('Sunnybank Hills Shopping Centre, Corner Compton and Calam Roads', '153.0551', '-27.6109', 'Sunnybank Hills Library Wifi', 'Sunnybank Hills, 4109', 'SunnybankHillsLibraryWifi.jpg'),
('Pullen & Osborne Rds', '152.9806', '-27.4029', 'Teralba Park', 'Everton Park, 4053', 'TeralbaPark.jpg'),
('Toowon Village Shopping Centre, Sherwood Road', '152.9925', '-27.4851', 'Toowong Library Wifi', 'Toowong, 4066', 'ToowongLibraryWifi.jpg'),
('178 - 180 Boundary Street', '153.0121', '-27.4825', 'West End Library Wifi', 'West End, 4101', 'WestEndLibraryWifi.jpg'),
('Wynnum Civic Centre, 66 Bay Terrace', '153.1732', '-27.4424', 'Wynnum Library Wifi', 'Wynnum, 4178', 'WynnumLibraryWifi.jpg'),
('Corner Jennings Street and Zillmere Road', '153.0408', '-27.3601', 'Zillmere Library Wifi', 'Zillmere, 4034', 'ZillmereLibraryWifi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`email`, `password`, `birthday`, `username`) VALUES
('azurehutchings@gmail.com', '11034d1908b54cedc58a4a704de1f283745834dd78413ecefdeab9fd70d5fd1e', '1998-06-21', 'azurehutchings'),
('jdanoy3@gmail.com', '61e68aa6ea6c86160e8ecea663e82eb7be16b0a38bc648c5fd8cc16e58943de4', '2018-05-24', 'jonhydude');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `username` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `review` varchar(500) NOT NULL,
  `date_posted` datetime NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`username`, `name`, `review`, `date_posted`, `rating`, `title`) VALUES
('azurehutchings', 'Ashgrove Library Wifi', 'This library is the best.', '2018-05-25 13:35:45', '5.0', 'I met my wife at this library'),
('azurehutchings', 'Kalinga Park', 'I met my wife at this library.', '2018-05-25 13:35:05', '5.0', 'This library is fantastic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`username`,`name`),
  ADD KEY `name` (`name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`name`) REFERENCES `items` (`name`),
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`username`) REFERENCES `members` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
