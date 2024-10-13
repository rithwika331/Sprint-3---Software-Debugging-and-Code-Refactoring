<?php
// Database connection details
$servername = "localhost"; // Your database server
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "amusement_park"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//erro handling should be below create connection