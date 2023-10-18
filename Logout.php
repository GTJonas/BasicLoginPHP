<?php
session_start(); // Start the session

if (isset($_SESSION['logged_in'])) {
    // If the user is logged in, destroy the session
    session_unset();
    session_destroy();
}

header("Location: index.php"); // Redirect back to the login page (index.php) after logging out
exit();
?>
