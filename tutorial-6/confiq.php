<?php
//database configuration
$servername ="localhost";
$username ="root";
$password = "";
$dbname ="login-system";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    // die("Connection failed: " . $conn->connection_error);
}else{
    // echo "Connected successfully to the database.";
}



?>