<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Information</title>
    <style>
        /* ... Existing CSS styles ... */
    </style>
</head>
<body>

<?php
// Refactoring Type: Change Function Declaration
// Importance: Encapsulating link creation allows for centralized error handling,
// ensuring that all links are validated before being rendered in the HTML.
function createLink($pageName, $displayText) {
    // Check if the file exists before creating the link
    if (file_exists($pageName)) {
        return "<a class='more-info-btn' href='$pageName'>$displayText</a>";
    } else {
        // Return a placeholder or error message if the link is broken
        return "<span class='error-message'>Info not available</span>";
    }
}
?>

<main>
    <h1>Enjoyable Rides & Services</h1>
    <div class="rides-grid">
        <!-- Ride 1 -->
        <div class="ride-card">
            <div class="ride-info">
                <h2>Rollercoaster</h2>
                <p>Experience the thrill of speed and excitement. A perfect choice for adrenaline seekers!</p>
                <?= createLink("rollercoaster.php", "More Info") ?> <!-- Using the new function -->
            </div>
        </div>

        <!-- Ride 2 -->
        <div class="ride-card">
            <div class="ride-info">
                <h2>Water Park</h2>
                <p>Cool off and splash around in our state-of-the-art water park, suitable for all ages.</p>
                <?= createLink("water_park.php", "More Info") ?> <!-- Using the new function -->
            </div>
        </div>

        <!-- Ride 3 -->
        <div class="ride-card">
            <div class="ride-info">
                <h2>Ferris Wheel</h2>
                <p>Take in breathtaking views of the entire park from the top of our giant Ferris Wheel.</p>
                <?= createLink("ferris_wheel.php", "More Info") ?> <!-- Using the new function -->
            </div>
        </div>

        <!-- Ride 4 -->
        <div class="ride-card">
            <div class="ride-info">
                <h2>Bumper Cars</h2>
                <p>Fun for everyone! Drive around and bump into friends in our classic bumper car arena.</p>
                <?= createLink("bumper_cars.php", "More Info") ?> <!-- Using the new function -->
            </div>
        </div>
    </div>
</main>
</body>
</html>
