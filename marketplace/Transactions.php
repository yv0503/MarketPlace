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

    <script>
function showPassword() {
  var password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}
</script>

<?php

include "widgets/dashboard.php";
include "connection.php";
$UserID = $_SESSION['UserID'];

?>

<body class="mainBackground">

        <div class ="container6">
            <div class="registerGUI columnItem" style="--position: 1">
            <form method= "POST" class="login">
                <p class ="Logintext2 item5">Transactions</p>
<?php
                if ($_SERVER["REQUEST_METHOD"] != "POST") {

$sql = "SELECT * FROM products LEFT JOIN orders ON products.productID = table2.productID LEFT JOIN transactions ON orders.UserID = transactions.UserID WHERE UserID =$UserID";
$result = $conn->query($sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    while($row = mysqli_fetch_assoc($result)){   
?> 
<div class="Products hidden" style="--position: 1">
<div class="item" style="--position: 1"><img src="assets/headset.png" class="ProductImg"></div>
<div class="ProductDescription item" style="--position: 2"><p class="ProductFont"><?php echo $row['productDesc']?></p></div>
<div class="ProductSeller item" style="--position: 3"><p class="ProductFont2"><?php echo $row['productPrice']?></p></div>
<div class="ProductPrice item" style="--position: 4"><p class="ProductFont2"><?php echo $row['productPrice']?></p></div>
<Button class="ProductBuy BuyButton item" style="--position: 5">Buy</button>           
</div>
<?php

        }
    }
}
                
?>
        </div>
        <div class="banner">
            <div class="slider" style="--quantity: 10;">
                <div class="item" style="--position: 1"><img src="headset.png"></div>
                <div class="item" style="--position: 2"><img src="jacket.png"></div>
                <div class="item" style="--position: 3"><img src="jacket.png"></div>
                <div class="item" style="--position: 4"><img src="jacket.png"></div>
                <div class="item" style="--position: 5"><img src="jacket.png"></div>
                <div class="item" style="--position: 6"><img src="headset.png"></div>
                <div class="item" style="--position: 7"><img src="headset.png"></div>
                <div class="item" style="--position: 8"><img src="headset.png"></div>
                <div class="item" style="--position: 9"><img src="headset.png"></div>
                <div class="item" style="--position: 10"><img src="headset.png"></div>
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>