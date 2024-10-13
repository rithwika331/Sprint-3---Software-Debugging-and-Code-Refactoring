

<<?php  
// Encapsulate the ride_service variable inside a function for better control
function getRideService() {
    // Handle the case where the variable may not be set
    return isset($ride_service) ? $ride_service : "Unknown ride/service";
}

// Use the encapsulated function instead of directly using $ride_service
$_SESSION['success'] = "
    Your booking for the " . getRideService() . " is confirmed! Enjoy your time at the park! Go back to the <a href='dashboard.php' class='dashboard-link'>dashboard</a>.";
?>