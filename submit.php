<?php
// Start the session
session_start();

// Database connection details
include 'dbconnect.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If not logged in, redirect to login page or show an error
    echo "<script>alert('Please log in to submit the form.'); window.location.href='login.php';</script>";
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    
    // SQL query to insert data into the contacts table
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    
    // Check if the query was successful
    if ($conn->query($sql) === TRUE) {
        // Success message and redirect back to contact form
        echo "<script>alert('Your message has been submitted successfully!'); window.location.href='contact.php';</script>";
    } else {
        // Error handling
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
