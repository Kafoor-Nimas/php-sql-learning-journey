<?php
$host="localhost";
$username="root";
$password="";
$db = "login_db";

$connection =mysqli_connect($host,$username,$password,$db);

if(!$connection){
    die("Connection Failed: ".mysqli_connect_error());
}else{
    echo "Database connected successfully!";
}
?>