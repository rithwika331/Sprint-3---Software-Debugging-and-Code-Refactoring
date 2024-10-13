

<<?php  
// Encapsulate the database fetching into a function for reusability and optimization
function getBookings($conn, $limit, $offset) {
    $sql = "SELECT id, first_name, email, ride_service FROM bookings LIMIT $limit OFFSET $offset";
    $result = mysqli_query($conn, $sql);

    $bookings = [];
    while ($booking = mysqli_fetch_assoc($result)) {
        $bookings[] = $booking;
    }

    return $bookings; // Return a collection (array) of bookings
}

// Fetch bookings with the encapsulated method
$bookings = getBookings($conn, $limit, $offset);
?>