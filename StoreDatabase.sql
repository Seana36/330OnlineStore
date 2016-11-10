CREATE DATABASE IF NOT EXISTS `StoreDatabase`;
USE `StoreDatabase`;



DROP TABLE IF EXISTS Category;
CREATE TABLE IF NOT EXISTS Category (
  categoryID Integer NOT NULL, 
  details VARCHAR(100), 
  categoryName VARCHAR(50), 
  PRIMARY KEY (categoryID)
) ;

INSERT INTO `storedatabase`.`category` (`categoryID`, `details`, `categoryName`) VALUES ('1', 'Technology', 'Technology');
INSERT INTO `storedatabase`.`category` (`categoryID`, `details`, `categoryName`) VALUES ('2', 'Smelly Smelly Fragrances ', 'Fragrance');

DROP TABLE IF EXISTS Advertisment;
CREATE TABLE IF NOT EXISTS Advertisment (
  advertismentID Integer(50) NOT NULL, 
  `date` DATETIME, 
  details VARCHAR(100), 
  createdBy VARCHAR(10),
  PRIMARY KEY (advertismentID)
) ;

DROP TABLE IF EXISTS Employee;
CREATE TABLE IF NOT EXISTS Employee(
  employeeID INTEGER NOT NULL, 
  position VARCHAR(100), 
  fName VARCHAR(100), 
  lName VARCHAR(10),
  PRIMARY KEY (employeeID)
) ;

DROP TABLE IF EXISTS Customer;
CREATE TABLE IF NOT EXISTS Customer (
  customerID INTEGER NOT NULL, 
  fName VARCHAR(15), 
  lName VARCHAR(15), 
  userName VARCHAR(10),
  `password` VARCHAR(10),
  email VARCHAR(15),
  phoneNo INTEGER,
  secuirtyQuestion VARCHAR(20),
  secuirtyQuestionAns VARCHAR(20),
  PRIMARY KEY (customerID)
) ;

DROP TABLE IF EXISTS Item;
CREATE TABLE IF NOT EXISTS Item (
  itemID INTEGER NOT NULL, 
  `itemName` varchar(50) DEFAULT NULL,
  `itemDescription` varchar(500) DEFAULT NULL,
  `regularPrice` decimal(7,2) DEFAULT NULL,
  `salePrice` decimal(7,2) DEFAULT NULL,
  `sale` varchar(1) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `categoryID` varchar(50) DEFAULT NULL,
  `clearance` varchar(1) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (itemID)
);


