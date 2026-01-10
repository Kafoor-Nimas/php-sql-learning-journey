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
	//sql to delete a record
	$sql="DELETE FROM MyGuests WHERE id=2";
	if($connection -> query($sql) === TRUE){
		echo "Record deleted successfully";
	}else{
		echo "Error deleting record: ". $connection->error;
	}

	$connection->close();

?>