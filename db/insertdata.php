<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_run_db";
// create conn

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connecction failed: " . $conn->connection_error);
}
//
$sql = "INSERT INTO testTable(name, age) 
VALUES ('test', '23')";

if($conn->query($sql)== TRUE){
    echo "data inserted successfully";
} else {
    echo "error inserting" . $conn->error;
}

?>