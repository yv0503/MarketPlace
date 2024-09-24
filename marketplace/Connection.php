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