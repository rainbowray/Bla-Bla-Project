<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>My Blog</title>
  <style>
	div {
  	background: red;
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
  	margin: 2px;
	}
  </style>
</head>

<body>
  <!--<div class='head-block'>
    <nav>
      <div><h1>Bla-Bla Project</h1></div>
      <div><a href="1.php">First</a></div>
      <div><a href="2.php">Second</a></div>
      <div><a href="3.php">Third</a></div>
    </nav>
    <div class="login-form-block">    	
      <form action="actionPost.php" method="post">
        <input type="text" name="name" placeholder="Login">
        <input type="password" name="age" placeholder="Password">
        <input type="submit" name="submit" value="Submit">
      </form>     
    </div>
  </div> -->
  <article class="main-post">
  	<div>
  		<?php
  		$fh=fopen("testfile.txt",'r+') or die("Сбой");
  		$text=fgets($fh);
  		fseek($fh, 9, SEEK_SET);
  		fwrite($fh, "$text") or die("Сбой");
  		fclose($fh);
  		echo "Success<br>";

  		//Тестируем шаблоны
  		echo "Это строка ".__LINE__." в файле ".__FILE__;	//Тест "волшебных" переменных
  		/*$autor = "Ilya";
  		// Изучаем работу <<< и _END
  		$text = <<<_END
		bla bla bla bla bla bla bla bla bla
		bla bla bla bla bla bla bla bla bla
		bla bla bla bla bla bla bla bla bla!
		- $autor.
		_END;
		echo $text;*/
  		/*if(!empty($_POST['title']) && !empty($_POST['article'])){
  			echo $_POST['title'].'<br>'.$_POST['article'].'<br>';
  		}	else{
  			echo "<h1>HUITA!</h1><br><p>NE<br>RABOTAET!</p>";
  		}*/
  		?>
    </div>
  </article>
  <aside>
  </aside>
  <footer>
    &copy; Coryright
  </footer>
</body>

</html>