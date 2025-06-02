function login(){
    window.location.href="login.php";
}

function signup(){
    window.location.href="signup.php";
}
function submitBooking(event) {
            event.preventDefault();
            alert("Booking submitted! Our driver will call you soon.");
            // Add AJAX/backend integration here later
        }// Function to handle login button click
document.getElementById('but').addEventListener('click', function(event){
    event.preventDefault(); // Prevent form submission (for demo purposes)
})


// Optional: Add Enter key functionality for better UX
document.getElementById('two').addEventListener('keypress', function(e) {
    if(e.key === 'Enter') {
        document.getElementById('but').click();
    }
});
