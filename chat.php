<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="chat-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <div id="chat-box"></div>
        <form id="chat-form">
            <input type="text" id="message" placeholder="Type your message..." autocomplete="off">
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
