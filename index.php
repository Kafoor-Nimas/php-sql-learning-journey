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
	//insert multiple Data records Into MySQL
	$sql="INSERT INTO MyGuests(firstname,lastname,email)VALUES('John','Cena','john@example.com');";
	$sql .="INSERT INTO MyGuests(firstname,lastname,email)VALUES('Mary','Moe','mary@example.com');";
	$sql .="INSERT INTO MyGuests(firstname,lastname,email)VALUES('Jullie','Dooley','julie@example.com')";

	if($connection -> multi_query($sql) === TRUE){
		echo "New record created successfully";
	}else{
		echo "Error: " . $sql . "<br>".$connection->error;
	}

	$connection->close();

?>