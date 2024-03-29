<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Anton|Roboto+Slab|Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Intermediate Tutorial - LinuxFourYou</title>
</head>

<body>
    <div class="banner">
        <header>

            <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
            <?php include "linuxnav.html"; ?>
            <?php include "linuxhamburgermenu.html"; ?>


            <h1 class="glow" class="banner-text">Intermediate Tutorial</h1>

        </header>
    </div>

    <div class="content">

        <!-- load in the content via json -->
        <?php
        $jsonfile = "assets/json/tutorial_intermediate.json";
        include "loadJsonVideo.php";
        ?>
    </div>
</body>

</html>
