<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="assets/css/grid-styling.css">
		<title>Programs</title>
	</head>
	<body>
		<header class="banner">
			<a class="logo" href="./"><img src="assets/images/Logo.png"></a>
			<?php include "linuxnav.html"; ?>
			
			<h1 class="glow" class="banner-text">Programs</h1>
		</header>

		<div class="content">

			<script type="text/javascript">
				function dropdownClick(){
					var dropdowns = document.getElementsByCLassName("dropContent");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if ( dropdowns[i] != document.getElementById(id) ) {
                                openDropdown.classList.remove('show');
                        }
                }
          document.getElementById(id).classList.toggle("show");
				}
					
			</script>

			<?php 
			$jsonfile= "assets/json/programs.json";
			include "loadGrid.php";
			?>


		</div>
	</body>
</html>