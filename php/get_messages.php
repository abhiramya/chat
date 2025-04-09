<?php
include 'db.php';
$result = $conn->query("SELECT * FROM messages ORDER BY id DESC LIMIT 50");
$messages = [];
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['username']}:</strong> {$row['message']}</p>";
}
?>
