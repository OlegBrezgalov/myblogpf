<html>
	<head>
		<meta charset="utf-8"/>
		<title>Мой блог</title> 
		<link rel="stylesheet" href="/index/styles/index_style.css"/>
	</head>
	
	<body>
		<div class = "header"> 
			<p>hello header</p>
		</div>
		
		<div class = "autor">
			<p>hello autor</p>
		</div>

		<div class = "posts">
			<div class = "posttitle">
				<p> hello post title</p>
			</div>
			<div class = "posttext">
				<p> hello post text</p>
			</div>
		</div>

		<div class = "footer">
			<p> hello footer text</p>
		</div>

		<?php 
		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
		include 'MySqlInterface.php';
		?>
	</body>

</html>