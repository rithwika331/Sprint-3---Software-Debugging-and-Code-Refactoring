<?php   
session_start();
include 'db_connect.php'; // Database connection

// Fetch all bookings from the database
$sql = "SELECT * FROM bookings";
$result = mysqli_query($conn, $sql); ## slow page load for manage booking 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center; /* Centers content horizontally */
            align-items: center; /* Centers content vertically */
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #65558F;
            color: white;
            font-size: 1.2em;
        }

        td {
            background-color: #fff;
            font-size: 1.1em;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .edit-btn {
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #6a11cb;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .edit-btn:hover {
            background-color: #4e0ea7;
        }

        .success-message, .error-message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
            width: 100%; /* Ensures messages span the width */
        }

        .success-message {
            background-color: #e0ffd4;
            color: #2e7d32;
        }

        .error-message {
            background-color: #ffd4d4;
            color: #d32f2f;
        }

        /* Ensures table covers left side but stays centered */
        table {
            width: 80%; /* Adjust width to cover the left side of the screen */
            margin: 0 auto; /* Keep it centered */
        }

    </style>
</head>
<body>

<?php include 'header.php'; ?> <!-- Include Header -->

<h1>Manage Your Rides and Bookings</h1> <!-- Added Header -->

<?php if (isset($_SESSION['success'])): ?>
    <div class="success-message"><?= $_SESSION['success'] ?></div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="error-message"><?= $_SESSION['error'] ?></div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Email</th>
            <th>Ride/Service</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($booking = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($booking['first_name']) ?></td>
                <td><?= htmlspecialchars($booking['email']) ?></td>
                <td><?= htmlspecialchars($booking['ride_service']) ?></td>
                <td>
                    <a href="editBooking.php?id=<?= $booking['id'] ?>" class="edit-btn">Edit</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>
