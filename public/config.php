<?php
    
    $conn = new mysqli('localhost','root','mos19991973','blood');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>