// delete_message.php
<?php
session_start();
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $messageId = $_POST['message_id'];
    
    $stmt = $pdo->prepare("DELETE FROM messages 
                          WHERE id = ? AND user_id = ?");
    $stmt->execute([$messageId, $_SESSION['user_id']]);
}
?>