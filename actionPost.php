<?php
if (!empty($_POST['name'])){
	echo "Hi, ".$_POST['name']."!<br>";
}
if (!empty($_POST['age'])){
echo "You are ".$_POST['age']." years old.<br>";
}
?>