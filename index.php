<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>About Linux</title>
</head>

<body>
    <div class="banner">
         <header>
             
             <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
             <?php include "linuxnav.html"; ?>
             
             
             <h1 class= "glow" class="banner-text">About</h1>
        
         </header>
    </div>

    <div class="content">

        <!-- load in the content via json -->
        <?php
        $jsonfile = "assets/json/about.json";
        include "loadjson.php";
        ?>
    </div>
</body>

</html>