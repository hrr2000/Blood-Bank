<?php
    
    $conn = new mysqli('localhost','root','','blood');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>
