<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Online Market</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="design.css">
    </head>
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM usercredentials WHERE UserName = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if($username == "admin"){
            header("Location: Admin.php");
            exit;
        }
        else{
            header("Location: homepage.php");
            exit;
        }   
    } 
    else {  
        echo "Invalid username or password.";
    }

    $conn->close();
}
?>

    <body class="mainBackground">

        <div class ="container6">
            <div class="registerGUI columnItem" style="--position: 1">
            <form class="login">
                <p class ="Logintext2 item5">Register</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 2" >Username</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 4" >Email Address</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 6">Password</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 8" >Confirm Password</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 2">First Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 4" >Last Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 6">Contact Number</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 8">Address</p>
                <input type="text" class="user registerItem" style="--positioncolumn: 1; --positionrow: 3" placeholder="@username etc..">
                <input type="text" class="user registerItem " style="--positioncolumn: 1; --positionrow: 5"placeholder="example@example.com">
                <input type="password" class="user password registerItem" style="--positioncolumn: 1; --positionrow: 7" placeholder=".........">
                <input type="password" class="user password registerItem " style="--positioncolumn: 1; --positionrow: 9"placeholder=".........">
                <input type="text" class="user registerItem" style="--positioncolumn: 2; --positionrow: 3" placeholder="Juan">
                <input type="text" class="user registerItem " style="--positioncolumn: 2; --positionrow: 5"placeholder="Dela Cruz">
                <input type="text" class="user registerItem" style="--positioncolumn: 2; --positionrow: 7" placeholder="09--------">
                <input type="text" class="user registerItem " style="--positioncolumn: 2; --positionrow: 9"placeholder="Street, Barangay, City, Province">
                <button class="loginbutton Logintext registerItem2 " style="--positioncolumn: 1; --positionrow: 11">Register</button>
                </form>
            </div>

            
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