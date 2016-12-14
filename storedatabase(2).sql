-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 10:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12
CREATE DATABASE IF NOT EXISTS StoreDatabase;
USE StoreDatabase;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `storedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

CREATE TABLE IF NOT EXISTS `advertisment` (
  `advertismentID` int(50) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `createdBy` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`advertismentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advertisment`
--

INSERT INTO `advertisment` (`advertismentID`, `date`, `details`, `createdBy`) VALUES
(1, NULL, NULL, 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `billinginformation`
--

CREATE TABLE IF NOT EXISTS `billinginformation` (
  `billingID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `billingAddress` varchar(50) DEFAULT NULL,
    billingCity varchar(25) DEFAULT NULL,
  billingState varchar(15) DEFAULT NULL,
  billingZipcode int(5) DEFAULT NULL,
  `creditCardNo` int(16) DEFAULT NULL,
  `creditCardType` varchar(10) DEFAULT NULL,
  `creditCardCVC` int(3) DEFAULT NULL,
  PRIMARY KEY (`billingID`),
  KEY `customerID` (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `billinginformation`
--

INSERT INTO `billinginformation` (`billingID`, `customerID`, `billingAddress`, `billingCity`, `billingState`, `billingZipcode`, `creditCardNo`, `creditCardType`, `creditCardCVC`) VALUES
(1, 1, '7890', 'New Haven', 'CT', 6515, 1111111111, 'VISA', 123);

-- --------------------------------------------------------

--
-- Table structure for table `cancelledorders`
--

CREATE TABLE IF NOT EXISTS `cancelledorders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  KEY `customerID` (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cancelledorders`
--

INSERT INTO `cancelledorders` (`orderID`, `customerID`, `status`) VALUES
(1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--


--
-- Dumping data for table `cart`
--



-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL,
  `details` varchar(100) DEFAULT NULL,
  `categoryName` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `details`, `categoryName`) VALUES
(1, 'Technology', 'Technology'),
(2, 'Smelly Smelly Fragrances ', 'Fragrance'),
(3, 'fruitttttttttttt', 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(15) NOT NULL,
  `lName` varchar(25) NOT NULL,
  `userName` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phoneNo` int(11) DEFAULT NULL,
  `securityQuestion` varchar(40) NOT NULL,
  `securityQuestionAns` varchar(20) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `fName`, `lName`, `userName`, `password`, `email`, `phoneNo`, `securityQuestion`, `securityQuestionAns`) VALUES
(1, 'Johnny', 'Karate', 'JKarate', 'password', 'something@karat', 1, 'What is your favorit', 'Karate'),
(5, 'hj;', 'h;lj', 'jhlk', '', 'h;j', 7890, 'hj;k', 'hj;'),
(14, 'Sean', 'Taylor', 'SeanTaylor', '', 'something@gmail', 2034941111, 'What is your favorit', 'CSC 330'),
(15, 'Sean', 'Taylor', 'SeanTaylor', '', 'something@gmail', 2034941111, 'What is your favorit', 'CSC 330'),
(16, 'Sean', 'Taylor', 'SeanTaylor4', 'p@ssw0rd', 'something@gmail', 2034941111, 'What is your favorit', 'CSC 330'),
(17, 'Sean', 'Taylor', 'SeanTaylor6', 'p@ssw0rd', 'something@gmail', 2034941111, 'What is your favorit', 'CSC 330'),
(18, 'Sean', 'Taylor', 'SeanTaylor7', 'p@ssw0rd', 'something@gmail', 2034941111, 'What is your favorit', 'CSC 330');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeID` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) DEFAULT NULL,
  `fName` varchar(15) DEFAULT NULL,
  `lName` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `position`, `fName`, `lName`) VALUES
(1, 'Database Manager', 'John', 'Doe'),
(2, 'Web Developer', 'Joe', 'Finley'),
(3, 'Advertisment Manager', 'Stephanie', 'Haberman'),
(4, 'Store Manager', 'Sean', 'Taylor'),
(5, 'Human Resources Manager', 'Raul', 'Quiroga'),
(6, 'Web Developer', 'Angelo', 'Ramirez');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `itemID` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(50) DEFAULT NULL,
  `itemDescription` varchar(500) DEFAULT NULL,
  `regularPrice` decimal(7,2) DEFAULT NULL,
  `salePrice` decimal(7,2) DEFAULT NULL,
  `sale` varchar(1) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `clearance` varchar(1) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`itemID`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `itemName`, `itemDescription`, `regularPrice`, `salePrice`, `sale`, `quantity`, `categoryID`, `clearance`, `image`) VALUES
