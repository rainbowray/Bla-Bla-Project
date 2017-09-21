<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>My Blog</title>
  <style>
	div {
  	background: pink;
	}

	nav > div {
  	display: table-cell;
  	background: pink;
  	padding: 10px;
	}

	.main-post > div {
  	background: #DDFFDD;
 	width:75.1%;
	border: 1px solid #000000;
	padding: 10px;
	}

	.head-block > nav {
  	margin: 1px;
  	background: pink;
  	width: 75%;
	}

	.head-block > nav, .head-block > .login-form-block {
  	display: inline-block;
  	vertical-align: middle;
  	background: pink;
	}
  </style>
</head>
<body>
	<form name="Article" method="post" action="hello.php">
		<input type="text" name="title" placeholder="Title"><br><br>
		<textarea name="article" cols="40" rows="3" placeholder="Type here"></textarea><br>
		<input type="submit" value="Post">
		<input type="reset" value="Clear">
	</form>
</body>
</html>