<?php
include 'db_connect.php'; // Include the database connection
session_start(); // Start the session

// Refactored into a dedicated function
function register_user($conn, $name, $email, $password, $accessibility) {
    // Check if the email is already registered
    $check_email = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($check_email);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['success_message'] = "Email already exists!";
    } else {
        // Insert into the database
        $sql = "INSERT INTO users (name, email, password, accessibility_preferences) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $password, $accessibility);

        if ($stmt->execute() === TRUE) {
            $_SESSION['success_message'] = "Registration successful! You can now log in.";
        } else {
            $_SESSION['success_message'] = "Error: " . $stmt->error;
        }
    }
}

// Handle form submission for registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $accessibility = $_POST['accessibility'];

    // Call the registration function
    register_user($conn, $name, $email, $password, $accessibility);

    // Redirect back to the registration page
    header("Location: register.php");
    exit();
}

$conn->close();
?>
