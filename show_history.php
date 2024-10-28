<?php
    include('database.php');
    
    $sql ="SELECT * FROM messages";
    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){       ?>


        <table class="table table-hover">
            <thead>
                <tr><th scope="col"></th>
                    <th scope="col">Messages</th></tr></thead>
            <tbody><?php
            
            while($row = mysqli_fetch_array($result)){     ?>


                <tr>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo "<a href='delete.php?id=" . $row["id"] . "'><input type='button' value='delete' class='btn btn-danger'> </a>"?></td> 
                </tr><?php
                }    ?>

            </tbody></table>
            
        <?php

        }else{
            echo "<div class='alert alert-danger'>No Messages</div>";
        }
    }
?>
