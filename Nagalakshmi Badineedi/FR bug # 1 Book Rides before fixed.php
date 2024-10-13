<?php
session_start();
include 'db_connect.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $ride_service = $_POST['ride_service'];

    if (!empty($first_name) && !empty($email) && !empty($ride_service)) {
        $sql = "INSERT INTO bookings (first_name, email, ride_service) VALUES ('$first_name', '$email', '$ride_service')";
        mysqli_query($conn, $sql);
    }

    // Redirect to a blank page to prevent form resubmission if the user refreshes the page
    header("Location: about:blank");
    exit();
}
?>
