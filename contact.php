<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<body>
    <div class="conta">
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
        <!-- Contact Us Section -->
        <div class="contact-container">
            <h2>Contact us here</h2>
            <p>Have questions or feedback? Reach out to us!</p>

            <div class="contact-content">
                <!-- Contact Form -->
                <div class="contact-form">
                    <form onsubmit="submitContactForm(event)">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <textarea id="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <div class="info-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Address</h3>
                        <p>123 Taxi Street, Kigali, Rwanda</p>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-phone-alt"></i>
                        <h3>Phone</h3>
                        <p>0795643858</p>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p>contact@smarttaxi.com</p>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-clock"></i>
                        <h3>Working Hours</h3>
                        <p>24/7 Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function submitContactForm(event) {
            event.preventDefault();
            alert("Thank you for your comment. We'll contact you soon.");
            // Add backend integration here later
        }
    </script>
    <footer>
        <div class="footer">
            <p id="p2">Copyright &copy; Smart Taxi Booking 2025.All rights reserved</p>
    </div>
</footer>
      <script src="script.Js"></script>
</body>
</html>