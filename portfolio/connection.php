<?php 
    //offline connections
    $connection = mysqli_connect("localhost", "root", "", "portfolio");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>