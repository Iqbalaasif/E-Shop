/*chatbot*/
// Define an array of chatbot responses
const responses = [
    "Hello!",
    "How can I assist you?",
    "Sorry, I didn't understand that.",
    "Please provide more information.",
    "Thank you for chatting with me."
  ];
  
  // Get references to DOM elements
  const chatHistory = document.querySelector(".chat-history");
  const chatMessageInput = document.querySelector("#chat-message-input");
  const chatMessageSubmit = document.querySelector("#chat-message-submit");
  
  // Function to add a message to the chat history
  function addMessage(message, sender) {
    const msg = document.createElement("div");
    msg.classList.add("message");
    msg.classList.add(sender);
    msg.textContent = message;
    
    chatHistory.appendChild(msg);
    
    // Scroll to the bottom of the chat history
    chatHistory.scrollTop = chatHistory.scrollHeight;
  }
  
  // Function to send a message
  function sendMessage() {
    const message = chatMessageInput.value;
    
    // Add the user's message to the chat history
    addMessage(message, "sent");
    
    // Clear the input field
    chatMessageInput.value = "";
    
    // Get a random response from the chatbot responses array
    const randomIndex = Math.floor(Math.random() * responses.length);
    const chatbotMessage = responses[randomIndex];
    
    // Add the chatbot's message to the chat history
    setTimeout(function() {
      addMessage(chatbotMessage, "received");
    }, 500);
  }
  
  // Event listener for the submit button
  chatMessageSubmit.addEventListener("click", function() {
    sendMessage();
  });
  
  // Event listener for the Enter key
  chatMessageInput.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      sendMessage();
    }
  });
  
