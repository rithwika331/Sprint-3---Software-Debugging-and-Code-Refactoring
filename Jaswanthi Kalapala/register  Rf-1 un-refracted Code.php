<?php
include 'db_connect.php'; // Include the database connection
session_start(); // Start the session

// Handle form submission for registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $accessibility = $_POST['accessibility'];
    // Registration logic directly within this block

?>
