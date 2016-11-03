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


DROP TABLE IF EXISTS Cart;

CREATE TABLE Cart (
  ID INTEGER NOT NULL AUTO_INCREMENT, 
  customerID VARCHAR(50) NOT NULL, 
  itemID VARCHAR(50), 
  orderID VARCHAR(50), 

  PRIMARY KEY (customerID),
  FOREIGN KEY (orderID) REFERENCES Order(orderID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (itemID) REFERENCES Item(itemID) ON DELETE CASCADE ON UPDATE CASCADE
) ;

DROP TABLE IF EXISTS Order;

CREATE TABLE Order (
  ID INTEGER NOT NULL AUTO_INCREMENT, 
  orderID VARCHAR(50) NOT NULL, 
  customerID VARCHAR(50),  
  orderDate DATETIME,
  itemID VARCHAR(50),
  quantity INTEGER(10),
  status VARCHAR(30), 

  PRIMARY KEY (orderID),
  FOREIGN KEY (customerID) REFERENCES Cart(customerID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (itemID) REFERENCES Item(itemID) ON DELETE CASCADE ON UPDATE CASCADE,
) ;

DROP TABLE IF EXISTS CancelledOrders;

CREATE TABLE CancelledOrders (
  ID INTEGER NOT NULL AUTO_INCREMENT, 
  orderID VARCHAR(50) NOT NULL, 
  customerID VARCHAR(50), 
  status VARCHAR(30),
 
  PRIMARY KEY (orderID)
) ;

DROP TABLE IF EXISTS ShippingInformation;

CREATE TABLE ShippingInformation (
  ID INTEGER NOT NULL AUTO_INCREMENT, 
  customerID VARCHAR(50) NOT NULL, 
  shipAdd VARCHAR(30),
 
  PRIMARY KEY (customerID)
) ;

DROP TABLE IF EXISTS Item;

CREATE TABLE Item (
  ID INTEGER NOT NULL AUTO_INCREMENT, 
  ItemID VARCHAR(50) NOT NULL, 
  regularPrice INTEGER(10),
  salePrice INTEGER(10),
  sale VARCHAR(1),
  quantity INTEGER(10),
  categoryID VARCHAR(50),
  clearance VARCHAR(1),
 
  PRIMARY KEY (itemID)
);


# FOREIGN KEY (employeeID) REFERENCES Employee (employeeID) on delete cascade on update cascade  ); 