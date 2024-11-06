<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Document</title>
</head>

<?php
session_start();
if (empty($_SESSION['UserID']))
{
        HEADER("Location: loginpage.php");
    }
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST)) {
        foreach ($_POST as $key => $value) {
        
            if ($key == "profile") {

                Header("Location: Profile.php");
            }

            if ($key == "Currency") {

                Header("Location: Currency.php");
            }

            if ($key == "purchases") {

                Header("Location: Profile.php");
            }

            if ($key == "products") {

                Header("Location: products.php");
            }

            if ($key == "Logout")
            {
                Header("Location: Logout.php");
            }

            if ($key == "Home")
            {
                Header("Location: homepage.php");
            }
            if ($key == "addproducts")
            {
                Header("Location: AddProduct.php");
            }

        }
        
    }
}

    $UserID = $_SESSION['UserID'];
    $sql = "SELECT * FROM userInfo WHERE UserID = '$UserID'";
    $result = $conn->query($sql);
    $resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
    while($row = mysqli_fetch_assoc($result)){ 

?>
<body>
<header class="header">
            <div class="container" style="--quantity: 2">

                <form method="POST" class="container3 item" style="--position: 1">
                    <button name="Home" id="Home" class="headerFont"><img src="./assets/fireflymikyuru.jpg" class="headerImg"></button>
                    <button name="Home" id="Home" class="headerFont center"><?php echo $row['UserName']?></button>
                    <button name="Currency" id="Currency" class="BalanceFont">Balance: $<?php echo $row['totalcurrency']?></button>
                </form> 
                <?php }
            }?>

                <form method="POST" class="container3 item" style="--quantity: 5; --position: 2">
                    <button name="profile" id="profile" class="headerStyle item" style="--position: 1">Profile</button>
                    <button name="purchases" id="purchases" class="headerStyle item" style="--position: 2">Purchases</button>
                    <button name="products" id="products" class="headerStyle item" style="--position: 4">My Products</button>
                    <button name="addproducts" id="products" class="headerStyle item" style="--position: 4">Add Products</button>
                    <button name="Logout" id="Logout" class="headerStyle item" style="--position: 5">Logout</button>
                </form>
                
            </div>
        </header>
</body>
</html>