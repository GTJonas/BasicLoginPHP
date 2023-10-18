<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start(); // Start a session

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // If the user is already logged in, redirect to Loggedin.php
        header("Location: Loggedin.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Predefined values
        $correctUsername = "Admin";
        $correctPassword = "Admin";

        if ($username === $correctUsername && $password === $correctPassword) {
            // Authentication successful
            $_SESSION['logged_in'] = true;
            $_SESSION['Username'] = $username;
            header("Location: Loggedin.php"); // Redirect to Loggedin.php
            exit();
        } else {
            // Authentication failed
            echo "Login failed. Please check your username and password.";
        }
    }
    ?>
    <form action="index.php" method="POST">
        <label for="Name">Användarnamn</label>
        <input id="Name" type="text" name="username">
        <label for="Password">Lösenord</label>
        <input id="Password" type="password" name="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
