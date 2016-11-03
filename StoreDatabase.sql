CREATE DATABASE IF NOT EXISTS `StoreDatabase`;
USE `StoreDatabase`;



DROP TABLE IF EXISTS Category;
CREATE TABLE IF NOT EXISTS Category (
  categoryID Integer(50) NOT NULL, 
  details VARCHAR(100), 
  categoryName VARCHAR(50), 
  PRIMARY KEY (categoryID)
) ;

DROP TABLE IF EXISTS Advertisment;
CREATE TABLE IF NOT EXISTS Advertisment (
  advertismentID Integer(50) NOT NULL, 
  date DATETIME, 
  details VARCHAR(100), 
  createdBy VARCHAR(10),
  PRIMARY KEY (advertismentID)
) ;

DROP TABLE IF EXISTS Employee;
CREATE TABLE IF NOT EXISTS Employee(
  employeeID INTEGER(50) NOT NULL, 
  position VARCHAR(100), 
  fName VARCHAR(100), 
  lName VARCHAR(10),
  PRIMARY KEY (employeeID)
) ;

DROP TABLE IF EXISTS Customer;
CREATE TABLE IF NOT EXISTS Customer (
  customerID INTEGER(50) NOT NULL, 
  fName VARCHAR(100), 
  lName VARCHAR(100), 
  userName VARCHAR(10),
  password VARCHAR(10),
  email VARCHAR(15),
  phoneNo INTEGER(10),
  secuirtyQuestion VARCHAR(20),
  secuirtyQuestionAns VARCHAR(20),
  PRIMARY KEY (customerID)
) ;


# FOREIGN KEY (employeeID) REFERENCES Employee (employeeID) on delete cascade on update cascade  ); 