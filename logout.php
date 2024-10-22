<?php   
session_start(); // Start the session
session_unset(); // Clear all session variables
session_destroy(); // Destroy the session
header("location:login.php"); // Redirect to the login page
exit; // Terminate the script
?>
