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
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 2" >Username</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 4" >Email Address</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 6">New Password</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 8" >Confirm Password</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 2">First Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 4" >Last Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 6">Contact Number</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 8">Country</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 10">City</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 10" >Province</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 12">Post Code</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 12">Address Line</p>
                <?php
                $UserID = $_SESSION['UserID'];

                if ($_SERVER["REQUEST_METHOD"] != "POST"){
                $sql = "SELECT * FROM userInfo WHERE UserID = '$UserID'";
                $result = $conn->query($sql);
                $resultcheck = mysqli_num_rows($result);

                    if ($resultcheck > 0){
                        while($row = mysqli_fetch_assoc($result)){ 
?> 
                

    <input type="text" name="username" class="user registerItem" style="--positioncolumn: 1; --positionrow: 3" value="<?php echo $row['UserName']?>">
    <input type="email" name="email" class="user registerItem " style="--positioncolumn: 1; --positionrow: 5" value="<?php echo $row['email']?>">
    <input onclick="showPassword()" id="password" type="password" name="password" class="user password registerItem" style="--positioncolumn: 1; --positionrow: 7" value="">
    <input type="password" name="confirm_password" class="user password registerItem " style="--positioncolumn: 1; --positionrow: 9" value="">
    <input type="text" name="first_name" class="user registerItem" style="--positioncolumn: 2; --positionrow: 3" value="<?php echo $row['firstName']?>">
    <input type="text" name="last_name" class="user registerItem " style="--positioncolumn: 2; --positionrow: 5" value="<?php echo $row['lastName']?>">
    <input type="text" name="contact_number" class="user registerItem" style="--positioncolumn: 2; --positionrow: 7" value="<?php echo $row['contactNumber']?>">
    <input type="text" name="country" class="user registerItem " style="--positioncolumn: 2; --positionrow: 9" value="<?php echo $row['country']?>">
    <input type="text" name="city" class="user registerItem " style="--positioncolumn: 1; --positionrow: 11" value="<?php echo $row['city']?>">
    <input type="text" name="province" class="user registerItem " style="--positioncolumn: 2; --positionrow: 11" value="<?php echo $row['province']?>">
    <input type="text" name="postalcode" class="user registerItem " style="--positioncolumn: 1; --positionrow: 13" value="<?php echo $row['postalCode']?>">
    <input type="text" name="addressline" class="user registerItem " style="--positioncolumn: 2; --positionrow: 13" value="<?php echo $row['addressline']?>">

    <button name="editConfirm" type="submit" class="loginbutton Logintext registerItem2 " style="--positioncolumn: 1; --positionrow: 14">Confirm</button>
</form>

<?php

        }
    }
}
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST)) {

            foreach ($_POST as $key => $value) {

                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirmpassword = $_POST['confirm_password'];
                $firstname = $_POST['first_name'];
                $lastname = $_POST['last_name'];
                $contactnumber = $_POST['contact_number'];
                $country = $_POST['country'];
                $city = $_POST['city'];
                $province = $_POST['province'];
                $postalcode = $_POST['postalcode'];
                $addressline = $_POST['addressline'];
                $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

                if ($key == "editConfirm" && $password == $confirmpassword) {
                
                    $sql = "UPDATE userinfo SET UserName = '$username' , email = '$email' , contactNumber = '$contactnumber', lastName = '$lastname', firstName = '$firstname', password = '$hashedpassword', 
                    country = '$country', postalCode = '$postalcode', addressline = '$addressline', city = '$city' WHERE UserID=$UserID";
                    $result = $conn->query($sql);
                    $sql = "SELECT * FROM userInfo WHERE UserID = '$UserID'";
                    $result = $conn->query($sql);
                    $resultcheck = mysqli_num_rows($result);
        
        if ($resultcheck > 0){
            while($row = mysqli_fetch_assoc($result)){   
        ?> 
        <input type="text" name="username" class="user registerItem" style="--positioncolumn: 1; --positionrow: 3" value="<?php echo $row['UserName']?>">
    <input type="email" name="email" class="user registerItem " style="--positioncolumn: 1; --positionrow: 5" value="<?php echo $row['email']?>">
    <input onclick="showPassword()" id="password" type="password" name="password" class="user password registerItem" style="--positioncolumn: 1; --positionrow: 7" value="">
    <input type="password" name="confirm_password" class="user password registerItem " style="--positioncolumn: 1; --positionrow: 9" value="">
    <input type="text" name="first_name" class="user registerItem" style="--positioncolumn: 2; --positionrow: 3" value="<?php echo $row['firstName']?>">
    <input type="text" name="last_name" class="user registerItem " style="--positioncolumn: 2; --positionrow: 5" value="<?php echo $row['lastName']?>">
    <input type="text" name="contact_number" class="user registerItem" style="--positioncolumn: 2; --positionrow: 7" value="<?php echo $row['contactNumber']?>">
    <input type="text" name="country" class="user registerItem " style="--positioncolumn: 2; --positionrow: 9" value="<?php echo $row['country']?>">
    <input type="text" name="city" class="user registerItem " style="--positioncolumn: 1; --positionrow: 11" value="<?php echo $row['city']?>">
    <input type="text" name="province" class="user registerItem " style="--positioncolumn: 2; --positionrow: 11" value="<?php echo $row['province']?>">
    <input type="text" name="postalcode" class="user registerItem " style="--positioncolumn: 1; --positionrow: 13" value="<?php echo $row['postalCode']?>">
    <input type="text" name="addressline" class="user registerItem " style="--positioncolumn: 2; --positionrow: 13" value="<?php echo $row['addressline']?>">

    <button name="editConfirm" type="submit" class="loginbutton Logintext registerItem2 " style="--positioncolumn: 1; --positionrow: 14">Confirm</button>
    </form>
        <?php
        
                    }
                }
        
            }
            

                    if ($key == "editConfirm" && $password != $confirmpassword) {
                        
                        
                        $sql = "SELECT * FROM userInfo WHERE UserID = '$UserID'";
                        $result = $conn->query($sql);
                        $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0){
            while($row = mysqli_fetch_assoc($result)){   
        ?> 
        <input type="text" name="username" class="user registerItem" style="--positioncolumn: 1; --positionrow: 3" value="<?php echo $row['UserName']?>">
        <input type="email" name="email" class="user registerItem " style="--positioncolumn: 1; --positionrow: 5" value="<?php echo $row['email']?>">
        <input onclick="showPassword()" id="password" type="text" name="password" class="user password registerItem" style="--positioncolumn: 1; --positionrow: 7" value="Mismatched Password">
        <input type="password" name="confirm_password" class="user password registerItem " style="--positioncolumn: 1; --positionrow: 9" value="">
        <input type="text" name="first_name" class="user registerItem" style="--positioncolumn: 2; --positionrow: 3" value="<?php echo $row['firstName']?>">
        <input type="text" name="last_name" class="user registerItem " style="--positioncolumn: 2; --positionrow: 5" value="<?php echo $row['lastName']?>">
        <input type="text" name="contact_number" class="user registerItem" style="--positioncolumn: 2; --positionrow: 7" value="<?php echo $row['contactNumber']?>">
        <input type="text" name="country" class="user registerItem " style="--positioncolumn: 2; --positionrow: 9" value="<?php echo $row['country']?>">
        <input type="text" name="city" class="user registerItem " style="--positioncolumn: 1; --positionrow: 11" value="<?php echo $row['city']?>">
        <input type="text" name="province" class="user registerItem " style="--positioncolumn: 2; --positionrow: 11" value="<?php echo $row['province']?>">
        <input type="text" name="postalcode" class="user registerItem " style="--positioncolumn: 1; --positionrow: 13" value="<?php echo $row['postalCode']?>">
        <input type="text" name="addressline" class="user registerItem " style="--positioncolumn: 2; --positionrow: 13" value="<?php echo $row['addressline']?>">

        <button name="editConfirm" type="submit" class="loginbutton Logintext registerItem2 " style="--positioncolumn: 1; --positionrow: 14">Confirm</button>
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