(1, 'ASUS Premium HD Laptop 15.6” ', 'Windows 10 Home 64-bit, Silver Color, Silver, Hairline finish, 3-cell lithium-ion Battery\r\nIntel® Pentium® mobile processor N3700 Quad-Core processor 1.6 GHz with 2M Cache up to 2.4 GHz - four-way processing performance for HD-quality computing, 4GB DDR3L 1600 MHz (Memory RAM Expandable To 8 GB), 5400 RPM HDD', '255.00', '255.00', 'N', 100, 1, 'N', 'Pictures/ASUSPLaptop.jpg'),
(2, 'TeckNet 2.4G Nano Wireless Mouse', 'TeckNet TruWave technology: Provides precise, smart cursor control over many surface types. TeckNet CoLink technology: After pairing theres no need to re-establish pairing after a signal loss or shutdown.TeckNet 2.4G Wireless Gaming Technology: Experience zero delay between your thoughts and actions with gaming-grade 2.4GHz wireless, an increased working distance of up to 50ft/15m', '10.00', '9.99', 'N', 100, 1, 'N', 'Pictures/TeckNet2.4GNanoWirelessMouse.jpg'),
(3, 'Nintendo 3DS', 'Nintendo 3DS offers a new way to play, 3D without the need for special glasses. The 3D Depth Slider lets your determine how much 3D you want to see.\r\nPlay 3D games and take 3D pictures with Nintendo 3DS. One inner camera and two outer cameras. Resolutions are 640 x 480 for each camera. Lens are single focus and uses the CMOS capture element.', '249.00', '248.99', 'N', 100, 1, 'N', 'Pictures/Nintendo 3DS.jpg'),
(4, 'Dell Inspiron 15.6" FHD Laptop', '7th generation Intel Core i7-7500U 3.5 GHz Processor\r\n16GB DDR4 2400Mhz included; 16GB maximum\r\n1TB HDD storage; tray load DVD Drive (reads and writes to DVD/CD) included\r\n15.6-inch FHD (1920 x 1080) Truelife LED-backlit on-cell touch Display\r\nWindows 10 operating system; Gray', '872.00', '872.49', 'N', 100, 1, 'N', 'Pictures/Dell Inspiron 15.6FHD Laptop.jpg'),
(5, 'HP Stream 14" Premium Laptop', '14 inch 1366x768 pixels LED-lit Screen with build in webcam, Integrated Dual Array Digital\r\nIntel Celeron processor N3050 1.6GHz, 1MB Cache, On-board 2GB 1333MHz DDR3L SDRAM, 32GB Solid State Drive\r\nI/O Ports: 1 HDMI, 1 USB 3.0, 1 USB 2.0, 1 Combo Headphone/Mic Jack, Multi-Format SD Card Reader\r\nWindows 10 Home; 802.11b/g/n Wireless LAN, Wirelessly connect to a WiFi signal or hotspot with the 802.11b/g/n connection built into your PC', '299.00', '299.00', 'N', 100, 1, 'N', 'Pictures/HP Stream 14Premium Laptop.png'),
(6, 'Microsoft Surface Book ', '13.5-inch PixelSense touchscreen display (3000 x 2000) resolution\r\nWindows 10 Pro operating system\r\nIncredibly mobile at 3.48 pounds (1576 grams)\r\nSurface Pen included\r\n512 GB, 16 GB RAM, Intel Core i7, NVIDIA GeForce graphics', '1000.00', NULL, 'N', 100, 1, 'N', 'Pictures/Microsoft Surface Book .jpg'),
(7, 'Apple iPad Air 2', '16 GB/Wifi/Gold\r\n9.7-inch Retina display with 2048 x 1536 resolution boasts a fully laminated design that has smaller gaps between the LCD panel and glass cover so you get richer colour, deeper contrasts and sharper images\r\nAntireflective coating reduces glare by 56 per cent for clear, readable views whether indoors or outdoors\r\nA8X chip 64-bit \r\nIncredibly slim, durable aluminum unibody at 6.1 millimetres thin and weighing less than a pound', '347.00', NULL, 'N', 100, 1, 'N', 'Pictures/Apple iPad Air 2.jpg'),
(8, 'Samsung Galaxy Tab E Lite 7-Inch Tablet', 'Android 4.4 KitKat, 7 inches Display\r\nTablet Processor 1.3 GHz\r\n1 GB RAM Memory\r\n0.68 pounds\r\nBlack', '119.00', NULL, 'N', 100, 1, 'N', 'Pictures/SamsungGalaxyTabELite7-Inch Tablet.jpg'),
(9, 'Razer BlackWidow Chroma Clicky Gaming Keyboard', 'Extreme Durability- Razer mechanical switches are rated up to 80 million keystrokes.\r\nExpress your individuality and get the leg-up in games with Chroma backlighting and over 16.8 million color options.\r\nFully programmable keys + 5 additional gaming keys with on-the-fly macro recording\r\nUSB, 3.5mm headphone and microphone ports allow for easy cable routing\r\nEasy access media keys for convenient volume control and media playback\r\n10 key rollover for extreme anti-ghosting', '169.00', NULL, 'N', 100, 1, 'N', 'Pictures/Razer BlackWidow Chroma Clicky.jpg'),
(10, 'HP K2500 Wireless Keyboard US', 'Wireless\r\nSimplified Functions\r\nAdjustable angles\r\nCompatible with Windows 7/8/10’', '19.00', NULL, 'N', 100, 1, 'N', 'Pictures/HP K2500 Wireless Keyboard US.jpg'),
(11, 'HP Pavilion 21.5-Inch Monitor ', 'Amazing angles: Share consistent high-color fidelity with In-Plane Switching (IPS) technology across a 21.5-inch diagonal screen. A stunning vantage point for everyone, from almost any angle.\r\nDistinctively modern and accessible: The contemporary thin profile is enhanced by black and silver colors. The open WEDGE stand design provides convenient access to VGA and HDMI port connections.', '119.00', NULL, 'N', 100, 1, 'N', 'Pictures/HP Pavilion 21.5-Inch Monitor.jpg'),
(12, 'Versace Bright Crystal By Gianni Versace For Women', 'Launched by the design house of Gianni Versace.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being applied', '9.14', '9.14', 'N', 100, 2, 'N', 'Pictures/VersaceBrightCrystal.jpg'),
(13, 'Nautica Voyage By Nautica For Men', 'Launched by the design house of Nautica.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being applied', '14.69', '14.69', 'N', 100, 2, 'N', 'Pictures/NauticaVoyageByNautica.jpg'),
(14, 'AVON Women''s Fragrance Sampler', 'Treat yourself or a friend to something extra special with this AVON women''s fragrance sampler set. This set includes 25 one-time use fragrance cards and one 1 mL sample vial. The following fragrances are included with this sampler: So Very Sofia (1 mL sample vial) So Very Sofia Sample Card Daydream Sample Card Ultra Sexy Lace Sample Card Ultra Sexy Heart Sample Card Ultra Sexy Pink Sample Card Today Sample Card Amour Sample Card Far Away Sample Card Far Away Infinity Sample Card Far Away Gold S', '15.00', '15.00', 'N', 100, 2, 'N', 'Pictures/AVONWomensFragranceSampler.jpg'),
(15, 'Vera Wang Princess by Vera Wang for Women', 'Launched by the design house of Vera Wang.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being applied', '24.95', NULL, NULL, 50, 2, NULL, 'Pictures/VeraWangPrincessbyVeraWang.jpg'),
(16, 'NEST Fragrances Reed Diffuser', 'The Grapefruit reed diffuser by NEST Fragrances includes notes of pink pomelo grapefruit and watery nuances that are blended with lily of the valley and coriander blossom. NEST Fragrances diffusers are carefully crafted with the highest quality fragrance oils and are designed to continuously fill your home with a lush, memorable fragrance. The alcohol-free formula releases fragrance slowly and evenly into the air for approximately 90 days.', '42.00', NULL, 'N', 100, 2, NULL, 'Pictures/NESTFragrancesReedDiffuser.jpg'),
(17, 'Bvlgari Aqua By Bvlgari For Men', 'Launched by the design house of Bvlgari in 2005, BVLGARI AQUA is a men''s fragrance that possesses a blend of amber, santolina, petit grain, posidonia, and mandarin. It is recommended for casual wear.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Simila', '20.91', NULL, NULL, 100, 2, NULL, 'Pictures/BvlgariAquaByBvlgari.jpg'),
(18, 'Calvin Klein OBSESSION for Men', 'Intense. Unforgettable. Provocative. Between love and madness lies OBSESSION. This spicy oriental is a provocative and compelling blend of botanics and rare woods. Topnotes – mandarin, bergamot Midnotes – lavender, myrrh, spices Basenotes – musk, sandalwood, patchouli', '60.51', NULL, NULL, NULL, 2, NULL, 'Pictures/CalvinKleinOBSESSION.jpg'),
(19, 'Dolce & Gabbana Light Blue For Women', 'Introduced in 2001. Fragrance notes: rose, apple, musk and jasmine. Recommended use: casual.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being a', '35.99', NULL, NULL, NULL, 2, NULL, 'Pictures/DolceGabbanaLightBlue.jpg'),
(20, 'Victoria''s Secret Fragrance Mist', 'A lavishly lush combination of peach, cherry blossom and white jasmine make it perfect for your enjoyment.', '10.49', NULL, NULL, NULL, 2, NULL, 'Pictures/VictoriasSecretFragranceMist.jpg'),
(21, 'Guess Seductive by Guess', 'Guess seductive for women eau de toilette spray 2.5 oz/75 ml by guess.', '17.41', NULL, NULL, NULL, 2, NULL, 'Pictures/GuessSeductivebyGuess.jpg'),
(22, 'Steak', NULL, '8.75', NULL, NULL, 10, 3, NULL, NULL),
(23, 'Apple', NULL, '0.50', NULL, NULL, 10, 3, NULL, NULL),
(24, 'Pineapple', NULL, '3.00', NULL, NULL, 10, 3, NULL, NULL),
(25, 'Orange', NULL, '0.50', NULL, NULL, 10, 3, NULL, NULL),
(26, 'Bacon', NULL, '5.99', NULL, NULL, 20, 3, NULL, NULL),
(27, 'Buffalo Wings', NULL, '20.00', NULL, NULL, 3, 3, NULL, NULL),
(28, 'Green Stuff', NULL, '1.00', NULL, NULL, 5, 3, NULL, 'Pictures/greenveg.jpg'),
(29, 'Grapes', NULL, '1.25', NULL, NULL, 10, 3, NULL, NULL),
(30, 'B-A-N-A-N-A-S', NULL, '2.00', NULL, NULL, 10, 3, NULL, 'Pictures/bananas.jpg'),
(31, 'Milk', NULL, '4.50', NULL, NULL, 5, 3, NULL, 'Pictures/milk.jpg'),
(42, 'PearPad', NULL, '200.00', NULL, NULL, 10, 3, NULL, 'Pictures/pearpad.jpg'),
(43, 'XBOX 0.5', NULL, '400.00', NULL, NULL, 4, 1, NULL, 'Pictures/xbox.jpg'),
(44, 'Playstation 5 NEO Mega Slim', NULL, '350.00', NULL, NULL, 5, 1, NULL, 'Pictures/PS5.jpg'),
(45, 'iPod', NULL, '300.00', NULL, NULL, 8, 1, NULL, 'Pictures/ipod.large'),
(46, 'Walkman', NULL, '1.00', NULL, NULL, 2, 1, NULL, 'Pictures/walkman.jpg'),
(47, 'Camera', NULL, '150.00', NULL, NULL, 5, 1, NULL, 'Pictures/camera2.jpg'),
(48, 'SLR Camera', NULL, '1000.00', NULL, NULL, 3, 1, NULL, 'Pictures/camera.jpeg'),
(49, 'USB 3.0 16GB', NULL, '20.00', NULL, NULL, 3, 1, NULL, 'Pictures/usb.jpg'),
(51, 'Laptop', NULL, '1200.00', NULL, NULL, 3, 1, NULL, 'Pictures/laptop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `itemID` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `customerID` int(11) NOT NULL,
  `billingID` int(11) NOT NULL, 
  `shippingID` int(11) NOT NULL, 
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `shippinginformation`
--

CREATE TABLE IF NOT EXISTS `shippinginformation` (
  `shippingID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `shipAdd` varchar(50) DEFAULT NULL,
  shippingCity varchar(20) DEFAULT NULL,
  shippingState varchar(20) DEFAULT NULL,
  shippingZipcode int(5) DEFAULT NULL,
  PRIMARY KEY (`shippingID`),
  KEY `customerID` (`customerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shippinginformation`
--

INSERT INTO `shippinginformation` (`shippingID`, `customerID`, `shipAdd`, `shippingCity`, `shippingState`, `shippingZipcode`) VALUES
(1, 1, '123', 'New Haven', 'CT', 6515);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billinginformation`
--
ALTER TABLE `billinginformation`
  ADD CONSTRAINT `billinginformation_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cancelledorders`
--
ALTER TABLE `cancelledorders`
  ADD CONSTRAINT `cancelledorders_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--


--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);

--
-- Constraints for table `order`
--

--
-- Constraints for table `shippinginformation`
--
ALTER TABLE `shippinginformation`
  ADD CONSTRAINT `shippinginformation_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



ALTER TABLE `order` ADD FOREIGN KEY (customerID) REFERENCES customer(customerID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `order` ADD FOREIGN KEY (billingID) REFERENCES billinginformation(billingID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `order` ADD FOREIGN KEY (shippingID) REFERENCES shippinginformation(shippingID) ON DELETE CASCADE ON UPDATE CASCADE;