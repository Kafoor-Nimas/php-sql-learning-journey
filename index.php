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
	$sql="UPDATE MyGuests SET firstname='Kusal', lastname='Mendis' WHERE id=2";
	if($connection -> query($sql) === TRUE){
		echo "Record updated successfully";
	}else{
		echo "Error updating record: ". $connection->error;
	}

	$connection->close();

?>