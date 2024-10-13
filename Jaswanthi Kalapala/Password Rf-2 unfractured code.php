<?php
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['login_message'] = "Incorrect password. Please try again.";
            $_SESSION['message_type'] = "error";
            // Redirect back to login page
        
        }

$conn->close();
?>