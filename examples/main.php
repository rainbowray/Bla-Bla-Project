<?php
	$username='admin';
	$password='mypassword';

	/*if(isset($_SERVER['PHP_AUTH_USER'])&&isset($_SERVER['PHP_AUTH_PW']))
	{
		if($_SERVER['PHP_AUTH_USER']==$username && $_SERVER['PHP_AUTH_PW']==$password)
		echo "Registration completed successfull";
		else die("Wrong combination");
	}
	else
	{
		header('WWW-Authenticate: Basic realm="Restricted Section"');
		header('HTTP/1.0 401 Unauthorized');
		die ("Please, enter login and password");
	}*/
	$token=hash('ripemd128', $password);
	var_dump($token);
?>