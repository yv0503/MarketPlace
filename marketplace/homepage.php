
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
                <p class="TitleFont hidden">Hot Deals</p>
            </div>
            <div class="ProductsLists item" style="--quantity: 2;--position: 2">
                <form method="POST" class="Category hidden" style="--position: 1">
                    <button class="CategoriesStyle item" style="--position: 1">Shop by Categories</button>
                    <button name="Technology" id="Technology" class="CategoriesStyle1 item" style="--position: 2">Technology</button>
                    <button name="Clothes" id="Clothes" class="CategoriesStyle1 item" style="--position: 3">Clothes</button>
                    <button name="Food" id="Food" class="CategoriesStyle1  item" style="--position: 4">Food</button>
                    <button name="Furniture" id="Furniture" class="CategoriesStyle1 item" style="--position: 5">Furniture</button> 
                    <button name="Cars" id="Cars" class="CategoriesStyle1 item" style="--position: 6">Cars</button>
                    <button name="Appliances" id="Appliances" class="CategoriesStyle2 item" style="--position: 2">Appliances</button>
                    <button name="Tools" id="Tools" class="CategoriesStyle2  item" style="--position: 3">Tools</button>
                    <button name="SchoolSupplies" id="ShoolSupplies" class="CategoriesStyle2 item" style="--position: 4">School Supplies</button>        
                </form>
<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    
    while($row = mysqli_fetch_assoc($result)){  
         $productID = $row['productID'];
?> 
<form method="POST" class="Products hidden" style="--position: 1">
<div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
<div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
<div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
<div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
<Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>           
    </form>

<?php
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
if (isset($_POST)) {
    foreach ($_POST as $key => $value) {

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        while($row = mysqli_fetch_assoc($result)){
            $productID = $row['productID'];
        
                
        if ($key == "buy$productID")
        { ?>
            <form method="POST" class="Products hidden" style="--position: 1">
            <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
            <div class="ProductDescription item" style="--position: 2"><p class="ProductFont">   Item Bought</p></div>
            <Button name="back" class="ProductBuy BuyButton item" style="--position: 5">Back</button>           
                </form>  
            <?php
        }

        if ($key == "back")
        {
            $sql = "SELECT * FROM products";
$result = $conn->query($sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    
    while($row = mysqli_fetch_assoc($result)){  
         $productID = $row['productID'];
?> 
<form method="POST" class="Products hidden" style="--position: 1">
<div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
<div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
<div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
<div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
<Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>              
    </form>

<?php
        }
    }
}
   
        if ($key == "Clothes") {
                $sql = "SELECT * FROM products WHERE productType = 'Clothing'";
                $result = $conn->query($sql);
                $resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    while($row = mysqli_fetch_assoc($result)){   
        $productID = $row['productID'];
?> 
<form method="POST" class="Products hidden" style="--position: 1">
<div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
<div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
<div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
<div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
<Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
    </form>

<?php

            }
        }
    }
}

if ($key == "Technology") {
        $sql = "SELECT * FROM products WHERE productType = 'Technology'";
        $result = $conn->query($sql);
        $resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
while($row = mysqli_fetch_assoc($result)){   
    $productID = $row['productID'];
?> 
<form method="POST" class="Products hidden" style="--position: 1">
<div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
<div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
<div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
<div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
<Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
</form>

<?php

                    }
                }
        
            }

            if ($key == "Food") {
                $sql = "SELECT * FROM products WHERE productType = 'Food'";
                $result = $conn->query($sql);
                $resultcheck = mysqli_num_rows($result);
        
        if ($resultcheck > 0){
        while($row = mysqli_fetch_assoc($result)){   
            $productID = $row['productID'];
        ?> 
        <form method="POST" class="Products hidden" style="--position: 1">
        <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
        <div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
        <div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
        <div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
        <Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
        </form>
        
        <?php
        
                            }
                        }
                    }
        
                    if ($key == "Furniture") {
                        $sql = "SELECT * FROM products WHERE productType = 'Furniture'";
                        $result = $conn->query($sql);
                        $resultcheck = mysqli_num_rows($result);
                
                if ($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){   
                    $productID = $row['productID'];
                ?> 
                <form method="POST" class="Products hidden" style="--position: 1">
                <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
                <div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
                <div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
                <div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
                <Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
                </form>
                
                <?php
                
                                    }
                                }
                            }
        
                            if ($key == "Cars") {
                                $sql = "SELECT * FROM products WHERE productType = 'Cars'";
                                $result = $conn->query($sql);
                                $resultcheck = mysqli_num_rows($result);
                        
                        if ($resultcheck > 0){
                        while($row = mysqli_fetch_assoc($result)){   
                            $productID = $row['productID'];
                        ?> 
                        <form method="POST" class="Products hidden" style="--position: 1">
                        <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
                        <div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
                        <div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
                        <div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
                        <Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
                        </form>
                        
                        <?php
                        
                                            }
                                        }
                                    }
        
                                    if ($key == "Appliances") {
                                        $sql = "SELECT * FROM products WHERE productType = 'Appliances'";
                                        $result = $conn->query($sql);
                                        $resultcheck = mysqli_num_rows($result);
                                
                                if ($resultcheck > 0){
                                while($row = mysqli_fetch_assoc($result)){   
                                    $productID = $row['productID'];
                                ?> 
                                <form method="POST" class="Products hidden" style="--position: 1">
                                <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
                                <div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
                                <div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
                                <div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
                                <Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
                                </form>
                                
                                <?php
                                
                                                    }
                                                }
                                            }
        
                                            if ($key == "Tools") {
                                                $sql = "SELECT * FROM products WHERE productType = 'Tools'";
                                                $result = $conn->query($sql);
                                                $resultcheck = mysqli_num_rows($result);
                                        
                                        if ($resultcheck > 0){
                                        while($row = mysqli_fetch_assoc($result)){   
                                            $productID = $row['productID'];
                                        ?> 
                                        <form method="POST" class="Products hidden" style="--position: 1">
                                        <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
                                        <div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
                                        <div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
                                        <div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
                                        <Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
                                        </form>
                                        
                                        <?php
                                        
                                                            }
                                                        }
                                                    }
        
                                                    if ($key == "SchoolSupplies") {
                                                        $sql = "SELECT * FROM products WHERE productType = 'School Supplies'";
                                                        $result = $conn->query($sql);
                                                        $resultcheck = mysqli_num_rows($result);
                                                
                                                if ($resultcheck > 0){
                                                while($row = mysqli_fetch_assoc($result)){   
                                                    $productID = $row['productID'];
                                                ?> 
                                                <form method="POST" class="Products hidden" style="--position: 1">
                                                <div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
                                                <div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
                                                <div class="ProductSeller item" style="--position: 3"><p class="ProductFont2">In Stock <?php echo $row['quantityInStock']?></p></div>
                                                <div class="ProductPrice item" style="--position: 4"><p class="ProductFont2">$<?php echo $row['productPrice']?></p></div>
                                                <Button name="buy<?php echo $productID?>" class="ProductBuy BuyButton item" style="--position: 5">Buy</button>            
                                                </form>
                                                
                                                <?php
                                                
                                                                    }
                                                                }
                                                            }
       }
    }

    
       }


?>         
        </div>



        
        <script src="" async defer></script>
    </body>
</html>