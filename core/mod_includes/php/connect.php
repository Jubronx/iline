<?php 
	
	$conn = mysqli_connect('localhost', 'root', '', 'iline');

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>