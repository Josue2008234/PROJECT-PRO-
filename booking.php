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
    <div class="all">
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
    
        <!-- Improved Booking Form -->
        <div class="booking-container">
            <h2>Book Your Taxi</h2>
            <form id="booking-form" onsubmit="submitBooking(event)">
                <div class="form-group">
                    <label for="pickup">Pickup Location</label>
                    <input type="text" id="pickup" placeholder="Enter pickup address" required>
                </div>
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input type="text" id="destination" placeholder="Enter destination" required>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" id="time" required>
                </div>
                <div class="form-group">
                    <label for="car-type">Car Type</label>
                    <select id="car-type" required>
                        <option value="">Select a car</option>
                        <option value="standard">Standard (4-seater)</option>
                        <option value="premium">Premium (Luxury)</option>
                        <option value="suv">SUV (6-seater)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="+1234567890" required>
                </div>
                <button type="submit" class="submit-btn">Confirm Booking</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <p id="p2">Copyright &copy; Smart Taxi Booking 2025.All rights reserved</p>
    </div>
</footer>
        
    <script src="script.Js"></script>
</body>
</html>