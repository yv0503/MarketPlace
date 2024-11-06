<?php
  $servername = "localhost";
  $username = "root";
  $password = "Cake!070503";
  $dbname = "marketplace";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
  }
?>

<!-- to do list

    Checkout Page
    Cart Page
    Hover Item Box
    Profile Page
    Products Page
    Currency Page
    Admin Page
    Logout  DONE
    DataBase DONE
    
    UserInfo (userid(pk), username, password, firstname, lastname, country, city, province, postalCode, addressline, totalCurrency)
    Products (userid(fk),productid(pk), productName, productType, productDesc, productPrice, quantity)
    Orders (orderID(pk), userID(fk), productID(fk), DateOrdered, DateRecieved)
    OrderDetails (orderID(fk), quantity)
    Transaction (userID(fk), paymentType, paymentDate, amount, checkNumber(pk))
    CurrencyOrder (userID(fk), currencyAmount, buyPrice) 

-->


