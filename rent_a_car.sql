-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2016 at 12:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`Name`, `Address`) VALUES
('Auto Europe', 'Boulevard Ilindenska 97 Skopje');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `IDB` varchar(2) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Name_agency` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`IDB`, `Name`, `Address`, `Name_agency`) VALUES
('BT', 'Bitola', 'Str. Grcki Pat Bb.', 'Auto Europe'),
('OH', 'Ohrid', 'Str. Makedonski Prosvetiteli', 'Auto Europe'),
('SK', 'Skopje', 'Str. Skupi No. 8', 'Auto Europe'),
('TE', 'Tetovo', 'D.T.C. Lovec', 'Auto Europe');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `IDCA` tinyint(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `License_plate` varchar(6) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Color` varchar(15) NOT NULL,
  `Date_of_manufacture` date NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `IDB` varchar(2) NOT NULL,
  `IDM` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`IDCA`, `Name`, `License_plate`, `Category`, `Color`, `Date_of_manufacture`, `Price`, `Image`, `IDB`, `IDM`) VALUES
(1, 'Fiat Panda', 'GIJ282', 'Mini', 'Orange', '2006-10-09', '99.00', 'fiatpanda', 'SK', 'FT'),
(2, 'Fiat Grande Punto', 'UHG818', 'Mini', 'Blue', '2008-06-16', '115.00', 'fiatgrandepunto', 'OH', 'FT'),
(3, 'Volkswagen Polo', 'YTP123', 'Economy', 'White', '1995-01-23', '115.00', 'volkswagenpolo', 'OH', 'VK'),
(4, 'Citroen C3', 'OZA787', 'Economy', 'Brown', '1998-05-18', '120.00', 'citroenc3', 'BT', 'CT'),
(5, 'Citroen C4', 'YBJ550', 'Economy', 'Red', '2010-10-14', '140.00', 'citroenc4', 'TE', 'CT'),
(6, 'Opel Corsa', 'LWK687', 'Economy', 'Gray', '2008-09-15', '145.00', 'opelcorsa', 'SK', 'CT'),
(7, 'Fiat Linea', 'UFA775', 'Compact', 'Red', '1996-09-25', '160.00', 'fiatlinea', 'OH', 'FT'),
(8, 'Seat Leon', 'CWD635', 'Compact', 'White', '1995-11-17', '170.00', 'seatleon', 'SK', 'ST'),
(9, 'Volkswagen Golf', 'ABY751', 'Compact', 'Blue', '2000-05-22', '180.00', 'volkswagengolf', 'BT', 'VK'),
(10, 'Seat Toledo', 'SRT831', 'Midsize', 'Red', '2000-03-24', '190.00', 'seattoledo', 'OH', 'ST'),
(11, 'Citroen C5', 'UBN543', 'Midsize', 'Gray', '1998-10-20', '200.00', 'citroenc5', 'BT', 'CT'),
(12, 'Volkswagen Jetta', 'JHR817', 'Midsize', 'Blue', '1997-09-05', '220.00', 'volkswagenjetta', 'SK', 'VK'),
(13, 'Fiat Scudo', 'PEF609', 'Minivan', 'Gray', '1996-10-08', '240.00', 'fiatscudo', 'TE', 'FT'),
(14, 'Volkswagen Passat', 'RUQ855', 'Family', 'Gray', '1996-08-07', '245.00', 'volkswagenpassat', 'BT', 'VK'),
(15, 'Volkswagen Transporter', 'SIZ655', 'Minivan', 'Gray', '1996-07-11', '260.00', 'volkswagentransporter', 'SK', 'VK'),
(16, 'Audi A4', 'WLI393', 'Family', 'Gray', '2005-08-05', '300.00', 'audia4', 'SK', 'AD'),
(17, 'Opel Antara', 'XZU082', 'SUV', 'Gray', '2010-08-10', '300.00', 'opelantara', 'TE', 'OP'),
(18, 'Jeep Compass', 'WGO605', 'SUV', 'Gray', '2002-10-10', '300.00', 'jeepcompass', 'TE', 'JP');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `IDCL` tinyint(4) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Hash` varchar(255) NOT NULL,
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Telephone` varchar(11) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Date_of_membership` date NOT NULL,
  `Name_agency` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`IDCL`, `Username`, `Hash`, `First_name`, `Last_name`, `Age`, `Telephone`, `Address`, `Date_of_membership`, `Name_agency`) VALUES
(1, '', '', 'Dusica', 'Mihajlova', 25, '355-023', 'Str. Ilindenska Tetovo', '2014-08-29', 'Auto Europe'),
(2, '', '', 'Nikola', 'Bogdanovski', 45, '690-027', 'Str. Nikola Karev Skopje', '2013-04-30', 'Auto Europe'),
(3, '', '', 'Ognen', 'Volkov', 38, '859-809', 'Str. Goce Delcev Ohrid', '2015-05-01', 'Auto Europe'),
(4, '', '', 'Vladimir', 'Petreski', 27, '943-020', 'Str. Ilindenska Tetovo', '2014-10-14', 'Auto Europe'),
(5, '', '', 'Nada', 'Gligorova', 49, '316-220', 'Str. Car Samoil Bitola', '2012-09-04', 'Auto Europe'),
(6, '', '', 'Mihail', 'Romanov', 42, '362-855', 'Str. Varsavska Skopje', '2015-04-16', 'Auto Europe'),
(7, '', '', 'Angela', 'Stefanovska', 28, '154-464', 'Str. Partizanski Odredi Skopje', '2012-07-23', 'Auto Europe'),
(8, '', '', 'Marija', 'Jovanovic', 48, '665-188', 'Str. Ilindenska Tetovo', '2012-09-23', 'Auto Europe'),
(9, '', '', 'David', 'Stankovski', 23, '529-559', 'Str. Partizanska Ohrid', '2014-04-27', 'Auto Europe'),
(10, '', '', 'Nikolina', 'Trajkovska', 26, '673-227', 'Str. Dimitar Vlahov Bitola', '2010-01-18', 'Auto Europe'),
(11, 'at21819', '$1$Yo1.B01.$16G47psUX2o7NawVLgDWS/', 'Aleksandar', 'Tanchev', 21, '078-858', 'Ilindenska', '2016-01-24', 'Auto Europe');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `IDM` varchar(2) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Telephone` varchar(7) DEFAULT NULL,
  `Contact_person` varchar(30) DEFAULT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`IDM`, `Name`, `Address`, `Telephone`, `Contact_person`, `Image`) VALUES
