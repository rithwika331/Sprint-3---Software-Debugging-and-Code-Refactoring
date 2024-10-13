<?php    
session_start(); // Start a session to manage user feedback
include 'db_connect.php'; // Include database connection
include 'header.php'; // Include the header for the page layout

// Function to handle both booking updates and form display
function handleBookingUpdate($conn, $booking_id) {
    // Fetch booking details from the database using the provided booking ID
    $sql = "SELECT * FROM bookings WHERE id = $booking_id";
    $result = mysqli_query($conn, $sql);
    $booking = mysqli_fetch_assoc($result); // Get the booking details as an associative array

    // Check if the form has been submitted to save the updated booking information
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_booking'])) {
        // Capture the input values from the form
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $ride_service = $_POST['ride_service'];

        // Prepare the SQL query to update the booking in the database
        $update_sql = "UPDATE bookings SET first_name='$first_name', email='$email', ride_service='$ride_service' WHERE id=$booking_id";

        // Execute the update query
        if (mysqli_query($conn, $update_sql)) {
            // Set a success message in the session and redirect to the dashboard
            $_SESSION['success'] = "Booking updated successfully!";
            header("Location: dashboard.php");
            exit(); // Exit after redirect to prevent further execution
        } else {
            // Set an error message if the update fails
            $_SESSION['error'] = "Error updating booking.";
        }
    }

    return $booking; // Return the booking details for use in the form
}

// Check if a booking ID is provided in the URL
if (isset($_GET['id'])) {
    $booking_id = $_GET['id']; // Get the booking ID from the URL
    # Combined into function implementation: Calls handleBookingUpdate to manage fetching and updating
    $booking = handleBookingUpdate($conn, $booking_id); // Call the function to handle booking updates
} else {
    // If no booking ID is provided, set an error message and redirect
    $_SESSION['error'] = "No booking ID provided.";
    header("Location: manageBookings.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the stylesheet -->
</head>
<body>
<style>
    /* Inline CSS for the page layout */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    header, footer {
        color: white;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        width: 100%;
        left: 0;
    }

    header {
        top: 0; // Position header at the top
    }

    footer {
        bottom: 0; // Position footer at the bottom
    }

    form {
        max-width: 500px;
        margin: 120px auto 100px auto; // Center the form and add top margin to separate from header
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"], input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    button {
        padding: 10px 15px;
        background-color: #2575fc;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8; // Change button opacity on hover for visual feedback
    }

    .error-message, .success-message {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        text-align: center;
    }

    .error-message {
        background-color: #ffd4d4; // Style for error messages
        color: #d32f2f;
    }

    .success-message {
        background-color: #d4ffd4; // Style for success messages
        color: #2f7d32;
    }
</style>
<h2>Edit Booking</h2>

<!-- Display success message if it exists -->
<?php if (isset($_SESSION['success'])): ?>
    <div class="success-message"><?= htmlspecialchars($_SESSION['success']) ?></div>
    <?php unset($_SESSION['success']); // Clear success message after displaying ?>
<?php endif; ?>

<!-- Display error message if it exists -->
<?php if (isset($_SESSION['error'])): ?>
    <div class="error-message"><?= htmlspecialchars($_SESSION['error']) ?></div>
    <?php unset($_SESSION['error']); // Clear error message after displaying ?>
<?php endif; ?>

<!-- Form for editing the booking -->
<form method="POST">
    <input type="text" name="first_name" value="<?= htmlspecialchars($booking['first_name']) ?>" required placeholder="First Name">
    <input type="email" name="email" value="<?= htmlspecialchars($booking['email']) ?>" required placeholder="Email">
    <input type="text" name="ride_service" value="<?= htmlspecialchars($booking['ride_service']) ?>" required placeholder="Ride/Service">
    <button type="submit" name="save_booking">Save Booking</button>
</form>

<?php include 'footer.php'; // Include the footer for the page layout ?>

</body>
</html>
