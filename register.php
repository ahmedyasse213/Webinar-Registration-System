<?php
// Establish a database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $webinar = $_POST["webinar"];

    // Save the registration details in the database

    // Close the database connection

    // Redirect to a success page
}
?>
