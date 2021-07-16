<?php

	$conn = mysqli_connect('localhost:3306','root','','bank of people');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>