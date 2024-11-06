<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <title>Online Market</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/design.css">
        <script defer src="main.js"></script>
    </head>

    <?php
    include "widgets/dashboard.php";
    include "connection.php";
    ?>

    <body class="mainBackground scroll">
        <div class="container5 item" style="--quantity: 2">
            <div class="TopSellers" style="--position: 1">
                <p class="TitleFont hidden">Your Products</p>
                
            </div>

            <div class="ProductsLists item" style="--quantity: 2;--position: 2">
<?php


$sql = "SELECT * FROM products WHERE UserID =$UserID";
$result = $conn->query($sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    
    while($row = mysqli_fetch_assoc($result)){  
         $productID = $row['productID'];
?> 
<form method="POST" class="Products hidden" style="--position: 1">
<div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
<div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
<div class="ProductSeller item" style="--position: 3"><p class="ProductFont2"><?php echo $row['productPrice']?></p></div>
<div class="ProductPrice item" style="--position: 4"><p class="ProductFont2"><?php echo $row['productPrice']?></p></div>
<Button name="Remove<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">X</button>           
    </form>

<?php
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        foreach($_POST as $key => $value)
        {
            if ($key == "Remove$productID") {
                $sql = "DELETE FROM products WHERE productID = $productID";
                $result = $conn->query($sql);
                $resultcheck = mysqli_num_rows($result);
        }
        

        }
    }