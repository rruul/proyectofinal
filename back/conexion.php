<?php
    $hostname = "localhost:8889";
    $username = "root";
    $password = "root";
    $db = "agenda_dicis";
    $conn = new mysqli($hostname, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
    }
?>