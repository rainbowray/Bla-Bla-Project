<?php
	require_once 'login.php';
	$conn = new mysqli($hn,$un,$pw,$db);
	if ($conn->connect_error) die($conn->connect_error);
	var_dump($conn);

	$query="SELECT * FROM customers";
	$result=$conn->query($query);
	var_dump($result);
	if (!$result) die ("Failure with providing access: ".$conn->error());
	$rows=$result->num_rows;
	echo "<pre>";
	for ($j=0;$j<$rows;++$j)
	{
		$result->data_seek($j);
		$row=$result->fetch_array(MYSQLI_NUM);
		echo "$row[0] purchased ISBN $row[1]: ";

		$subquery="SELECT * FROM classics WHERE isbn='$row[1]'";
		$subresult=$conn->query($subquery);
		if (!$subresult) die ("Failure with providing access: ".$conn->error());

		$subrow=$subresult->fetch_array(MYSQLI_NUM);
		echo "'$subrow[1]' by $subrow[0]<br><br>";
	}
	echo "</pre>";
?>