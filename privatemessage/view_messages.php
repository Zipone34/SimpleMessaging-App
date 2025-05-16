<?php
include 'db.php';

// OPTIONAL: Add password for viewing
$password = "Joshua123"; // Change this!

if (!isset($_GET['pass']) || $_GET['pass'] !== $password) {
    die("Unauthorized access.");
}

$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");

echo "<h2>Messages</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['sender_name']}</strong> ({$row['created_at']})<br>";
    echo nl2br(htmlspecialchars($row['message'])) . "</p><hr>";
}
