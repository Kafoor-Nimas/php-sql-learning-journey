<?php
$servername="localhost";
$username="root";
$password="";

//Create connectionection
$connection=new mysqli($servername,$username,$password);

	if($connection->connect_error){
		die("connectionection failed: ".$connection->connect_error);
	}
	//create database
	$sql="CREATE DATABASE myDB";
	if($connection -> query($sql) === TRUE){
		echo "Database created";
	}else{
		echo "Error creating database: ".$connection->error;
	}

	$connection->close();

?>