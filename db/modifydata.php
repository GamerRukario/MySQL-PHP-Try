<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test_run_db';

// create conn

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die('connection failed: ' . $conn->connection_error);
}

//
$sql = "UPDATE testTable SET age=20 WHERE id=1";

if($conn->query($sql)== TRUE){
    echo "data inserted successfully";
} else {
    echo "error inserting" . $conn->error;
}

$conn->close();

?>