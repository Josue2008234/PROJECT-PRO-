<?php
$conn = mysqli_connect("localhost", "root", "", "taxibooking");

if (!$conn) {
    die("Connection failed");
}

if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['confirm password'])
) { 
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confirm password']);

    $sql = "INSERT INTO userSignUp (name, email, password, confirmpassword) 
            VALUES ('$name', '$email', '$password', '$confirmpassword')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Customer Registered Successfully!');</script>";
        header('Location:  login.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>