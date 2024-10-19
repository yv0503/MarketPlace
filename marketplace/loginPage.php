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

include "Connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "SELECT * FROM usercredentials WHERE UserName = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if(isset($_POST)){
        foreach ($_POST as $key=>$value){
            if($key == "login"){
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

            if($key == "register"){
                header("Location: register.php");
            }
        }
    }
}
?>


    <body class="mainBackground">

        <div class ="container4">
            <div class="item">
                <div><p class="TitleFont2 colunmItem appearLeft" style="position:1">Online Market</p></div>
            </div>
            <div class="loginGUI columnItem" style="--position: 2">
            <form class="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <p class ="item5 Logintext2">Login</p>
                <p class ="Logintext item1">Username/Email</p>
                <p class ="Logintext item3">Password</p>
                <input type="text" id="username" name="username" class="user item2" placeholder="@username etc..">
                <input type="password" id="password" name="password" class="user password item4" placeholder=".........">
                <button name="login" class="loginbutton Logintext item6">Login</button>
                <button name="register" class="loginbutton Logintext item7">Register</button>
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

