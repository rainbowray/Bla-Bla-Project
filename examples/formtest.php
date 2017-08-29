<?php
	echo<<<_END
	<html>
		<head>
			<title>Form Test</title>
		</head>
		<body>
		<form method="post" action="formtest.php"><pre>
Сумма 		<input type="text" name="principle">
Ежемес 		<input type="text" name="monthly">
Кол-во лет 	<input type="text" name="years" value="25">
Процент 	<textarea name="text" cols=10 rows=10 wrap=hard></textarea>
<input type="submit">
<input type="checkbox" name="qwer">
		</pre></form>
		</body>
	</html>
_END;
?>