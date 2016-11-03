CREATE DATABASE IF NOT EXISTS `StoreDatabase`;
USE `StoreDatabase`;

#
# Table structure for table 'Branch'
#

DROP TABLE IF EXISTS `Category`;

CREATE TABLE `Category` (
  `categoryID` Integer(50) NOT NULL, 
  `details` VARCHAR(100), 
  `categoryName` VARCHAR(50), 
  PRIMARY KEY (`categoryID`)
) 

DROP TABLE IF EXISTS `Advertisment`;

CREATE TABLE `Advertisment` (
  `advertismentID` Integer(50) NOT NULL, 
  `details` VARCHAR(100), 
  `categoryName` VARCHAR(50), 
  PRIMARY KEY (`categoryID`)
) 