
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
    session_start();
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = $_POST['password'];

        $sql = "SELECT UserID FROM userInfo WHERE username = '$name' OR email = '$name'";
        $result = $conn->query($sql);

        unset($_SESSION['UserID']);

            while($rows = mysqli_fetch_row($result))
            {
                $userID = $rows[0];
            }

        $_SESSION['UserID'] = $userID;

        $sql = "SELECT * FROM userInfo WHERE username = '$name' OR email = '$name'";
        $result = $conn->query($sql);

        if (isset($_POST)) {  
            foreach ($_POST as $key => $value) {

                if ($key == "login") {
                    if ($result->num_rows > 0) {
                        $user = $result->fetch_assoc();
                    
                        if (password_verify($password, $user['password'])) {
                                if ($username == "admin") {
                                    header("Location: ./admin/index.php");
                                    exit;
                                } else {
                                    header("Location: homepage.php");
                                    exit;
                                }
                            }
                         
                    
                        else {
                            echo "Invalid username or password.";
                        }
                    } else {
                        echo "Invalid username or password.";
                    }
    
                    $conn->close();
                }

                if ($key == "register") {
                    header("Location: register.php");
                    exit;
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
            <form class="login" method="POST">
                <p class ="item5 Logintext2">Login</p>
                <p class ="Logintext item1">Username/Email</p>
                <p class ="Logintext item3">Password</p>
                <input type="text" id="name" name="name" class="user item2" placeholder="@username etc..">
                <input type="password" id="password" name="password" class="user password item4" placeholder=".........">
                <button name="login" class="loginbutton Logintext item6">Login</button>
                <button name="register" class="loginbutton Logintext item7">Register</button>
                </form>
            </div>
        </div>

        <div class="banner">
            <div class="slider" style="--quantity: 10;">
                <div class="item" style="--position: 1"><img src="./assets/headset.png"></div>
                <div class="item" style="--position: 2"><img src="./assets/jacket.png"></div>
                <div class="item" style="--position: 3"><img src="./assets/jacket.png"></div>
                <div class="item" style="--position: 4"><img src="./assets/jacket.png"></div>
                <div class="item" style="--position: 5"><img src="./assets/jacket.png"></div>
                <div class="item" style="--position: 6"><img src="./assets/headset.png"></div>
                <div class="item" style="--position: 7"><img src="./assets/headset.png"></div>
                <div class="item" style="--position: 8"><img src="./assets/headset.png"></div>
                <div class="item" style="--position: 9"><img src="./assets/headset.png"></div>
                <div class="item" style="--position: 10"><img src="./assets/headset.png"></div>
            </div>
        </div>
            

        
        
        <script src="" async defer></script>
    </body>
</html>

