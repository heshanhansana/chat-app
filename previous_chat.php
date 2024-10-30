<?php
    include('database.php');
    
    $sql = "SELECT * FROM messages ORDER BY id DESC LIMIT 10";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $messages = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $messages = array_reverse($messages); // Reverse the array
    
            ?>
    
            <table class="table table-hover">
                <tbody>
                    <?php foreach ($messages as $row): ?>
                        <tr>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo "<a href='delete.php?id=" . $row["id"] . "'><input type='button' value='X' class='btn btn-outline-dark'> </a>" ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    
            <?php
        } else {
            echo "<div class='alert alert-danger'>No Messages</div>";
        }
    }
    
?>