('AD', 'Audi', 'Germany', '680-804', 'Rupert Stadler', 'audi'),
('CT', 'Citroen', 'France', '259-912', 'Linda Jackson', 'citroen'),
('FT', 'Fiat', 'Italy', '225-587', 'John Elkann', 'fiat'),
('JP', 'Jeep', 'USA', '194-100', 'Michael Manley', 'jeep'),
('OP', 'Opel', 'Germany', '350-428', 'Karl-Thomas Neumann', 'opel'),
('ST', 'Seat', 'Spain', '130-195', 'Francisco Javier Garcia Sanz', 'seat'),
('VK', 'Volkswagen', 'Germany', '727-848', 'Martin Winterkorn', 'volkswagen');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `IDCA` tinyint(4) NOT NULL,
  `IDCL` tinyint(4) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`IDCA`, `IDCL`, `Start_date`, `End_date`) VALUES
(1, 7, '2013-08-02', '2013-08-12'),
(3, 9, '2015-01-14', '2015-01-24'),
(4, 10, '2011-01-02', '2011-01-12'),
(5, 1, '2014-08-30', '2014-09-13'),
(5, 4, '2015-05-01', '2015-05-11'),
(5, 8, '2013-02-20', '2013-03-02'),
(6, 2, '2013-06-12', '2013-06-22'),
(6, 7, '2013-05-17', '2013-05-27'),
(7, 9, '2014-12-26', '2015-01-09'),
(7, 11, '2016-01-26', '2016-02-02'),
(9, 5, '2012-10-27', '2012-11-10'),
(9, 10, '2011-08-14', '2011-08-24'),
(10, 11, '2016-02-14', '2016-03-01'),
(11, 5, '2013-12-24', '2014-01-07'),
(11, 10, '2010-12-27', '2011-01-10'),
(17, 1, '2014-12-17', '2014-12-27'),
(17, 8, '2013-06-14', '2013-06-24'),
(18, 11, '2016-04-12', '2016-05-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`IDB`),
  ADD KEY `Belongs_to` (`Name_agency`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`IDCA`),
  ADD KEY `Located_in` (`IDB`),
  ADD KEY `Supplies` (`IDM`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`IDCL`),
  ADD KEY `Member_of` (`Name_agency`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`IDM`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`IDCA`,`IDCL`),
  ADD KEY `To_clients` (`IDCL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `IDCL` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `Belongs_to` FOREIGN KEY (`Name_agency`) REFERENCES `agency` (`Name`);

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `Located_in` FOREIGN KEY (`IDB`) REFERENCES `branches` (`IDB`),
  ADD CONSTRAINT `Supplies` FOREIGN KEY (`IDM`) REFERENCES `manufacturers` (`IDM`);

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `Member_of` FOREIGN KEY (`Name_agency`) REFERENCES `agency` (`Name`);

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `To_cars` FOREIGN KEY (`IDCA`) REFERENCES `cars` (`IDCA`),
  ADD CONSTRAINT `To_clients` FOREIGN KEY (`IDCL`) REFERENCES `clients` (`IDCL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
