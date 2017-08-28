<?php
	require_once'login.php';
	$conn=new mysqli($hn,$un,$pw,$db);
	if ($conn->connect_error) die($conn->connect_error);

	$h_user="admin//// #'";
	$h_pass=1234;
	$user=mysql_fix_string($conn,$h_user);
	$pass=mysql_fix_string($conn,$h_pass);
	$query="SELECT * FROM users WHERE user='$user' AND pass='$pass'";
	var_dump($query);

	function mysql_fix_string($conn, $string)
	{
		if (get_magic_quotes_gpc()) $string=stripcslashes($string);
		return $conn->real_escape_string($string);
	}
?>