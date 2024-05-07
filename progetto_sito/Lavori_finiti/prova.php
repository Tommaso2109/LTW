
<div class="info-2">                                         
    <form method="post">
        <label for="search_friends">Cerca tra i tuoi amici:</label><br><br>
        <input type="text" id="search_friends" name="search_friends"><br><br>
        <input type="submit" value="Submit">
    </form> 
    <br> 
</div>
<div> 
    <table>
    <tr>
        <th>Friend ID</th>
        <th>Username</th>
        <th>Remove Friend</th>
    </tr>
    <?php
    $conn = new mysqli('127.0.0.1', 'root', '', 'statistiche');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $_SESSION['id'] = '1';
    $search = isset($_POST['search_friends']) ? $_POST['search_friends'] : '';

    if (isset($_SESSION['id'])) {
        $query = "SELECT users.* FROM users JOIN friends ON users.id = friends.friend_id WHERE friends.user_id = $_SESSION[id] AND users.username LIKE '%$search%'";
        $result = $conn->query($query);

        if ($conn->error) {
            die("Error: " . $conn->error);
        } else {
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>
                    <form action='remove_friend.php' method='post'>
                        <input type='hidden' name='friend_id' value='".$row["id"]."'>
                        <input type='submit' value='Remove'>
                    </form>
                    </td></tr>";
                }
            } else {
                echo "No friends found.";
            }
        }
    } else {
        echo "You must be logged in to view your friends list.";
    }
    ?>
    </table>
</div>
<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $query = "SELECT * FROM users WHERE username LIKE '%$search%'";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["username"]. "<br>";
            echo "<button onclick=\"addFriend(" . $row["id"] . ")\">Add Friend</button>";
        }
    }

    if (isset($_POST['friend_id']) && isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
        $friend_id = $_POST['friend_id'];
        $query = "INSERT INTO friends (user_id, friend_id) VALUES ($user_id, $friend_id)";
        $conn->query($query);
    }
    
}

if (isset($_SESSION['id'])) {
    $query = "SELECT users.* FROM users JOIN friends ON users.id = friends.friend_id WHERE friends.user_id = $_SESSION[id]";
    $result = $conn->query($query);

    while($row = $result->fetch_assoc()) {
        echo "Friend id: " . $row["id"]. " - Name: " . $row["username"]. "<br>";
    }
} else {
    echo "You must be logged in to view your friends list.";
}
?>