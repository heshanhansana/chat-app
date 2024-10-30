-- Create the database
CREATE DATABASE chat_app;
USE chat_app;

-- Users table - Stores user account information
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Messages table - Stores all chat messages
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Optional: Create indexes for better performance
CREATE INDEX idx_messages_user_id ON messages(user_id);
CREATE INDEX idx_messages_created_at ON messages(created_at);

-- Example insert statements for testing
INSERT INTO users (username, password) VALUES 
('testuser1', '$2y$10$YourHashedPasswordHere'),
('testuser2', '$2y$10$YourHashedPasswordHere');

INSERT INTO messages (user_id, message) VALUES 
(1, 'Hello, this is a test message!'),
(2, 'Hi there! This is another test message.');
