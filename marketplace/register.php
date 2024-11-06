<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_number = $_POST['contact_number'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postalcode = $_POST['postalcode'];
    $addressline = $_POST['addressline'];


    if (empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($first_name) || empty($last_name) || empty($contact_number) 
    || empty($country) || empty($city) || empty($province) || empty($postalcode) || empty($addressline)) {
        echo "All fields are required!";
    } elseif ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO userinfo (username, email, password, firstName, lastName, contactNumber, country, city, province, postalCode, addressline, totalcurrency)
                VALUES ('$username', '$email', '$hashed_password', '$first_name', '$last_name', '$contact_number', '$country', '$city', '$province', '$postalcode', '$addressline', 100)";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
            header("Location: loginPage.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>



<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Online Market</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/design.css">
    </head>

    <body class="mainBackground">

        <div class ="container6">
            <div class="registerGUI columnItem" style="--position: 1">
            <form class="login" action="register.php" method="POST">

                <p class ="Logintext2 item5">Register</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 2" >Username</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 4" >Email Address</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 6">Password</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 8" >Confirm Password</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 2">First Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 4" >Last Name</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 6">Contact Number</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 8">Country</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 10">City</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 10" >Province</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 1; --positionrow: 12">Post Code</p>
                <p class ="Registertext registerItem" style="--positioncolumn: 2; --positionrow: 12">Address Line</p>

    <input type="text" name="username" class="user registerItem" style="--positioncolumn: 1; --positionrow: 3" placeholder="@username etc.." required>
    <input type="email" name="email" class="user registerItem " style="--positioncolumn: 1; --positionrow: 5" placeholder="example@example.com" required>
    <input type="password" name="password" class="user password registerItem" style="--positioncolumn: 1; --positionrow: 7" placeholder="........." required>
    <input type="password" name="confirm_password" class="user password registerItem " style="--positioncolumn: 1; --positionrow: 9" placeholder="........." required>
    <input type="text" name="first_name" class="user registerItem" style="--positioncolumn: 2; --positionrow: 3" placeholder="Juan" required>
    <input type="text" name="last_name" class="user registerItem " style="--positioncolumn: 2; --positionrow: 5" placeholder="Dela Cruz" required>
    <input type="text" name="contact_number" class="user registerItem" style="--positioncolumn: 2; --positionrow: 7" placeholder="09--------" required>
    <input type="text" name="country" class="user registerItem " style="--positioncolumn: 2; --positionrow: 9" placeholder="Philippines, Malaysia, Singapore" required>
    <input type="text" name="city" class="user registerItem " style="--positioncolumn: 1; --positionrow: 11" placeholder="Manila, Los Banos, Calamba" required>
    <input type="text" name="province" class="user registerItem " style="--positioncolumn: 2; --positionrow: 11" placeholder="Manila, Laguna, Calamba, Quezon" required>
    <input type="text" name="postalcode" class="user registerItem " style="--positioncolumn: 1; --positionrow: 13" placeholder="4040, 4030, 2030" required>
    <input type="text" name="addressline" class="user registerItem " style="--positioncolumn: 2; --positionrow: 13" placeholder="Street, Barangay..." required>

    <button type="submit" class="loginbutton Logintext registerItem2 " style="--positioncolumn: 1; --positionrow: 14">Register</button>
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
            
        <script src="../theme/script.js" async defer></script>
    </body>
</html>

