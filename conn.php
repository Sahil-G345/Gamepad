<?php 

	$conn = mysqli_connect("localhost","root","","con");
	//server_name,username,password,database name Here we connect our project to the database.

	// Check connection
	if (!$conn) 
		{
		// die("Connection failed");
		die("Connection failed: " . mysqli_connect_error());
		//mysqli_connect_error show the database connection error message.
		}
		echo "Connected successfully <hr>";
?>