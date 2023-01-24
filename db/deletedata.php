<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_run_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connetion failed: " . $conn->connection_error);
}
//

$sql = "DELETE FROM testTable WHERE id = 1";

if($conn->query($sql) == TRUE){
    echo "success";
} else {
    echo "not success" . $conn->error;
}

$conn->close();

?>