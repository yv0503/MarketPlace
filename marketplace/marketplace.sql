CREATE DATABASE marketplace;

use marketplace;

DROP TABLE userinfo;
DROP TABLE products;
DROP TABLE orders;
DROP TABLE transaction;
DROP TABLE currencyorder;

CREATE TABLE UserInfo (UserID int NOT NULL AUTO_INCREMENT, UserName varchar(255), email varchar(255), contactNumber varchar(25), lastName varchar(255), firstName varchar(255), password varchar(255), country varchar(255), city varchar(255), province 
varchar(255), postalCode varchar(255), addressline varchar(255), totalcurrency int,  primary key (UserID));

CREATE TABLE Products (productID int NOT NULL AUTO_INCREMENT, UserID int, productName varchar(255), productType varchar(255), productDesc varchar(255), productPrice varchar(255), quantityInStock int, primary key (productID), foreign key (UserID) references UserInfo(UserID));

CREATE TABLE Orders (orderID int NOT NULL AUTO_INCREMENT, userID int, productID int, DateOrdered date, DateReceived date, quantityOrdered int, primary key(orderID), foreign key (userID) references UserInfo(UserID), foreign key(productID) references Products(productID));

CREATE TABLE Transaction (UserID int, paymentType varchar(255), paymentDate date, amount int, checkNumber varchar(255), primary key (checkNumber), foreign key(UserID) references UserInfo(UserID));

CREATE TABLE CurrencyOrder (UserID int, foreign key(UserID) references UserInfo(UserID));

