<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Advanced Tutorial - LinuxFourYou</title>
</head>

<body>
    <div class="banner">
        <header>

            <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
            <?php include "linuxnav.html"; ?>


            <h1 class="glow" class="banner-text">Advanced Tutorial</h1>

        </header>
    </div>

    <div class="content">

        <!-- load in the content via json -->
        <?php
        $jsonfile = "assets/json/tutorial_advanced.json";
        include "loadjson.php";
        ?>
    </div>
</body>

</html>