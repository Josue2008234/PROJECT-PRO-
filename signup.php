<?php
$connect = mysqli_connect("localhost", "root", "", "taxibooking");
if (!$connect) {
    die("Connection failed");
}
if ((isset($_POST["Username"])) && (isset($_POST["E-mail"])) && (isset($_POST["Password"])) && (isset($_POST["Confirm"]))){

    $username = $_POST["Username"];
    $email = $_POST["E-mail"];
    $password = $_POST["Password"];
    $confirm = $_POST["Confirm"];
    $sql = "INSERT INTO passengers (Username, Password, E-mail, Confirm) VALUES ('$username', '$password', '$email', '$confirm')";
    $result = mysqli_query($connect,$sql);
    if ($result){
        ?>
        <script>
            alert("You are registered");
            window.location.href='booking.php';
        </script>
        <?php
         
    }else{
        ?>
        <script>
            alert("You are not regitered")
            window.location.href='signup.php';
        </script>
        <?php
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
 <div class="banner">
        <div class="logo">
            <img src="logo.png" alt="logo" height="60vh" width="90vw">
            <label class="hea">SMART TAXI BOOKING</label>
            <button type="btn" onclick="login()" id="login">Login</button>
            <button type="btn" onclick="signup()" id="sign">Sign Up</button>
        </div>
    </div>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a href="car.php">Carlist</a>
        <a href="booking.php">Booking</a>
        </div>
        <center>        
        <div class="try">
        <div class="login">
            <h1>Signup to have an account</h1>
            <form class="skizzy" method="post">
                <input type="text" placeholder="Username" id="four" name="Username"required><br><br>
                <input type="text" placeholder="E-mail" id="four" name="E-mail" required><br><br>
                <input type="password" placeholder="Password" id="two" name="Password" required><br><br>
                <input type="password" placeholder="Confirm password" id="two" name="Confirm" required><br><br>
                <p id="qwer">You already have an account? <a href="login.php">Login</a></p>
                <center><button type="btn" id="but">Sign Up</button></center>
            </form>
            </div>
            </div>
        </center>
   <script src="script.Js"></script>
</body>
</html>