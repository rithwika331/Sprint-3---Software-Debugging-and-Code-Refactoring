<?php 
include 'db_connect.php'; // Include the database connection
session_start(); // Start the session

// Handle form submission for registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $accessibility = $_POST['accessibility'];

    // Check email and handle registration
    // The following line calls the isEmailRegistered function
    // This uses the Decompose Conditional refactoring to separate the email check logic from the registration logic.
    if (isEmailRegistered($email, $conn)) {
        $_SESSION['success_message'] = "Email already exists!";
    } else {
        // The else block now only handles user registration,
        // making the flow of logic clearer and easier to understand.
        registerUser($name, $email, $password, $accessibility, $conn);
    }

    // Redirect to a blank page to prevent form resubmission
    header("Location: thank_you.php");
    exit();
}

$conn->close();

// Function to check if the email is already registered
// Decomposing this conditional logic into its own function improves code readability
// and allows for easier testing and maintenance.
function isEmailRegistered($email, $conn) {
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check_email);
    return $result->num_rows > 0; // Return true if email exists
}

// Function to register the user
// This function encapsulates the registration logic, isolating it from the email validation
// which simplifies the main code flow and improves maintainability.
function registerUser($name, $email, $password, $accessibility, $conn) {
    $sql = "INSERT INTO users (name, email, password, accessibility_preferences) VALUES ('$name', '$email', '$password', '$accessibility')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Registration successful! You can now log in.";
    } else {
        $_SESSION['success_message'] = "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
