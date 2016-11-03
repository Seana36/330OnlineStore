CREATE DATABASE IF NOT EXISTS StoreDatabase;
USE StoreDatabase;

#
# Table structure for table 'Branch'
#

DROP TABLE IF EXISTS Category;

CREATE TABLE Category (
  categoryID INTEGER(50) NOT NULL, 
  details VARCHAR(100), 
  categoryName VARCHAR(50), 
  PRIMARY KEY (categoryID)
) 

DROP TABLE IF EXISTS Advertisment;

CREATE TABLE Advertisment (
  advertismentID INTEGER(50) NOT NULL, 
  details VARCHAR(100), 
  categoryName VARCHAR(50), 
  PRIMARY KEY (categoryID)
)

DROP TABLE IF EXISTS Billing;

CREATE TABLE Billing (
	billingID INTEGER(50) NOT NULL,
	customerID INTEGER(50) NOT NULL,
	billingAddress VARCHAR(100),
	CreditCardNo INTEGER(50),
	creditCardType VARCHAR(50),
	creditCardCVC INTEGER(4),
	PRIMARY KEY(customerID, billingID)
	FOREIGN KEY(customerID) REFERENCES Customer(customerID) ON DELETE CASCADE ON UPDATE CASCADE
)

DROP TABLE IF EXISTS Customer;

CREATE TABLE Customer (
	customerID INTEGER(50) NOT NULL,
	fname VARCHAR(50),
	lname VARCHAR(50),
	userName VARCHAR(50),
	password VARCHAR(50),
	email VARCHAR(50),
	phoneNo INTEGER(11),
	SecurityQuestion VARCHAR(100),
	SecurityQuestionAns VARCHAR(100),
	billingID INTEGER(50),
	PRIMARY KEY(customerID)
	FOREIGN KEY(billingID) REFERENCES Billing(billingID) ON DELETE CASCADE ON UPDATE CASCADE
)