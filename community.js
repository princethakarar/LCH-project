// Get references to HTML elements
const chatDisplay = document.getElementById('chat-display');
const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-button');

// Initialize Firebase with your project configuration
// (Your Firebase initialization code here)

// Function to send a message
function sendMessage() {
    const message = messageInput.value;
    if (message !== '') {
        // Push the message to the Firebase database
        database.ref('messages').push({
            text: message,
            timestamp: firebase.database.ServerValue.TIMESTAMP
        });
        messageInput.value = '';
    }
}

// Event listener for the Send button
sendButton.addEventListener('click', sendMessage);

// Function to display messages in the chat
function displayMessage(key, message) {
    const messageElement = document.createElement('div');
    messageElement.innerText = message.text;
    chatDisplay.appendChild(messageElement);
}

// Event listener for real-time updates to the messages
database.ref('messages').on('child_added', (snapshot) => {
    const message = snapshot.val();
    displayMessage(snapshot.key, message);
});