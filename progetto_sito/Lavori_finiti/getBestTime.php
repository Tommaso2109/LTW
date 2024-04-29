<?php
session_start();
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];

// Connessione al database
$conn = new mysqli('localhost', 'root', '', 'statistiche');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT record_reaction FROM utenti WHERE id = $username";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo json_encode(['bestTime' => $row['record_reaction']]);
    }
} else {
    echo "0 results";
}
$conn->close();
}
else{
    
}
?>