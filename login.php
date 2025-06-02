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
            <button type="btn" id="login">Login</button>
            <button type="btn" id="sign">Sign Up</button>
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
            <h1>Login to your account</h1>
            <form class="jozzy"  method="POST">
                <input type="text" placeholder="type your E-mail" id="four" required><br><br>
                <input type="password" placeholder="type your password" id="two" required><br><br>
                <p id="qwer">Don't have an account? <a href="signup.html">Sign up</a></p>
                <center><button type="btn" id="but">Login</button></center>
            </form>
            </div>
            </div>
        </center>
   <script src="script.Js"></script>
</body>
</html>