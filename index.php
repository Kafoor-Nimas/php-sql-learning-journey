<?php
$servername="localhost";
$username="root";
$password="";
$dbname ="myDB";

//Create connectionection
$connection=new mysqli($servername,$username,$password, $dbname);

	if($connection->connect_error){
		die("connectionection failed: ".$connection->connect_error);
	}
	//sql to create table
	$sql="CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL, email VARCHAR(50))";

	if($connection -> query($sql) === TRUE){
		echo "Table MyGuests created successfully";
	}else{
		echo "Error creating table: ".$connection->error;
	}

	$connection->close();

?>