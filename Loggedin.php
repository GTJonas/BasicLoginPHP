<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
    <?php
    session_start(); // Start a session

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        // If the user is not logged in, redirect back to index.php
        header("Location: index.php");
        exit();
    }
    ?>
    <h1>Welcome to the Logged In Page</h1>
    <p>You are logged in as a valid user.</p>
    <a href="logout.php">Logout</a> <!-- You can create a logout script (logout.php) to destroy the session. -->
</body>
</html>
