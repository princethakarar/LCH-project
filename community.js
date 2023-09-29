function addMessage(message, isUser) {
    const chatMessages = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = isUser ? 'user-message' : 'other-message';
    messageDiv.textContent = message;
    chatMessages.appendChild(messageDiv);
}

// Function to handle sending a message
function sendMessage() {
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value.trim();

    if (message !== '') {
        // Add the user's message to the chat
        addMessage(message, true);

        // Simulate a response from the library community
        // setTimeout(() => {
        //     const response = "Thank you for your message! How can we assist you today?";
        //     addMessage(response, false);
        // }, 1000);

        // Clear the input field
        messageInput.value = '';
    }
}

// Event listener for the Send button
const sendButton = document.getElementById('send-button');
sendButton.addEventListener('click', sendMessage);

// Event listener for pressing Enter in the input field
const messageInput = document.getElementById('message-input');
messageInput.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

// Initial greeting from the library community
addMessage("Welcome to the Library Community Chat! How can we help you today?", false);