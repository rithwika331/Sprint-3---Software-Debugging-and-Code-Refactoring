<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roller Coaster</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS -->
</head>
<body>
    <!-- PHP include for header -->
    <?php include 'header.php'; ?>

    <div class="content">
        <h1>Roller Coaster</h1>
        <img src="images/1.jpeg" alt="Roller Coaster" class="ride-image" aria-label="A thrilling roller coaster ride">

        <h2>Overview</h2>
        <p>The Roller Coaster is our fastest ride, reaching speeds of 100 mph! Experience sharp turns and drops that will leave you breathless.</p>

        <!-- Extract Method: Using the renderSpecifications method to encapsulate the logic for rendering the specifications list. 
        This improves code readability and maintainability, allowing changes to the specifications to be made in one location. -->
        <?php
        class Ride {
            public function renderSpecifications() {
                echo '<h2>Specifications</h2>';
                echo '<ul>';
                echo '<li><strong>Height Requirement:</strong> 54 inches</li>';
                echo '<li><strong>Duration:</strong> 2 minutes</li>';
                echo '<li><strong>Maximum Speed:</strong> 100 mph</li>';
                echo '<li><strong>Inversions:</strong> 5</li>';
                echo '<li><strong>Capacity:</strong> 24 riders per train</li>';
                echo '</ul>';
            }
        }

        $ride = new Ride(); // Creating a new instance of Ride class
        $ride->renderSpecifications(); // Calling the method to display specifications
        ?>

        <h2>Safety Information</h2>
        <p>Safety is our top priority! Riders must be securely fastened in their seats. Please follow the instructions of our ride operators at all times.</p>

        <h2>Park Hours</h2>
        <p>The Roller Coaster operates from 10:00 AM to 10:00 PM. We recommend arriving early to avoid long lines!</p>
    </div>

    <!-- PHP include for footer -->
    <?php 
    include 'footer.php'; 
    $footer = new Footer(); // Creating a new instance of Footer class
    $footer->render(); // Calling the render method to display the footer
    ?>
</body>
</html>
