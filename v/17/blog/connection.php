<?php
    $dbServerName = "localhost";
    $dbUserName = "robinb_views";
    $dbPassword = "LCQulJqAM_*!Nf7z";
    $dbName = "robinb_views"; 
    $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
    
    if($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    } 
    else {
        mysqli_select_db($conn, $dbName);        
    }

    function consolelog($message) {
        echo "<script>console.log('$message');</script>";
    }
?>