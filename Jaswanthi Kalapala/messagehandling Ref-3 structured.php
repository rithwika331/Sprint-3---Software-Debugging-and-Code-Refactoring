
<?php

## Refractured by use of function 
function displayErrorMessage($message) {
    echo "<div class='error'>$message</div>";
}

if ($form_error) {
    displayErrorMessage("There was an error with your submission.");
}
  
?>