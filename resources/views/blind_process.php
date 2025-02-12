<?php
	$servername = "127.0.0.1";
	$username = "admin";
	$password = "admin";
	$dbname = "blsql_test";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];


?>
