CREATE DATABASE IF NOT EXISTS `StoreDatabase`;
USE `StoreDatabase`;



DROP TABLE IF EXISTS Category;
CREATE TABLE IF NOT EXISTS Category (
  categoryID Integer NOT NULL AUTO_INCREMENT, 
  details VARCHAR(100), 
  categoryName VARCHAR(50) NOT NULL, 
  PRIMARY KEY (categoryID)
) ;

DROP TABLE IF EXISTS Advertisment;
CREATE TABLE IF NOT EXISTS Advertisment (
  advertismentID Integer(50) NOT NULL AUTO_INCREMENT, 
  `date` DATETIME, 
  details VARCHAR(100), 
  createdBy VARCHAR(10) NOT NULL,
  PRIMARY KEY (advertismentID)
) ;

DROP TABLE IF EXISTS Employee;
CREATE TABLE IF NOT EXISTS Employee(
  employeeID INTEGER NOT NULL AUTO_INCREMENT, 
  position VARCHAR(100) NOT NULL, 
  fName VARCHAR(100) NOT NULL, 
  lName VARCHAR(10) NOT NULL,
  PRIMARY KEY (employeeID)
) ;

DROP TABLE IF EXISTS Customer;
CREATE TABLE IF NOT EXISTS Customer (
  customerID INTEGER NOT NULL AUTO_INCREMENT, 
  fName VARCHAR(15) NOT NULL, 
  lName VARCHAR(15) NOT NULL, 
  userName VARCHAR(10) NOT NULL,
  `password` VARCHAR(10) NOT NULL,
  email VARCHAR(15),
  phoneNo INTEGER,
  secuirtyQuestion VARCHAR(20) NOT NULL,
  secuirtyQuestionAns VARCHAR(20) NOT NULL,
  PRIMARY KEY (customerID)
) ;

DROP TABLE IF EXISTS Item;
CREATE TABLE IF NOT EXISTS Item (
  itemID INTEGER NOT NULL AUTO_INCREMENT, 
  itemName VARCHAR(50) NOT NULL, 
  itemDescription VARCHAR(500),
  regularPrice decimal(10,2) NOT NULL,
  salePrice INTEGER(10),
  sale VARCHAR(1),
  quantity INTEGER(10) NOT NULL,
  categoryID VARCHAR(50) NOT NULL,
  clearance VARCHAR(1),
  image BLOB, 
 
  PRIMARY KEY (itemID),
  FOREIGN KEY (categoryID) REFERENCES Category(categoryID) ON DELETE CASCADE ON UPDATE CASCADE
);

DROP TABLE IF EXISTS `Order`;
CREATE TABLE IF NOT EXISTS `Order` (
  orderID INTEGER NOT NULL, 
  customerID INTEGER NOT NULL,  
  orderDate DATETIME,
  itemID INTEGER NOT NULL,
  quantity INTEGER(10) NOT NULL,
  status VARCHAR(30), 

  PRIMARY KEY (orderID, itemID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (orderID) REFERENCES OrderList(orderID) ON DELETE CASCADE ON UPDATE CASCADE,
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
  billingID INTEGER NOT NULL AUTO_INCREMENT, 
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
  orderID INTEGER NOT NULL AUTO_INCREMENT,
  customerID INTEGER NOT NULL, 
  orderDate DATETIME,
  status VARCHAR(50),
  billingID INTEGER NOT NULL, 
  shippingID Integer NOT NULL,

 
  PRIMARY KEY (orderID),
  FOREIGN KEY (customerID) REFERENCES Customer (customerID) ON DELETE CASCADE ON UPDATE CASCADE ,
  FOREIGN KEY (billingID) REFERENCES BillingInformation (billingID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (shippingID) REFERENCES ShippingInformation (shippingID) ON DELETE CASCADE ON UPDATE CASCADE 
);

insert into category(categoryName) values("Produce");
insert into category(categoryName) values("Fragrance");
insert into category(categoryName) values("Technology");

insert into Item(itemName, regularPrice, quantity, categoryID) values("Steak", 8.75, 10, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Apple", 0.50, 10, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Pineapple", 3.00, 10, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Orange", 0.50, 10, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Bacon", 5.99, 20, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Buffalo Wings", 20.00, 3, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Green Stuff", 1.00, 5, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Grapes", 1.25, 10, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("B-A-N-A-N-A-S", 2.00, 10, 1);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Milk", 4.50, 5, 1);

insert into Item(itemName, regularPrice, quantity, categoryID) values("Du Rouge Toilette", 20.00, 3, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Du Noir Toilette", 25.00, 3, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Du Bleu Toilette", 30.00, 3, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Sacre Bleu", 10.00, 5, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Omelette Du Fromage", 200.00, 2, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("French Reference Here", 18.99, 6, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Le Petit Paris", 19.99, 3, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Merica Cologne", 99.99, 1, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("That Vanilla One", 7.00, 10, 2);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Bath & Body One", 5.00, 10, 2);

insert into Item(itemName, regularPrice, quantity, categoryID) values("PearPad", 200.00, 10, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("XBOX 0.5", 400.00, 4, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Playstation 5 NEO Mega Slim", 350.00, 5, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("iPod", 300.00, 8, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Walkman", 1.00, 2, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Camera", 150.00, 5, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("SLR Camera", 1000.00, 3, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("USB 3.0 16GB", 20.00, 3, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Some Techy stuff", 30.00, 3, 3);
insert into Item(itemName, regularPrice, quantity, categoryID) values("Laptop", 1200.00, 3, 3);

insert into Employee(position, fName, lName) values("Database Manager", "John", "Doe");
insert into Employee(position, fName, lName) values("Web Developer", "Joe", "Finley");
insert into Employee(position, fName, lName) values("Advertisment Manager", "Stephanie", "Haberman");
insert into Employee(position, fName, lName) values("Store Manager", "Sean", "Taylor");
insert into Employee(position, fName, lName) values("Human Resources Manager", "Raul", "Quiroga");
insert into Employee(position, fName, lName) values("Web Developer", "Angelo", "Ramirez");

insert into Advertisment(createdBy) values("John Doe");

insert into Customer(
    fName,
    lName,
    userName,
    password,
    email,
    phoneNo,
    secuirtyQuestion,
    secuirtyQuestionAns
    ) values(
        "Johnny",
        "Karate",
        "JKarate",
        "password",
        "something@karate.com",
        "1-203-595-9595",
        "What is your favorite hobby?",
        "Karate"
    );

insert into BillingInformation(customerID) values(1);

insert into ShippingInformation(customerID) values(1);

insert into OrderList(customerID, billingID, shippingID) values(1,1,1);

insert into Cart values(1,1, NULL);

insert into `Order` values(1,1, "11/10/2016",2,1, "Preship");
insert into `Order` values(1,1, "11/10/2016",5,2, "Preship");
insert into `Order` values(1,1, "11/10/2016",10,1, "Preship");
insert into `Order` values(1,1, "11/10/2016",15,2, "Preship");
insert into `Order` values(1,1, "11/10/2016",25,1, "Preship");

insert into CancelledOrders(orderID, customerID) values(1,1);