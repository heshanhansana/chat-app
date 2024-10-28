<?php

    include('database.php');

    if (array_key_exists("id", $_GET)) {
        $id = $_GET["id"];
 
        $sql = "DELETE FROM messages WHERE id = '$id'";
        
        if($conn->query($sql) === TRUE){
            header("Location: index.php");  // return to home page
        }
    }

?>