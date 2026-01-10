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
	//insert data into table
	$sql="INSERT INTO MyGuests(firstname,lastname,email)VALUES('John','Cena','john@example.com')";

	if($connection -> query($sql) === TRUE){
		echo "New record created successfully";
	}else{
		echo "Error: " . $sql . "<br>".$connection->error;
	}

	$connection->close();

?>