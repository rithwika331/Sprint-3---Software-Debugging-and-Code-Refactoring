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

        <h2>Specifications</h2>
        <ul>
            <li><strong>Height Requirement:</strong> 54 inches</li>
            <li><strong>Duration:</strong> 2 minutes</li>
            <li><strong>Maximum Speed:</strong> 100 mph</li>
            <li><strong>Inversions:</strong> 5</li>
            <li><strong>Capacity:</strong> 24 riders per train</li>
        </ul>

        <h2>Safety Information</h2>
        <p>Safety is our top priority! Riders must be securely fastened in their seats. Please follow the instructions of our ride operators at all times.</p>

        <h2>Park Hours</h2>
        <p>The Roller Coaster operates from 10:00 AM to 10:00 PM. We recommend arriving early to avoid long lines!</p>
    </div>

    <!-- PHP include for footer -->
    <?php include 'footer.php'; ?>
</body>
</html>

































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




























use the refracted below that is listed 1-30etc choose directly from there use the one that has not been used before and in the refracted code comment with imprtance of refraction type also

choose refractory type for for the footer for the list 
// Check connection


do not use encapsulate collection variable select from below

Redirect to a blank page to prevent form resubmission if the user refreshes the pageplease use the below refractory type choose one do not use extract 



what type of  Refactoring Type can i add here make sure to comment whre it shoul be choose one and tell me where it should be with comment 

give me 1 existing code and modifie code with refrtoring type please
the following are the refractory type to use do not come up with yours 

Change Reference to Value


1.Change Value to Reference


2.Collapse Hierarchy


3.Combine Functions into Class


4.Combine Functions into Transform


5.Decompose Conditional



6.Encapsulate Record
7.Replace Record with Data Class


8.Self-Encapsulate Field

9.Extract Method

10.Extract Superclass

11.Extract Variable
12.Introduce Explaining Variable

13.Hide Delegate

14.Inline Function
15.Inline Method


16.Inline Variable
17.Inline Temp

18.Introduce Assertion


19.Introduce Parameter Object

21.Introduce Special Case
22.Introduce Null Object


23.Move Field

24.Move Function
25.Move Method


26.Move Statements into Function


27.Move Statements to Callers


28.Parameterize Function
29.Parameterize Method


30.Preserve Whole Object


31.Pull Up Constructor Body


Pull Up Field


Pull Up Method


Push Down Field


Push Down Method


Remove Dead Code


Remove Flag Argument
Replace Parameter with Explicit Methods


Remove Middle Man


Remove Setting Method


Remove Subclass
Replace Subclass with Fields


Rename Field


Rename Variable


Replace Command with Function


Replace Conditional with Polymorphism


Replace Constructor with Factory Function
Replace Constructor with Factory Method


Replace Control Flag with Break
Remove Control Flag


Replace Derived Variable with Query


Replace Error Code with Exception


Replace Exception with Precheck
Replace Exception with Test


Replace Function with Command
Replace Method with Method Object


Replace Inline Code with Function Call


Replace Loop with Pipeline


Replace Magic Literal
Replace Magic Number with Symbolic Constant


Replace Nested Conditional with Guard Clauses


Replace Parameter with Query
Replace Parameter with Method


Replace Primitive with Object
Replace Data Value with Object • Replace Type Code with Class


Replace Query with Parameter


Replace Subclass with Delegate


Replace Superclass with Delegate
Replace Inheritance with Delegation


Replace Temp with Query


Replace Type Code with Subclasses
Extract Subclass • Replace Type Code with State/Strategy


Return Modified Value


Separate Query from Modifier


Slide Statements
Consolidate Duplicate Conditional Fragments


Split Loop


Split Phase


Split Variable
Remove Assignments to Parameters • Split Temp


Substitute Algorithm









