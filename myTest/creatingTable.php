<?php
	require_once 'login.php';
	$conn=new mysqli($hm, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	var_dump($conn);

	$query="CREATE TABLE users (
		Firstname VARCHAR(32) NOT NULL,
		Lastname VARCHAR(32) NOT NULL,
		Login VARCHAR(32) NOT NULL UNIQUE,
		Password VARCHAR(32) NOT NULL
		)";
	$result=$conn->query($query);
	if (!$result) die($conn->error);
		else echo "Success! Table created!";
?>