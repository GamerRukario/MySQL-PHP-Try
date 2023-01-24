<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_run_db";

// create con

$conn = new mysqli($servername, $username, $password,$dbname);
//
if($conn->connect_error){
    die("Connection failed: " . $conn->connection_error);
}
//
$sql = "CREATE TABLE testTable(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    age VARCHAR(30) NOT NULL
    )";
// query
if($conn->query($sql)== TRUE){
    echo "table created successfully";
} else {
    echo "error creating database" . $conn-error;
}

$conn->close();
?>