<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sender = $conn->real_escape_string($_POST['sender_name']);
    $msg = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO messages (sender_name, message) VALUES ('$sender', '$msg')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully! <a href='index.html'>Send another</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
