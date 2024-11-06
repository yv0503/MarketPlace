<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Online Market</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/design.css">
    </head>

<?php

include "widgets/dashboard.php";
include "connection.php";
$UserID = $_SESSION['UserID'];
?>

<body class="mainBackground">

        <div class ="container6">
            <div class="CurrencyGUI" style="--position: 1">
            <form method= "POST" class="currency">
                <p class ="Logintext2 item5">Currency</p>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 2">--100--</p>
                <button name="1" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:3">Add</button>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 4" >--200--</p>
                <button name="2" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:5">Add</button>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 6">--300--</p>
                <button name="3" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:7">Add</button>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 8" >--400--</p>
                <button name="4" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:9">Add</button>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 10">--500--</p>
                <button name="5" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:11">Add</button>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 12" >--600--</p>
                <button name="6" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:13">Add</button>
                <p class ="Registertext currencyItem" style="--positioncolumn: 1; --positionrow: 14">--700--</p>
                <button name="7" class="loginbutton Logintext registerItem" style="--positioncolumn: 1; --positionrow:15">Add</button>
            </form>
            </div>
        
        <script src="" async defer></script>
    </body>
</html>

<?php
               

                if ($_SERVER["REQUEST_METHOD"] === "POST"){
                    if (isset($_POST)) {  
                        foreach ($_POST as $key => $value) {
                            for($int = 0; $int <7; $int++)
                            {
                            if ($key == 1)
                            {
                                $add = 100;
                            } 
                            if ($key == 2)
                            {
                                $add = 200;
                            } 
                            if ($key == 3)
                            {
                                $add = 300;
                            } 
                            if ($key == 4)
                            {
                                $add = 400;
                            } 
                            if ($key == 5)
                            {
                                $add = 500;
                            } 
                            if ($key == 6)
                            {
                                $add = 600;
                            } 
                            if ($key == 7)
                            {
                                $add = 700;
                            } 
                               
                                    $sql = "UPDATE userInfo SET totalCurrency = totalCurrency+$add WHERE UserID=$UserID";
                                    $result = $conn->query($sql);
                                    $resultcheck = mysqli_num_rows($result);
                   }
                }
            }
        }
    ?>    