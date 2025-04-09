<?php
session_start();
include 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$result = $conn->query("SELECT * FROM users WHERE username='$username'");
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $username;
        header("Location: ../chat.php");
        exit();
    }
}
echo "Invalid credentials.";
?>
