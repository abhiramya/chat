<?php
session_start();
include 'db.php';
if (!isset($_SESSION['username'])) exit();
$message = htmlspecialchars($_POST['message']);
$username = $_SESSION['username'];
$stmt = $conn->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $message);
$stmt->execute();
?>
