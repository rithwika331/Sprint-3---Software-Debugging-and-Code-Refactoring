<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Information</title>
    <style>
        body {
            display: flex;
            justify-content: center; /* Centers the main content horizontally */
            align-items: center; /* Centers the main content vertically */
            height: 100vh; /* Full viewport height */
            margin: 0; /* Removes default margin */
            font-family: Arial, sans-serif; /* Optional: sets a font */
        }

        main {
            text-align: center; /* Centers text within the main element */
            padding: 10px; /* Add padding to avoid content touching screen edges on mobile */
        }

        .rides-grid {
            display: flex;
            flex-wrap: wrap; /* Allows items to wrap to the next line */
            justify-content: center; /* Centers the items in the grid */
            gap: 20px; /* Adds space between the ride cards */
            margin-top: 20px; /* Adds margin above the grid */
        }

        .ride-card {
            background-color: #f1f1f1; /* Light background for ride cards */
            border: 1px solid #ccc; /* Light border */
            border-radius: 8px; /* Rounded corners */
            padding: 20px; /* Padding inside the card */
            width: 200px; /* Fixed width for the cards */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: adds a subtle shadow */
        }

        .more-info-btn {
            display: inline-block; /* Makes the button inline */
            margin-top: 10px; /* Space above the button */
            padding: 10px 15px; /* Button padding */
            background-color: #007bff; /* Button color */
            color: white; /* Button text color */
            text-decoration: none; /* Removes underline from link */
            border-radius: 4px; /* Rounded button corners */
        }

        .more-info-btn:hover {
            background-color: #0056b3; /* Darker button color on hover */
        }

        /* Media query for mobile responsiveness */
        @media (max-width: 600px) {
            body {
                height: auto; /* Allow height to adjust */
                padding: 10px;
                flex-direction: column; /* Stack items vertically */
            }

            .rides-grid {
                flex-direction: column; /* Stack ride cards vertically on smaller screens */
            }

            .ride-card {
                width: 100%; /* Make ride cards take up the full width on mobile */
                max-width: 300px; /* Optional: Set a maximum width for larger phones */
                margin: 0 auto; /* Center the ride cards */
            }
        }
    </style>
</head>
<body>
    <main>
        <h1>Enjoyable Rides & Services</h1>
        <div class="rides-grid">
            <!-- Ride 1 -->
            <div class="ride-card">
                <div class="ride-info">
                    <h2>Rollercoaster</h2>
                    <p>Experience the thrill of speed and excitement. A perfect choice for adrenaline seekers!</p>
                    <a class="more-info-btn" href="rollercoaster.php">More Info</a> <!-- Existing link -->
                </div>
            </div>

            <!-- Ride 2 -->
            <div class="ride-card">
                <div class="ride-info">
                    <h2>Water Park</h2>
                    <p>Cool off and splash around in our state-of-the-art water park, suitable for all ages.</p>
                    <a class="more-info-btn" href="water_park.php">More Info</a> <!-- Existing link -->
                </div>
            </div>

            <!-- Ride 3 -->
            <div class="ride-card">
                <div class="ride-info">
                    <h2>Ferris Wheel</h2>
                    <p>Take in breathtaking views of the entire park from the top of our giant Ferris Wheel.</p>
                    <a class="more-info-btn" href="ferris_wheel.php">More Info</a> <!-- Existing link -->
                </div>
            </div>

            <!-- Ride 4 -->
            <div class="ride-card">
                <div class="ride-info">
                    <h2>Bumper Cars</h2>
                    <p>Fun for everyone! Drive around and bump into friends in our classic bumper car arena.</p>
                    <a class="more-info-btn" href="bumper_cars.php">More Info</a> <!-- Existing link -->
                </div>
            </div>
        </div>
    </main>
</body>
</html>
