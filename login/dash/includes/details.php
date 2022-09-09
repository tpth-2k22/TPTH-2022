<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

    include '../config.php';
    $email = $_SESSION['SESSION_EMAIL'];
    
    $sql="Select * from users where email = '{$email}'";
    $query= mysqli_query($conn,$sql);
    $arr=mysqli_fetch_assoc($query);
    // var_dump($arr);

?>