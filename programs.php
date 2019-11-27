<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<title>Programs</title>
	</head>
	<body>
		<header class="banner">
			<a class="logo" href="./"><img src="assets/images/Logo.png"></a>
			<?php include "linuxnav.html"; ?>
			
			<h1 class="glow" class="banner-text">Programs</h1>
		</header>

		<div class="content">
			
			<?php 
			$jsonfile= "assets/json/programs.json";
			include "loadjson.php:"
			?>
			
		</div>


	</body>
</html>