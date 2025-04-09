document.getElementById("chat-form").addEventListener("submit", function(e) {
    e.preventDefault();
    const msg = document.getElementById("message").value;
    fetch("php/send_message.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: "message=" + encodeURIComponent(msg)
    }).then(() => {
        document.getElementById("message").value = "";
        loadMessages();
    });
});

function loadMessages() {
    fetch("php/get_messages.php")
        .then(res => res.text())
        .then(data => {
            document.getElementById("chat-box").innerHTML = data;
        });
}

setInterval(loadMessages, 1000);
window.onload = loadMessages;
