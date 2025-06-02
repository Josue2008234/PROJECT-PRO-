<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT(PRO)</title>
    <link rel="icon" href="image(1).jpeg">
</head>
<link rel="stylesheet" href="style.CSS">
<body>
    <div class="banner">
        <div class="logo">
            <img src="logo.png" alt="logo" height="60vh" width="90vw">
            <label class="hea">SMART TAXI BOOKING</label>
            <button type="btn"  onclick=" window.location.href='login.php'" id="login">Login</button>
            <button type="btn"  onclick="signup()"id="sign">Sign Up</button>
        </div>
    </div>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a href="car.php">Carlist</a>
        <a href="booking.php">Booking</a>
    </div>
    <div class="container">
        <p id="p1">Get Everywhere, Be Anywhere</p>
       <p>Get a ride whenever you need it.Day or Night.</p>
    </div>
    <center><button type="button" id="btn" onclick="window.location.href='car.php'">Book Now</button> </center>
    <footer>
        <div class="footer">
            <p id="p2">Copyright &copy; Smart Taxi Booking 2025.All rights reserved</p>
    </div>
</footer>
    

    </div>        
    
      <script src="script.Js"></script>
</body>
</html>