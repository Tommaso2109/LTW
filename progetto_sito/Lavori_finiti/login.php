<?php
// Connect to the database
$conn = new mysqli('127.0.0.1', 'root', '', 'login');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user and password from POST request
$user = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

// Protect against SQL injection
$user = mysqli_real_escape_string($conn, $user);
$pass = mysqli_real_escape_string($conn, $pass);

// Check if the user exists and the password is correct
$sql = "SELECT * FROM info WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists and password is correct, handle this case
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>login.formula1forfun</title>";
    echo '<link rel="stylesheet" href="styleLogin.css">';
    echo "</head>";
    echo "<body>";
    echo '<div class="sfondo"></div>';
    echo '<div class = "box">';
    echo '<a href="index.html">';
    echo '<img src="media/logo.png" alt="logo">';
    echo '</a>';
    echo '<form>';
    echo '<label for="login">Login was successfull!</label><br>';
    echo '</form>';
    echo '</div>';
    echo "</body>";
    echo "</html>";
} else {
    // User does not exist or password is incorrect, handle this case
    header("Location: login.html?error=User not found");
    exit();
}
$conn->close();
?>