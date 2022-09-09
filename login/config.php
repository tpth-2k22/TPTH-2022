<?php

$conn = mysqli_connect("localhost", "tphin_register", "nita@12345", "tphin_registration");

if (!$conn) {
    echo "Connection Failed";
}