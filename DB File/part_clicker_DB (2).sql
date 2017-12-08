-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2017 at 02:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `part_clicker_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Build`
--

CREATE TABLE `Build` (
  `buildID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `totalPrice` double DEFAULT '0',
  `caseID` varchar(255) DEFAULT NULL,
  `storageID` varchar(255) DEFAULT NULL,
  `memoryID` varchar(255) DEFAULT NULL,
  `motherBoardID` varchar(255) DEFAULT NULL,
  `powerSupplyID` varchar(255) DEFAULT NULL,
  `graphicsCardID` varchar(255) DEFAULT NULL,
  `cpuID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `Build`
--
DELIMITER $$
CREATE TRIGGER `build_price_add` AFTER INSERT ON `Build` FOR EACH ROW BEGIN

	DECLARE partPrice double;
	SELECT price into partPrice from Build
	where caseID = new.caseID OR storageID = new.storageID OR memoryID = new.memoryID OR motherBoardID = new.motherBoardID OR powerSupplyID = 				new.powerSupplyID OR graphicsCardID = new.graphicsCardID OR cpuID = new.cpuID;

	IF (new.caseID IS NULL) then
	Update Build set totalPrice = totalPrice+partPrice;

	ELSEIF (new.storageID IS NULL) then
	Update Build set totalPrice = totalPrice+partprice;

	ELSEIF (new.memoryID IS NULL) then
	Update Build set totalPrice = totalPrice+partPrice;

	ELSEIF(new.motherBoardID IS NULL) then
	Update Build set totalPrice = totalPrice+partPrice;

	ELSEIF (new.powerSupplyID IS NULL) then
	Update Build set totalPrice = totalPrice+partPrice;

	ELSEIF (new.graphicsCardID IS NULL) then
	Update Build set totalPrice = totalPrice+partPrice;

	ELSEIF (new.cpuID IS NULL) then
	Update Build set totalPrice = totalPrice+partPrice;
END IF;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `build_price_delete` AFTER DELETE ON `Build` FOR EACH ROW BEGIN

DECLARE partPrice double;
SELECT price into partPrice from Build
where caseID = old.caseID OR storageID = old.storageID OR memoryID = old.memoryID OR motherBoardID = old.motherBoardID OR powerSupplyID = old.powerSupplyID OR graphicsCardID = old.graphicsCardID OR cpuID = old.cpuID;

	IF (old.caseID IS NULL) then
	Update Build set totalPrice = totalPrice-partPrice;

	ELSEIF (old.storageID IS NULL) then
	Update Build set totalPrice = totalPrice-partprice;
	
    ELSEIF (old.memoryID IS NULL) then
	Update Build set totalPrice = totalPrice-partPrice;

	ELSEIF(old.motherBoardID IS NULL) then
	Update Build set totalPrice = totalPrice-partPrice;

	ELSEIF (old.powerSupplyID IS NULL) then
	Update Build set totalPrice = totalPrice-partPrice;

	ELSEIF (old.graphicsCardID IS NULL) then
	Update Build set totalPrice = totalPrice-partPrice;

	ELSEIF (old.cpuID IS NULL) then
	Update Build set totalPrice = totalPrice-partPrice;
END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `CPU`
--

CREATE TABLE `CPU` (
  `cpuID` varchar(255) NOT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `Speed` varchar(255) DEFAULT NULL,
  `Cores` varchar(255) DEFAULT NULL,
  `tdp` varchar(255) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CPU`
--

INSERT INTO `CPU` (`cpuID`, `manufacturer`, `price`, `name`, `storeName`, `Speed`, `Cores`, `tdp`, `link`) VALUES
('BX80646154690K', 'Intel', 269.99, 'Core i5 - 4690K', 'DIRECTRON', '3.5 GHZ', '4', '88W', '\"intel_core i5.php\"'),
('BX80646174790K', 'Intel', 333.99, 'Core i7 - 4790K', 'SuperBiiz', '4.0 GHz', '4', '88w', '\"intel_core i7.php\"'),
('BX80677I77700k', 'Intel', 287.89, 'Core i7-7700K', 'B&H', '4.2 GHZ', '4', '91W', '\"Intel_Core i7-7700k.php\"'),
('YD150XBBAEBOX', 'AMD', 168.68, 'RYZEN 5 1500X', 'OutletPC', '3.5GHz', '4', '65W ', '\"AMD_Ryzen_5_1500X.php\"');

-- --------------------------------------------------------

--
-- Table structure for table `GraphicsCard`
--

CREATE TABLE `GraphicsCard` (
  `graphicsCardID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `chipSet` varchar(255) DEFAULT NULL,
  `memory` varchar(255) DEFAULT NULL,
  `coreClock` varchar(255) DEFAULT NULL,
  `Price` double NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GraphicsCard`
--

INSERT INTO `GraphicsCard` (`graphicsCardID`, `name`, `manufacturer`, `storeName`, `chipSet`, `memory`, `coreClock`, `Price`, `link`) VALUES
('08G-P4-5173-KR', 'GEFORCE GTX 1070', 'EVGA', 'NewEgg', 'NVIDIA', '8GB', '1.59GHZ', 434.99, '\"EVGA_GeForce_GTX_1070.php\"'),
('11265-01-20G', 'Radeon RX 580 8GB NITRO+', 'Sapphire', 'newegg', 'AMD', '8GB', '1.26GHz', 294.98, ''),
('STRIX-GTX1080TI-11G-GAMING', 'Geforce GTX 1080 Ti ', 'Asus', 'SuperBiiz', 'Nvidia', '11GB', '1.49GHz', 758.99, ''),
('ZT-P10510A-10L', 'GeForce GTX 1050 Ti', 'Zotac', 'SuperBiiz', 'NVIDIA\r\n', '4GB', '1.30GHZ', 158.99, '\"Zotac_GeForce_GTX_1050_Ti.php\"');

-- --------------------------------------------------------

--
-- Table structure for table `Memory`
--

CREATE TABLE `Memory` (
  `memoryID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `Speed` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Memory`
--

INSERT INTO `Memory` (`memoryID`, `name`, `price`, `manufacturer`, `storeName`, `Speed`, `capacity`, `link`) VALUES
('F3-12800CL10D-16GBXL', 'Ripjaws X Series ', 125.93, 'G.Skill', 'Amazon', 'DDR3-1600', '16GB', '\"GSkill_Ripjaws_16GB.php\"'),
('F4-3200C14Q2-128GTZSW', 'Trident Z', 2114.99, 'G.Skill', 'newegg', 'DDR4-3200MGHz', '128GB(8 X 16GB)', ''),
('KVR667D2-1GR', 'valueRam', 7.5, 'Kingston', 'amazon', 'DDR2-667MGHz', '1GB(1 X 1GB)', ''),
('PV38G160C9K', 'Viper 3 ', 59.99, 'Patriot', 'newegg', 'DDR3-1600MGHz', '8GB(2 X 4GB)', '');

-- --------------------------------------------------------

--
-- Table structure for table `MotherBoard`
--

CREATE TABLE `MotherBoard` (
  `motherBoardID` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `maxRam` int(11) DEFAULT NULL,
  `ramSlots` int(11) DEFAULT NULL,
  `socketCPU` varchar(255) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MotherBoard`
--

INSERT INTO `MotherBoard` (`motherBoardID`, `price`, `name`, `storeName`, `maxRam`, `ramSlots`, `socketCPU`, `link`) VALUES
('B350M PRO-VD PLUS', 51.98, 'MSI - B350M PRO-VD PLUS Micro ATX', 'newegg', 32, 2, 'AM4', ''),
('BLKDP35DPM', 789.79, 'DP35DPM ATX ', 'newegg', 8, 4, 'LGA775', ''),
('GA-B250M-DS3H', 39.98, 'Gigabyte Micro ATX ', 'newegg', 64, 4, 'LGA1151', ''),
('H81M-P33', 42.49, 'MSI-H81M-P33 Micro ATX LGA1150', 'SuperBiiz', 16, 2, 'LGA1150', '\"MSI_H81M-P33_Micro.php\"');

-- --------------------------------------------------------

--
-- Table structure for table `PcCase`
--

CREATE TABLE `PcCase` (
  `caseID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PcCase`
--

INSERT INTO `PcCase` (`caseID`, `name`, `price`, `manufacturer`, `storeName`, `type`, `link`) VALUES
('200R', '200R ATX Mid Tower Case ', 59.99, 'Corsair', 'NewEgg', 'ATX Mid Tower', '\"Corsair_200R_ATX_Mid_Tower.php\"'),
('BGW10', 'Dark Base Pro 900 (Black/Orange) ATX Full Tower Case', 218.99, 'be quiet!', 'SuperBiiz', 'ATX', ''),
('FBM-01', 'FBM-01 MicroATX Mini Tower Case', 16.99, 'Rosewill', 'amazon', 'MicroATX ', ''),
('PH-ES916E_BK', 'Enthoo Elite (Black) ATX Full Tower Case', 924.98, 'Phanteks', 'newegg', 'ATX ', '');

-- --------------------------------------------------------

--
-- Table structure for table `PowerSupply`
--

CREATE TABLE `PowerSupply` (
  `powerSupplyID` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Manufacturer` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `watts` varchar(255) DEFAULT NULL,
  `modular` varchar(255) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PowerSupply`
--

INSERT INTO `PowerSupply` (`powerSupplyID`, `name`, `Manufacturer`, `price`, `storeName`, `watts`, `modular`, `link`) VALUES
('120-G1-0650-XR', 'SuperNova NEX 650W ', 'EVGA', 70.98, 'NewEgg', '650W', 'FULL', '\"EVGA_SuperNOVA_NEX_650W_80+ Gold.php\"'),
('CP-9020101-NA', 'CXM (2105) 450W ', 'Corsair ', 31.98, 'newegg', '450W', 'Semi', ''),
('MPZ-C002-AFBAT', 'MASTERWATT MAKER MIJ 1200W', 'Cooler Master ', 999.99, 'amazon ', '1200W', 'Full', ''),
('SS-620GM2', 'EVO Edition 620W', 'SeaSonic', 65.98, 'newegg', '620W', 'Full', '');

-- --------------------------------------------------------

--
-- Table structure for table `Storage`
--

CREATE TABLE `Storage` (
  `storageID` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `cache` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Storage`
--

INSERT INTO `Storage` (`storageID`, `price`, `manufacturer`, `storeName`, `capacity`, `cache`, `type`, `link`) VALUES
('HDWE140XZSTA', 105.99, 'Toshiba', 'amazon ', '4TB', '128MB', 'HDD', '0'),
('MZ-75E250D/AM', 84.99, 'Samsung ', 'newegg', '250GB', 'N/A', 'SSD', '0'),
('SSDPECME040T401', 8867.99, 'Intel ', 'amazon ', '4TB', 'N/A', 'PCIE-SSD', '0'),
('WD10EZEX', 41.89, 'Western Digital', 'SuperBiiz', '1TB', '64MB', 'HDD', '\"Western_Digital_Caviar-Blue_1TB.php\"');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userID`, `firstName`, `lastName`, `email`, `password`) VALUES
(4, 'Ryan ', 'Reynolds', 'reynolds@gmail.com', '$2y$10$TQEfGVYXIsiSC60cRj/YVuFe8oOMr9ZX6D.lfAsSW9A88TUUXMEbm'),
(5, 'matt', 'layman', 'mattlayman@gmail.com', '$2y$10$4gxe0MrHPr.jg/5oUrpsDuGnNwr0BLDjbI1xtJ.P8QtsskRXEZESW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Build`
--
ALTER TABLE `Build`
  ADD PRIMARY KEY (`buildID`),
  ADD KEY `caseID` (`caseID`),
  ADD KEY `storageID` (`storageID`),
  ADD KEY `memoryID` (`memoryID`),
  ADD KEY `motherBoardID` (`motherBoardID`),
  ADD KEY `powerSupplyID` (`powerSupplyID`),
  ADD KEY `graphicsCardID` (`graphicsCardID`),
  ADD KEY `cpuID` (`cpuID`),
  ADD KEY `FK_userID` (`userID`);

--
-- Indexes for table `CPU`
--
ALTER TABLE `CPU`
  ADD PRIMARY KEY (`cpuID`);

--
-- Indexes for table `GraphicsCard`
--
ALTER TABLE `GraphicsCard`
  ADD PRIMARY KEY (`graphicsCardID`);

--
-- Indexes for table `Memory`
--
ALTER TABLE `Memory`
  ADD PRIMARY KEY (`memoryID`);

--
-- Indexes for table `MotherBoard`
--
ALTER TABLE `MotherBoard`
  ADD PRIMARY KEY (`motherBoardID`);

--
-- Indexes for table `PcCase`
--
ALTER TABLE `PcCase`
  ADD PRIMARY KEY (`caseID`);

--
-- Indexes for table `PowerSupply`
--
ALTER TABLE `PowerSupply`
  ADD PRIMARY KEY (`powerSupplyID`);

--
-- Indexes for table `Storage`
--
ALTER TABLE `Storage`
  ADD PRIMARY KEY (`storageID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Build`
--
ALTER TABLE `Build`
  ADD CONSTRAINT `FK_userID` FOREIGN KEY (`userID`) REFERENCES `User` (`userID`),
  ADD CONSTRAINT `build_ibfk_2` FOREIGN KEY (`caseID`) REFERENCES `PcCase` (`caseID`),
  ADD CONSTRAINT `build_ibfk_3` FOREIGN KEY (`storageID`) REFERENCES `Storage` (`storageID`),
  ADD CONSTRAINT `build_ibfk_4` FOREIGN KEY (`memoryID`) REFERENCES `Memory` (`memoryID`),
  ADD CONSTRAINT `build_ibfk_5` FOREIGN KEY (`motherBoardID`) REFERENCES `MotherBoard` (`motherBoardID`),
  ADD CONSTRAINT `build_ibfk_6` FOREIGN KEY (`powerSupplyID`) REFERENCES `PowerSupply` (`powerSupplyID`),
  ADD CONSTRAINT `build_ibfk_7` FOREIGN KEY (`graphicsCardID`) REFERENCES `GraphicsCard` (`graphicsCardID`),
  ADD CONSTRAINT `build_ibfk_8` FOREIGN KEY (`cpuID`) REFERENCES `CPU` (`cpuID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
