<?php
	echo <<<_END
	<html>
		<head>
			<title>Main Page</title>
		</head>
		<body>
			This is main page.<br><br>
			<form method="post" action="creatingTable.php">
				<input type="submit" value="Create Table Users">
			</form>
			<form method="post" action="registrationUser.php">
				<input type="submit" value="Registrate">
			</form>
		</body>
	</html>
_END;
?>