INSERT INTO `item` (`itemID`, `itemName`, `itemDescription`, `regularPrice`, `salePrice`, `sale`, `quantity`, `categoryID`, `clearance`, `image`) VALUES
(2, 'ASUS Premium HD Laptop 15.6” ', 'Windows 10 Home 64-bit, Silver Color, Silver, Hairline finish, 3-cell lithium-ion Battery\r\nIntel® Pentium® mobile processor N3700 Quad-Core processor 1.6 GHz with 2M Cache up to 2.4 GHz - four-way processing performance for HD-quality computing, 4GB DDR3L 1600 MHz (Memory RAM Expandable To 8 GB), 5400 RPM HDD', '255.00', '255.00', 'N', 100, '1', 'N', NULL),
(3, 'TeckNet 2.4G Nano Wireless Mouse', 'TeckNet TruWave technology: Provides precise, smart cursor control over many surface types. TeckNet CoLink technology: After pairing there’s no need to re-establish pairing after a signal loss or shutdown.\r\nTeckNet 2.4G Wireless Gaming Technology: Experience zero delay between your thoughts and actions with gaming-grade 2.4GHz wireless, an increased working distance of up to 50ft/15m', '10.00', '9.99', 'N', 100, '1', 'N', NULL),
(4, 'Nintendo 3DS', 'Nintendo 3DS offers a new way to play, 3D without the need for special glasses. The 3D Depth Slider lets your determine how much 3D you want to see.\r\nPlay 3D games and take 3D pictures with Nintendo 3DS. One inner camera and two outer cameras. Resolutions are 640 x 480 for each camera. Lens are single focus and uses the CMOS capture element.', '249.00', '248.99', 'N', 100, '1', 'N', NULL),
(5, 'Dell Inspiron 15.6" FHD Laptop', '7th generation Intel Core i7-7500U 3.5 GHz Processor\r\n16GB DDR4 2400Mhz included; 16GB maximum\r\n1TB HDD storage; tray load DVD Drive (reads and writes to DVD/CD) included\r\n15.6-inch FHD (1920 x 1080) Truelife LED-backlit on-cell touch Display\r\nWindows 10 operating system; Gray', '872.00', '872.49', 'N', 100, '1', 'N', NULL),
(6, 'HP Stream 14" Premium Laptop', '14 inch 1366x768 pixels LED-lit Screen with build in webcam, Integrated Dual Array Digital\r\nIntel Celeron processor N3050 1.6GHz, 1MB Cache, On-board 2GB 1333MHz DDR3L SDRAM, 32GB Solid State Drive\r\nI/O Ports: 1 HDMI, 1 USB 3.0, 1 USB 2.0, 1 Combo Headphone/Mic Jack, Multi-Format SD Card Reader\r\nWindows 10 Home; 802.11b/g/n Wireless LAN, Wirelessly connect to a WiFi signal or hotspot with the 802.11b/g/n connection built into your PC', '299.00', '299.00', 'N', 100, '1', 'N', NULL),
(7, 'Microsoft Surface Book ', '13.5-inch PixelSense touchscreen display (3000 x 2000) resolution\r\nWindows 10 Pro operating system\r\nIncredibly mobile at 3.48 pounds (1576 grams)\r\nSurface Pen included\r\n512 GB, 16 GB RAM, Intel Core i7, NVIDIA GeForce graphics', '1000.00', NULL, 'N', 100, '1', 'N', NULL),
(8, 'Apple iPad Air 2', '16 GB/Wifi/Gold\r\n9.7-inch Retina display with 2048 x 1536 resolution boasts a fully laminated design that has smaller gaps between the LCD panel and glass cover so you get richer colour, deeper contrasts and sharper images\r\nAntireflective coating reduces glare by 56 per cent for clear, readable views whether indoors or outdoors\r\nA8X chip 64-bit \r\nIncredibly slim, durable aluminum unibody at 6.1 millimetres thin and weighing less than a pound', '347.00', NULL, 'N', 100, '1', 'N', NULL),
(9, 'Samsung Galaxy Tab E Lite 7-Inch Tablet', 'Android 4.4 KitKat, 7 inches Display\r\nTablet Processor 1.3 GHz\r\n1 GB RAM Memory\r\n0.68 pounds\r\nBlack', '119.00', NULL, 'N', 100, '1', 'N', NULL),
(10, 'Razer BlackWidow Chroma Clicky Gaming Keyboard', 'Extreme Durability- Razer mechanical switches are rated up to 80 million keystrokes.\r\nExpress your individuality and get the leg-up in games with Chroma backlighting and over 16.8 million color options.\r\nFully programmable keys + 5 additional gaming keys with on-the-fly macro recording\r\nUSB, 3.5mm headphone and microphone ports allow for easy cable routing\r\nEasy access media keys for convenient volume control and media playback\r\n10 key rollover for extreme anti-ghosting', '169.00', NULL, 'N', 100, '1', 'N', NULL),
(11, 'HP K2500 Wireless Keyboard US', 'Wireless\r\nSimplified Functions\r\nAdjustable angles\r\nCompatible with Windows 7/8/10’', '19.00', NULL, 'N', 100, '1', 'N', NULL),
(12, 'HP Pavilion 21.5-Inch Monitor ', 'Amazing angles: Share consistent high-color fidelity with In-Plane Switching (IPS) technology across a 21.5-inch diagonal screen. A stunning vantage point for everyone, from almost any angle.\r\nDistinctively modern and accessible: The contemporary thin profile is enhanced by black and silver colors. The open WEDGE stand design provides convenient access to VGA and HDMI port connections.', '119.00', NULL, 'N', 100, '1', 'N', NULL),
(50, 'Versace Bright Crystal By Gianni Versace For Women', 'Launched by the design house of Gianni Versace.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being applied', '9.14', '9.14', 'N', 100, '2', 'N', 'Pictures/VersaceBrightCrystal.jpg'),
(51, 'Nautica Voyage By Nautica For Men', 'Launched by the design house of Nautica.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being applied', '14.69', '14.69', 'N', 100, '2', 'N', 'Pictures/NauticaVoyageByNautica.jpg'),
(52, 'AVON Women''s Fragrance Sampler', 'Treat yourself or a friend to something extra special with this AVON women''s fragrance sampler set. This set includes 25 one-time use fragrance cards and one 1 mL sample vial. The following fragrances are included with this sampler: So Very Sofia (1 mL sample vial) So Very Sofia Sample Card Daydream Sample Card Ultra Sexy Lace Sample Card Ultra Sexy Heart Sample Card Ultra Sexy Pink Sample Card Today Sample Card Amour Sample Card Far Away Sample Card Far Away Infinity Sample Card Far Away Gold S', '15.00', '15.00', 'N', 100, '2', 'N', 'Pictures/AVONWomensFragranceSampler.jpg'),
(53, 'Vera Wang Princess by Vera Wang for Women', 'Launched by the design house of Vera Wang.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being applied', '24.95', NULL, NULL, 50, '2', NULL, 'Pictures/VeraWangPrincessbyVeraWang.jpg'),
(54, 'NEST Fragrances Reed Diffuser', 'The Grapefruit reed diffuser by NEST Fragrances includes notes of pink pomelo grapefruit and watery nuances that are blended with lily of the valley and coriander blossom. NEST Fragrances diffusers are carefully crafted with the highest quality fragrance oils and are designed to continuously fill your home with a lush, memorable fragrance. The alcohol-free formula releases fragrance slowly and evenly into the air for approximately 90 days.', '42.00', NULL, 'N', 100, '2', NULL, 'Pictures/NESTFragrancesReedDiffuser.jpg'),
(55, 'Bvlgari Aqua By Bvlgari For Men', 'Launched by the design house of Bvlgari in 2005, BVLGARI AQUA is a men''s fragrance that possesses a blend of amber, santolina, petit grain, posidonia, and mandarin. It is recommended for casual wear.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Simila', '20.91', NULL, NULL, 100, '2', NULL, 'Pictures/BvlgariAquaByBvlgari.jpg'),
(56, 'Calvin Klein OBSESSION for Men', 'Intense. Unforgettable. Provocative. Between love and madness lies OBSESSION. This spicy oriental is a provocative and compelling blend of botanics and rare woods. Topnotes – mandarin, bergamot Midnotes – lavender, myrrh, spices Basenotes – musk, sandalwood, patchouli', '60.51', NULL, NULL, NULL, '2', NULL, 'Pictures/CalvinKleinOBSESSION.jpg'),
(57, 'Dolce & Gabbana Light Blue For Women', 'Introduced in 2001. Fragrance notes: rose, apple, musk and jasmine. Recommended use: casual.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  For instance, your mood, stress level, age, body chemistry, diet, and current medications may all alter the scents you wear.  Similarly, factor such as dry or oily skin can even affect the amount of time a fragrance will last after being a', '35.99', NULL, NULL, NULL, '2', NULL, 'Pictures/DolceGabbanaLightBlue.jpg'),
(58, 'Victoria''s Secret Fragrance Mist', 'A lavishly lush combination of peach, cherry blossom and white jasmine make it perfect for your enjoyment.', '10.49', NULL, NULL, NULL, '2', NULL, 'Pictures/VictoriasSecretFragranceMist.jpg'),
(59, 'Guess Seductive by Guess', 'Guess seductive for women eau de toilette spray 2.5 oz/75 ml by guess.', '17.41', NULL, NULL, NULL, '2', NULL, 'Pictures/GuessSeductivebyGuess.jpg');

