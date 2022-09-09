<?php
    $dbServername = "localhost";
    $Username = "tphin_register";
    $Password = "nita@12345";
    $database = "tphin_registration";

    $conn=mysqli_connect($dbServername,$Username,$Password,$database);
    if (!$conn) {
        echo "Error: Could not connect to the database server.";
        exit();
    }
    else {
        echo "Database connection established successfully";
    }