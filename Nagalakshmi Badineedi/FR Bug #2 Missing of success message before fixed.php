<?php  
session_start();
include 'db_connect.php'; // Database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $ride_service = $_POST['ride_service'];

    // Validate inputs
    if (!empty($first_name) && !empty($email) && !empty($ride_service)) {
        // Prepare SQL query to insert the booking into the database
        $sql = "INSERT INTO bookings (first_name, email, ride_service) VALUES ('$first_name', '$email', '$ride_service')";
## user is now directed to its page 
        if (mysqli_query($conn, $sql)) {
            // Set success message in session
            $_SESSION['success'] = "
               
## Missing sucess message after booking 


    // Redirect back to the booking form
    header("Location: bookRides.php");
    exit();
}
?>