DROP TABLE IF EXISTS `Order`;
CREATE TABLE IF NOT EXISTS `Order` (
  orderID INTEGER NOT NULL , 
  customerID INTEGER NOT NULL,  
  orderDate DATETIME,
  itemID INTEGER NOT NULL,
  quantity INTEGER(10),
  status VARCHAR(30), 

  PRIMARY KEY (orderID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (itemID) REFERENCES Item (itemID) ON DELETE CASCADE ON UPDATE CASCADE
) ;

DROP TABLE IF EXISTS Cart;
CREATE TABLE IF NOT EXISTS Cart (
  customerID INTEGER NOT NULL, 
  itemID INTEGER, 
  orderID INTEGER, 

  PRIMARY KEY (customerID),
  FOREIGN KEY (orderID) REFERENCES `Order` (orderID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (itemID) REFERENCES Item (itemID) ON DELETE CASCADE ON UPDATE CASCADE
) ;

DROP TABLE IF EXISTS CancelledOrders;
CREATE TABLE IF NOT EXISTS CancelledOrders (
  orderID INTEGER NOT NULL, 
  customerID INTEGER NOT NULL, 
  status VARCHAR(30),
 
  PRIMARY KEY (orderID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID)  ON DELETE CASCADE ON UPDATE CASCADE

) ;

DROP TABLE IF EXISTS ShippingInformation;
CREATE TABLE IF NOT EXISTS ShippingInformation (
  shippingID INTEGER NOT NULL AUTO_INCREMENT, 
  customerID INTEGER NOT NULL, 
  shipAdd VARCHAR(30),
 
  PRIMARY KEY (shippingID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID)  ON DELETE CASCADE ON UPDATE CASCADE
) ;

DROP TABLE IF EXISTS BillingInformation;
CREATE TABLE IF NOT EXISTS BillingInformation (
  billingID INTEGER NOT NULL, 
  customerID INTEGER NOT NULL,
  billingAddress VARCHAR(50),
  creditCardNo INTEGER,
  creditCardType VARCHAR(10),
  creditCardCVC INTEGER,
 
  PRIMARY KEY (billingID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID) ON DELETE CASCADE ON UPDATE CASCADE 
);

DROP TABLE IF EXISTS OrderList;
CREATE TABLE IF NOT EXISTS OrderList (
  orderID INTEGER NOT NULL,
  customerID INTEGER NOT NULL, 
  orderDate DATETIME,
  status VARCHAR(50),
  billingID INTEGER NOT NULL, 
  shippingID Integer NOT NULL AUTO_INCREMENT,

 
  PRIMARY KEY (orderID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID) ON DELETE CASCADE ON UPDATE CASCADE ,
  FOREIGN KEY (billingID) REFERENCES BillingInformation (billingID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (shippingID) REFERENCES ShippingInformation (shippingID) ON DELETE CASCADE ON UPDATE CASCADE 
);