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

?>

<body class="mainBackground">

        <div class ="container6">
            <div class="registerGUI columnItem" style="--position: 1">
            <form method= "POST" class="login">
                <p class ="Logintext2 item5">Personal Information</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 2" >Product Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 4" >Product Type</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 6">Product Description</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 2" >Product Price</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 4">Quantity</p>
                <input type="text" name="productName" class="user registerItem" style="--positioncolumn: 1; --positionrow: 3">
                <select type="text" name="productType" class="user registerItem " style="--positioncolumn: 1; --positionrow: 5">
                <option value="Technology">Technology</option>
                <option value="Clothes">Clothes</option>
                <option value="Food">Food</option>
                <option value="Furniture">Furniture</option>
                <option value="Cars">Cars</option>
                <option value="Tools">Tools</option>
                <option value="Appliances">Appliances</option>
                <option value="Appliances">School Supplies</option>
                </select>
                <input type="text" name="productDesc" class="user registerItem " style="--positioncolumn: 1; --positionrow: 7">
                <input type="text" name="productPrice" class="user registerItem" style="--positioncolumn: 2; --positionrow: 3">
                <input type="text" name="quantity" class="user registerItem " style="--positioncolumn: 2; --positionrow: 5">
                <button name="SubmitProduct" class="loginbutton Logintext registerItem2 " style="--positioncolumn: 1; --positionrow: 9">Submit</button>
</form>


<?php
                $UserID = $_SESSION['UserID'];

                if ($_SERVER["REQUEST_METHOD"] === "POST"){

                    if (isset($_POST)) {
                        foreach ($_POST as $key => $value) {
                            if ($key == "SubmitProduct") {
                        $productName = $_POST['productName'];
                        $productType = $_POST['productType'];
                        $productDesc = $_POST['productDesc'];
                        $productPrice = $_POST['productPrice'];
                        $quantity = $_POST['quantity'];

                    if (empty($productName) || empty($productType) || empty($productDesc) || empty($productPrice) || empty($quantity)) {
                        echo "All fields are required!";
                    } else {
                        $sql = "INSERT INTO products (UserID, productName, productType, productDesc, productPrice, quantityInStock)
                                VALUES ($UserID, '$productName', '$productType', '$productDesc', '$productPrice', $quantity)";
                                $result = $conn->query($sql);
                        if (mysqli_query($conn, $sql)) {
                            echo "Product Entry successful!";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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