CREATE DATABASE IF NOT EXISTS `StoreDatabase`;
USE `StoreDatabase`;



DROP TABLE IF EXISTS Category;
CREATE TABLE IF NOT EXISTS Category (
  categoryID Integer NOT NULL, 
  details VARCHAR(100), 
  categoryName VARCHAR(50), 
  PRIMARY KEY (categoryID)
) ;

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
  itemName VARCHAR(50), 
  itemDescription VARCHAR(50), 
  regularPrice DECIMAL(5,2),
  salePrice DECIMAL(5,2),
  sale VARCHAR(1),
  quantity INTEGER(10),
  categoryID VARCHAR(50),
  clearance VARCHAR(1),
  image VARCHAR(50), 
   
  PRIMARY KEY (itemID)
);

INSERT INTO `item` (`itemID`, `itemName`, `itemDescription`,`regularPrice`, `salePrice`, `sale`, `quantity`, `categoryID`, `clearance`, `image` ) VALUES
(1, 'Orange Juice','Yummy Orange Juice straight from oranges ', 5, 5, 'N', 20, '1', 'N', 'Pictures/OrangeJuice.jpg' );
INSERT INTO `storedatabase`.`item` (`itemID`, `itemName`, `itemDescription`, `regularPrice`, `salePrice`, `sale`, `quantity`, `categoryID`, `clearance`, `image`) VALUES 
('2', 'Apple Juice', 'Delicious Apple Juice Straight from Washington', '5.99', '5.99', 'N', '50', '1', 'N', 'Pictures/AppleJuice.jpg');


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