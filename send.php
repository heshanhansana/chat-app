<?php

    include('database.php');

    $new_message = $_POST["new-message"];

    if(!empty($new_message)){

        $sql = "INSERT INTO messages(message) VALUES(?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                            
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt, "s",  $new_message);
            mysqli_stmt_execute($stmt);
        }
    
        else{
            die("Message Fail !");
        } 
        
    }

    header("Location: index.php");  // return to home page
   
?>