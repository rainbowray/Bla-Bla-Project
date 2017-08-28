<?php
	require_once 'login.php';
	$conn=new mysqli($hn,$un,$pw,$db);
	if ($conn->connect_error) die($conn->connect_error);

	$query="INSERT INTO cats VALUES(NULL,'Lynx','Stumpy',5)";
	$result=$conn->query($query);
	var_dump($conn);

	if (!$result) die ("Failure during access: ".$conn->error());
	echo "Значение вставленного ID равно ".$conn->insert_id;
?>