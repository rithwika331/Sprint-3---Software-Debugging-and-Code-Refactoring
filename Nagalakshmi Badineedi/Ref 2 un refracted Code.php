
<<?php 
// Fetch data directly from the database and iterate
$sql = "SELECT id, first_name, email, ride_service FROM bookings LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);
 ?>

