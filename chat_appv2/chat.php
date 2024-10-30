// chat.php
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
require_once 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chat Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-container {
            height: 400px;
            overflow-y: auto;
        }
        .message {
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
        }
        .message .username {
            font-weight: bold;
            margin-right: 10px;
        }
        .delete-btn {
            float: right;
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Chat Room - Welcome <?php echo htmlspecialchars($_SESSION['username']); ?>
                        <a href="logout.php" class="btn btn-danger btn-sm float-end">Logout</a>
                    </div>
                    <div class="card-body">
                        <div id="chat-container" class="chat-container"></div>
                        <form id="message-form" class="mt-3">
                            <div class="input-group">
                                <input type="text" id="message" class="form-control" placeholder="Type your message..." required>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadMessages() {
            $.get('get_messages.php', function(messages) {
                $('#chat-container').html(messages);
                $('#chat-container').scrollTop($('#chat-container')[0].scrollHeight);
            });
        }

        $(document).ready(function() {
            loadMessages();
            setInterval(loadMessages, 2000); // Refresh every 2 seconds

            $('#message-form').submit(function(e) {
                e.preventDefault();
                $.post('send_message.php', {
                    message: $('#message').val()
                }, function() {
                    $('#message').val('');
                    loadMessages();
                });
            });

            $(document).on('click', '.delete-btn', function() {
                const messageId = $(this).data('id');
                $.post('delete_message.php', {
                    message_id: messageId
                }, function() {
                    loadMessages();
                });
            });
        });
    </script>
</body>
</html>