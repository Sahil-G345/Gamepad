<?php 
	include('conn.php');

	$sql = "INSERT INTO tp (name,email,phone,feed) VALUES ('Paritosh','paritosh@gmail.com','1234567891','Good')";

	$result = mysqli_query($conn, $sql);//Run the query and the connection
	// print_r($sql);exit();
	if ($result) {
	    echo "New record created successfully";
	} else {
	    echo "Unable to Insert Data";
	}


	mysqli_close($conn);//Close the connection of database and the files.
?>