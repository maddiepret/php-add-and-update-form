<?php

// Connect to database
$db_host = 'localhost';
$db_name = 'store';
$db_user = 'root';
$db_pass = '*********';

// Create object to connect
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Handle errors
if (mysqli_connect_errno()) {
    echo 'This connection failed ' . $mysqli_connect_erro();
    //cut everything off
    die;
}
