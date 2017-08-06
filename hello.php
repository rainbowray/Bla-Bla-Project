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
  <header>
  </header>
  <div class='head-block'>
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
  </div>
  <article class="main-post">
  	<div>
  	<pre>
  	<?php
  		require_once 'var_dump_helper.php';
  		$Post=[
  			"userID"=>1,	// id:integer - ID пользователя
			"titlePost"=>"My first Post (that is Title)", //title:string - Заголовок поста
			"textPost"=>"Bla-bla-bla-bla-bla-bla-bla", //article:string - Текст поста
			"firstTextPost"=>"Bla-bla-bla-bla", //articlePreview:string - Первые строчки поста на главной странице
			"createDatePost"=>12062017, //createDate:integer - дата создания поста
			"nameCreator"=>"Ilya", //nameCreator:string - имя создателя
			"nameUpdater"=>"Ilya-Updater", //nameUpdater:string - имя апдейтера (?)
			"numLikes"=>999, //numLikes:integer - кол-во лайков
			'numDislikes'=>13, //numDislikes:integer - кол-во дизлайков
			'numComments'=>45, //numComments:integer - кол-во комментариев
			'startImg'=>'href', //img:string - ссылка на стартовую картинку (?)
		];
		echo '<pre>';
		var_dump($Post);
		echo '</pre>';
  		/*if(!empty($_POST['title']) && !empty($_POST['article'])){
  			echo $_POST['title'].'<br>'.$_POST['article'].'<br>';
  		}	else{
  			echo "
  			<h1>$Post[titlePost]</h1><br>
  			<p>$Post[textPost]</p>
  			";
  		}*/
  	?>
  	</pre>
    </div>
  </article>
  <aside>
  </aside>
  <footer>
    &copy; Coryright
  </footer> 
</body>
</html>