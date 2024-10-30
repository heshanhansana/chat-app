
<?php

$host = "localhost";
$db_name = "chat_app";
$db_username = "root"; 
$db_password = "";


$conn = new mysqli($host, $db_username, $db_password, $db_name);

if($conn->connect_error){
    die("Connection Failed". $conn->connect_error);
}

?>