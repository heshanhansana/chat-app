// get_messages.php
<?php
session_start();
require_once 'database.php';

$stmt = $pdo->query("SELECT messages.*, users.username 
                     FROM messages 
                     JOIN users ON messages.user_id = users.id 
                     ORDER BY messages.created_at DESC 
                     LIMIT 5");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach (array_reverse($messages) as $message) {
    echo '<div class="message bg-light">';
    echo '<span class="username">' . htmlspecialchars($message['username']) . ':</span>';
    echo htmlspecialchars($message['message']);
    if ($message['user_id'] == $_SESSION['user_id']) {
        echo '<span class="delete-btn" data-id="' . $message['id'] . '">×</span>';
    }
    echo '</div>';
}
?>





