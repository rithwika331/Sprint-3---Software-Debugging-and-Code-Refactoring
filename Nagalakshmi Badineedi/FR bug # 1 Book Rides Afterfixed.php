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
                <style>
                    .dashboard-link {
                        text-decoration: none; /* Remove underline */
                        color: #007BFF; /* Link color */
                        transition: color 0.3s ease; /* Smooth transition for color change */
                    }
                    .dashboard-link:hover {
                        color: #0056b3; /* Darker color on hover */
                        text-decoration: underline; /* Underline on hover */
                    }
                </style>
                Your booking for the $ride_service is confirmed! Enjoy your time at the park! Go back to the <a href='dashboard.php' class='dashboard-link'>dashboard</a>.";
        } else {
            $_SESSION['success'] = "There was an error processing your booking. Please try again.";
        }
    } else {
        $_SESSION['error'] = "Please fill in all fields."; // Optional: Handle empty fields
    }

    // Redirect back to the booking form
    header("Location: bookRides.php");
    exit();
}
?>


