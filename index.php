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
	$sql="SELECT id,firstname,lastname FROM MyGuests";
	$result=$connection ->query($sql);

	if($result -> num_rows >0){
		//output data of each row
		while($row = $result ->fetch_assoc()){
			echo "id: " . $row["id"] . " -Name: " . $row["firstname"]." ". $row["lastname"]. "<br>"; 
		}
	}else{
		echo "0 results";
	}
	$connection->close();

?>