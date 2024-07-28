window.onload = function() {
    // Fetch the message from a hidden element in the HTML
    var messageElement = document.getElementById('sessionMessage');
    if (messageElement) {
        var message = messageElement.innerText;
        if (message) {
            alert(message);
            // Optionally, you can redirect or refresh the page after showing the alert
            // location.reload();
        }
    }
};