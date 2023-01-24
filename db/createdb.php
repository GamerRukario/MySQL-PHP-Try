<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_run_db";

// Create con

$conn = new mysqli($servername, $username, $password);
//
if($conn->connect_error){
    die("Connection failed: " . $conn->connection_error);
}

// Create db

$sql = "CREATE DATABASE test_run_db";
if($conn->query($sql) == TRUE){
    echo "database created successfully";
} else {
    echo "error creating database" . $conn-error;
}

$conn->close()
?>


