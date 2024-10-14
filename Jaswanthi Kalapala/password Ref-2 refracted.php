<?php
include 'db_connect.php'; // Include the database connection
session_start(); // Start the session

// Function to handle user login
function login_user($conn, $email, $password) {
    // Check if the user exists
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        ## Refracte  fuction 
        // Call the function to verify password
        if (verify_password($password, $user['password'])) {
            // Password matches, log in the user
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['login_message'] = "Login successful!";
            $_SESSION['message_type'] = "success";
            header("Location: dashboard.php"); // Redirect to dashboard or homepage
            exit();
        } else {
            // Password is incorrect
            $_SESSION['login_message'] = "Incorrect password. Please try again.";
            $_SESSION['message_type'] = "error";
            header("Location: login.php"); // Redirect back to login page
            exit();
        }
    } else {
        // No user found with this email
        $_SESSION['login_message'] = "No account found with this email. Please register.";
        $_SESSION['message_type'] = "error";
        header("Location: register.php"); // Redirect to registration page
        exit();
    }
}

// Function to verify password
function verify_password($input_password, $stored_hashed_password) {
    return password_verify($input_password, $stored_hashed_password);
}

// Handle form submission for login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Call the login function
    login_user($conn, $email, $password);
}

$conn->close();
?>
