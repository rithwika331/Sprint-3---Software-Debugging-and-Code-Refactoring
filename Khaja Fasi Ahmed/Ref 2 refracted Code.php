<?php
// Database connection details
$servername = "localhost"; // Your database server
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "amusement_park"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Introduce Assertion
// Assert that the connection should not fail; if it does, it will throw an error
assert($conn->connect_error === null, "Connection failed: " . $conn->connect_error);
?>
