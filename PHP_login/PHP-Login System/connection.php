<?php
	// Establish database connection
	// $servername = "localhost";
	// $username = "root";
	// $password = "root";
	// $database = "alisdb";

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'deepakdb';
  $db_port = 8888;


	// Create connection
	$conn = mysqli_connect($db_host , $db_user , $db_password , $db_db, $db_port );

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>