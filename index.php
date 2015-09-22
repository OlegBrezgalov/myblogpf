<html>
	<head>
		<meta charset="utf-8"/>
		<title>Мой блог</title> 
		<link rel="stylesheet" href="/index/styles/index_style.css"/> 
	</head>
	
	<body>
		<?php 
		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
		include 'MySqlInterface.php'; 
		$lastfiveposts = GetTopFive();
		
		$Title1 = '1';
		$Date1 = '1';
		$Text1 = '1';

		ParsePost($lastfiveposts[0],$Title1,$Text1,$Date1);
		?>

		<div class = "header"> 
			<p>My PHP Blog</p>
		</div>
		
		<div class = "autor">
			<p>hello autor</p>
		</div>

		<div class = "posts">
			<div class = "posttitle">
				<p><?php echo $Title1 ?></p>
			</div>
			<div class = "posttext">
				<p><?php echo $Text1 ?></p>
			</div>
			<div class = "postsignature">
				<p><?php echo $Date1; ?></p>
			</div>
		</div>

		<div class = "footer">
			<p>@ProgForceForever</p>
		</div>

	</body>

</html>