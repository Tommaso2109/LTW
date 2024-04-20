<?php
// Connect to the database
$conn = new mysqli('127.0.0.1', 'root', '', 'login');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user, password and email from POST request
$user = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

// Protect against SQL injection
$user = mysqli_real_escape_string($conn, $user);
$email = mysqli_real_escape_string($conn, $email);
$pass = mysqli_real_escape_string($conn, $pass);

// Hash the password
//$pass = password_hash($pass, PASSWORD_DEFAULT);

// Check if the user already exists
$sql = "SELECT * FROM info WHERE username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, handle this case
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
        echo '<label for="login">User already registered. Please Login</label><br>';
        echo '<a href="login.html" class="login" >-> Login <-</a>';
        echo '</form>';
        echo '</div>';
        echo "</body>";
        echo "</html>";
} else {
    // User does not exist, insert new user
    $sql = "INSERT INTO info (username, email, password) VALUES ('$user', '$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
        // Create a success page
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
        echo '<label for="login">Thanks for register :)</label><br>';

        echo '</form>';
        echo '</div>';
        echo "</body>";
        echo "</html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>